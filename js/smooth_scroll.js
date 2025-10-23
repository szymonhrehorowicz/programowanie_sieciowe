(function() {
function getNavOffset() {
  const nav = document.querySelector('nav');
  if (!nav) return 0;
  const rect = nav.getBoundingClientRect();
  // If nav is fixed, use its height; otherwise 0
  const style = window.getComputedStyle(nav);
  if (style.position === 'fixed' || style.position === 'sticky')
    return rect.height;
  return 0;
}

function scrollToHash(hash) {
  if (!hash) return;
  const id = hash.replace(/^#/, '');
  const el = document.getElementById(id);
  if (!el) return;
  const navOffset = getNavOffset();
  const top = el.getBoundingClientRect().top + window.pageYOffset - navOffset -
      8;  // small gap
  window.scrollTo({top, behavior: 'smooth'});
  // Optionally set focus for accessibility
  try {
    el.focus({preventScroll: true});
  } catch (e) {
  }
}

function onClick(e) {
  // Only left-clicks without modifiers
  if (e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey)
    return;
  const a = e.target.closest('a');
  if (!a) return;
  const href = a.getAttribute('href') || '';
  if (!href.startsWith('#')) return;
  const hash = href;
  e.preventDefault();
  scrollToHash(hash);
  // update location.hash without jumping
  if (history.pushState)
    history.pushState(null, '', hash);
  else
    location.hash = hash;
}

function initSmoothScroll(selector) {
  if (selector) {
    const links = document.querySelectorAll(selector);
    links.forEach(l => l.addEventListener('click', onClick));
  } else {
    document.addEventListener('click', onClick);
    // If page loaded with a hash, scroll to it after a short timeout so layout
    // is ready
    if (location.hash) setTimeout(() => scrollToHash(location.hash), 60);
  }
}

// Auto init on DOMContentLoaded
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => initSmoothScroll());
} else {
  initSmoothScroll();
}

// expose for manual use
window.initSmoothScroll = initSmoothScroll;
})();
