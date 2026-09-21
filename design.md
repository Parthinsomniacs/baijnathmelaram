# Baijnath Melaram - Design & Engineering Standards (design.md)

> **MANDATORY INSTRUCTION FOR AGENTS & DEVELOPERS:**
> **BEFORE starting ANY UI design, section creation, CSS styling, or JavaScript development, you MUST FIRST READ THIS FILE (`design.md`).**
> Every new component, style, or script in this project must adhere strictly to these rules.
> 
> **Core Motto (Ponytail Principles):**
> *LESS CODE • LESS DUPLICATION • LESS JAVASCRIPT • LESS CSS • MORE REUSABILITY*

---

## 1. The Ponytail Solution Ladder (Always-On Discipline)

Before writing any new line of code, stop at the first rung that holds:

```
1. Does this need to exist?   → No: Skip it (YAGNI).
2. Already in this codebase?  → Reuse it! Do NOT rewrite or duplicate CSS/JS.
3. Native HTML/CSS does it?   → Use native features (e.g. flexbox, sticky, CSS transitions).
4. Already loaded library?    → Use it (GSAP, Splide, Swiper, Lenis). NEVER introduce new libraries.
5. One line?                  → Write one line.
6. Only then:                 → Write the bare minimum necessary code that works.
```

Lazy about writing new code — never lazy about reading existing code.

---

## 2. CSS Anti-Duplication & Anti-Bloat Rules

### A. Strict Rule: Never Duplicate CSS Rules
- Do **NOT** write duplicate CSS for common UI patterns (eyebrows, word masks, arrows, cards, typography, spacing).
- If a pattern already exists in `media/css/all-custom.css`, **REUSE the existing class**.
- Never create page-specific variations of identical components (e.g., do not create `.timeline-word-mask`, `.qa-word-mask`, `.ship-word-mask` when `.word-mask` already exists).

### B. Strict Rule: No Unusual or Ad-Hoc CSS
- Do **NOT** introduce random hex colors, ad-hoc box-shadows, arbitrary pixel margins, or odd border radii.
- All styles must draw directly from the `:root` design token system.

### C. The Design Token System (Single Source of Truth)

