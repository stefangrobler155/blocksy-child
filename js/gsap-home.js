document.addEventListener('DOMContentLoaded', () => {
  // Hero text animation
  gsap.from(".headline", {
    duration: 1,
    y: -50,
    opacity: 0,
    ease: "power3.out"
  });

  gsap.from(".subtext", {
    duration: 1,
    delay: 0.3,
    y: 30,
    opacity: 0,
    ease: "power2.out"
  });

  gsap.from(".btn-primary", {
    duration: 0.8,
    delay: 0.6,
    scale: 0.9,
    opacity: 0,
    ease: "back.out(1.7)"
  });

  // Scroll-triggered animations
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".feature-list li").forEach((item, i) => {
    gsap.from(item, {
      scrollTrigger: {
        trigger: item,
        start: "top 85%",
      },
      x: -30,
      opacity: 0,
      delay: i * 0.1,
      duration: 0.6
    });
  });

  gsap.from(".code-box", {
    scrollTrigger: {
      trigger: ".code-box",
      start: "top 80%",
    },
    y: 40,
    opacity: 0,
    duration: 1,
    ease: "power2.out"
  });

  gsap.from(".how-to-section ol li", {
    scrollTrigger: {
      trigger: ".how-to-section ol",
      start: "top 85%",
    },
    y: 20,
    opacity: 0,
    stagger: 0.2,
    duration: 0.6
  });

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
});
