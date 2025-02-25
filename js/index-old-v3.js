gsap.registerPlugin(SplitText, ScrollTrigger, MotionPathPlugin, DrawSVGPlugin);
// Register Plugin

// GSDevTools.create();

ScrollTrigger.normalizeScroll(true);

let smoother = ScrollSmoother.create({
  smooth: 2,
  wrapper: "#smooth-wrapper",
  content: "#smooth-content",
  effects: true,
  normalizeScroll: true
});



// On DOM Ready
const onReady = () => {
  const main = document.querySelector('.bn-main'),
  sectionHome = main.querySelector('.bn-section--home-hero'),
  mainDot = main.querySelector("#main-dot");


  const networkAnim = () => {
    const paths = main.querySelectorAll("#bg-svg .line"),
      shapes = main.querySelectorAll("#bg-svg .shape"),
      filterShapes = main.querySelectorAll("#bg-svg .filter-shape");
    // Select the SVG paths and shapes
    // Network: Start
    const networkTl = gsap.timeline({
      id: "networkTl",
      paused: true,
      scrollTrigger: {
        trigger: sectionHome, // The section containing animations
        start: 'top center',  // Animation starts when section reaches the middle of the viewport
        end: 'bottom top',    // Animation stops when the section leaves the viewport
        toggleActions: 'play pause resume pause', // Play/pause based on scroll
      },
    });

    const defaults = {
      duration: gsap.utils.random(2, 6), // Random duration between 2 and 6 seconds
      repeat: 0,
      yoyo: true,
      ease: "power2.inOut",
    }

    networkTl.addLabel("lineAnim");

    // Animate paths with a "pulsing" effect
    paths.forEach((path, index) => {
      const length = path.getTotalLength(); // Get path length for effect
      const strokeAttr = path.getAttribute('stroke');

      let hasGradient = strokeAttr[0] !== '#';

      let gradientId = hasGradient && '#' + strokeAttr.split('url(#')[1].split(')')[0];

      // Add path animation to the timeline
      networkTl.add(
        gsap.fromTo(
          path,
          {
            strokeDasharray: length,
            strokeDashoffset: length,
          },
          {
            strokeDashoffset: 0,
            ...defaults
          }
        ),
        index * 0.2 // Stagger start time of animations
      )
      // if (hasGradient) {
      //   networkTl
      //   .add(
      //     gsap.to(gradientId, {
      //       attr: { x1: "100%", x2: `${length / 100}` },
      //       repeat: -1,
      //       duration: gsap.utils.random(6, 12),
      //       // ease: "sine.inOut"
      //       ease: "sine.inOut"
      //     }),
      //     index * 0.26
      //   )
      // }
    });

    // Animate shapes with rotation
    shapes.forEach((shape, index) => {
      // Add shape rotation animation to the timeline
      networkTl.add(
        gsap.to(shape, {
          rotate: () => index % 2 !== 0 ? 360 : -360, // Random rotation between 30 and 100 degrees
          scale: gsap.utils.random(0.8, 1),
          transformOrigin: "50% 50%", // Center of the shape
          duration: gsap.utils.random(20, 60), // Random duration between 2 and 6 seconds
          repeat: -1,
          yoyo: 1,
          ease: "none",
        }),
        index * 0.2 // Stagger start time of animations
      );
    });

    filterShapes.forEach((shape, index) => {
      // Add shape rotation animation to the timeline
      networkTl.add(
        gsap.to(shape, {
          scale: gsap.utils.random(0.8, 1),
          transformOrigin: "50% 50%", // Center of the shape
          duration: gsap.utils.random(3, 5), // Random duration between 2 and 6 seconds
          repeat: -1,
          yoyo: 1,
          ease: "power2.inOut"
        }),
        index * 0.2 // Stagger start time of animations
      );
    });
    // Network: End
  }


  gsap.set(mainDot, {
    xPercent: -50, yPercent: -50,
    transformOrigin: "50% 50%",
    motionPath: {
      path: "#futureStreakLine .line",
      align: "#futureStreakLine .line",
      alignOrigin: [0.5, 0.5],
    }
  });


  const futureAnim = () => {
    // Future: Start
    const sectionFuture = main.querySelector('.bn-section--home-future'),
      futureTitle = sectionFuture.querySelector('.bn-section__title'),
      futureDesc = sectionFuture.querySelector('.bn-section__desc'),

      futureBackdrop = sectionFuture.querySelector('#futureStreakLine'),
      futureLine = sectionFuture.querySelector("#futureStreakLine .line"),

      // mainDot = sectionFuture.querySelector("#appBackdrop .dot"),
      // futureLine = sectionFuture.querySelector("#appBackdrop .line"),

      futureStreakLine = sectionFuture.querySelector("#futureStreakLine .streak-line"),

      // futureTitleSplit = new SplitText(futureTitle, { type: "words,chars" }),
      // futureDescSplit = new SplitText(futureDesc, { type: "words,chars" }),
      

      futureTl = gsap.timeline({
        id: "futureTimeline",
        scrollTrigger: {
          trigger: sectionFuture,
          scrub: 2,
          pin: true,
          snap: true,
          anticipatePin: 1,
          end: "+=1500",
          // markers: 1,
        }
      });

    const lineStops = [43.6, 64.9];

    // gsap.set(futureTitleSplit.chars, { scale: 1.06, opacity: 0, x: "-=20" });
    // gsap.set(futureDescSplit.words, { scale: 1.06, opacity: 0, y: "+=20", x: 5 });
    // gsap.set(futureLine,{ drawSVG: '0 0' });
    

    const futureContentTlDefaults = {
      opacity: 1,
      scale: 1,
      duration: 5,
      ease: "expo",
      stagger: 0.06,
      transformOrigin: "50% 50% -20",
    };

    futureTl
      .to('#appBackdrop', {opacity: 0})
      .from(mainDot, { scale: 0.1, opacity: 0 })
      .to(mainDot, {
        opacity: 1,
        scale: 1,
        duration: 20,
        ease: 'none',
        motionPath: {
          path: futureLine,
          align: futureLine,
          start: 0,
          end: lineStops[1] / 100
        },
      })
      // .to(futureLine,
      //   {
      //     drawSVG: `0% ${lineStops[0]}%`,
      //     duration: 5,
      //     ease: 'none'
      //   }, "<")
      // .to(futureTitleSplit.chars, { ...futureContentTlDefaults, x: 0 }, '<')
      // .to(futureDescSplit.words, { ...futureContentTlDefaults, y: 0 }, '<+=1')
      // .to(futureLine, {
      //   drawSVG: `0% ${lineStops[1]}%`,
      //   duration: 10,
      //   ease: 'none'
      // })
      // .to(mainDot, {
      //   duration: 10,
      //   ease: 'none',
      //   motionPath: {
      //     path: futureLine,
      //     align: futureLine,
      //     start: lineStops[0] / 100,
      //     end: lineStops[1] / 100
      //   },
      // }, '<')
      .to(".red-gradient", {
        attr: { x1: "70%", x2: "90%" },
        duration: 4,
        ease: "sine.inOut",
        // scrollTrigger: {
        //   trigger: sectionFuture,
        //   start: "-=200",
        //   end: `+=${document.querySelector('.bn-blocks').offsetTop}`,
        //   scrub: true,
        // }
      }, "<+=1")
      
    // .to(mainDot, {
    // duration: 2,
    // motionPath: {
    //   path: "#futureStreakLine .streak-line",
    //   align: "#futureStreakLine .streak-line",
    //   offsetX: 0, offsetY: 0,
    // },
    // scrollTrigger: {
    //   trigger: sectionFuture,
    //   start: "-=200",
    //   end: `+=${document.querySelector('.bn-blocks').offsetTop}`,
    //   scrub: true,
    // }
    // }, '<+=0.3')

    // Select all .bn-block elements
    const slides = sectionFuture.querySelectorAll('.bn-slide');

    slides.forEach((slide, index) => {
      futureTl.fromTo(slide, { autoAlpha: 0 }, { autoAlpha: 1, duration: slides.length * 5, ease: "sine.inOut" }, `+=${index}`)
      if (index > 0) {
        futureTl.to(slides[index - 1], { autoAlpha: 0, duration: slides.length, ease: "none" }, "<")
      }
    })
    // futureTl
      // .to(futureLine, {
      //   drawSVG: '0% 100%',
      //   duration: 10,
      //   ease: 'none'
      // })
      // .to(mainDot, {
      //   duration: 10,
      //   ease: 'none',
      //   motionPath: {
      //     path: futureLine,
      //     align: futureLine,
      //     start: lineStops[1] / 100,
      //     end: 1
      //   },
        
      // }, "<")
  }
  // Future: End

  // Infinite: Start 
  const sectionInfinite = main.querySelector('.bn-section--home-infinite'),
    infiniteLineStreak = main.querySelector('#lineStreak'),
    infiniteTitle = sectionInfinite.querySelector('.bn-section__title'),
    infiniteDesc = sectionInfinite.querySelector('.bn-section__desc'),
    backdropLineEl = sectionInfinite.querySelector('.bn-backdropline'),
    infiniteBody = sectionInfinite.querySelector('.bn-section__body'),
    infiniteRedDot = sectionInfinite.querySelector(".bn-backdropline .bn-point"),

    // infiniteTitleSplit = new SplitText(infiniteTitle, { type: "words,chars" }),
    // infiniteDescSplit = new SplitText(infiniteDesc, { type: "words,chars" }),

    // infiniteLineStreakEndOffset = backdropLineEl.offsetTop + backdropLineEl.scrollHeight,

    infiniteTl = gsap.timeline({
      id: "infiniteTimeline",
      scrollTrigger: {
        trigger: sectionInfinite,
        start: "top center",
        scrub: true,
        // start: "-=300", // [trigger] [scroller] positions
        end: '+=1500',
        onEnter: () => {
          gsap.to('.bn-bgwrap', {
            backgroundColor: '#212121',
            duration: 0.74,
            ease: "power3.inOut",
          })
          gsap.to(['.bn-section--home-infinite .bn-section__title span', '.bn-section--home-infinite .bn-section__desc'], {
            backgroundColor: '#212121',
            duration: 0.1,
            delay: 0.3
          })
        },
        onLeaveBack: () => {
          gsap.to(['.bn-bgwrap','.bn-section--home-infinite .bn-section__title span', '.bn-section--home-infinite .bn-section__desc'], {
            backgroundColor: '#fff',
            duration: 0.44,
            ease: "power3.inOut",
            delay: 0
          })
        }

        // markers: { startColor: "violet", endColor: "green", fontSize: "18px", indent: 20 },
      },
    });


  // gsap.set(sectionInfinite, { backgroundColor: '#fff' })
  gsap.set([infiniteTitle, infiniteDesc], { opacity: 0 });
  const possibilitiesTitleMarginTop = sectionInfinite.querySelector('.bn-backdropline').clientHeight - sectionInfinite.clientHeight - 36;
  gsap.set('.bn-section--home-possibilities .bn-section__title', {marginTop: possibilitiesTitleMarginTop })

  
  infiniteTl
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
  .to(infiniteRedDot, { opacity: 1, scale: 1, duration: 0.6 }, "<")
  // .fromTo(infiniteLineStreak, { drawSVG: '0 0' }, {
  //   drawSVG: '0% 97.6%',
  //   duration: 12,
  //   ease: 'none',
  //   // markers: true,
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
    .to(infiniteRedDot, {
    duration: 12,
    ease: "none",
    motionPath: {
      path: infiniteLineStreak,
      align: infiniteLineStreak,
      start: 0,
      end: 0.98
    }
  }, "<")
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
  .add("infiniteTitleAnim", "<")
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
  .to(".streak-gradient", {
    attr: { x1: "100%", x2: "110%" },
    duration: 6,
    ease: "none",
  }, 'infiniteLine');
  // Future & Infinite: End

  // Possibilities: Start
  const sectionPossibilities = main.querySelector('.bn-section--home-possibilities'),
    possibilitiesTitle = sectionPossibilities.querySelector('.bn-section__title'),
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

  const possibilitiesContentTlDefaults = {
    opacity: 1,
    scale: 1,
    duration: 2,
    ease: "back",
    // markers: true,
    stagger: 0.06,
    transformOrigin: "50% 50% -20",
  }


  possibilitiesTl
    .to(infiniteLineStreak, { 
      drawSVG: '0 100%',
      duration: 0.6,
      ease: 'none',
    })
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
  console.log("Num Boxes: " + numBoxes + ". Total Box Height: " + totalHeight);


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
      .add(futureAnim())
      // .add(blobsAnim())
      .add(communityAnim())
    }
  })


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