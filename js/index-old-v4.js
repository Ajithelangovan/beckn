gsap.registerPlugin(SplitText, ScrollTrigger, ScrollSmoother, MotionPathPlugin, DrawSVGPlugin);
// Register Plugin

// GSDevTools.create();

ScrollTrigger.normalizeScroll(true);

// let smoother = ScrollSmoother.create({
//   smooth: 2,
//   wrapper: "#smooth-wrapper",
//   content: "#smooth-content",
//   effects: true,
//   normalizeScroll: true
// });

// ScrollTrigger.config(
//   {
//     autoRefreshEvents: "load",
//   }
// );



// On DOM Ready
const onReady = () => {
  const main = document.querySelector('.bn-main'),
  sectionHome = main.querySelector('.bn-section--home-hero');
  // mainDot = main.querySelector("#main-dot");

  const lineStops = [43.6, 65.6];

  function connectSvgElements() {
    const padding = 20;
    const svgLineContainer = document.getElementById("svgLineContainer");
    const path = document.getElementById("dynamicLine");
    // svgLineContainer.style = {top: 0, height: 300, width: 300};

    // Get bounding boxes for the circles
    const circle1 = document.getElementById("dot1");
    const circle2 = document.getElementById("dot2");

    const rect1 = circle1.getBoundingClientRect();
    const rect2 = circle2.getBoundingClientRect();

    // Calculate the centers of the circles
    const cx1 = rect1.x + rect1.width / 2;
    const cy1 = rect1.y + rect1.height / 2;
    const cx2 = rect2.x + rect2.width / 2;
    const cy2 = rect2.y + rect2.height / 2;

    const width = Math.abs(cx2 - cx1) + padding * 2;
    const height = Math.abs(cy2 - cy1) + padding * 2;

    // Update the SVG's width and height
    // svgLineContainer.setAttribute("width", width);
    // svgLineContainer.setAttribute("height", height);
    // svgLineContainer.style.left = rect1.x

    // const cx1 = circle1.getAttribute('cx');
    // const cy1 = circle1.getAttribute('cy');
    // const cx2 = circle2.getAttribute('cx');
    // const cy2 = circle2.getAttribute('cy');
    // const cy1 = circle2.getAttribute('cy');

    // Update the path's `d` attribute to draw a line between the two centers
    path.setAttribute("d", `M${cx1},${cy1} L${cx2},${cy2}`);


    // Animate the line drawing
    gsap.fromTo(
      path,
      { drawSVG: "0%" }, // Start with 0% drawn
      { drawSVG: "100%", duration: 2, ease: "power1.inOut" } // Animate to 100%
    );
  }

  // Draw the line on load
  connectSvgElements();
  setTimeout(connectSvgElements(), 1000);

  // Redraw the line on window resize to ensure responsiveness
  window.addEventListener("resize", connectSvgElements);

  // gsap.set(mainDot, {
  //   xPercent: -50,
  //   yPercent: -50,
  //   transformOrigin: "50% 50%",
  //   motionPath: {
  //     path: "#futureStreakLine .line",
  //     align: "#futureStreakLine .line",
  //     alignOrigin: [0.5, 0.5],
  //     start: lineStops[1] / 100,
  //     end: lineStops[1] / 100
  //   }
  // });




  const networkAnim = () => {
    const elements = {
      paths: main.querySelectorAll("#bgSvg .line"),
      shapes: main.querySelectorAll("#bgSvg .shape"),
      strokeLines: main.querySelectorAll("#bgSvg .stroke-line"),
      filterShapes: main.querySelectorAll("#bgSvg .filter-shape"),
    };

    const networkTl = gsap.timeline({
      id: "networkTl",
      paused: true,
      scrollTrigger: {
        trigger: sectionHome,
        start: "top center",
        end: "bottom top",
        toggleActions: "play pause resume pause",
      },
    });

    const defaults = {
      duration: gsap.utils.random(2, 6),
      repeat: 0,
      ease: "power2.inOut",
    };

    networkTl.addLabel("lineAnim");

    // function getGradientAttr(gradient) {
    //   const gradient = main.querySelector(gradientId);
    //   const gradientAttr = { x1: gradient.getAttribute("x1"), x2: gradient.getAttribute("x2"),
    //     y1: gradient.getAttribute("y1"), y2: gradient.getAttribute("y2")
    //    };
      
    //   return gradientAttr

    // }

    elements.paths.forEach((path, index) => {
      const length = path.getTotalLength();
      const strokeAttr = path.getAttribute("stroke");
      const hasGradient = strokeAttr && strokeAttr[0] !== "#";
      const gradientId = hasGradient ? `#${strokeAttr.split("url(#")[1].split(")")[0]}` : null;
      // const gradientAttr = getGradientAttr(gradient);
      networkTl.add(
        gsap.fromTo(
          path,
          { strokeDasharray: length, strokeDashoffset: length },
          { strokeDashoffset: 0, ...defaults }
        ),
        index * 0.2
      );

      if (hasGradient) {
        networkTl.add(
          gsap.to(gradientId, {
            attr: { gradientTransform: "rotate(360 0.5 0.5)" },
            // attr: {x1: "100%", x2: "120%"},
            repeat: -1,
            duration: length / 100,
            ease: "sine.inOut",
          }),
          index * 0.26
        );
      }
    });
    gsap.set(elements.strokeLines,{opacity: 0})
    // elements.strokeLines.forEach((line, index) => {
    //   const streakSize = 54;
    //   const length = line.getTotalLength();
    //   gsap.set(elements.strokeLines, {strokeDasharray: streakSize + ' '+ length, strokeDashoffset: length})

    //   networkTl.add(
    //     gsap.to(line, {
    //       duration: 5,
    //       repeat: -1,
    //       ease: "none",
    //       strokeDashoffset: 0
    //     })
    //   )
    // })

    const animateShapes = (shapes, options, stagger) => {
      shapes.forEach((shape, index) => {
        networkTl.add(
          gsap.to(shape, { ...options }),
          index * stagger
        );
      });
    };

    animateShapes(elements.shapes, {
      rotate: (i) => (i % 2 === 0 ? -360 : 360),
      scale: gsap.utils.random(0.8, 1),
      transformOrigin: "50% 50%",
      duration: () => Math.round(gsap.utils.random(20, 60)),
      repeat: -1,
      yoyo: true,
      ease: "none",
    }, 0.2);

    animateShapes(elements.filterShapes, {
      scale: gsap.utils.random(0.8, 1),
      transformOrigin: "50% 50%",
      duration: () => Math.round(gsap.utils.random(3, 5)),
      repeat: -1,
      yoyo: true,
      ease: "power2.inOut",
    }, 0.2);
  };

  


  // function drawLineWithAngle(angleDegrees) {
  //   const lastDot = document.getElementById('lastDot')
  //   const svg = document.getElementById("streakSvg");
  //   const circle = document.getElementById("angleDot");
  //   const path = document.getElementById("dynamicLine");

  //   // Get the circle's position
  //   const cx1 = parseFloat(circle.getAttribute("cx"));
  //   const cy1 = parseFloat(circle.getAttribute("cy"));

  //   // Calculate the line's length based on the window width
  //   const lineLength = Math.min(window.innerWidth - 20, svg.clientWidth - 20);

  //   // Convert the angle to radians
  //   const angleRadians = (angleDegrees * Math.PI) / 180;

  //   // Calculate the endpoint of the line using trigonometry
  //   console.log(lastDot.getAttribute('x'))
  //   const lastDotBox = lastDot.getBoundingClientRect();
  //   // const endX = cx + lineLength * Math.cos(angleRadians);
  //   // const endY = cy - lineLength * Math.sin(angleRadians); // Subtract for SVG's Y-axis orientation

  //   const endX = lastDotBox.x;
  //   const endY = lastDotBox.y;
  //   const cx2 = lastDot.getAttribute('x')
  //   const cy2 = lastDot.getAttribute('y')

  //   // Update the path's `d` attribute
  //   // path.setAttribute("d", `M${cx},${cy} L${endX},${endY}`);

  //   path.setAttribute("d", `M${cx1},${cy1} L${cx2},${cy2}`);

  //   // Animate the line drawing
  //   gsap.fromTo(
  //     path,
  //     { drawSVG: "0%" }, // Start with 0% drawn
  //     { drawSVG: "100%", duration: 2, ease: "power1.inOut" } // Animate to 100%
  //   );
  // }



  // Draw the line with a specified angle (e.g., 45 degrees)
  // drawLineWithAngle(109);

  // Optional: Redraw the line on window resize to adapt to new width
  // window.addEventListener("resize", () => {
  //   drawLineWithAngle(45)
  // });
    // Future: Start
    const sectionFuture = main.querySelector('.bn-section--home-future');
    const sectionInfinite = main.querySelector('.bn-section--home-infinite');
    const sectionPossibilities = main.querySelector('.bn-section--home-possibilities');
    const slides = sectionFuture.querySelectorAll('.bn-slides .bn-slide');
    const bgBackdrop= main.querySelector('.bn-bgwrap .bn-bgwrap__backdrop');
    const streakSvg = bgBackdrop.querySelector("svg");
    const slidesPagination = sectionFuture.querySelectorAll('.bn-slides .bn-slides__pagination span');

  const homeInfiniteSelectors = {
    bgWrap: '.bn-bgwrap .bn-bgwrap__backdrop',
    titleSpans: '.bn-section--home-infinite .bn-section__title span',
    descSpans: '.bn-section--home-infinite .bn-section__desc'
  };

  const animationConfig = {
    backgroundColor: {
      enter: 'var(--primary-grey-dark)',
      leave: '#fff',
      titleBg: 'var(--primary-grey-dark)',
      transparent: 'transparent'
    },
    durations: {
      bgChange: 1.2,
      textChange: 0.1,
      opacityChange: 1
    },
    ease: "sine.inOut"
  };


    

    gsap.set(slides[0], { autoAlpha: 1 });
    gsap.set(
      slidesPagination[0],
      { height: 16,backgroundColor: "#ebebed" },
    );

  // gsap.to("#streak-grad-2", {
  //   // attr: { x1: "10%", x2: "200%", y1: "10%", y2: "200%" },
  //   attr: { gradientTransform: "rotate(360 0.5 0.5)" },
  //   duration: 12,
  //   repeat: -1,

  //   ease: "none",
  // });
  const lineStreak = main.querySelector("#dup-path");
  const streakLength = lineStreak.getTotalLength();

  lineStreak.style.setProperty('--path-length',  streakLength);

  const futureTl = gsap.timeline({
      id: "futureTimeline",
      scrollTrigger: {
        trigger: '.bn-bgwrap',
        scrub: 2,
        pin: true,
        snap: true,
        // anticipatePin: 1,
        end: () => "+=" + (sectionFuture.scrollHeight + slides[0].clientHeight / 2),
        // markers: true
      }
    });

    function setStrealineBackdropHeight() {
      bgBackdrop.style.height = sectionFuture.offsetHeight + sectionInfinite.offsetHeight;
    }

  setStrealineBackdropHeight()

  window.addEventListener("resize", setStrealineBackdropHeight)

  slides.forEach((slide, index) => {
    if(index !== 0) {
      futureTl
        .fromTo(
          slide,
          { autoAlpha: 0 },
          { autoAlpha: 1, duration: slides.length * 5, ease: "sine.inOut" },
          `+=${index}`
        )
        .to(
          slidesPagination[index],
          { height: 16, duration: 0.6, backgroundColor: "#ebebed", ease: "power4.out" },
          "<"
        );
    }

    if (index > 0) {
      futureTl
        .to(
          slides[index - 1],
          { autoAlpha: 0, duration: slides.length, ease: "none" },
          "<"
        )
        .to(
          slidesPagination[index - 1],
          { height: 8, duration: 0.2, backgroundColor: "transparent", ease: "power4.out" },
          "<"
        );
    }
  });
  // Future: End

  // Infinite: Start 
    const infiniteLineStreak = main.querySelector('#lineStreak'),
    infiniteTitle = sectionInfinite.querySelector('.bn-section__title'),
    infiniteDesc = sectionInfinite.querySelector('.bn-section__desc');

    const infiniteIndustries = sectionInfinite.querySelector('.bn-industries');
    // backdropLineEl = sectionInfinite.querySelector('.bn-backdropline'),
    // infiniteBody = sectionInfinite.querySelector('.bn-section__body'),

    // infiniteRedDot = sectionInfinite.querySelector(".bn-backdropline .bn-point");

    // infiniteTitleSplit = new SplitText(infiniteTitle, { type: "words,chars" }),
    // infiniteDescSplit = new SplitText(infiniteDesc, { type: "words,chars" }),

    // infiniteLineStreakEndOffset = backdropLineEl.offsetTop + backdropLineEl.scrollHeight,

    gsap.set([infiniteTitle, infiniteDesc], { opacity: 0 });
    gsap.set(infiniteIndustries, {opacity: 0, scale: .94})
    gsap.set([
      homeInfiniteSelectors.titleSpans,
      homeInfiniteSelectors.descSpans
    ], { backgroundColor: 'transparent' });
    gsap.set('.bn-bgwrap svg .red-dot', {opacity: 0})

    
    const infiniteTl = gsap.timeline({
      id: "infiniteTimeline",
      scrollTrigger: {
        trigger: sectionInfinite,
        start: () => `+=${window.innerHeight}`,
        end: () => `+=${window.innerHeight}`,
        // end: "bottom bottom",
        scrub: true,
        // markers: true,
        // onEnter: () => {
          
        // },

        // onLeaveBack: () => {
        //     // gsap.to(homeInfiniteSelectors.bgWrap, {
        //     //   backgroundColor: animationConfig.backgroundColor.leave,
        //     //   duration: animationConfig.durations.bgChange,
        //     //   ease: animationConfig.ease
        //     // })
        //   gsap.set(homeInfiniteSelectors.bgWrap, { className: '-=bn-bgwrap__backdrop-active' })
        //   infiniteTl
        //     .to([infiniteTitle, infiniteDesc], {
        //       opacity: 0,
        //       duration: 0
        //     }, "<")
        //     .to([
        //       homeInfiniteSelectors.titleSpans,
        //       homeInfiniteSelectors.descSpans
        //     ], {
        //       backgroundColor: animationConfig.backgroundColor.transparent,
        //       duration: animationConfig.durations.textChange
        //     }, "<-=1");
        // }
      }
    });

  let possibilitiesTitleMarginTop = main.querySelector('#streakSvg').clientHeight - main.querySelector('#futureStreakLine').offsetHeight - 36;
  console.log(possibilitiesTitleMarginTop)
  main.querySelector('#possibilities .bn-section__title').style.marginTop = possibilitiesTitleMarginTop;

  infiniteTl.fromTo(homeInfiniteSelectors.bgWrap, { backgroundColor: 'transparent', ease: 'sine.out' }, {
    backgroundColor: animationConfig.backgroundColor.enter,
    duration: animationConfig.durations.bgChange,
    ease: animationConfig.ease,
    // delay: 1.6
  })
  // gsap.set(homeInfiniteSelectors.bgWrap,{className: '+=bn-bgwrap__backdrop-active'})
  // gsap.to(homeInfiniteSelectors.bgWrap, {
  //   backgroundColor: animationConfig.backgroundColor.enter,
  //   duration: animationConfig.durations.bgChange,
  //   ease: animationConfig.ease,
  //   // delay: 1.6
  // })
  infiniteTl.to([infiniteTitle, infiniteDesc], {
    opacity: 1,
    duration: animationConfig.durations.opacityChange
  }, "<")
  .to(infiniteIndustries, {opacity: 1, scale: 1, duration: 1, ease: 'sine.inOut'}, "<+=0.3")
  .to('.bn-bgwrap svg .red-dot', { opacity: 1, duration: 1, stagger: 0.2 }, "<")
  .to([
    homeInfiniteSelectors.titleSpans,
    homeInfiniteSelectors.descSpans
  ], {
    backgroundColor: animationConfig.backgroundColor.titleBg,
    duration: animationConfig.durations.textChange
  }, "+=4")


  


  // futureTl
  //   .to(homeInfiniteSelectors.bgWrap, {
  //     backgroundColor: animationConfig.backgroundColor.enter,
  //     duration: animationConfig.durations.bgChange,
  //     ease: animationConfig.ease,
  //     delay: 2
  //   })
  //   .to([infiniteTitle, infiniteDesc], {
  //     opacity: 1,
  //     duration: animationConfig.durations.opacityChange
  //   })
  //   .to([
  //     homeInfiniteSelectors.titleSpans,
  //     homeInfiniteSelectors.descSpans
  //   ], {
  //     backgroundColor: animationConfig.backgroundColor.titleBg,
  //     duration: animationConfig.durations.textChange
  //   }, "<-=0.3");

  

  // gsap.set(sectionInfinite, { backgroundColor: '#fff' })
  
  

  
  
  // .to(futureLine, {
  //   drawSVG: '0% 100%',
  //   duration: 2,
  //   ease: 'none'
  // })

  // .to(".red-gradient", {
  //   attr: { x1: "100%", x2: "110%" },
  //   duration: 4,
  //   ease: "sine.inOut",
  // }, "<+=0.4")
  // .to(mainDot, {opacity: 0, scale: 1, duration: 0.6})
  // .to(infiniteRedDot, { opacity: 1, scale: 1, duration: 0.6 }, "<")
  // .fromTo(infiniteLineStreak, { drawSVG: '0 0' }, {
  //   drawSVG: '0% 97.6%',
  //   duration: 12,
  //   ease: 'none',
    // markers: true,
  //   // transformOrigin: "50% 50% -20",
  //   // scrollTrigger: {
  //   //   trigger: sectionInfinite,
  //   //   start: "-=600", // [trigger] [scroller] positions
  //   //   end: `+=${infiniteLineStreakEndOffset - 400}`,
  //   //   // markers: { startColor: "orange", endColor: "green", fontSize: "18px", indent: 20 },
  //   //   scrub: 2,
  //   //   // toggleActions: 'play none none reverse',
  //   // }
  // }, 'infiniteLine')
  //   .to(infiniteRedDot, {
  //   duration: 12,
  //   ease: "none",
  //   motionPath: {
  //     path: infiniteLineStreak,
  //     align: infiniteLineStreak,
  //     start: 0,
  //     end: 0.98
  //   }
  // }, "<")
  // .to(infiniteTitleSplit.chars, {
  //   opacity: 1,
  //   scale: 1,
  //   x: 0,
  //   duration: 5,
  //   backgroundColor: "var(--primary-grey-dark)",
  //   ease: "back",
  //   stagger: 0.06,
  //   transformOrigin: "50% 50% -20",
  // },"-=6.8")
  // .add("infiniteTitleAnim", "<")
  // .to(infiniteTitleSplit.chars, { duration: 0.2, stagger: 0.2, backgroundColor: "var(--primary-grey-dark" }, ">+=15")
  // .to(infiniteDescSplit.words, {
  //   opacity: 1,
  //   scale: 1,
  //   y: 0,
  //   duration: 4,
  //   backgroundColor: "var(--primary-grey-dark)",
  //   ease: "back",
  //   stagger: 0.06,
  //   transformOrigin: "50% 100% -20",
  // }, "infiniteTitleAnim+=1.6")
  // .to(infiniteDescSplit.words, { duration: 0.2, stagger: 0.2, backgroundColor: "var(--primary-grey-dark" }, "<+=12")
  // .to(".streak-gradient", {
  //   attr: { x1: "100%", x2: "110%" },
  //   duration: 6,
  //   ease: "none",
  // }, 'infiniteLine');
  // Future & Infinite: End

  // Possibilities: Start
  
    const possibilitiesTitle = sectionPossibilities.querySelector('.bn-section__title'),
    possibilitiesDesc = sectionPossibilities.querySelector('.bn-section__desc'),

    

    // possibilitiesTitleSplit = new SplitText(possibilitiesTitle, { type: "words,chars" }),
    // possibilitiesDescSplit = new SplitText(possibilitiesDesc, { type: "words,chars" }),
    possibilitiesTl = gsap.timeline({
      id: "possibilitiesTimeline",
      scrollTrigger: {
        trigger: sectionPossibilities,
        scrub: true,
        start: "top center", // [trigger] [scroller] positions
        end: "+=50%",
      }
    });

  // gsap.set(sectionpossibilities, { backgroundColor: '#fff' })
  // gsap.set(possibilitiesTitleSplit.chars, { scale: 1.06, opacity: 0, x: "-=20", backgroundColor: "transparent", });
  // gsap.set(possibilitiesDescSplit.words, { scale: 1.06, opacity: 0, y: "+=20", x: 5 });

  window.addEventListener('resize', function () {
    
  })

  const possibilitiesContentTlDefaults = {
    opacity: 1,
    scale: 1,
    duration: 2,
    ease: "back",
    // markers: true,
    stagger: 0.06,
    transformOrigin: "50% 50% -20",
  }


  // possibilitiesTl
  //   .to(infiniteLineStreak, { 
  //     drawSVG: '0 100%',
  //     duration: 0.6,
  //     ease: 'none',
  //   })
    // .to(possibilitiesTitleSplit.chars, {
    //   ...possibilitiesContentTlDefaults,
    //   x: 0,
    // })
    // .to(possibilitiesDescSplit.words, {
    //   ...possibilitiesContentTlDefaults,
    //   y: 0,
    // }, "-=4")


  // function createInfiniteMarquee() {
  //   const industries = document.querySelector('.bn-industries');
  //   const group1 = industries.getElementById('.bn-industries__marquee');

  //     // Clone the original group multiple times to ensure smooth looping
  //     for (let i = 0; i < 3; i++) {
  //         const clone = group1.cloneNode(true);
  //         marquee.appendChild(clone);
  //     }

  //     // Set up GSAP animation
  //     const groups = document.querySelectorAll('.marquee-group');

  //     groups.forEach((group, index) => {
  //         gsap.set(group, {
  //             xPercent: 100 * index
  //         });

  //         gsap.to(group, {
  //             xPercent: '-=' + (100 * groups.length),
  //             duration: 20,
  //             repeat: -1,
  //             ease: "none"
  //         });
  //     });

  //     // Hover functionality
  //     const wrapper = document.querySelector('.marquee-wrapper');

  //     wrapper.addEventListener('mouseenter', () => {
  //         gsap.globalTimeline.pause();
  //     });

  //     wrapper.addEventListener('mouseleave', () => {
  //         gsap.globalTimeline.play();
  //     });
  // }
  // Infinite: End

  // Initialize the marquee
  // createInfiniteMarquee();

  // Possibilities: Start
  // Function to create a vertical marquee effect
  function createMarquee(column, direction, speed = 20) {
    const cards = Array.from(column.querySelectorAll(".bn-usecasecard"));
    const columnHeight = column.clientHeight;
    const cardHeight = cards[0].offsetHeight + 24; // Adjust for spacing between cards
    const totalCardsNeeded = Math.ceil(columnHeight / cardHeight) * 2;  // Double the required cards to ensure a smooth loop

    // Duplicate cards to fill up space
    for (let i = 0; i < totalCardsNeeded - cards.length; i++) {
      column.appendChild(cards[i % cards.length].cloneNode(true));
    }

    let offset = 0;

    function animate() {
      offset += (direction === 'up' ? -1 : 1) * (speed / 100);

      if (direction === 'up') {
        // When scrolling up, if the top of the column moves beyond a card, move the first card to the bottom
        if (offset <= -cardHeight) {
          offset += cardHeight;
          column.appendChild(column.firstElementChild);
        }
      } else {
        // When scrolling down, if the bottom of the column moves beyond a card, move the last card to the top
        if (offset >= cardHeight) {
          offset -= cardHeight;
          column.insertBefore(column.lastElementChild, column.firstElementChild); // Move the last card to the top
        }
      }

      // Apply the transform to move the column
      column.style.transform = `translateY(${offset}px)`;

      // Prevent further adjustments once the loop is complete (removes jitter)
      if (Math.abs(offset) < cardHeight) {
        requestAnimationFrame(animate);
      }
    }

    animate();
  }

  // Initialize vertical marquees for left and right columns
  const additionalY = { val: 0 };
  let additionalYAnim;
  let offset = 0;
  const stacks = gsap.utils.toArray(".bn-usecasecards__stack");

  // const cardsAnimTl = gsap.timeline({
  //   paused: true,
  //   scrollTrigger: {
  //     trigger: sectionPossibilities,
  //     start: "top 50%",
  //     end: "bottom 50%",
  //     onUpdate: function (self) {
  //       const velocity = self.getVelocity();
  //       if (velocity > 0) {
  //         if (additionalYAnim) additionalYAnim.kill();
  //         additionalY.val = -velocity / 2000;
  //         additionalYAnim = gsap.to(additionalY, { val: 0 });
  //       }
  //       if (velocity < 0) {
  //         if (additionalYAnim) additionalYAnim.kill();
  //         additionalY.val = -velocity / 3000;
  //         additionalYAnim = gsap.to(additionalY, { val: 0 });
  //       }
  //     },
  //     toggleActions: 'play pause resume pause',
  //   }
  // });

  stacks.forEach((stack, i) => {
    const cards = stack.childNodes;

    // DUPLICATE IMAGES FOR LOOP
    cards.forEach((card) => {
      var clone = card.cloneNode(true);
      stack.appendChild(clone);
    });

    // SET ANIMATION
    cards.forEach((item) => {
      let columnHeight = item.parentElement.clientHeight;
      let direction = i % 2 !== 0 ? "+=" : "-="; // Change direction for odd columns

      gsap.to(item, {
        y: direction + Number(columnHeight / 2),
        duration: 40,
        repeat: -1,
        ease: "none",
        modifiers: {
          y: gsap.utils.unitize((y) => {
            if (direction == "+=") {
              offset += additionalY.val;
              y = (parseFloat(y) - offset) % (columnHeight * 0.5);
            } else {
              offset += additionalY.val;
              y = (parseFloat(y) + offset) % -Number(columnHeight * 0.5);
            }

            return y;
          })
        }
      })
    });
  });


  // Possibilities: End
  gsap.utils.toArray('.bn-industries__marquee').forEach((line, i) => {
    const links = line.querySelectorAll(".bn-industry"),
      tl = horizontalLoop(links, {
        repeat: -1,
        speed: 0.4,
        reversed: i ? true : false,
        paddingRight: parseFloat(gsap.getProperty(links[0], "marginRight", "px")) // otherwise first element would be right up against the last when it loops. In this layout, the spacing is done with marginRight.
      });
    links.forEach(link => {
      link.addEventListener("mouseenter", () => gsap.to(tl, { timeScale: 0, overwrite: true }));
      link.addEventListener("mouseleave", () => gsap.to(tl, { timeScale: i ? -1 : 1, overwrite: true }));
    });
  });

  function horizontalLoop(items, config) {
    items = gsap.utils.toArray(items);
    config = config || {};
    let tl = gsap.timeline({ repeat: config.repeat, paused: config.paused, defaults: { ease: "none" }, onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100) }),
      length = items.length,
      startX = items[0].offsetLeft,
      times = [],
      widths = [],
      xPercents = [],
      curIndex = 0,
      pixelsPerSecond = (config.speed || 1) * 100,
      snap = config.snap === false ? v => v : gsap.utils.snap(config.snap || 1), // some browsers shift by a pixel to accommodate flex layouts, so for example if width is 20% the first element's width might be 242px, and the next 243px, alternating back and forth. So we snap to 5 percentage points to make things look more natural
      totalWidth, curX, distanceToStart, distanceToLoop, item, i;
    gsap.set(items, { // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
      xPercent: (i, el) => {
        let w = widths[i] = parseFloat(gsap.getProperty(el, "width", "px"));
        xPercents[i] = snap(parseFloat(gsap.getProperty(el, "x", "px")) / w * 100 + gsap.getProperty(el, "xPercent"));
        return xPercents[i];
      }
    });
    gsap.set(items, { x: 0 });
    totalWidth = items[length - 1].offsetLeft + xPercents[length - 1] / 100 * widths[length - 1] - startX + items[length - 1].offsetWidth * gsap.getProperty(items[length - 1], "scaleX") + (parseFloat(config.paddingRight) || 0);
    for (i = 0; i < length; i++) {
      item = items[i];
      curX = xPercents[i] / 100 * widths[i];
      distanceToStart = item.offsetLeft + curX - startX;
      distanceToLoop = distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
      tl.to(item, { xPercent: snap((curX - distanceToLoop) / widths[i] * 100), duration: distanceToLoop / pixelsPerSecond }, 0)
        .fromTo(item, { xPercent: snap((curX - distanceToLoop + totalWidth) / widths[i] * 100) }, { xPercent: xPercents[i], duration: (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond, immediateRender: false }, distanceToLoop / pixelsPerSecond)
        .add("label" + i, distanceToStart / pixelsPerSecond);
      times[i] = distanceToStart / pixelsPerSecond;
    }
    function toIndex(index, vars) {
      vars = vars || {};
      (Math.abs(index - curIndex) > length / 2) && (index += index > curIndex ? -length : length); // always go in the shortest direction
      let newIndex = gsap.utils.wrap(0, length, index),
        time = times[newIndex];
      if (time > tl.time() !== index > curIndex) { // if we're wrapping the timeline's playhead, make the proper adjustments
        vars.modifiers = { time: gsap.utils.wrap(0, tl.duration()) };
        time += tl.duration() * (index > curIndex ? 1 : -1);
      }
      curIndex = newIndex;
      vars.overwrite = true;
      return tl.tweenTo(time, vars);
    }
    tl.next = vars => toIndex(curIndex + 1, vars);
    tl.previous = vars => toIndex(curIndex - 1, vars);
    tl.current = () => curIndex;
    tl.toIndex = (index, vars) => toIndex(index, vars);
    tl.times = times;
    if (config.reversed) {
      tl.vars.onReverseComplete();
      tl.reverse();
    }
    return tl;
  }
  // Section 2: End

  // Select all blobs

  // const blobsAnim = () => {
  //   const blobs = main.querySelectorAll('.bn-backdropblob');

  //   const blobsTl = gsap.timeline({
  //     paused: true, // Start paused
  //     scrollTrigger: {
  //       trigger: '.bn-backdropblobs', // The section containing blobs
  //       start: 'top center',         // Animation starts when section reaches the middle of the viewport
  //       end: 'bottom top',           // Animation stops when the section leaves the viewport
  //       toggleActions: 'play pause resume pause', // Play/pause based on scroll
  //     },
  //   })
  //   const animDefaults = {
  //     repeat: -1,
  //     yoyo: true,
  //     ease: 'sine.inOut',
  //   }

  //   // Randomize initial positions
  //   blobs.forEach(blob => {
  //     const x = Math.random() * (window.innerWidth / 2) + window.innerWidth / 2;
  //     const y = Math.random() * (window.innerHeight - 300);
  //     gsap.set(blob, { x: x, y: y });
  //   });

    
  //   // Add floating animation with GSAP
  //   blobs.forEach((blob, index) => {
  //     const delay = -index * 5;
  //     blobsTl.add(
  //       gsap.to(blob, {
  //         x: () => Math.random() * (window.innerWidth / 2) + window.innerWidth / 2,
  //         y: () => Math.random() * (window.innerHeight - 300),
  //         duration: 20,
  //         ...animDefaults
  //       }),
  //       delay
  //     )
  //   });

  //   // Add subtle pulsing animation
  //   blobsTl.add(
  //     gsap.to(blobs, {
  //       scale: '+=0.05',
  //       duration: 1,
  //       ...animDefaults
  //     })
  //   )
  // }

  const usecaseCardGap = 24;
  const usecaseCards = document.querySelectorAll('.bn-usecasecards__stack:first-child .bn-usecasecard')

  //Setup Variables
  const setHeight = 374 + 24; //height of the boxes
  const numBoxes = usecaseCards.length; //quantity of boxes

  const totalHeight = numBoxes * setHeight;
  const wrapOffsetTop = setHeight / -2;
  const wrapOffsetBottom = totalHeight + wrapOffsetTop;
  // var wrap = gsap.utils.wrap(wrapOffsetTop, wrapOffsetBottom);
  const yheight = "+=" + totalHeight * -1;
  // console.log("Num Boxes: " + numBoxes + ". Total Box Height: " + totalHeight);


  // const cardsTl = gsap.timeline();
  // cardsTl.to(usecaseCards, {
  //   duration: numBoxes,
  //   ease: "none",
  //   y: yheight, //move each box the total height of all boxes to upwards
  //   modifiers: {
  //     y: gsap.utils.unitize(wrap) //force y value to wrap when it reaches -100
  //   },
  //   repeat: -1
  // });


  // Seciton - Community: Start

  const communityAnim = () => {
    const sectionCommunity = main.querySelector('.bn-section--home-community'),
      communityTitle = sectionCommunity.querySelector('.bn-section__title'),
      communityDesc = sectionCommunity.querySelector('.bn-section__desc'),
      commnunityCards = sectionCommunity.querySelectorAll(".bn-communitycards__item");

      // communityTitleSplit = new SplitText(communityTitle, { type: "words,chars" }),
      // communityDescSplit = new SplitText(communityDesc, { type: "words,chars" });

      // gsap.set(communityTitleSplit.chars, { scale: 1.06, opacity: 0, x: "-=20", backgroundColor: "transparent", });
      // gsap.set(communityDescSplit.words, { scale: 1.06, opacity: 0, y: "+=20" });

      const communityTl = gsap.timeline({
        id: "communityTimeline",
        scrollTrigger: {
          trigger: sectionCommunity,
          scrub: 1,
          start: "top center",
          end: "bottom center",
          // endTrigger: commnunityCards,
          // markers: true,
          onEnter: () => {
            gsap
              .from(commnunityCards, {
                opacity: 0,
                y: () => `+=${commnunityCards.length * 25}`,
                duration: 1,
                stagger: 0.2,
                ease: "expo",
              }, "-=0.8");
          }
        }
      });


    // const communityContentTlDefaults = {
    //   opacity: 1,
    //   scale: 1,
    //   duration: 0.4,
    //   ease: "back",
    //   stagger: 0.02,
    //   transformOrigin: "50% 50% -20",
    // }

    
      // .to(communityTitleSplit.chars, {
      //   ...communityContentTlDefaults,
      //   x: 0,
      // })

      // .to(communityDescSplit.words, {
      //   ...communityContentTlDefaults,
      //   y: 0,
      //   transformOrigin: "0% 50% -10",
      // }, "-=0.5")
      
  }

  // Seciton - Community: End

  const masterTl = gsap.timeline();

      // networkAnim(); // Network Animation Backdrop
      // // homeAnim(); // Hero Section Animation
      // futureAnim(); // Future Section Animation
      // blobsAnim(); // Moving Blobs Animation
      // communityAnim(); // Community Section Animation

  ScrollTrigger.matchMedia({
    // Desktop
    "(min-width: 992px)": function () {
      masterTl.add(networkAnim())
      .add(futureTl)
      .add(infiniteTl)
      // .add(futureAnim())
      // .add(blobsAnim())
      .add(communityAnim())
    }
  })

  // ScrollTrigger.refresh();


  // Section - Newspanel: Start
  const newsPanelThumbsSwiper = new Swiper('#newsChannelBrandsThumbs', {
    loop: true,
    loopedSlides: 6, 
    centeredSlides: true,
    spaceBetween: 40,
    slideToClickedSlide: true,
    slidesPerView: "auto",
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });

  const newsPanelContentSwiper = new Swiper('#newsChannelsTop', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    loopedSlides: 6,
    effect: "fade",
    fadeEffect: {
      crossFade: true
    }, 
    autoplay: {
      delay: 3000
    }
  });

  newsPanelContentSwiper.controller.control = newsPanelThumbsSwiper;
  newsPanelThumbsSwiper.controller.control = newsPanelContentSwiper;  
  // Section - Newspanel: End
}

// After the dom has been loaded.
document.addEventListener("DOMContentLoaded", onReady);