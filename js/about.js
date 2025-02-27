gsap.registerPlugin(SplitText, ScrollTrigger, MotionPathPlugin, DrawSVGPlugin, ScrollSmoother, ScrollToPlugin, Draggable, InertiaPlugin);

const onReady = () => {
  // Scroll Smoother
  let smoother = ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
    smooth: 2,
    smoothTouch: 0.1,
    ignoreMobileResize: false,
  })
  
  const masterTl = gsap.timeline();
  const mm = gsap.matchMedia();

  const main = document.querySelector('.bn-main');
  const sectionTimeline = main.querySelector('.bn-section--about-timeline');
  const sectionCoreValues = main.querySelector('.bn-section--about-core-values');
  const polyline = sectionCoreValues.querySelector(".bn-streakline #zigZag");
  const pathLength = sectionCoreValues.querySelector(".bn-streakline .streak-anim").getTotalLength() + 156;

  sectionCoreValues.querySelector(".bn-streakline .streak-anim").style.setProperty("--path-length", pathLength);


  // Core Values Animation
  // Core Values: Start
  const coreValuesAnim = () => {
    const coreValuesTitle = sectionCoreValues.querySelector('.bn-section__title');
    const coreValuesNodes = sectionCoreValues.querySelectorAll('.bn-corevalues .bn-corevalue');

    mm.add(
      {
        isMobile: "(max-width: 991px)",
        isDesktop: "(min-width: 992px)"
      },
      (context) => {
        const { isMobile, isDesktop } = context.conditions;
        if(isDesktop) {
          // Create a GSAP coreValues
          const coreValuesTl = gsap.timeline({
            scrollTrigger: {
              trigger: sectionCoreValues,
              start: "top center",
              end: "bottom bottom",
              // markers: true,
              scrub: true,
            }
          })

          calculateCoreValuesHeight();
          window.addEventListener('resize', calculateCoreValuesHeight);

          // Loop over each node to set animations in the timeline
          coreValuesNodes.forEach((node, i) => {
            const stopPercent = node.getAttribute("data-stop");

            coreValuesTl
              .from(node, {
                opacity: 0,
                x: "+=20",
                duration: 1,
                ease: 'ease-in-out',
              })
          });

          
        }
      }
    )

    function calculateCoreValuesHeight() {
      if (window.innerWidth <= 992) return;
      const lastNode = coreValuesNodes[coreValuesNodes.length - 1];
      const calculatedHeight = lastNode.offsetTop + lastNode.clientHeight + 'px';
      sectionCoreValues.style.setProperty("--bn-core-values-height", calculatedHeight)
    }
  }
  // Core Values: End

  // Timeline: Start
  const timelineAnim = () => {
    const tilesRow = sectionTimeline.querySelectorAll('.bn-tiles');
    const timelineDot = sectionTimeline.querySelector(".bn-backdrop .bn-backdrop__dot--1");
    const timelineDot2 = sectionTimeline.querySelector(".bn-backdrop .bn-backdrop__dot--2");

    mm.add(
      {
        isMobile: "(max-width: 767px)",
        isTablet: "(min-width: 768px)",
        isDesktop: "(min-width: 992px)"
      },
      (context) => {
        const { isMobile, isTablet, isDesktop } = context.conditions;
        if (isDesktop) {
          ScrollTrigger.create({
            id: "team",
            trigger: '.bn-section--about-contributors',
            start: "top center", // [trigger] -=505 [scroller] top positions
            end: "bottom center", // [trigger] [scroller] positions
            // markers: true,
            scrub: true,
            immediateRender: false,
            onEnter: () => main.classList.remove('bn-main--inverse'),
            onLeaveBack: () => main.classList.add('bn-main--inverse'),
            // onEnter: () => {
            //   gsap.to('main', {
            //     backgroundColor: "transparent", duration: 1,
            //     ease: "sine.inOut"
            //   });
            //   gsap.to(['.bn-section--about-team .bn-section__title', '.bn-section--about-team .bn-section__desc', '.bn-section--about-team .bn-teamcard__title', '.bn-section--about-team .bn-teamcard__desc'], {
            //     color: "var(--primary-grey-dark)", duration: 1,
            //     ease: "none"
            //   })
            // },
            // onLeaveBack: () => {
            //   gsap.to('main', {
            //     backgroundColor: "var(--primary-grey-dark)", duration: 1,
            //     ease: "sine.inOut"
            //   });
            //   gsap.to(['.bn-section--about-team .bn-section__title', '.bn-section--about-team .bn-section__desc', '.bn-section--about-team .bn-teamcard__title', '.bn-section--about-team .bn-teamcard__desc'], {
            //     color: "#fff", duration: 1,
            //     ease: "none"
            //   })
            // }
          })
        }
        if (isTablet) {
          // Initializing timelineDot with motionPath
          gsap.set(timelineDot, {
            xPercent: -50,
            yPercent: -50,
            opacity: 1,
            motionPath: {
              path: polyline,
              align: polyline,
              start: 0.7089,
              end: 0.7089,
            },
          });

          gsap.set(timelineDot2, {
            xPercent: -50,
            yPercent: -50,
            opacity: 1,
            motionPath: {
              path: polyline,
              align: polyline,
              start: 1,
              end: 1,
            },
          });

          // Function to create color animation
          const animateColors = (elements, properties) => {
            gsap.to(elements, { ...properties, duration: 1, ease: "sine.inOut" });
          };

          ScrollTrigger.create({
            id: "timeline",
            trigger: ".bn-section--about-timeline",
            start: "top center+=20%",
            end: "bottom center",
            // markers: true,
            onEnter: () => {
              main.classList.add('bn-main--inverse')
            },
            onLeaveBack: () => {
              main.classList.remove('bn-main--inverse')
            },
          });

          ScrollTrigger.create({
            id: "team",
            trigger: '.bn-section--about-contributors',
            start: "top center", // [trigger] -=505 [scroller] top positions
            end: "bottom center", // [trigger] [scroller] positions
            // markers: true,
            scrub: true,
            immediateRender: false,
            onEnter: () => main.classList.remove('bn-main--inverse'),
            onLeaveBack: () => main.classList.add('bn-main--inverse'),
            // onEnter: () => {
            //   gsap.to('main', {
            //     backgroundColor: "transparent", duration: 1,
            //     ease: "sine.inOut"
            //   });
            //   gsap.to(['.bn-section--about-team .bn-section__title', '.bn-section--about-team .bn-section__desc', '.bn-section--about-team .bn-teamcard__title', '.bn-section--about-team .bn-teamcard__desc'], {
            //     color: "var(--primary-grey-dark)", duration: 1,
            //     ease: "none"
            //   })
            // },
            // onLeaveBack: () => {
            //   gsap.to('main', {
            //     backgroundColor: "var(--primary-grey-dark)", duration: 1,
            //     ease: "sine.inOut"
            //   });
            //   gsap.to(['.bn-section--about-team .bn-section__title', '.bn-section--about-team .bn-section__desc', '.bn-section--about-team .bn-teamcard__title', '.bn-section--about-team .bn-teamcard__desc'], {
            //     color: "#fff", duration: 1,
            //     ease: "none"
            //   })
            // }
          })

        }

        if(isMobile) {
          console.log("mobile timeline, is showing")
          ScrollTrigger.create({
            id: "timeline",
            trigger: sectionTimeline,
            start: "top center+=20%",
            end: "bottom center",
            scrub: true,
            immediateRender: false,
            invalidateOnRefresh: true,
            // markers: true,
            onEnter: () => {
              main.classList.add('bn-main--inverse')
            },
            onLeaveBack: () => {
              main.classList.remove('bn-main--inverse')
            },
          });

          ScrollTrigger.create({
            id: "team",
            trigger: '.bn-section--about-contributors',
            start: "top center", // [trigger] -=505 [scroller] top positions
            end: "bottom center", // [trigger] [scroller] positions
            // markers: true,
            scrub: true,
            immediateRender: false,
            onEnter: () => main.classList.remove('bn-main--inverse'),
            onLeaveBack: () => main.classList.add('bn-main--inverse'),
            // onEnter: () => {
            //   gsap.to('main', {
            //     backgroundColor: "transparent", duration: 1,
            //     ease: "sine.inOut"
            //   });
            //   gsap.to(['.bn-section--about-team .bn-section__title', '.bn-section--about-team .bn-section__desc', '.bn-section--about-team .bn-teamcard__title', '.bn-section--about-team .bn-teamcard__desc'], {
            //     color: "var(--primary-grey-dark)", duration: 1,
            //     ease: "none"
            //   })
            // },
            // onLeaveBack: () => {
            //   gsap.to('main', {
            //     backgroundColor: "var(--primary-grey-dark)", duration: 1,
            //     ease: "sine.inOut"
            //   });
            //   gsap.to(['.bn-section--about-team .bn-section__title', '.bn-section--about-team .bn-section__desc', '.bn-section--about-team .bn-teamcard__title', '.bn-section--about-team .bn-teamcard__desc'], {
            //     color: "#fff", duration: 1,
            //     ease: "none"
            //   })
            // }
          })
        }
      })


    // ScrollTrigger animations
    // ScrollTrigger.create({
    //   id: "timeline",
    //   trigger: sectionTimeline,
    //   start: "top center+=20%",
    //   end: "bottom center",
    //   scrub: true,
    //   immediateRender: false,
    //   invalidateOnRefresh: true,
    //   markers: true,
    //   onEnter: () => {
    //     main.classList.add('bn-main--inverse')
    //     // sectionTimeline.style.backgroundColor = "var(--primary-grey-dark)";
    //   },
    //   onLeaveBack: () => {
    //     // sectionTimeline.style.backgroundColor = "transparent";
    //     main.classList.remove('bn-main--inverse')
    //   },
    //   // onEnter: () => {
    //   //   animateColors('main', { backgroundColor: "var(--primary-grey-dark)" });
    //   //   animateColors('.bn-corevalue', { color: "#fff" });
    //   //   animateColors('.bn-section--about-timeline .bn-section__title', {
    //   //     backgroundColor: "var(--primary-grey-dark)",
    //   //     delay: 0.8,
    //   //     ease: "none",
    //   //   });
    //   //   animateColors([
    //   //     '.bn-section--about-timeline .bn-section__title',
    //   //     '.bn-section--about-team .bn-section__title',
    //   //     '.bn-section--about-team .bn-section__desc',
    //   //     '.bn-section--about-team .bn-teamcard__title',
    //   //     '.bn-section--about-team .bn-teamcard__desc',
    //   //   ], { color: "#fff", ease: "none" });
    //   // },
    //   // onLeaveBack: () => {
    //   //   animateColors('main', { backgroundColor: "transparent" });
    //   //   animateColors('.bn-corevalue', { color: "var(--primary-grey-dark)" });
    //   //   animateColors('.bn-section--about-timeline .bn-section__title', {
    //   //     backgroundColor: "transparent",
    //   //     ease: "none",
    //   //   });
    //   //   animateColors([
    //   //     '.bn-section--about-timeline .bn-section__title',
    //   //     '.bn-section--about-team .bn-section__title',
    //   //     '.bn-section--about-team .bn-section__desc',
    //   //     '.bn-section--about-team .bn-teamcard__title',
    //   //     '.bn-section--about-team .bn-teamcard__desc',
    //   //   ], { color: "var(--primary-grey-dark)", ease: "none" });
    //   // },
    // });
    // Timeline: End
  }


  

  ScrollTrigger.refresh()
  

  // Contributors: Start
  const marquees = document.querySelectorAll(".bn-contributors__list");
  
  window.addEventListener("load", function () {
    mm.add(
      {
        isMobile: "(max-width: 699px)",
        isDesktop: "(min-width: 700px)"
      },
      (context) => {
        const { isMobile, isDesktop } = context.conditions;

        marquees.forEach((marquee) => {
          const marqueeItems = marquee.querySelectorAll(".bn-contributor");

          const reversed =
            marquee.getAttribute("data-reversed") === "true" ? true : false;

          console.log(reversed, 'reversed')

          const loop = horizontalLoop(marqueeItems, {
            repeat: -1,
            paddingRight: isDesktop ? 40 : 20,
            speed: isDesktop ? 0.5 : 0.25,
            // paused: true,
            reversed
          });

          marqueeItems.forEach(function (item) {
            item.addEventListener("mouseenter", () => loop.pause());
            item.addEventListener("mouseleave", () => reversed ? loop.reverse() : loop.play());
          });

          ScrollTrigger.create({
            trigger: marquee,
            start: "top bottom", //when the top of the marquee hits the bottom of the viewport
            endTrigger: marquee,
            end: "bottom top", //when the bottom of the marquee hits the top of the viewport
            //markers: true,
            onToggle: (self) => {
              self.isActive ? reversed ? loop.reverse() : loop.play() : loop.pause();
            }
          });
        });
      }
    );
  });

    /*
  This helper function makes a group of elements animate along the x-axis in a seamless, responsive loop.

  Features:
    - Uses xPercent so that even if the widths change (like if the window gets resized), it should still work in most cases.
    - When each item animates to the left or right enough, it will loop back to the other side
    - Optionally pass in a config object with values like "speed" (default: 1, which travels at roughly 100 pixels per second), paused (boolean),  repeat, reversed, and paddingRight.
    - The returned timeline will have the following methods added to it:
      - next() - animates to the next element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
      - previous() - animates to the previous element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
      - toIndex() - pass in a zero-based index value of the element that it should animate to, and optionally pass in a vars object to control duration, easing, etc. Always goes in the shortest direction
      - current() - returns the current index (if an animation is in-progress, it reflects the final index)
      - times - an Array of the times on the timeline where each element hits the "starting" spot. There's also a label added accordingly, so "label1" is when the 2nd element reaches the start.
    */
  function horizontalLoop(items, config) {
    items = gsap.utils.toArray(items);
    config = config || {};
    let tl = gsap.timeline({
      repeat: config.repeat,
      paused: config.paused,
      defaults: { ease: "none" },
      onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)
    }),
      length = items.length,
      startX = items[0].offsetLeft,
      times = [],
      widths = [],
      xPercents = [],
      curIndex = 0,
      pixelsPerSecond = (config.speed || 1) * 100,
      snap = config.snap === false ? (v) => v : gsap.utils.snap(config.snap || 1), // some browsers shift by a pixel to accommodate flex layouts, so for example if width is 20% the first element's width might be 242px, and the next 243px, alternating back and forth. So we snap to 5 percentage points to make things look more natural
      totalWidth,
      curX,
      distanceToStart,
      distanceToLoop,
      item,
      i;
    gsap.set(items, {
      // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
      xPercent: (i, el) => {
        let w = (widths[i] = parseFloat(gsap.getProperty(el, "width", "px")));
        xPercents[i] = snap(
          (parseFloat(gsap.getProperty(el, "x", "px")) / w) * 100 +
          gsap.getProperty(el, "xPercent")
        );
        return xPercents[i];
      }
    });
    gsap.set(items, { x: 0 });
    totalWidth =
      items[length - 1].offsetLeft +
      (xPercents[length - 1] / 100) * widths[length - 1] -
      startX +
      items[length - 1].offsetWidth *
      gsap.getProperty(items[length - 1], "scaleX") +
      (parseFloat(config.paddingRight) || 0);
    for (i = 0; i < length; i++) {
      item = items[i];
      curX = (xPercents[i] / 100) * widths[i];
      distanceToStart = item.offsetLeft + curX - startX;
      distanceToLoop =
        distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
      tl.to(
        item,
        {
          xPercent: snap(((curX - distanceToLoop) / widths[i]) * 100),
          duration: distanceToLoop / pixelsPerSecond
        },
        0
      )
        .fromTo(
          item,
          {
            xPercent: snap(
              ((curX - distanceToLoop + totalWidth) / widths[i]) * 100
            )
          },
          {
            xPercent: xPercents[i],
            duration:
              (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond,
            immediateRender: false
          },
          distanceToLoop / pixelsPerSecond
        )
        .add("label" + i, distanceToStart / pixelsPerSecond);
      times[i] = distanceToStart / pixelsPerSecond;
    }
    function toIndex(index, vars) {
      vars = vars || {};
      Math.abs(index - curIndex) > length / 2 &&
        (index += index > curIndex ? -length : length); // always go in the shortest direction
      let newIndex = gsap.utils.wrap(0, length, index),
        time = times[newIndex];
      if (time > tl.time() !== index > curIndex) {
        // if we're wrapping the timeline's playhead, make the proper adjustments
        vars.modifiers = { time: gsap.utils.wrap(0, tl.duration()) };
        time += tl.duration() * (index > curIndex ? 1 : -1);
      }
      curIndex = newIndex;
      vars.overwrite = true;
      return tl.tweenTo(time, vars);
    }
    tl.next = (vars) => toIndex(curIndex + 1, vars);
    tl.previous = (vars) => toIndex(curIndex - 1, vars);
    tl.current = () => curIndex;
    tl.toIndex = (index, vars) => toIndex(index, vars);
    tl.times = times;
    tl.progress(1, true).progress(0, true); // pre-render for performance
    if (config.reversed) {
      tl.vars.onReverseComplete();
      tl.reverse();
    }
    return tl;
  }
  // Contributors: End

  // Float Btn: End
  coreValuesAnim()
  timelineAnim()
  // MatchMedia: Start
  // ScrollTrigger.matchMedia({
  //   // Desktop
  //   "(min-width: 992px)": function () {
  //     masterTl
  //       .add(coreValuesAnim())
  //       .add(timelineAnim())

  //     floatAnim();
  //     ScrollTrigger.refresh()
  //   },
  //   "(min-width: 768px)": function () {

  //   },
  //   // Desktop: End
  //   "all": function() {
  //     ScrollTrigger.refresh()
  //     // teamAnim(); // Team Section Animation
  //   }
  // })
  // MatchMedia: End

  function extendPathToWindowWidth(svgPathElement) {
    let pathData = svgPathElement.getAttribute("d");

    // Regex to extract commands and values
    const regex = /([MLCQTAZH])([^MLCQTAZH]*)/gi;
    let matches = [...pathData.matchAll(regex)];

    if (!matches.length) return;

    let currentX = 0, currentY = 0;

    for (let match of matches) {
      let command = match[1];
      let values = match[2].trim().split(/[\s,]+/).map(Number);

      switch (command) {
        case "M": // Move To
        case "L": // Line To
          [currentX, currentY] = values.slice(-2);
          break;
        case "H": // Horizontal Line To
          currentX = values[0]; // Only X changes
          break;
        case "V": // Vertical Line To
          currentY = values[0]; // Only Y changes
          break;
        case "C": // Cubic Bézier
          [currentX, currentY] = values.slice(-2);
          break;
        case "Q": // Quadratic Bézier
        case "T": // Smooth Quadratic Bézier
          [currentX, currentY] = values.slice(-2);
          break;
        case "A": // Arc
          [currentX, currentY] = values.slice(-2);
          break;
        case "Z": // Close path (no change in position)
          break;
      }
    }

    // Get the new end position based on window width
    let newX = window.innerWidth;

    // Append an extended horizontal line (`H newX`)
    let newPathData = `${pathData} H${newX}`;

    // Update the path
    svgPathElement.setAttribute("d", newPathData);
    svgPathElement.closest("svg").style.width = window.innerWidth;
    console.log(svgPathElement.closest("svg").getAttribute("viewBox"))
  }

  // Example usage
  let pathElement = document.querySelector("#mobileTimelineStreak .extend-path"); // Select the SVG path element
  // extendPathToWindowWidth(pathElement);

  // window.addEventListener("resize", () => extendPathToWindowWidth(pathElement)); // Update on resize

  const timelineYears = document.querySelectorAll(".bn-timelineyear");
  const tilesWrapper = document.querySelector(".bn-tiles");
  const tilesContainer = document.querySelector(".bn-tiles .bn-tiles__wrapper");
  const tiles = document.querySelectorAll(".bn-tile");
  const timelinePrev = document.querySelector('.bn-timelinenav__prev');
  const timelineNext = document.querySelector('.bn-timelinenav__next');

  // Draggable setup
  Draggable.create(".bn-tiles__wrapper", {
    
    type: "x",
    inertia: true,
    edgeResistance: 0.9,
    // bounds: { width: tilesContainer.scrollWidth - tilesWrapper.clientWidth},
    bounds: { minX: tilesContainer.clientWidth - tilesContainer.scrollWidth, maxX: 0 }
  });

  let activeIndex = 0; // Tracks the currently active timeline year

  const scrollToTile = (index) => {
    const targetYear = timelineYears[index];
    const selectedYear = targetYear.textContent.trim();
    const targetTile = document.querySelector(`.bn-tile[data-year="${selectedYear}"]`);

    if (targetTile) {
      const containerWidth = tilesContainer.offsetWidth;
      const tileLeft = targetTile.offsetLeft;
      const scrollPosition = -tileLeft + containerWidth / 2 - targetTile.offsetWidth / 2;

      gsap.to(tilesContainer, {
        x: scrollPosition,
        duration: 0.7,
        ease: "power2.out",
      });

      // Highlight the selected year
      timelineYears.forEach(y => y.classList.remove("bn-timelineyear--active"));
      targetYear.classList.add("bn-timelineyear--active");
    }
  };

  function highlightNav() {
    if(activeIndex === 0) {
      timelineNext.style.opacity = 1;
      timelinePrev.style.opacity = 0.5;
      timelinePrev.style.cursor = "initial";
    }
    else if (activeIndex === timelineYears.length - 1) {
      timelinePrev.style.opacity = 1
      timelineNext.style.opacity = 0.5;
      timelineNext.style.cursor = "initial";
    }
    else {
      timelinePrev.style.cursor = "pointer";
      timelineNext.style.cursor = "pointer";
    }
    
  }
  highlightNav()

  // Attach click event to each timeline year
  timelineYears.forEach((year, index) => {
    year.addEventListener("click", () => {
      activeIndex = index; // Update active index
      scrollToTile(activeIndex);
    });
  });

  // Attach click event for Prev button
  timelinePrev.addEventListener("click", () => {
    if (activeIndex > 0) {
      activeIndex -= 1;
      scrollToTile(activeIndex);
    }
    highlightNav()
  });

  // Attach click event for Next button
  timelineNext.addEventListener("click", () => {
    if (activeIndex < timelineYears.length - 1) {
      activeIndex += 1;
      scrollToTile(activeIndex);
    }
    highlightNav()
  });

  const coreValuesSwiper = new Swiper('#coreValuesSwiper', {
    loop: true,
    spaceBetween: 40,
    slidesPerView: 1.2,
    breakpoints: {
      768: {
        spaceBetween: 40,
        slidesPerView: 2.4,
      }
    }
  });


}

// After the dom has been loaded.
document.addEventListener("DOMContentLoaded", onReady);


