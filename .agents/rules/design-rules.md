# Always-On Design & Engineering Rule (Ponytail Minimalist Architecture)

**Trigger**: Active at all times across all files in this workspace.

---

## MANDATORY FIRST STEP
Before writing, modifying, or refactoring ANY HTML, CSS, JavaScript, or PHP code:
1. **Read `design.md`** located at the root of the workspace.
2. Check if a component, utility, or token already exists before creating a new one.

---

## 1. The Ponytail Minimalist Ladder
Always stop at the earliest rung:
1. **Does this need to exist?** $\rightarrow$ No: skip it (YAGNI).
2. **Already in this codebase?** $\rightarrow$ Reuse existing class/component/token. Do not write duplicate CSS or JS.
3. **Native HTML/CSS does it?** $\rightarrow$ Use native HTML/CSS (sticky, flexbox, grid, transitions) instead of JS plugins.
4. **Already loaded library?** $\rightarrow$ Reuse GSAP, Splide, Swiper, Lenis. NEVER introduce new libraries or CDN packages.
5. **One line?** $\rightarrow$ Write one line.
6. **Only then:** $\rightarrow$ Write the bare minimum code that actually works.

---

## 2. CSS Anti-Duplication & Anti-Bloat Discipline
- **Zero CSS Duplication**: Never re-declare styles for eyebrows, word masks, nav arrows, cards, or section containers.
- **Zero Unusual / Ad-Hoc CSS**: Do NOT invent arbitrary colors, shadows, or margins.
- **Strict `:root` Token Usage**:
  - Brand Orange: `var(--color-brand)` (`#e5912f`) — NEVER hardcode `#ea8f28` or `#e5912f`.
  - Section Spacing: `var(--section-py)` and `var(--header-mb)`.
  - Border Radii: `var(--radius-sm)` (4px), `var(--radius-md)` (8px), `var(--radius-lg)` (16px), `var(--radius-full)` (9999px).
  - Shadows: `var(--shadow-sm)`, `var(--shadow-md)`, `var(--shadow-lg)`, `var(--shadow-accent)`.
  - Fonts: Montserrat (`var(--font-primary)`), Science Gothic (`var(--font-display)`).
- **Mandatory Canonical Primitives**:
  - Eyebrow: `.c-eyebrow`, `.c-eyebrow--center`, `.c-eyebrow__line`.
  - Word Masks: `.word-mask` / `.word-inner` (or `[class*="-word-mask"]`).
  - Nav Arrows: `.c-nav-arrow` (with hover states).

---

## 3. JavaScript & Performance Discipline
- **Zero Unthrottled Global Listeners**: Never perform continuous `sessionStorage` or heavy DOM updates on unthrottled `scroll` or `resize`. Use `pagehide` / `beforeunload` for scroll restoration.
- **Element Existence Guarding**: Every section initialization MUST check `if (!document.querySelector(...)) return;` before initializing animations or timelines.
- **No Competing Libraries**: Lenis is the sole smooth-scroll implementation.
- **Vendor Scripts**: Prefer local scripts in `media/js/` over external CDNs.
- **Zero PHP Errors**: Verify `php -l` on modified files.