All CSS must use these variables declared in [all-custom.css](file:///e:/laragon/www/baijnathmelaram/media/css/all-custom.css):

#### 1. Brand & Surface Colors
| Token | Value | Purpose |
| :--- | :--- | :--- |
| `var(--color-brand)` | `#e5912f` | Unified Brand Orange (**Never hardcode `#ea8f28` or `#e5912f`**) |
| `var(--color-brand-hover)` | `#cf7c1c` | Active/Hover state for orange buttons & accents |
| `var(--color-brand-light)` | `rgba(229, 145, 47, 0.12)` | Subtle orange pill/badge background |
| `var(--color-brand-glow)` | `rgba(229, 145, 47, 0.25)` | Orange glow for active dots & indicators |
| `var(--color-bg-white)` | `#ffffff` | Clean white surface |
| `var(--color-bg-dark)` | `#0b1523` | Deep maritime navy-dark background |
| `var(--color-text-main)` | `#111111` | Primary heading and high-contrast text |
| `var(--color-text-muted)`| `#4b5563` | Body copy and descriptions |
| `var(--color-border-subtle)`| `rgba(0, 0, 0, 0.08)`| Standard card and separator border |

#### 2. Typography Hierarchy
| Token | Font Family | Usage |
| :--- | :--- | :--- |
| `var(--font-primary)` | `'Montserrat', sans-serif` | Main headings (`h1`, `h2`), lead descriptions, body text |
| `var(--font-display)` | `'Science Gothic', sans-serif` | Eyebrow kickers, milestone years, stat numbers |

#### 3. Standard Spacing Tokens
| Token | Value | Usage |
| :--- | :--- | :--- |
| `var(--section-py)` | `clamp(70px, 8vw, 120px)` | Top and bottom section padding |
| `var(--section-py-sm)`| `clamp(40px, 5vw, 70px)` | Compact section vertical padding |
| `var(--header-mb)` | `clamp(32px, 4.5vw, 60px)` | Margin below section titles |

#### 4. Border Radii Scale
| Token | Value | Usage |
| :--- | :--- | :--- |
| `var(--radius-sm)` | `4px` | Small buttons, highlight tags, nav arrows |
| `var(--radius-md)` | `8px` | Standard content and timeline cards |
| `var(--radius-lg)` | `16px` | Large feature cards, modal dialogs |
| `var(--radius-full)` | `9999px` | Round pills, status badges, circular dots |

#### 5. Elevation & Shadow Scale
| Token | Value | Usage |
| :--- | :--- | :--- |
| `var(--shadow-sm)` | `0 2px 8px rgba(0, 0, 0, 0.05)` | Default card elevation |
| `var(--shadow-md)` | `0 8px 24px rgba(0, 0, 0, 0.08)` | Hover elevation |
| `var(--shadow-lg)` | `0 16px 40px rgba(0, 0, 0, 0.12)` | Floating overlays and hero cards |
| `var(--shadow-accent)` | `0 12px 32px rgba(229, 145, 47, 0.18)` | Active brand card / button glow |

---

## 3. Canonical Component Primitives (Always Reuse)

### A. Section Eyebrow / Kicker (`.c-eyebrow`)
Use the standardized `.c-eyebrow` component for all section kickers. Do **not** use inline styles or invent new eyebrow classes:

```html
<!-- Left Aligned Eyebrow -->
<div class="c-eyebrow">
  <span class="c-eyebrow__line"></span>
  <span>SECTION KEYWORD</span>
</div>

<!-- Centered Eyebrow -->
<div class="c-eyebrow c-eyebrow--center">
  <span class="c-eyebrow__line"></span>
  <span>SECTION KEYWORD</span>
  <span class="c-eyebrow__line"></span>
</div>
```

### B. Heading Word Mask Reveal (`.word-mask`)
For GSAP scroll/entrance word animations, use the canonical classes:

```html
<h2>
  <span class="word-mask"><span class="word-inner">Heading</span></span>
  <span class="word-mask"><span class="word-inner text-secondary">Accent</span></span>
</h2>
```

### C. Carousel & Slider Navigation Arrows (`.c-nav-arrow`)
Use `.c-nav-arrow` for all slider controls:

```html
<button type="button" class="c-nav-arrow c-nav-arrow--prev" aria-label="Previous Slide">
  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <line x1="19" y1="12" x2="5" y2="12"></line>
    <polyline points="12 19 5 12 12 5"></polyline>
  </svg>
</button>
<button type="button" class="c-nav-arrow c-nav-arrow--next" aria-label="Next Slide">
  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <line x1="5" y1="12" x2="19" y2="12"></line>
    <polyline points="12 5 19 12 12 19"></polyline>
  </svg>
</button>
```

---

## 4. JavaScript & Script Engineering Rules

### A. Strict Rule: Never Add Redundant or Unrequested JavaScript
- If an interaction can be achieved with CSS (hover states, transitions, flexbox, grid, sticky positioning, responsive layout), **use CSS**.
- Do **NOT** load third-party npm packages or CDN libraries when existing libraries (GSAP, Splide, Swiper, Lenis) already provide the capability.

### B. Strict Rule: Always Guard DOM Elements
Every script or animation controller must verify that its target element exists before doing anything:

```javascript
// CORRECT
function initSectionExperience() {
  const container = document.querySelector("#section-my-feature");
  if (!container) return; // Exit immediately if not on this page
  
  // Safe to animate
}
```

### C. Strict Rule: Zero Unthrottled Continuous Listeners
- **NEVER** write to `localStorage`, `sessionStorage`, or perform expensive DOM recalculations inside an unthrottled `window.addEventListener('scroll')` or `resize`.
- For state preservation across page reloads, use `window.addEventListener('pagehide', ...)` or `beforeunload`.

### D. Strict Rule: Smooth Scroll Hygiene
- Lenis is the sole smooth-scroller in this project.
- Never attach competing native smooth-scrolling or manual wheel listeners that conflict with Lenis.

---

## 5. Pre-Commit / Pre-Delivery Checklist

Before completing any task or delivering code, verify:
- [ ] **First check**: Did I read `design.md` before making design choices?
- [ ] **No repeated CSS**: Are all new elements reusing existing classes or `:root` tokens?
- [ ] **No unusual CSS**: Are there zero hardcoded arbitrary colors (no `#ea8f28`), zero random pixel paddings, zero arbitrary shadows?
- [ ] **No unnecessary JS**: Does every JS function have a DOM presence guard? Are there zero continuous scroll event bottlenecks?
- [ ] **Zero PHP errors**: Did `php -l` pass on all modified PHP templates?
- [ ] **Cache version**: Has `$version` in `include/inc-head.php` been updated if CSS/JS changed?
