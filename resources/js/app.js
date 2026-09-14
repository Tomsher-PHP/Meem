import './bootstrap';
import Lenis from 'lenis';

const menuButton = document.querySelector("#menu-button");
const mobileMenu = document.querySelector("#mobile-menu");
const mobileLinks = mobileMenu ? mobileMenu.querySelectorAll("a") : [];
const siteHeader = document.querySelector(".site-header");
const headerLogo = document.querySelector(".header-logo");
const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
const heroRevealItems = document.querySelectorAll(".hero-reveal");



const showHeroReveals = () => {
  document.body.classList.add("is-ready");
  heroRevealItems.forEach((item) => item.classList.add("is-visible"));
};

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", () => {
    requestAnimationFrame(() => {
      requestAnimationFrame(showHeroReveals);
    });
  });
} else {
  requestAnimationFrame(() => {
    requestAnimationFrame(showHeroReveals);
  });
}

function updateHeaderState() {
  siteHeader?.classList.toggle("is-scrolled", window.scrollY > 48);
}

updateHeaderState();
window.addEventListener("scroll", updateHeaderState, { passive: true });

const lenis = prefersReducedMotion.matches
  ? null
  : new Lenis({
      duration: 1.15,
      smoothWheel: true,
      wheelMultiplier: 0.9,
      touchMultiplier: 1.2,
      anchors: false,
    });

if (lenis) {
  const raf = (time) => {
    lenis.raf(time);
    requestAnimationFrame(raf);
  };

  requestAnimationFrame(raf);
}

function setMenu(open) {
  if (!mobileMenu) return;
  
  // Determine new state (toggle if not explicitly provided)
  const isOpen = typeof open === "boolean" ? open : !mobileMenu.classList.contains("is-open");
  
  // Update classes and aria attributes
  mobileMenu.classList.toggle("is-open", isOpen);
  menuButton?.setAttribute("aria-expanded", String(isOpen));
  mobileMenu.setAttribute("aria-hidden", String(!isOpen));
  
  document.body.classList.toggle("menu-open", isOpen);
  siteHeader?.classList.toggle("menu-active", isOpen);

  if (lenis) {
    isOpen ? lenis.stop() : lenis.start();
  }
}

function scrollToTarget(target) {
  if (lenis) {
    lenis.scrollTo(target, {
      duration: 1.35,
      offset: window.innerWidth < 640 ? -68 : -82,
    });
    return;
  }

  document.querySelector(target)?.scrollIntoView({
    behavior: prefersReducedMotion.matches ? "auto" : "smooth",
  });
}

document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener("click", (event) => {
    const target = link.getAttribute("href");

    if (!target || target === "#" || !document.querySelector(target)) {
      return;
    }

    event.preventDefault();
    setMenu(false);
    scrollToTarget(target);
  });
});

// Toggle menu on button click
menuButton?.addEventListener("click", (e) => {
  e.stopPropagation();
  setMenu();
});

// Close menu when a link is clicked
mobileLinks.forEach((link) => link.addEventListener("click", () => setMenu(false)));

// Close menu when clicking outside
document.addEventListener("click", (event) => {
  if (
    mobileMenu &&
    mobileMenu.classList.contains("is-open") &&
    !mobileMenu.contains(event.target) &&
    !menuButton?.contains(event.target)
  ) {
    setMenu(false);
  }
});

// Close menu when pressing Escape key
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    setMenu(false);
  }
});

const revealItems = document.querySelectorAll("[data-reveal]");

if (prefersReducedMotion.matches) {
  revealItems.forEach((item) => item.classList.add("is-visible"));
} else {
  const revealObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      });
    },
    {
      rootMargin: "0px 0px -10% 0px",
      threshold: 0.12,
    },
  );

  revealItems.forEach((item) => revealObserver.observe(item));
}
