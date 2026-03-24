# AI Coding Guidelines for the Restaurant Template

This repository is a **simple PHP-based static website** for a restaurant template. There is no framework, dependency manager, or build system included – files are edited directly and served by a local PHP webserver (e.g. AppServ, XAMPP, etc.). The goal of this document is to quickly orient any AI agent about the structure, conventions, and workflows so that it can make useful edits or additions without introducing confusion.

---
## 1. Big‑picture architecture

- Top‑level PHP files (`index.php`, `about.php`, `menu.php`, etc.) each produce a complete HTML page.
- Common page elements (head tags, navigation bar, footer) are extracted into `view/template/*` and included with `<?php include (...) ?>`.
- There is **no server‑side logic** other than those includes; all content is essentially static HTML with CSS/JS.
- Asset files live under `asset/`:
  - `css/` for compiled styles (Bootstrap + `style.css`).
  - `scss/` contains uncompiled sources carried over from the original template; if you change them you’ll need to compile with your own Sass toolchain (not provided).
  - `js/` holds custom scripts (`main.js`).
  - `lib/` contains third‑party libraries (animate.css, owlcarousel, tempusdominus, etc.) which are referenced directly by pages.
  - `img/` stores images used by the template.

> **Note:** Relative paths everywhere assume you’re hitting the site at `http://localhost/restaurant/` or equivalent. Do not prepend `/` to asset links or include paths.

---
## 2. Page pattern and conventions

1. Each page starts with `<!DOCTYPE html>` and immediately includes `view/template/head.php` and `view/template/header.php`.
2. After the unique page content the footer is added by `<?php include("view/template/footer.php"); ?>` near the end of the document just before `</body></html>`.
3. When adding a new page:
   - Copy an existing file and adjust the hero section, breadcrumb, etc.
   - Update the navigation links in `header.php` to reference the new page.
   - Follow the same indentation/style as the existing pages (lower‑case filenames, no PHP logic, HTML inside the body).
4. Use the utility classes provided by Bootstrap 5 and the animation classes (`wow`, `fadeInUp`, `data-wow-delay`) already scattered through the markup. The original template’s markup should be preserved unless you need to reorganize a section.
5. No PHP variables or loops are used; if you need dynamic behaviour in the future, keep it minimal and continue the existing include pattern.

---
## 3. Assets and styling

- `asset/css/bootstrap.min.css` is a copy of the Bootstrap library – don’t edit it directly.
- `asset/css/style.css` holds all custom overrides. Modify it for styling changes.
- The `scss/` directory mirrors Bootstrap’s source and the custom `style.scss` from the template.
  - **CI/build:** there isn’t one. Compile SCSS manually with `sass` or a tool of your choice; output should replace files in `asset/css/`.
- JavaScript behaviour is defined in `asset/js/main.js`. It primarily initializes plugins and handles the “back to top” button.
- Third‑party libraries are bundled under `asset/lib`; update them by replacing the relevant files.

---
## 4. Developer workflow

1. Run a local PHP server pointing at `c:\AppServ\www\restaurant` or similar (`php -S localhost:8000` will work if you prefer).
2. Edit PHP/HTML files in your editor; refresh the browser to see changes. There is no build/watch task.
3. If you change SCSS, compile it manually and ensure the output lands in `asset/css`.
4. There are **no tests** or CI scripts; manual verification in a browser is expected.
5. Use browser dev‑tools to inspect element classes, as the project leans heavily on Bootstrap and third‑party CSS.

---
## 5. Project‑specific quirks

- All links to pages and assets are relative. Avoid hard‑coding absolute URLs.
- Filenames are all lower‑case and `.php`; the webserver does not rewrite URLs.
- There is a copy‑and‑paste notice in `footer.php` from the original HTMLCodex template — keep credit links if you’re distributing the template.

---
## 6. When interacting as an AI agent

- **Be explicit about file locations** when suggesting edits (e.g. “modify `header.php` to add another nav item”).
- Preserve the include structure; do not propose moving logic into new controllers or frameworks.
- Use examples from existing pages when generating markup (copy the `booking.php` hero or the `menu.php` tabbed layout).
- Avoid assuming any backend data source; if dynamic content is needed, note that it must be added manually.
- Mention the absence of a build system if a user asks about compiling or bundling assets.

> _This file can be updated as the project grows. Ask the developer for clarification if you encounter missing behaviours or new conventions._

---

_Last reviewed: March 4, 2026._
