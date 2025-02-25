// const canvas = document.getElementById('particleCanvas');
// const ctx = canvas.getContext('2d');

// // Set canvas size
// function resizeCanvas() {
//   canvas.width = window.innerWidth;
//   canvas.height = window.innerHeight;
// }
// resizeCanvas();
// window.addEventListener('resize', resizeCanvas);

// // Particle class
// class Particle {
//   constructor(x, y) {
//     this.x = x;
//     this.y = y;
//     this.size = Math.random() * 25 + 2;
//     this.speedX = (Math.random() - 0.5) * 0.5;
//     this.speedY = (Math.random() - 0.5) * 0.5;
//   }

//   update() {
//     this.x += this.speedX;
//     this.y += this.speedY;
//   }

//   draw() {
//     ctx.beginPath();
//     ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
//     ctx.fillStyle = '#fff';  // Set the dot color to white
//     ctx.fill();
//   }
// }

// // Create particles
// let particles = [];
// function createParticles() {
//   const numParticles = Math.floor((canvas.width * canvas.height) / 100000);
//   for (let i = 0; i < numParticles; i++) {
//     const x = Math.random() * canvas.width;
//     const y = Math.random() * canvas.height;
//     particles.push(new Particle(x, y));
//   }
// }
// createParticles();

// // Custom particle at bottom right
// const customParticle = new Particle(canvas.width - 50, canvas.height - 50);
// customParticle.size = 10; // Fixed size for custom particle

// // Mouse interaction
// let mouse = {
//   x: undefined,
//   y: undefined
// };
// canvas.addEventListener('mousemove', (event) => {
//   mouse.x = event.x;
//   mouse.y = event.y;
// });

// // Animation loop
// function animate() {
//   ctx.clearRect(0, 0, canvas.width, canvas.height);

//   particles.forEach((particle, index) => {
//     particle.update();
//     particle.draw();

//     // Connect all particles
//     for (let j = 0; j < particles.length; j++) {
//       if (index !== j) {
//         const otherParticle = particles[j];
//         const dx = particle.x - otherParticle.x;
//         const dy = particle.y - otherParticle.y;
//         const distance = Math.sqrt(dx * dx + dy * dy);

//         const maxDistance = 500; // Set max distance for line drawing

//         if (distance < maxDistance) {
//           ctx.beginPath();
//           ctx.strokeStyle = `rgba(255, 255, 255, ${1 - distance / maxDistance})`; // Black lines
//           ctx.lineWidth = 1;
//           ctx.moveTo(particle.x, particle.y);
//           ctx.lineTo(otherParticle.x, otherParticle.y);
//           ctx.stroke();
//         }
//       }
//     }

//     // Mouse interaction
//     if (mouse.x && mouse.y) {
//       const dx = mouse.x - particle.x;
//       const dy = mouse.y - particle.y;
//       const distance = Math.sqrt(dx * dx + dy * dy);

//       if (distance < 250) {
//         const angle = Math.atan2(dy, dx);
//         particle.x -= Math.cos(angle) * 0.2;
//         particle.y -= Math.sin(angle) * 0.2;
//       }
//     }
//   });

//   // Draw the custom particle at bottom right
//   customParticle.draw();

//   requestAnimationFrame(animate);
// }

// animate();

// const blobs = document.querySelectorAll('.bn-backdropblob');

// Randomize initial positions
// blobs.forEach(blob => {
//   const x = Math.random() * (window.innerWidth - 300);
//   const y = Math.random() * (window.innerHeight - 300);
//   gsap.set(blob, { x: x, y: y });
// });

// Add floating animation with GSAP
// blobs.forEach((blob, index) => {
//   const delay = -index * 5;
//   gsap.to(blob, {
//     x: 'random(-50, 50)',
//     y: 'random(-50, 100)',
//     duration: 20,
//     repeat: -1,
//     yoyo: true,
//     ease: 'sine.inOut',
//     delay: delay
//   });
// });

// Add subtle pulsing animation
// gsap.to(blobs, {
//   scale: '+=0.05',
//   repeat: -1,
//   yoyo: true,
//   duration: 1,
//   ease: 'sine.inOut'
// });