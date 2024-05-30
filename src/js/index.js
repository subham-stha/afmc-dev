/////// Polyfill
import "./polyfills/polyfill";

//////////////////////////
// IMPORT CSS
//////////////////////////

/////// LIBRARIES CSS
import "bootstrap/dist/css/bootstrap-grid.css";
/////// MAIN CSS
import "../css/style.sass";

//////////////////////////
// IMPORT LIBRARIES JS
//////////////////////////

// SWIPER   //

import Swiper, {
  Navigation,
  Pagination,
  EffectFade,
  EffectCoverflow,
} from "swiper";
import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, EffectFade, EffectCoverflow]);

// // GSAP //
// import gsap from "gsap";
// // Scrollmagic
import * as ScrollMagic from "scrollmagic";
// import { Power2, Power3, ScrollTrigger, ScrollToPlugin } from "gsap/all";
// gsap.registerPlugin(Power2, Power3, ScrollTrigger, ScrollToPlugin);
// import { TweenMax, TimelineMax } from "gsap"; // What to import from gsap
import { ScrollMagicPluginGsap } from "scrollmagic-plugin-gsap";

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);




// GSAP //
import { gsap, Power4 } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";
import { SplitText } from "gsap/SplitText";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText, ScrollToPlugin);

// import gsap from "gsap";
import { TweenMax, TimelineMax, Power3 } from "gsap/all";
gsap.registerPlugin(TweenMax, TimelineMax, Power3);

//J QUERY ////
import $ from "jquery";

//////////////////////////
// CLASS BLOCKS
//////////////////////////

class Header {
  constructor() {
    this.header = document.querySelector(".js-header");
    this.start();
  }

  start() {
    if (this.header) {
      this.stickyTransparent();

      let hamburger = this.header.querySelector(".js-hamburger");
      let nav = this.header.querySelector(".js-nav");
      let logo = this.header.querySelector(".js-logo");
      let btnMenu = this.header.querySelector(".js-inner");
      let body = document.querySelector("body");

      hamburger.addEventListener("click", () => {
        btnMenu.classList.toggle("active");
        nav.classList.toggle("active");
        body.classList.toggle("active-menu");
        logo.classList.toggle("active")
        if (this.header.classList.contains("is-sticky")) {
          this.header.classList.remove("is-sticky");
        }
      });

      let navLink = document.querySelectorAll(".menu-item-has-children");

      if (navLink.length > 0) {
        
        for (let h = 0; h < navLink.length; h++) {
          const element = navLink[h];

          element.addEventListener('click', function() {
            element.classList.toggle("activeSubMenu");
          }); 
        }
      }
    }
  }

  stickyTransparent() {
    window.onscroll = () => {
      const trigger = this.header.offsetHeight;
      if (window.pageYOffset > trigger - this.header.offsetHeight / 2) {
        this.header.classList.add("is-sticky");
      } else {
        this.header.classList.remove("is-sticky");
      }
    };
  }
}

