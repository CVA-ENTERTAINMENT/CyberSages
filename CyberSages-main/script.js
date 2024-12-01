// Particles.js Configuration
particlesJS('particles-js', {
  particles: {
    number: {
      value: 80,
    },
    color: {
      value: '#00ffea',
    },
    shape: {
      type: 'circle',
    },
    opacity: {
      value: 0.5,
    },
    size: {
      value: 3,
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: '#00ffea',
      opacity: 0.4,
      width: 1,
    },
    move: {
      enable: true,
      speed: 6,
      direction: 'none',
      random: false,
      straight: false,
      out_mode: 'out',
    },
  },
});

// Resize Event
window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});
