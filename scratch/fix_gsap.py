import re

with open("e:/laragon/www/baijnathmelaram/contact.php", "r", encoding="utf-8") as f:
    content = f.read()

# Replace .contacts-col with .contacts-column
content = content.replace(".contacts-grid .contacts-col", ".contacts-grid .contacts-column")
content = content.replace("dirCols = document.querySelectorAll('.contacts-grid .contacts-col');", "dirCols = document.querySelectorAll('.contacts-grid .contacts-column');")

# Save
with open("e:/laragon/www/baijnathmelaram/contact.php", "w", encoding="utf-8") as f:
    f.write(content)

print("contact.php updated.")