class Animations {
  constructor() {
    // Class, ID or any tag that help us init the app
    this.leafParallax = document.querySelectorAll(".js-parallax-container");
    this.parallax = document.querySelector(".pContent");
    this.imageP = document.querySelector(".pImage");
    this.aboutBlock = document.querySelector(".pAbout");
    this.revealImgHero = document.querySelectorAll(".revealFigureHero");
    //entry animation
    this.entryAnimation = document.querySelectorAll(".js-entryAnimation");
    this.fade = document.querySelectorAll(".js-fadeUpAnimation");
    //text animation
    this.titleAnim = document.querySelectorAll(".js-titleAnimation");
    // image animation
    this.imageAnim = document.querySelectorAll(".js-imageAnimation");
    this.start();
  }
  start() {
    if (this.parallax) {
      gsap.to(".pContent", {
        y: -140,
        ease: "none",
        scrollTrigger: {
          trigger: "titleText",
          start: "center bottom=-10px",
          end: "center start",
          scrub: true,
        },
      });
    }
    if (this.imageP) {
      gsap.to(".pImage", {
        yPercent: 60,
        ease: "none",
        scrollTrigger: {
          trigger: "heroHome",
          start: "center bottom=-10px",
          end: "center start",
          scrub: true,
        },
      });
    }
    if (this.aboutBlock) {
      gsap.to(".pAbout", {
        xPercent: 100,
        ease: "none",
        scrollTrigger: {
          trigger: "titleText__container--inner",
          start: "center bottom",
          end: "center center",
          scrub: true,
        },
      });
    }
    if (this.revealImgHero.length > 0) {
      gsap.registerPlugin(ScrollTrigger);

      let revealContainers = document.querySelectorAll(".revealFigureHero");

      revealContainers.forEach((container) => {
        let image = container.querySelector(".reveal-imageHero");
        let tl = gsap.timeline();

        tl.set(container, { duration: 0.8, autoAlpha: 1 });
        tl.from(container, 1, {
          yPercent: 100,
          // ease: Power2.out
        });
        tl.from(image, 1, {
          yPercent: -100,
          scale: 1.2,
          delay: -1,
          // ease: Power2.out
        });
      });
    }
    if (this.entryAnimation.length > 0) {
      for (let i = 0; i < this.entryAnimation.length; i++) {
        const item = this.entryAnimation[i];
        TweenMax.to(item, .3, {
          delay: .3,
          y: 0,
          opacity: 1,
        });
      }
    }
    if (this.fade.length > 0) {
      for (let i = 0; i < this.fade.length; i++) {
        const container = this.fade[i];
        this.fadeAnimation(container);
      }
    }
    if (this.titleAnim.length > 0) {

      const animTitle = document.querySelectorAll('.animTitle');
      const animTitleSm = document.querySelectorAll('.animTitleSm');
      const animText = document.querySelectorAll('.animText p, .animText, .animText ul li');

      animTitle.forEach(el => {
        let splitEl = new SplitText(el, {type: "words,chars", wordsClass:"animTitle-words"});
        let splitTl = gsap.timeline({duration: .35, ease: 'power4', 
          scrollTrigger: {
            trigger: el,
            start: 'top 90%',
            end: "bottom",
            once: false
          }
        });
        
        splitTl.from(splitEl.words, {
          duration: 0.8,
          opacity: 0,
          y: 80,
          transformOrigin: "0% 10% -0",
          ease: "back",
          stagger: 0.01,
        });
      });

      animTitleSm.forEach(el => {
        let splitEl = new SplitText(el, {type: "words,chars", wordsClass:"animTitleSm-words"});
        let splitTl = gsap.timeline({duration: .35, ease: 'power4', 
          scrollTrigger: {
            trigger: el,
            start: 'top 90%',
            end: "bottom",
            once: false
          }
        });
        
        splitTl.from(splitEl.words, {
          duration: 0.8,
          opacity: 0,
          y: 80,
          transformOrigin: "0% 10% -0",
          ease: "back",
          stagger: 0.01,
        });
      });

      animText.forEach(el => {
        let splitEl = new SplitText(el, {type: "lines,words", linesClass:"animText-words"});
        let splitTl = gsap.timeline({duration: .35, ease: 'power4', 
          scrollTrigger: {
            trigger: el,
            start: 'top 90%',
            end: "bottom",
            once: false
          }
        });
        
        splitTl.from(splitEl.words, {
          yPercent:"150", 
          // stagger: 0.02,
        });
      });
    }
    if (this.imageAnim.length > 0) {

      let image = document.querySelectorAll(".imageContainer");
      //console.log(image);
  
      image.forEach((element) => {
        let sideright = element.querySelector(".imageEl");
  
        let tl = gsap
          .timeline({
            scrollTrigger: {
              trigger: element,
          start: "0% 45%",
          end: "+=99",
          scrub: 1,
          toggleActions: "play none none reverse",
            }
          })

          .to(
            sideright,
            {
             y: -20,
            //  scale: 1.05,
             transformOrigin: "50% 50%",
            //  duration: 1,
             ease: "ease.in" },
          );
  
        // ScrollTrigger.create({
        //   trigger: element,
        //   start: "0% 45%",
        //   end: "+=99",
        //   scrub: 1,
        //   toggleActions: "play none none reverse",
        //   animation: tl,
        // });
  
        // ScrollTrigger.create({
        //   trigger: element,
        //   start: "+=100 45%",
        //   end: "+=50",
        //   toggleActions: "play none none none",
        //   // pin: element
        // });
      });
    }
  }
  fadeAnimation(container) {
    const content = container.querySelectorAll(".js-fadeUpAnimation-item");

    const controller = new ScrollMagic.Controller({ loglevel: 0 });
    const intro = gsap.to(content, 0.5, { opacity: 1, y: 0, stagger: 0.4 });

    const myscene = new ScrollMagic.Scene({
      triggerElement: container,
      triggerHook: 2,
      reverse: false,
    })
      .setTween(intro)
      .addTo(controller);
  }
}

class Slides {
  constructor() {
    this.fullWidthSwiper = document.querySelectorAll(".js-swiperFullWidth");
    this.gridSwiperVertical = document.querySelectorAll(".js-swiperGridVertical");
    this.gridSwiperHorizontal = document.querySelectorAll(".js-swiperGridHorizontal");

    this.start();
  }

