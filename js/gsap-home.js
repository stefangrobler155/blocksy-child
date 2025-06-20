const toggleBtn = document.querySelector('.mobile-toggle');
const navMenu = document.querySelector('.nav-menu');

if (toggleBtn && navMenu) {
  toggleBtn.addEventListener('click', () => {
    navMenu.classList.toggle('open');
  });
}



console.log('✅ gsap-home.js loaded');

gsap.registerPlugin(ScrollTrigger);

// ✅ Animate headline
gsap.from(".headline", {
  y: -50,
  opacity: 0,
  duration: 1,
  ease: "power3.out"
});

// ✅ Animate subtext
gsap.from(".subtext", {
  y: 30,
  opacity: 0,
  duration: 1,
  delay: 0.3,
  ease: "power2.out"
});

// ✅ Animate CTA button
gsap.from(".btn-primary", {
  scale: 0.9,
  opacity: 0,
  duration: 0.6,
  delay: 0.6,
  ease: "back.out(1.7)"
});

// ✅ Animate features list
gsap.utils.toArray(".feature-list li").forEach((item, i) => {
  gsap.from(item, {
    scrollTrigger: {
      trigger: item,
      start: "top 90%",
    },
    x: -30,
    opacity: 0,
    delay: i * 0.1,
    duration: 0.6
  });
});

// ✅ Animate code block
gsap.from(".code-box", {
  scrollTrigger: {
    trigger: ".code-box",
    start: "top 85%",
  },
  y: 40,
  opacity: 0,
  duration: 1,
  ease: "power2.out"
});

// ✅ Animate how-to list
gsap.from(".how-to-section ol li", {
  scrollTrigger: {
    trigger: ".how-to-section ol",
    start: "top 90%",
  },
  y: 20,
  opacity: 0,
  stagger: 0.2,
  duration: 0.6
});

// ✅ Animate CTA section
gsap.from(".cta-section h2", {
  scrollTrigger: {
    trigger: ".cta-section",
    start: "top 90%",
  },
  opacity: 0,
  y: 40,
  duration: 1
});

gsap.from(".btn-secondary", {
  scrollTrigger: {
    trigger: ".btn-secondary",
    start: "top 90%",
  },
  scale: 0.8,
  opacity: 0,
  duration: 0.6,
  ease: "back.out(1.7)"
});
// ✅ Animate header on scroll direction
const header = document.querySelector(".site-header");

if (header) {
  let lastScrollY = window.scrollY;

  ScrollTrigger.create({
    start: 0,
    end: "max",
    onUpdate: (self) => {
      const direction = self.direction;
      const currentScrollY = window.scrollY;

      if (currentScrollY > 100) {
        if (direction === 1) {
          // Scrolling down
          gsap.to(header, {
            y: "-100%",
            duration: 0.3,
            ease: "power2.out"
          });
        } else {
          // Scrolling up
          gsap.to(header, {
            y: "0%",
            duration: 0.3,
            ease: "power2.out"
          });
        }
      } else {
        // At top
        gsap.to(header, {
          y: "0%",
          duration: 0.3,
          ease: "power2.out"
        });
      }

      lastScrollY = currentScrollY;
    }
  });
}
