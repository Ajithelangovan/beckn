gsap.registerPlugin(SplitText, ScrollTrigger, MotionPathPlugin, DrawSVGPlugin, ScrollSmoother);

const onReady = () => {
  // Scroll Smoother
  let smoother = ScrollSmoother.create({
    wrapper: "#smooth-wrapper",
    content: "#smooth-content",
    smooth: 2,
    smoothTouch: 0.1
  })
  
  const masterTl = gsap.timeline();
  gsap.globalTimeline.timeScale(0.5);
  // gsap.globalTimeline.smoothChildTiming(1)



  const main = document.querySelector('.bn-main'),
  sectionTimeline = main.querySelector('.bn-section--about-timeline'),
  sectionCoreValues = main.querySelector('.bn-section--about-core-values'),
  polyline = sectionCoreValues.querySelector(".bn-streakline #zigZag");

  console.log(polyline)


  const heroAnim = () => {
    // Hero: Start
    const aboutHeroQuote = main.querySelector("#aboutHeroQuote"),
      aboutHeroDesc = main.querySelector(".bn-hero .bn-hero__desc");

      // aboutHeroTitleSplit = new SplitText(aboutHeroQuote, { type: "words,chars" }),
      // aboutHeroDescSplit = new SplitText(aboutHeroDesc, { type: "words,chars" }),

      // [aboutHeroTitleSplitChars, aboutHeroDescSplitChars] = [aboutHeroTitleSplit.chars, aboutHeroDescSplit.chars]; //an array of all the divs that wrap each character

    // gsap.set(aboutHeroQuote, { perspective: 400 });

    // const aboutHeroTl = gsap.timeline();

    const heroAnimDefaults = {
      y: 20,
      opacity: 0,
      transformOrigin: "0% 50% -10",
      duration: 0.8,
      ease: "back",
      stagger: 0.01,
    }

    // aboutHeroTl
    //   .from(aboutHeroTitleSplitChars, {
    //     // scale: 0,
    //     // rotationX: 180,
    //     ...heroAnimDefaults
    //   })
    //   .from(aboutHeroDescSplitChars, {
    //     ...heroAnimDefaults
    //   }, "-=0.8");
  }
  // Hero: End


  // Core Values: Start
  const coreValuesAnim = () => {
    const coreValuesTitle = sectionCoreValues.querySelector('.bn-section__title'),
      coreValuesNodes = sectionCoreValues.querySelectorAll('.bn-corevalues .bn-corevalue');

      // coreValuesTitleSplit = new SplitText(coreValuesTitle, { type: "words,chars" }),
      // coreValuesTitleSplitChars = coreValuesTitleSplit.chars;
    
    // console.log(polyline.clientHeight)
    // function setCoreValueSectionHeight() {
    //   const coreValuesTrack = sectionCoreValues.querySelector('.bn-corevalues__track');
      
    //   let coreValueHeight = ((coreValuesTrack.clientHeight / 4) * 3) - 48;
    //     gsap.set(sectionCoreValues, { height: coreValueHeight })
    // }
    // setCoreValueSectionHeight();

    // Set initial path state
    gsap.set(polyline, { drawSVG: "0% 0%" });
    // gsap.set(coreValuesTitle, { perspective: 400 });
    // gsap.set(coreValuesTitleSplitChars, { scale: 1.06, opacity: 0, x: "-=20", backgroundColor: "transparent", });

    // Create a GSAP coreValues
    const coreValuesTl = gsap.timeline({
      scrollTrigger: {
        trigger: sectionCoreValues,
        start: "top center+=300",
        // end: "bottom +=800",
        // markers: true,
        scrub: 2,
      }
    })

    // coreValuesTl.to(coreValuesTitleSplitChars, {
    //   x: 0,
    //   opacity: 1,
    //   scale: 1,
    //   duration: 2,
    //   ease: "back",
    //   stagger: 0.06,
    //   transformOrigin: "50% 50% -20",
    // })

    // let paths = splitPaths(polyline);


    // let duration = 5,
    //   distance = 0,
    //   tl = gsap.timeline();
    // paths.forEach(segment => distance += segment.getTotalLength());
    // paths.forEach(segment => {
    //   tl.from(segment, {
    //     drawSVG: 0,
    //     ease: "none",
    //     duration: duration * (segment.getTotalLength() / distance)
    //   });
    // });

    // function splitPaths(paths) {
    //   let toSplit = gsap.utils.toArray(paths),
    //     newPaths = [];
    //   if (toSplit.length > 1) {
    //     toSplit.forEach(path => newPaths.push(...splitPaths(path)));
    //   } else {
    //     let path = toSplit[0],
    //       rawPath = MotionPathPlugin.getRawPath(path),
    //       parent = path.parentNode,
    //       attributes = [].slice.call(path.attributes);
    //     newPaths = rawPath.map(segment => {
    //       let newPath = document.createElementNS("http://www.w3.org/2000/svg", "path"),
    //         i = attributes.length;
    //       while (i--) {
    //         newPath.setAttributeNS(null, attributes[i].nodeName, attributes[i].nodeValue);
    //       }
    //       newPath.setAttributeNS(null, "d", "M" + segment[0] + "," + segment[1] + "C" + segment.slice(2).join(",") + (segment.closed ? "z" : ""));
    //       parent.insertBefore(newPath, path);
    //       return newPath;
    //     });
    //     parent.removeChild(path);
    //   }
    //   return newPaths;
    // }

    // Loop over each node to set animations in the timeline
    coreValuesNodes.forEach((node, i) => {
      const stopPercent = node.getAttribute("data-stop");

      coreValuesTl
        .to(polyline, {
          drawSVG: `0% ${stopPercent}%`,
          duration: 1,
          ease: "none"
        })
        .from(node, {
          opacity: 0,
          x: "+=20",
          duration: 1,
          ease: 'ease-in-out',
        })
    });
    coreValuesTl
      .to("#streak-grad", {
        attr: { x1: "100%", x2: "0%" },
        duration: 6,
        ease: "none",
      })
  }
  // Core Values: End

  // Timeline: Start
  const timelineAnim = () => {
    const
      tilesRow = sectionTimeline.querySelectorAll('.bn-tiles');
      // TimelineTitle = sectionTimeline.querySelector('.bn-section__title'),
      // TimelineDesc = sectionTimeline.querySelector('.bn-section__desc'),
      timelineDot = sectionTimeline.querySelector(".bn-backdrop .bn-backdrop__dot"),
      // streakLine = sectionTimeline.querySelector("#streakLine");

    // TimelineTitleSplit = new SplitText(TimelineTitle, { type: "words,chars" }),
    // TimelineDescSplit = new SplitText(TimelineDesc, { type: "words,chars" }),

    gsap.set(timelineDot, {
      xPercent: -50, 
      yPercent: -50,
      opacity: 0,
      scale: .1,
      motionPath: {
        path: polyline,
        align: polyline,
        start: 0.4846,
        end: 0.4846,
      },
    });

    // gsap.set(streakLine, { drawSVG: '0 0' });

    tilesRow.forEach((row, i) => {
      const tiles = row.querySelectorAll('.bn-tile')
      let xVal = i % 2 ? "+=50" : "-=50";

      gsap.set(tiles, { opacity: 0, x: xVal })
    })

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
      .to(polyline, {
        drawSVG: `0% 48.46%`,
        duration: 3,
        ease: "none"
      })
      .fromTo(sectionTimeline, { backgroundColor: '#fff' }, { backgroundColor: '#212121', duration: 3, ease: "sine.inOut" }, "<")
      .to(timelineDot, {
        opacity: 1,
        scale: 1,
        duration: 1,
      })
      .to(polyline, {
        drawSVG: `0% 100%%`,
        duration: tilesRow.length * 3.46,
        ease: 'none',
      })
      .to(timelineDot, {
        duration: tilesRow.length * 3.46,
        ease: "none",
        motionPath: {
          path: polyline,
          align: polyline,
          start: 0.4846,
          end: 1
        },
      }, "<")
    
    // let pos = [48.46];
    // tilesRow.forEach((row, i) => {
    //   const stopPercent = row.getAttribute("data-stop");
    //   pos.push(stopPercent)
    // })

    tilesRow.forEach((row, i) => {
      // let stop = pos[i];
      const tiles = row.querySelectorAll('.bn-tile');
      let stagger = i % 2 ? -1 : 1;

      sectionTimelineTl.add(
        gsap.to(tiles, { opacity: 1, x: 0, stagger: stagger, duration: 3, ease: "expo" }), `<+=${i + 1.8}`
      )
    })
    // sectionTimelineTl
    //   .to(polyline, {
    //     drawSVG: `0% 100%%`,
    //     duration: tilesRow.length * 3,
    //     ease: 'none',
    //   })
    //   .to(timelineDot, {
    //     duration: tilesRow.length * 3,
    //     ease: "none",
    //     motionPath: {
    //       path: polyline,
    //       align: polyline,
    //       start: 0.4846,
    //       end: 1
    //     },
    //   }, "<")
    
    // Timeline: End

  }

  // Contributors: Start
  gsap.utils.toArray('.bn-contributors__container').forEach((line, i) => {
    const links = line.querySelectorAll(".bn-contributor"),
      tl = horizontalLoop(links, {
        repeat: -1,
        speed: 1 + i * 0.5,
        reversed: i ? true : false,
        paddingRight: parseFloat(gsap.getProperty(links[0], "marginRight", "px")) // otherwise first element would be right up against the last when it loops. In this layout, the spacing is done with marginRight.
      });
    links.forEach(link => {
      link.addEventListener("mouseenter", () => gsap.to(tl, { timeScale: 0, overwrite: true }));
      link.addEventListener("mouseleave", () => gsap.to(tl, { timeScale: i ? -1 : 1, overwrite: true }));
    });
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

  const teamAnim = () => {
    // Team: Start
    const sectionTeam = main.querySelector('.bn-section--about-team'),
      teamTitle = sectionTeam.querySelector('.bn-section__title'),
      teamCardsWrapper = sectionTeam.querySelector('.bn-teamcards'),
      teamCards = teamCardsWrapper.querySelectorAll(".bn-teamcard");
      // teamCardsList = teamCardsWrapper.querySelector('.bn-teamcards__list');


    let teamCardsScrollX = 100 * teamCards.length / 2 ;

    gsap.set(teamCards, { xPercent: teamCardsScrollX });
    
    let teamcardsFullWidth = teamCards[0].clientWidth * teamCards.length ;
    // let teamcardsContainerWidth = sectionTeam.querySelector(".bn-teamcards__list").offsetWidth;
    
    console.log(teamcardsFullWidth)
    const teamTl = gsap.timeline({
      id: "teamTl"
    });

    teamTl.to(teamCards, {
      xPercent: -teamCardsScrollX,
      ease: "none",
      scrollTrigger: {
        trigger: ".bn-section--about-team",
        pin: true,
        scrub: 1,
        snap: 1 / (teamCards.length - 1),
        end: () => "+=" + teamcardsFullWidth,
        markers: { startColor: "orange", endColor: "red", fontSize: "18px", indent: 20 },
      }
    });

    // teamTl.to(teamCards, {
    //   x: () => -(teamCardsList.clientWidth - teamCardsWrapper.clientWidth),
    //   ease: "none",
    //   scrollTrigger: {
    //     trigger: ".bn-section--about-team",
    //     pin: true,
    //     scrub: 1,
    //     // snap: 1 / (teamCards.length - 1),
    //     end: () => `+=${listEl.clientWidth - listWrapperEl.clientWidth}`,
    //     markers: { startColor: "orange", endColor: "red", fontSize: "18px", indent: 20 },
    //   }
    // });
    // Team: End
  }

  const floatAnim = () => {
    // Float Btn: Start
    const floatBtn = document.querySelector('#floatBtn'),
      floatBtnDisc = floatBtn.querySelector('.bn-floatbtn__play-disc');

    gsap.set(floatBtn, { opacity: 0, y: 100 });
    gsap.set(floatBtnDisc, { rotate: -115 });
    
    gsap.timeline()
      .to(floatBtn, { opacity: 1, y: 0, duration: 1, delay: 1.2 })
      .to(floatBtnDisc, { rotate: 0, duration: 1.6, delay: .06 }, "<")

    gsap.timeline({
      scrollTrigger: {
        trigger: sectionTimeline,
        start: "top top",
        end: "top +=100",
        // markers: true,
        toggleActions: "play none none reverse",
      }
    })
      .to(floatBtn, { opacity: 0, y: 100, duration: 1, })
      .to(floatBtnDisc, { rotate: -115, duration: 1.6 }, "<")
  }
  // Float Btn: End

  // MatchMedia: Start
  ScrollTrigger.matchMedia({
    // Desktop
    "(min-width: 992px)": function () {
      // heroAnim(); // Hero section Animation
      // coreValuesAnim(); // Core Values Section Animaiton
      // timelineAnim(); // Timeline Section Animation
      // floatAnim(); // Float Btn Animation

      masterTl
        // .add(heroAnim())
        .add(coreValuesAnim())
        .add(timelineAnim())
        // .add(floatAnim()) 

      floatAnim();
    },
    // Desktop: End
    "all": function() {
      teamAnim(); // Team Section Animation
    }
  })
  // MatchMedia: End
}



// After the dom has been loaded.
document.addEventListener("DOMContentLoaded", onReady);