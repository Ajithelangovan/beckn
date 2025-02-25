document.addEventListener("DOMContentLoaded", function() {
  // Section - Hero: Start
  // Particles: Start
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
  //   constructor(x, y, filled) {
  //     this.x = x;
  //     this.y = y;
  //     this.filled = filled;
  //     this.size = Math.random() * 50 + 2;
  //     this.speedX = (Math.random() - 0.5) * 0.5;
  //     this.speedY = (Math.random() - 0.5) * 0.5;
  //     this.opacity = 0;
  //     this.lifetime = Math.random() * 3000 + 100;
  //     this.age = 0;
  //     this.fadeIn = true;
  //   }

  //   reset() {
  //     this.x = Math.random() * canvas.width;
  //     this.y = Math.random() * canvas.height;
  //     this.opacity = 0;
  //     this.age = 0;
  //     this.lifetime = Math.random() * 3000 + 100;
  //     this.fadeIn = true;
  //   }

  //   update() {
  //     this.x += this.speedX;
  //     this.y += this.speedY;

  //     const fadeSpeed = 0.0025;
  //     this.age++;

  //     if (this.fadeIn) {
  //       this.opacity += fadeSpeed;
  //       if (this.opacity >= 1) this.fadeIn = false;
  //     } else {
  //       this.opacity -= fadeSpeed;
  //       if (this.opacity <= 0) this.reset();
  //     }

  //     if (this.age >= this.lifetime) {
  //       this.reset();
  //     }
  //   }

  //   draw() {
  //     ctx.save(); // Save the canvas state

  //     // Apply transformations to the gradient
  //     ctx.translate(0, -400);
  //     ctx.rotate((2 * Math.PI) / 180); // Convert degrees to radians
  //     ctx.scale(1, 1);

  //     // Create and apply the gradient on the transformed canvas
  //     const gradient = ctx.createRadialGradient(this.x, this.y, this.size * 0.3, this.x, this.y, this.size);
  //     gradient.addColorStop(0.00001, '#2E8BFF');
  //     gradient.addColorStop(1, '#0059C9');
  //     // gradient.addColorStop(0, 'rgba(66, 133, 244, 1)');   // Bright blue in the center
  //     // gradient.addColorStop(1, 'rgba(21, 101, 192, 1)');   // Darker blue at the edge

  //     // Restore canvas to original state after applying gradient
  //     ctx.restore();

  //     // Draw the particle using the transformed gradient
  //     ctx.globalAlpha = this.opacity;
  //     ctx.beginPath();
  //     ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
  //     if (this.filled) {
  //       ctx.fillStyle = gradient;
  //       ctx.fill();
  //     } else {
  //       ctx.strokeStyle = '#EBEBED';
  //       ctx.lineWidth = 2;
  //       ctx.stroke();
  //     }
  //     ctx.globalAlpha = 1;
  //   }
  // }

  // // Create particles
  // let particles = [];
  // function createParticles() {
  //   const numParticles = Math.floor((canvas.width * canvas.height) / 50000);
  //   for (let i = 0; i < numParticles; i++) {
  //     const x = Math.random() * canvas.width;
  //     const y = Math.random() * canvas.height;
  //     const filled = Math.random() > 0.3;
  //     particles.push(new Particle(x, y, filled));
  //   }
  // }

  // createParticles();

  // // Custom particle at bottom right
  // const customParticle = new Particle(canvas.width - 50, canvas.height - 50, true);
  // customParticle.size = 10; // Fixed size for custom particle

  // // Mouse interaction
  // let mouse = { x: undefined, y: undefined };
  // canvas.addEventListener('mousemove', (event) => {
  //   mouse.x = event.x;
  //   mouse.y = event.y;
  // });

  // // Animation loop
  // function animate() {
  //   ctx.clearRect(0, 0, canvas.width, canvas.height);

  //   // Draw connections between particles (beneath circles)
  //   particles.forEach((particle, index) => {
  //     let closestParticle = null;
  //     let closestDistance = Infinity;
  //     const maxDistance = 5000;

  //     for (let j = 0; j < particles.length; j++) {
  //       if (index !== j) {
  //         const otherParticle = particles[j];
  //         const dx = otherParticle.x - particle.x;
  //         const dy = otherParticle.y - particle.y;
  //         const distance = Math.sqrt(dx * dx + dy * dy);

  //         if (distance < closestDistance && distance < maxDistance) {
  //           closestDistance = distance;
  //           closestParticle = otherParticle;
  //         }
  //       }
  //     }

  //     if (closestParticle) {
  //       const dx = closestParticle.x - particle.x;
  //       const dy = closestParticle.y - particle.y;
  //       const angle = Math.atan2(dy, dx);

  //       // Adjusted starting and ending points for the line
  //       const startX = particle.x + Math.cos(angle) * particle.size;
  //       const startY = particle.y + Math.sin(angle) * particle.size;
  //       const endX = closestParticle.x - Math.cos(angle) * closestParticle.size;
  //       const endY = closestParticle.y - Math.sin(angle) * closestParticle.size;

  //       ctx.beginPath();
  //       ctx.strokeStyle = `rgba(235, 235, 237, ${1 - closestDistance / maxDistance})`;
  //       ctx.lineWidth = 0.8;
  //       ctx.moveTo(startX, startY);
  //       ctx.lineTo(endX, endY);
  //       ctx.stroke();
  //     }
  //   });

  //   // Draw particles on top of lines
  //   particles.forEach(particle => {
  //     particle.update();
  //     particle.draw();

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
  // // Particles: End
})