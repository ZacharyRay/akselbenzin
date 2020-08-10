/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\njQuery(document).ready(function ($) {\n  var _$$flickity;\n\n  //modal news pop up\n  $(document).ready(function () {\n    $(\"#menu-item-847, #menu-item-861\").click(function () {\n      $(\"#bg-grey\").show();\n    });\n    $('#bg-grey, #btn-close').click(function () {\n      $(\"#bg-grey\").hide();\n    });\n    $;\n  });\n  $(\".js-open-modal\").click(function () {\n    $(\".modal\").addClass(\"visible\");\n  });\n  $(\".js-close-modal\").click(function () {\n    $(\".modal\").removeClass(\"visible\");\n  });\n  $(document).click(function (event) {\n    if (!$(event.target).closest(\".modal,.js-open-modal\").length) {\n      $(\"body\").find(\".modal\").removeClass(\"visible\");\n    }\n  }); //gallery\n\n  $('.main-carousel').flickity((_$$flickity = {\n    cellAlign: 'center',\n    contain: true,\n    wrapAround: true,\n    autoPlay: true\n  }, _defineProperty(_$$flickity, \"autoPlay\", 5300), _defineProperty(_$$flickity, \"pauseAutoPlayOnHover\", true), _$$flickity)); // Gallery product page\n\n  $('.carousel-main').flickity({\n    prevNextButtons: false\n  }); // 2nd carousel, navigation\n\n  $('.carousel-nav').flickity({\n    asNavFor: '.carousel-main',\n    contain: true,\n    pageDots: false,\n    prevNextButtons: false\n  }); // Gallery products alike\n\n  $('.products-alike-carousel').flickity({\n    cellAlign: 'center',\n    contain: true,\n    wrapAround: true,\n    autoPlay: false,\n    prevNextButtons: false\n  }); //products alike button\n\n  var $carousel = $('.products-alike-carousel').flickity(); // previous\n\n  $('.alike-btn-prev').on('click', function () {\n    $carousel.flickity('previous');\n  }); // next\n\n  $('.alike-btn-next').on('click', function () {\n    $carousel.flickity('next');\n  }); //fixed menu desktop\n\n  var nav = document.querySelector('.menu_wrapper');\n  var menu = document.querySelector('.desktop_menu').offsetHeight;\n  var topOfNav = nav.offsetTop;\n\n  function fixNav() {\n    if (window.scrollY >= topOfNav) {\n      document.querySelector('.main-wrapper').style.paddingTop = menu + 'px';\n      document.body.classList.add('fixed-nav');\n    } else {\n      document.querySelector('.main-wrapper').style.paddingTop = 0;\n      document.body.classList.remove('fixed-nav');\n    }\n  }\n\n  window.addEventListener('load', fixNav);\n  var Mnav = document.querySelector('.mobile_navigation');\n  var Mmenu = document.querySelector('.mobile_menu_wrapper').offsetHeight;\n  var MtopOfNav = Mnav.offsetTop;\n\n  function MfixNav() {\n    if (window.scrollY >= MtopOfNav) {\n      document.querySelector('.main-wrapper').style.paddingTop = Mmenu + 'px';\n      document.body.classList.add('fixed-nav');\n    } else {\n      document.querySelector('.main-wrapper').style.paddingTop = 0;\n      document.body.classList.remove('fixed-nav');\n    }\n  }\n\n  window.addEventListener('load', MfixNav); // Menus on scroll\n\n  $(function () {\n    var mobileHeader = $('.mobile_menu_wrapper');\n    var header = $(\".desktop_menu\");\n    $(window).scroll(function () {\n      var scroll = $(window).scrollTop();\n\n      if (scroll >= 164) {\n        header.removeClass('reveal').addClass(\"be_gone\");\n        mobileHeader.removeClass('be_gone_mobile').addClass('reveal_mobile');\n      } else {\n        header.removeClass(\"be_gone\").addClass('reveal');\n        mobileHeader.removeClass(\"reveal_mobile\").addClass('be_gone_mobile');\n      }\n    });\n  }); //parallax scrolling\n\n  if ($(window).width() < 720) {\n    $(document).ready(function () {\n      $(window).scroll(function (e) {\n        parallaxScroll();\n      });\n\n      function parallaxScroll() {\n        var scrolled = $(window).scrollTop();\n        $('#single_parallax').css('bottom', 125 - scrolled * .25 + 'px');\n      }\n    });\n  } else {\n    $(document).ready(function () {\n      $(window).scroll(function (e) {\n        parallaxScroll();\n      });\n\n      function parallaxScroll() {\n        var scrolled = $(window).scrollTop();\n        $('#single_parallax').css('bottom', 280 - scrolled * .25 + 'px');\n      }\n    });\n  }\n});\n\n//# sourceURL=webpack:///./assets/js/app.js?");

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./assets/scss/main.scss?");

/***/ }),

/***/ 0:
/*!********************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/main.scss ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./assets/js/app.js */\"./assets/js/app.js\");\nmodule.exports = __webpack_require__(/*! ./assets/scss/main.scss */\"./assets/scss/main.scss\");\n\n\n//# sourceURL=webpack:///multi_./assets/js/app.js_./assets/scss/main.scss?");

/***/ })

/******/ });