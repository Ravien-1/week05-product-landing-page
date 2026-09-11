/**
 * Luzon Furniture — app.js
 * Minimal vanilla JS: mobile nav toggle + smooth close on link click.
 */

document.addEventListener('DOMContentLoaded', () => {

    const btn       = document.getElementById('mobile-menu-btn');
    const menu      = document.getElementById('mobile-menu');
    const iconOpen  = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');

    if (!btn || !menu) return;

    /** Toggle the mobile menu open / closed */
    function toggleMenu(forceClose = false) {
        const isOpen = !menu.classList.contains('hidden') && !forceClose;

        if (isOpen) {
            // Close
            menu.classList.add('hidden');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Open navigation menu');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        } else {
            // Open
            menu.classList.remove('hidden');
            btn.setAttribute('aria-expanded', 'true');
            btn.setAttribute('aria-label', 'Close navigation menu');
            iconOpen.classList.add('hidden');
            iconClose.classList.remove('hidden');
        }
    }

    // Button click
    btn.addEventListener('click', () => toggleMenu());

    // Close when any mobile nav link is clicked
    menu.querySelectorAll('.mobile-nav-link, a').forEach(link => {
        link.addEventListener('click', () => toggleMenu(true));
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') toggleMenu(true);
    });

    // Close when clicking outside the nav
    document.addEventListener('click', (e) => {
        const nav = btn.closest('nav');
        if (nav && !nav.contains(e.target)) {
            toggleMenu(true);
        }
    });

});
