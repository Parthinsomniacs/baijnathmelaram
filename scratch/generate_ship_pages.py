import json
import os

with open('scratch/ships_cleaned.json', encoding='utf-8') as f:
    ships_data = json.load(f)

pages_config = [
    {
        'file': 'bulkcarrier.php',
        'key': 'bulkcarrier',
        'title': 'Bulk Carrier',
        'prev': None,
        'next': {'url': 'generalcargo.php', 'title': 'General Cargo'}
    },
    {
        'file': 'generalcargo.php',
        'key': 'generalcargo',
        'title': 'General Cargo',
        'prev': {'url': 'bulkcarrier.php', 'title': 'Bulk Carrier'},
        'next': {'url': 'container.php', 'title': 'Container'}
    },
    {
        'file': 'container.php',
        'key': 'container',
        'title': 'Container',
        'prev': {'url': 'generalcargo.php', 'title': 'General Cargo'},
        'next': {'url': 'tanker.php', 'title': 'Tanker'}
    },
    {
        'file': 'tanker.php',
        'key': 'tanker',
        'title': 'Tanker',
        'prev': {'url': 'container.php', 'title': 'Container'},
        'next': {'url': 'rorocrew.php', 'title': 'Roro & Crew'}
    },
    {
        'file': 'rorocrew.php',
        'key': 'rorocrew',
        'title': 'Roro & Crew',
        'prev': {'url': 'tanker.php', 'title': 'Tanker'},
        'next': {'url': 'fpso.php', 'title': 'FPSO'}
    },
    {
        'file': 'fpso.php',
        'key': 'fpso',
        'title': 'FPSO',
        'prev': {'url': 'rorocrew.php', 'title': 'Roro & Crew'},
        'next': {'url': 'military.php', 'title': 'Military'}
    },
    {
        'file': 'military.php',
        'key': 'military',
        'title': 'Military',
        'prev': {'url': 'fpso.php', 'title': 'FPSO'},
        'next': {'url': 'researchvessel.php', 'title': 'Research Vessel'}
    },
    {
        'file': 'researchvessel.php',
        'key': 'researchvessel',
        'title': 'Research Vessel',
        'prev': {'url': 'military.php', 'title': 'Military'},
        'next': {'url': 'others.php', 'title': 'Others'}
    },
    {
        'file': 'others.php',
        'key': 'others',
        'title': 'Others',
        'prev': {'url': 'researchvessel.php', 'title': 'Research Vessel'},
        'next': None
    }
]

def make_rows_html(records):
    if not records:
        return '              <tr>\n                <td colspan="4" style="text-align: center; padding: 30px; color: #666;">Data will be updated soon.</td>\n              </tr>\n'
    
    out = []
    for r in records:
        name = r['name'].replace('&', '&amp;')
        stype = r['type'].replace('&', '&amp;')
        year = r['year'].replace('&', '&amp;')
        ltd = r['ltd'].replace('&', '&amp;')
        out.append(f'''              <tr>
                <td class="td-ship-name">{name}</td>
                <td class="td-ship-type">{stype}</td>
                <td class="td-ship-year">{year}</td>
                <td class="td-ship-ltd">{ltd}</td>
              </tr>''')
    return '\n'.join(out)

for cfg in pages_config:
    page_id = cfg['file'].replace('.php', '')
    records = ships_data.get(cfg['key'], [])
    rows_html = make_rows_html(records)
    
    if cfg['prev']:
        prev_html = f'''<a href="<?php echo $siteurl; ?>{cfg['prev']['url']}" class="ship-nav-btn" title="Previous: {cfg['prev']['title']}" aria-label="Previous">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </a>'''
    else:
        prev_html = '''<span class="ship-nav-btn is-disabled" title="Previous" aria-label="Previous">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </span>'''

    if cfg['next']:
        next_html = f'''<a href="<?php echo $siteurl; ?>{cfg['next']['url']}" class="ship-nav-btn" title="Next: {cfg['next']['title']}" aria-label="Next">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>'''
    else:
        next_html = '''<span class="ship-nav-btn is-disabled" title="Next" aria-label="Next">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </span>'''

    code = f'''<?php require_once("inc-global.php"); ?>
<?php
$page = "{page_id}";
$pagetype = "subpage";
$pagename = "{cfg['title']}";
/**JS & CSS**/
$onepagemenu = "yes";
$slider = "no";
$sliderautoscroll = "no";
$swiperjs = "no";
$popup = "no";
$counter = "no";
$accordian = "no";
$utm = "yes";
?>

<!DOCTYPE html>
<html id="<?php echo $page; ?>" dir="ltr" lang="en-US">

<head>
  <?php require_once $head; ?>
</head>

<body>
  <?php echo $block_body_start; ?>
  <?php require_once $header; ?>

  <!-- {cfg['title']} Ships Section -->
  <section class="section section-ship-details">
    <!-- Subtle Background Orange Squares Elements -->
    <div class="ship-bg-squares" aria-hidden="true">
      <div class="ship-square-shape ship-square-1"></div>
      <div class="ship-square-shape ship-square-2"></div>
      <div class="ship-square-shape ship-square-3"></div>
    </div>

    <div class="ship-details-container theme-padding">

      <!-- Top Bar: Home Link | Centered Title | Prev/Next Navigation -->
      <div class="ship-details-header">
        <div class="ship-header-left">
          <a href="<?php echo $siteurl; ?>" class="ship-nav-home">Home</a>
        </div>

        <div class="ship-header-center">
          <h1 class="ship-detail-title">{cfg['title']}</h1>
        </div>

        <div class="ship-header-right">
          <div class="ship-nav-arrows">
            {prev_html}
            {next_html}
          </div>
        </div>
      </div>

      <!-- Ships Table Card -->
      <div class="ship-table-card">
        <div class="ship-table-responsive">
          <table class="ship-data-table">
            <thead>
              <tr>
                <th class="th-ship-name">Name of Ship</th>
                <th class="th-ship-type">Type of Ship</th>
                <th class="th-ship-year">Year</th>
                <th class="th-ship-ltd">LTD</th>
              </tr>
            </thead>
            <tbody>
{rows_html}
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <?php require_once $footer; ?>
  <?php require_once $footscripts; ?>
  <?php echo $block_body_end; ?>
</body>

</html>
'''
    with open(cfg['file'], 'w', encoding='utf-8') as pf:
        pf.write(code)
    print(f"Generated {cfg['file']} with {len(records)} records")

print("All 9 ship pages generated successfully!")
