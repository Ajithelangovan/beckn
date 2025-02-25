document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector('.bn-header');
  const sticykClass = 'bn-header--sticky';

  function stickyHeader() {
    function checkHeaderPosition() {
      const headerTop = header.offsetTop;

      if (window.scrollY > headerTop) {
        header.classList.add(sticykClass)
      }
      else if (window.scrollY < headerTop) {
        header.classList.remove(sticykClass)
      }
    }
    
    checkHeaderPosition()
    window.addEventListener("scroll", checkHeaderPosition)
    window.addEventListener('resize', checkHeaderPosition);
  }

  stickyHeader();
  // Sticky Header: End
  

  function dropMenu() {
    const headerNavItems = header.querySelectorAll('.bn-header__nav .bn-header__nav-item');
    const headerDropdowns = header.querySelectorAll('.bn-header__nav .bn-header__dropmenu');

    const itemActiveClass = 'bn-header__nav-item--active';
    hideOtherMenus();


    function hideOtherMenus() {
      headerNavItems.forEach(item => item.classList.remove(itemActiveClass))
    }

    headerNavItems.forEach((item) => {
      item.addEventListener('mouseenter', () => {
        hideOtherMenus();
        if (item.childElementCount > 1) item.classList.add(itemActiveClass);
      })
    })

    headerDropdowns.forEach((item) => {
      item.addEventListener('mouseleave', () => {
        const itemClass = '.' + itemActiveClass;
        item.closest(itemClass).classList.remove(itemActiveClass);
      })
    })

    document.addEventListener('click', (e) => {
      // e.preventDefault();
      const headerItemClass = '.' + itemActiveClass;

      header.querySelector(headerItemClass)?.classList.remove(itemActiveClass);
    })

    window.addEventListener('scroll', () => {
      if (window.scrollY > document.documentElement.scrollTop) {
        hideOtherMenus()
      }
    })
  }

  dropMenu();


  // const mobileMenu = () => {
  //   const mobileNav = document.querySelector('.bn-mobilenav');
  //   const mobileNavs = mobileNav.querySelectorAll('.bn-mobilenav__menu')
  //   const mobileMenuActiveClass = 'bn-mobilenav__menu--open';

  //   mobileNavs.forEach(menu => {
  //     const links = menu.querySelectorAll('.bn-mobilenav__list .bn-mobilenav__item')
  //     if (links.length !== 0) {
  //       const listHeight = links.length !== 0 && ((links[0].clientHeight + 16) * links.length) + 32;
  //       menu.classList.add('has-dropdown');
  //       menu.style.setProperty('--list-height', listHeight);
  //     } 
  //   })

  //   mobileNavs.forEach(menu => {
  //     const hasMenuHeader = menu.classList.contains('has-dropdown');
      
  //     if (hasMenuHeader) {
  //       menu.addEventListener('click', (e) => {
  //         closeOtherMenus()
  //         menu.classList.toggle(mobileMenuActiveClass)
  //       })
  //     }
  //   })

  //   function closeOtherMenus() {
  //     mobileNavs.forEach(menu => {
  //       menu.classList.remove(mobileMenuActiveClass)
  //     })
  //   }

  //   function mobileMenuBtn() {
  //     const menuBtn = document.querySelector('.bn-header__mobile-menu');
  //     menuBtn.addEventListener('click', () => {
  //       menuBtn.classList.toggle('bn-header__mobile-menu--close')
  //       mobileNav.classList.toggle('bn-mobilenav--open')
  //       document.body.classList.toggle('scroll-stop')
  //     })
  //   }

  //   mobileMenuBtn()

  // }

  // mobileMenu();

  const mobileMenu = () => {
    const mobileNav = document.querySelector('.bn-mobilenav');
    const mobileNavs = [...mobileNav.querySelectorAll('.bn-mobilenav__menu')];
    const mobileMenuActiveClass = 'bn-mobilenav__menu--open';

    function setMenuItemHeight() {
      mobileNav.style.setProperty("--transX", window.innerWidth);
      
      mobileNavs.forEach(menu => {
        const links = menu.querySelectorAll('.bn-mobilenav__list .bn-mobilenav__item');
        if (links.length > 0) {
          const listHeight = ((links[0].clientHeight + 16) * links.length + 1); // Compute height only once
          
          menu.classList.add('has-dropdown');
          menu.style.setProperty('--list-height', `${listHeight}px`);
        }
      });
    }
    setMenuItemHeight();
    window.addEventListener("resize", setMenuItemHeight);

    

    const closeOtherMenus = () => {
      mobileNavs.forEach(menu => menu.classList.remove(mobileMenuActiveClass));
    };

    mobileNavs.forEach(menu => {
      if (menu.classList.contains('has-dropdown')) {
        menu.addEventListener('click', (e) => {
          const hasActiveClass = e.currentTarget.classList.contains(mobileMenuActiveClass)
          if (hasActiveClass) {
            e.currentTarget.classList.remove(mobileMenuActiveClass)
          }
          else {
            closeOtherMenus();
            menu.classList.add(mobileMenuActiveClass);
          }
        });
      }
    });

    const menuBtn = document.querySelector('.bn-header__mobile-menu');
    menuBtn.addEventListener('click', (e) => {
      menuBtn.classList.toggle('bn-header__mobile-menu--close');
      mobileNav.classList.toggle('bn-mobilenav--open');
      document.body.classList.toggle('scroll-stop');
      // e.stopPropagation();
      // return false;
    });
  };

  mobileMenu();


  const myModalEl = document.getElementById('videoModal');
  const brandVideo = document.getElementById('brandVideo')
  myModalEl.addEventListener('hidden.bs.modal', event => {
    brandVideo.pause()
    brandVideo.currentTime = 0;
  })
})