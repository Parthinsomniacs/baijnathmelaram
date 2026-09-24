css_append = """

/* ==========================================================================
   Responsive Styles for Contact Page
   ========================================================================== */
@media screen and (max-width: 1024px) {
  .bm-cards-fullwidth-wrap,
  .bm-touch-fullwidth-wrap,
  .bm-directory-fullwidth-wrap {
    padding: 0 40px;
  }
  .bm-cards-row {
    grid-template-columns: 1fr;
  }
  .bm-info-card {
    border-right: none;
    border-bottom: 1px solid #e7dfd1;
    padding: 30px 20px;
  }
  .bm-info-card:last-child {
    border-bottom: none;
  }
  .bm-touch-grid {
    grid-template-columns: 1fr;
  }
  .bm-map-card {
    min-height: 400px;
  }
  .contacts-layout {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  .contacts-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .contacts-column:nth-child(odd) {
    border-right: 1px solid #e7ded2;
  }
  .contacts-column:nth-child(even) {
    border-right: none;
  }
}

@media screen and (max-width: 767px) {
  .bm-cards-fullwidth-wrap,
  .bm-touch-fullwidth-wrap,
  .bm-directory-fullwidth-wrap {
    padding: 0 20px;
  }
  .bm-map-card {
    min-height: 300px;
  }
  .bm-touch-form-col {
    padding: 24px 20px;
  }
  .bm-form-row-2 {
    grid-template-columns: 1fr;
  }
  .contacts-grid {
    grid-template-columns: 1fr;
  }
  .contacts-column {
    border-right: none !important;
    border-bottom: 1px solid #e7ded2;
  }
  .contacts-column:last-child {
    border-bottom: none;
  }
  .contacts-heading {
    font-size: 28px;
  }
  .bm-touch-heading {
    font-size: 28px;
  }
}
"""

with open("e:/laragon/www/baijnathmelaram/media/css/all-responsive.css", "a", encoding="utf-8") as f:
    f.write(css_append)
print("CSS appended.")
