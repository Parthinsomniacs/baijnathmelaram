import urllib.request
import re
import html as html_entity
import json

headers = {'User-Agent': 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'}

urls = {
    'bulkcarrier': 'https://www.baijnathmelaram.com/bulkcarrier',
    'generalcargo': 'https://www.baijnathmelaram.com/generalcargo',
    'container': 'https://www.baijnathmelaram.com/bulkcarrier-1-1',
    'tanker': 'https://www.baijnathmelaram.com/tanker',
    'rorocrew': 'https://www.baijnathmelaram.com/roroandcrew',
    'military': 'https://www.baijnathmelaram.com/military',
    'researchvessel': 'https://www.baijnathmelaram.com/researchvessel',
    'fpso': 'https://www.baijnathmelaram.com/fpso'
}

all_ships = {}

for category, url in urls.items():
    print(f"Fetching {category} from {url}...")
    try:
        req = urllib.request.Request(url, headers=headers)
        html_doc = urllib.request.urlopen(req).read().decode('utf-8')
        
        # Wix repeaters have components with IDs like comp-XXX__item-YYY
        pattern = re.compile(r'<div id="comp-([a-zA-Z0-9_]+)__item-([a-zA-Z0-9_-]+)"[^>]*>(.*?)</div><!--/\$-->', re.DOTALL)
        matches = pattern.findall(html_doc)
        
        # Group by item_id preserving order of appearance
        ordered_item_ids = []
        items = {}
        for comp_id, item_id, content in matches:
            text = re.sub(r'<[^>]+>', '', content)
            text = html_entity.unescape(text).replace('\xa0', ' ').strip()
            if item_id not in items:
                items[item_id] = {}
                ordered_item_ids.append(item_id)
            items[item_id][comp_id] = text

        records = []
        for item_id in ordered_item_ids:
            fields = items[item_id]
            # Identify name, type, year, ltd based on values
            name, ship_type, year, ltd = "", "", "", ""
            
            # Let's inspect fields
            vals = list(fields.values())
            # Search for year pattern: e.g. 1983-84, 1996-97, 2004-05, etc.
            for v in vals:
                if re.match(r'^\d{4}-\d{2,4}$', v) or re.match(r'^\d{4}$', v):
                    year = v
                elif any(t in v.upper() for t in ['BULK', 'CARRIER', 'OBO', 'CARGO', 'TANKER', 'CONTAINER', 'RORO', 'CREW', 'MILITARY', 'RESEARCH', 'TUG', 'SUPPLY', 'FPSO', 'NAVY', 'SUBMARINE', 'VESSEL']):
                    ship_type = v.upper()
                elif re.match(r'^\d+(\.\d+)?$', v):
                    ltd = v
                else:
                    if not name or len(v) > len(name):
                        name = v

            # If name is still empty or looks like LTD, let's fix
            for v in vals:
                if v != year and v.upper() != ship_type and v != ltd:
                    name = v
                    break

            records.append({
                'name': name,
                'type': ship_type,
                'year': year,
                'ltd': ltd,
                'raw': fields
            })
            
        all_ships[category] = records
        print(f"Extracted {len(records)} ships for {category}")

    except Exception as e:
        print(f"Error fetching {category}: {e}")

with open('scratch/ships_data.json', 'w', encoding='utf-8') as f:
    json.dump(all_ships, f, indent=2, ensure_ascii=False)

print("Saved all extracted ships to scratch/ships_data.json")
