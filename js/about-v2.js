gsap.registerPlugin(SplitText, ScrollTrigger, MotionPathPlugin, DrawSVGPlugin, ScrollSmoother);

const onReady = () => {
  // Scroll Smoother
  let smoother = ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
    smooth: 2,
    smoothTouch: 0.1
  })
  
  gsap.globalTimeline.timeScale(0.5);
  
  const masterTl = gsap.timeline();
  const main = document.querySelector('.bn-main');

  const sectionTimeline = main.querySelector('.bn-section--about-timeline'),
  sectionCoreValues = main.querySelector('.bn-section--about-core-values'),
  polyline = sectionCoreValues.querySelector(".bn-streakline #zigZag");

  sectionCoreValues.querySelector(".bn-streakline .streak-anim").style.setProperty('--path-length', polyline.getTotalLength());


  





  // Core Values: Start
  const coreValuesAnim = () => {
    const coreValuesTitle = sectionCoreValues.querySelector('.bn-section__title'),
      coreValuesNodes = sectionCoreValues.querySelectorAll('.bn-corevalues .bn-corevalue');

    // Set initial path state
    // gsap.set(polyline, { drawSVG: "0% 0%" });

    // Create a GSAP coreValues
    // const coreValuesTl = gsap.timeline({
    //   scrollTrigger: {
    //     trigger: sectionCoreValues,
    //     start: "top center+=300",
    //     // end: "bottom +=800",
    //     // markers: true,
    //     scrub: 2,
    //   }
    // })
    
    function calculateCoreValuesHeight() {
      const lastNode = coreValuesNodes[coreValuesNodes.length - 1];
      const calculatedHeight = lastNode.offsetTop + lastNode.clientHeight + 'px';

      if(window.innerWidth >= 992) {
        sectionCoreValues.style.setProperty("--bn-core-values-height", calculatedHeight)
      } 
    }

    calculateCoreValuesHeight();
    window.addEventListener('resize', calculateCoreValuesHeight);

    // Loop over each node to set animations in the timeline
    // coreValuesNodes.forEach((node, i) => {
    //   const stopPercent = node.getAttribute("data-stop");

    //   coreValuesTl
    //     .to(polyline, {
    //       drawSVG: `0% ${stopPercent}%`,
    //       duration: 1,
    //       ease: "none"
    //     })
    //     .from(node, {
    //       opacity: 0,
    //       x: "+=20",
    //       duration: 1,
    //       ease: 'ease-in-out',
    //     })
    // });
    // coreValuesTl
    //   .to("#streak-grad", {
    //     attr: { x1: "100%", x2: "0%" },
    //     duration: 6,
    //     ease: "none",
    //   })
  }
  // Core Values: End

  // Timeline: Start
  const timelineAnim = () => {
    const tilesRow = sectionTimeline.querySelectorAll('.bn-tiles');
    const timelineDot = sectionTimeline.querySelector(".bn-backdrop .bn-backdrop__dot");


    gsap.set(timelineDot, {
      xPercent: -50, 
      yPercent: -50,
      // opacity: 0,
      // scale: .1,
      motionPath: {
        path: polyline,
        align: polyline,
        start: 0.4846,
        end: 0.4846,
      },
    });

    const sectionTimelineTl = gsap.timeline({
      scrollTrigger: {
        trigger: sectionTimeline,
        start: "top +=700", // [trigger] -=505 [scroller] top positions
        end: "bottom +=850", // [trigger] [scroller] positions
        // markers: true,
        scrub: true,
      },
    })
    // sectionTimelineTl.timeScale(0.2)

    sectionTimelineTl
      // .to(polyline, {
      //   drawSVG: `0% 48.46%`,
      //   duration: 3,
      //   ease: "none"
      // })
      .fromTo(sectionTimeline, { backgroundColor: '#fff' }, { backgroundColor: '#212121', duration: 3, ease: "sine.inOut" }, "<")
      // .to(timelineDot, {
      //   opacity: 1,
      //   scale: 1,
      //   duration: 1,
      // })
      // .to(polyline, {
      //   drawSVG: `0% 100%`,
      //   // duration: tilesRow.length * 3.46,
      //   duration: 5,
      //   ease: 'none',
      // })
      // .to(timelineDot, {
      //   // duration: tilesRow.length * 3.46,
      //   duration: 5,
      //   ease: "none",
      //   motionPath: {
      //     path: polyline,
      //     align: polyline,
      //     start: 0.4846,
      //     end: 1
      //   },
      // }, "<")
    // Timeline: End

  }

  // Contributors: Start
  gsap.utils.toArray('.bn-contributors__container').forEach((line, i) => {
    const links = line.querySelectorAll(".bn-contributor"),
      tl = horizontalLoop(links, {
        repeat: -1,
        speed: 1 + i * 0.5,
        reversed: i === 0,
        paddingRight: parseFloat(gsap.getProperty(links[0], "marginRight", "px")) // otherwise first element would be right up against the last when it loops. In this layout, the spacing is done with marginRight.
      });
    links.forEach(link => {
      link.addEventListener("mouseenter", () => gsap.to(tl, { timeScale: 0, overwrite: true }));
      link.addEventListener("mouseleave", () => gsap.to(tl, { timeScale: i ? 1 : -1, overwrite: true }));
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
  // Contributors: End


  // const teamAnim = () => {
  //   // Team: Start
  //   const sectionTeam = main.querySelector('.bn-section--about-team'),
  //     teamCardsWrapper = sectionTeam?.querySelector('.bn-teamcards'),
  //     teamCards = teamCardsWrapper?.querySelectorAll(".bn-teamcard");

  //   const teamCardsScrollX = 100 * teamCards.length / 2;

  //   gsap.set(teamCards, { xPercent: teamCardsScrollX });

  //   // Function to calculate the total scrollable width dynamically
  //   const getTeamCardsFullWidth = () => teamCards[0].clientWidth * teamCards.length ;

  //   // Function to determine the 'end' value based on screen size
  //   const calculateEndValue = () => {
  //     const teamcardsFullWidth = getTeamCardsFullWidth();

  //     if (window.innerWidth <= 768) {
  //       // Tablet
  //       return "+=" + teamcardsFullWidth * 4;
  //     } else if (window.innerWidth <= 992) {
  //       // Laptop
  //       return "+=" + teamcardsFullWidth * 1.5;
  //     } else if (window.innerWidth <= 1200) {
  //       // Laptop
  //       return "+=" + teamcardsFullWidth * 4;
  //     } else if (window.innerWidth <= 1400) {
  //       // Laptop
  //       return "+=" + teamcardsFullWidth * 4;
  //     } else {
  //       // Desktop
  //       return "+=" + teamcardsFullWidth;
  //     }
  //   };

  //   // Function to create a ScrollTrigger timeline
  //   const createScrollTrigger = () => {
  //     return gsap.timeline({
  //       id: "teamTl",
  //       scrollTrigger: {
  //         trigger: sectionTeam,
  //         pin: true,
  //         scrub: 1,
  //         // start: "top center",
  //         snap:  1 / (teamCards.length - 1) * 3.5,
  //         // end: calculateEndValue(),
  //         end: () => "+=" + (teamCardsWrapper.offsetWidth - window.innerWidth),
  //         // markers: true, // Debugging markers
  //       }
  //     }).to(teamCards, {
  //       xPercent: -teamCardsScrollX,
  //       duration: 12,
  //       ease: "none",
  //     });
  //   };

  //   // Initialize the timeline
  //   let teamTl = createScrollTrigger();

  //   // Function to handle screen resizing
  //   const handleResize = () => {
  //     if (teamTl) teamTl.kill(); // Kill the existing timeline
  //     ScrollTrigger.refresh(); // Refresh ScrollTrigger to account for layout changes
  //     teamTl = createScrollTrigger(); // Recreate the timeline
  //   };

  //   // Add event listener for resizing
  //   window.addEventListener("resize", handleResize);
  // };



  const floatAnim = () => {
    // Float Btn: Start
    const floatBtn = document.querySelector('#floatBtn'),
      floatBtnDisc = floatBtn.querySelector('.bn-floatbtn__play-disc');

    gsap.set(floatBtn, { opacity: 0, y: 100 });
    gsap.set(floatBtnDisc, { rotate: -115 });
    
    gsap.timeline()
      .to(floatBtn, { opacity: 1, y: 0, duration: .8, delay: .6 })
      .to(floatBtnDisc, { rotate: 0, duration: 1, delay: .06 }, "<")

    gsap.timeline({
      scrollTrigger: {
        trigger: sectionTimeline,
        start: "top top",
        end: "top +=100",
        // markers: true,
        toggleActions: "play none none reverse",
      }
    })
      .to(floatBtn, { opacity: 0, y: 100, duration: .8, })
      .to(floatBtnDisc, { rotate: -115, duration: 1 }, "<")
  }
  // Float Btn: End

  // MatchMedia: Start
  ScrollTrigger.matchMedia({
    // Desktop
    "(min-width: 992px)": function () {
      masterTl
        .add(coreValuesAnim())
        .add(timelineAnim())

      floatAnim();
    },
    "(min-width: 768px)": function () {

    },
    // Desktop: End
    "all": function() {
      teamAnim(); // Team Section Animation
    }
  })
  // MatchMedia: End

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