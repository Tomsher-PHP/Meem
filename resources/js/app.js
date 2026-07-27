import './bootstrap';
import Lenis from 'lenis';

const menuButton = document.querySelector("#menu-button");
const menuClose = document.querySelector("#menu-close");
const mobileMenu = document.querySelector("#mobile-menu");
const mobileLinks = mobileMenu ? mobileMenu.querySelectorAll("a") : [];
const siteHeader = document.querySelector(".site-header");
const headerLogo = document.querySelector(".header-logo");
const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
const heroRevealItems = document.querySelectorAll(".hero-reveal");

if (mobileMenu && headerLogo) {
  const mobileMenuTop = mobileMenu.firstElementChild;
  if (mobileMenuTop) {
    const mobileMenuLogo = headerLogo.cloneNode(true);
    mobileMenuLogo.className = "mobile-menu-logo";
    mobileMenuLogo.removeAttribute("style");
    mobileMenuTop.className = "flex items-start justify-between";
    mobileMenuTop.prepend(mobileMenuLogo);
  }
  document.body.appendChild(mobileMenu);
}

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
  if (mobileMenu) {
    mobileMenu.classList.toggle("is-open", open);
    mobileMenu.setAttribute("aria-hidden", String(!open));
  }
  document.body.classList.toggle("menu-open", open);
  siteHeader?.classList.toggle("menu-active", open);
  menuButton?.setAttribute("aria-expanded", String(open));

  if (lenis) {
    open ? lenis.stop() : lenis.start();
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

menuButton.addEventListener("click", () => setMenu(true));
menuClose.addEventListener("click", () => setMenu(false));
mobileLinks.forEach((link) => link.addEventListener("click", () => setMenu(false)));

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