  start() {
    if (this.fullWidthSwiper) {
      for (let i = 0; i < this.fullWidthSwiper.length; i++) {
        const slider = this.fullWidthSwiper[i];

        let swiperFull = new Swiper(slider, {
          slidesPerView: "1",
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }
    }

    if (this.gridSwiperVertical) {
      for (let i = 0; i < this.gridSwiperVertical.length; i++) {
        const slider = this.gridSwiperVertical[i];

        let swiperGrid = new Swiper(slider, {
          direction: 'vertical',
          slidesPerView: 3,
          loop: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }
    }

    if (this.gridSwiperHorizontal) {
      for (let i = 0; i < this.gridSwiperHorizontal.length; i++) {
        const slider = this.gridSwiperHorizontal[i];

        let swiperGrid = new Swiper(slider, {
          slidesPerView: 3,
          spaceBetween: 20,
          loop: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
            992: {
              slidesPerView: 4,
            },
          },
        });
      }
    }
  }
}

class Video {
  constructor() {
    this.playButton = document.querySelectorAll('.js-videoPlay');
    this.start();
  }

  start() {
    if (this.playButton.length > 0) {
      for (let i = 0; i < this.playButton.length; i++) {
        const playButton = this.playButton[i];
        const video = document.getElementById("videoBlock");
        const circlePlayButton = document.getElementById("videoBlock__button");

        function togglePlay() {
          if (video.paused || video.ended) {
            video.play();
          } else {
            video.pause();
          }
        }

        circlePlayButton.addEventListener("click", togglePlay);
        video.addEventListener("playing", function () {
          circlePlayButton.style.opacity = 0;
        });
        video.addEventListener("pause", function () {
          circlePlayButton.style.opacity = 1;
        });

      }
    }
  }
}

class MapFilter {
  constructor() {
    this.dataFilter = document.querySelectorAll(".js-dataFilter");
    this.filterMap = document.querySelectorAll(".js-mapFilter");
    this.dropdownFilter = document.querySelectorAll(".js-dropdown");
    this.start();
  }
  start() {
    if (this.dataFilter) {
      $(function () {
        var $items = $(".js-stateResult");

        // tabs on click
        $(".js-mapStates").on("click", ".js-state", function () {
          var value = $(this).data("info");

          var $selected = $items
            .filter(function () {
              return $(this).data("tag").indexOf(value) != -1;
            })
            .fadeIn(100);

          $items.not($selected).fadeOut(100);

          $(this).addClass("active").siblings().removeClass("active");
        });
      });
    }

    if (this.filterMap) {
      $("path, circle").hover(function(e) {
        $('#info-box').css('display','block');
        $('#info-box').html($(this).data('info'));
      });
    
      $("path, circle").click(function(e) {
        $('#list-title').html($(this).data('info'));
      });
    
      $('.listDropdown').click(function(e) {
        $('#list-title').html($(this).data('info'));
      });
    
      $("path, circle").mouseleave(function(e) {
        $('#info-box').css('display','none');
      });
    
      $(document).mousemove(function(e) {
        $('#info-box').css('top',e.pageY-$('#info-box').height()-30);
        $('#info-box').css('left',e.pageX-($('#info-box').width())/2);
        $('#info-box').css('margin-top',"-30px");
      }).mouseover();
    }

    if (this.dropdownFilter.length > 0) {
      for (let i = 0; i < this.dropdownFilter.length; i++) {
        const filter = this.dropdownFilter[i];
        $(".dropdown-container").click(function () {
          $(this).attr("tabindex", 1).focus();
          $(this).toggleClass("active");
          $(this).find(".dropdown-menu").slideToggle(300);
        });
        $(".dropdown-container").focusout(function () {
          $(this).removeClass("active");
          $(this).find(".dropdown-menu").slideUp(300);
        });
        $(".dropdown-container .dropdown-menu li").click(function () {
          $(this)
            .parents(".dropdown-container")
            .find("span")
            .text($(this).text());
          $(this)
            .parents(".dropdown-container")
            .find("span")
            .addClass("selected")
            .removeClass("unselected");
          $(this)
            .parents(".dropdown-container")
            .find("input")
            .attr("value", $(this).attr("id"));
        });
      }
    }
  }
}

class BgAnimation {
  constructor() {
    this.bgAnimation = document.querySelector(".js-animation");

    this.start();
  }

  start() {
    if (this.bgAnimation) {
      //console.log("init");
      let width = this.bgAnimation.clientWidth;
      let height = this.bgAnimation.clientHeight;
      $(document).mousemove(function (e) {
        $(".js-panel").css("will-change", "transform");
        $(".js-panel").css("transform-style", "preserve-3d");
        const depth = 10;
        const moveX = (e.clientX - width / 2) / depth;
        const moveY = (e.clientY - height / 2) / depth;
        let panel = gsap.utils.toArray(".js-panel");

        gsap.to(panel, {
          duration: 0.5,
          x: moveX,
          y: moveY,
          ease: "slow",
          //stagger: 0.008,
          overwrite: true,
        });
      });
    }
  }
}

class Lightbox {
  constructor() {
    this.contactLightbox = document.querySelectorAll(".js-lightbox");
    this.start();
  }

  start() {

    if (this.contactLightbox) {
      for (let i = 0; i < this.contactLightbox.length; i++) {
        const button = this.contactLightbox[i];
        const lightbox = document.querySelector(
          `#${button.href.split("#")[1]}`
        );
        if (lightbox) {
          const close = lightbox.querySelector(".close-lightbox");

          close.addEventListener("click", (e) => {
            e.preventDefault();

            document.body.classList.remove("open-lightbox");
          });
          button.addEventListener("click", (e) => {
            e.preventDefault();
            document.body.classList.add("open-lightbox");
          });
        }
      }
    }
  }
}

class Ceu {
  constructor() {
    this.ceu = document.querySelectorAll(".js-ceuData");
    this.start();
  }

  start() {

    if (this.ceu) {
      
      $('.hide').each(function(){
				var id = this.id;
				var $match = $('.valueData[id*="'+id+'"]');

				if($match.length){
					$(this).removeClass('hide');
					return false; // You can stop checking .box1's now
				}
			});
    }
  }
}

////////////////////
// Run apps
////////////////////
document.addEventListener("DOMContentLoaded", function () {
  var header = new Header();
  var animations = new Animations();
  var slides = new Slides();
  var video = new Video();
  var mapFilter = new MapFilter();
  var bg_animation = new BgAnimation();
  var lightbox = new Lightbox();
  var ceu = new Ceu();
});

////////////////////
// Copyright
////////////////////
window.SayMyName = function () {
  console.log(
    `%c
                                                        
                MADE WITH TOO MUCH SKILLS:              
                                                        
                                                        
       333333    666    00000  PPPPPP  MM    MM IIIII   
          3333  66     00   00 PP   PP MMM  MMM  III    
         3333  666666  00   00 PPPPPP  MM MM MM  III    
           333 66   66 00   00 PP      MM    MM  III    
       333333   66666   00000  PP      MM    MM IIIII   
                                                        
                                                        
                    https://360pmi.com/                 
`,
    "background: #e8404b; color: white"
  );
};

////////////////////
// IE Detecter
////////////////////

/* Sample function that returns boolean in case the browser is Internet Explorer*/

const isIE = () => {
  var ua = navigator.userAgent;
  /* MSIE used to detect old browsers and Trident used to newer ones*/
  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

  return is_ie;
};
const checkIeCookie = (name) => {
  var dc = document.cookie;
  var prefix = name + "=";
  var begin = dc.indexOf("; " + prefix);
  if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0) return null;
  } else {
    begin += 2;
    var end = document.cookie.indexOf(";", begin);
    if (end == -1) {
      end = dc.length;
    }
  }
  // because unescape has been deprecated, replaced with decodeURI
  //return unescape(dc.substring(begin + prefix.length, end));
  return decodeURI(dc.substring(begin + prefix.length, end));
};

/* Create an alert to show if the browser is IE or not */
if (isIE() && !checkIeCookie("ie_cookie")) {
  const container = document.createElement("div");
  container.classList.add("ie-notification");

  container.innerHTML = `
      <p>Your web browser (Internet Explorer) is out of date. Please update your browser for more security, speed, and for the best experience on this site.</p>
      <div>
      <div>
        <a href="https://browsehappy.com/" target="_blank">Update my browser</a>
        <button class="ignore-update">Ignore</button>
      </div>
    `;
  document.body.appendChild(container);

  const ignoreUpdate = document.querySelector(".ignore-update");
  ignoreUpdate.addEventListener("click", (e) => {
    var d = new Date();

    d.setTime(d.getTime() + 1 * 60 * 60 * 1000);
    var expires = "expires=" + d.toUTCString();
    document.cookie = "ie_cookie" + "=" + 1 + ";" + expires + ";path=/";
    container.style.display = "none";
  });
}

////////////////////
// Keyboard focus
////////////////////

function keyboardFocus(e) {
  if (e.keyCode === 9) {
    // Tab key
    document.documentElement.classList.add("keyboard-focus");
  }

  document.removeEventListener("keydown", keyboardFocus, false);
}

document.documentElement.classList.remove("no-js");
document.addEventListener("keydown", keyboardFocus, false);
