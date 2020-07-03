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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/right-bar.js":
/*!***********************************!*\
  !*** ./resources/js/right-bar.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */
(function ($) {
  'use strict';

  var $sidebar = $('.control-sidebar');
  var $container = $('<div />', {
    "class": 'p-3'
  });
  $sidebar.append($container);
  var navbar_dark_skins = ['bg-primary', 'bg-info', 'bg-success', 'bg-danger'];
  var navbar_light_skins = ['bg-warning', 'bg-white', 'bg-gray-light'];
  $container.append('<h5>SPLUS Theme</h5><hr class="mb-2"/>' + '<h6>Navbar Variants</h6>');
  var $navbar_variants = $('<div />', {
    'class': 'd-flex'
  });
  var navbar_all_colors = navbar_dark_skins.concat(navbar_light_skins);
  var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function (e) {
    var color = $(this).data('color');
    console.log('Adding ' + color);
    var $main_header = $('.main-header');
    $main_header.removeClass('navbar-dark').removeClass('navbar-light');
    navbar_all_colors.map(function (color) {
      $main_header.removeClass(color);
    });

    if (navbar_dark_skins.indexOf(color) > -1) {
      $main_header.addClass('navbar-dark');
      console.log('AND navbar-dark');
    } else {
      console.log('AND navbar-light');
      $main_header.addClass('navbar-light');
    }

    $main_header.addClass(color);
  });
  $navbar_variants.append($navbar_variants_colors);
  $container.append($navbar_variants);
  var $checkbox_container = $('<div />', {
    'class': 'mb-4'
  });
  var $navbar_border = $('<input />', {
    type: 'checkbox',
    value: 1,
    checked: $('.main-header').hasClass('border-bottom'),
    'class': 'mr-1'
  }).on('click', function () {
    if ($(this).is(':checked')) {
      $('.main-header').addClass('border-bottom');
    } else {
      $('.main-header').removeClass('border-bottom');
    }

    console.log($(this).is(':checked'), 'hi');
  });
  $checkbox_container.append($navbar_border);
  $checkbox_container.append('<span>Navbar border</span>');
  $container.append($checkbox_container);
  var sidebar_colors = ['bg-primary', 'bg-warning', 'bg-info', 'bg-danger', 'bg-success'];
  var sidebar_skins = ['sidebar-dark-primary', 'sidebar-dark-warning', 'sidebar-dark-info', 'sidebar-dark-danger', 'sidebar-dark-success', 'sidebar-light-primary', 'sidebar-light-warning', 'sidebar-light-info', 'sidebar-light-danger', 'sidebar-light-success'];
  $container.append('<h6>Dark Sidebar Variants</h6>');
  var $sidebar_variants = $('<div />', {
    'class': 'd-flex'
  });
  $container.append($sidebar_variants);
  $container.append(createSkinBlock(sidebar_colors, function () {
    var color = $(this).data('color');
    var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '');
    var $sidebar = $('.main-sidebar');
    sidebar_skins.map(function (skin) {
      $sidebar.removeClass(skin);
    });
    $sidebar.addClass(sidebar_class);
    console.log('added ' + sidebar_class);
  }));
  $container.append('<h6>Light Sidebar Variants</h6>');
  var $sidebar_variants = $('<div />', {
    'class': 'd-flex'
  });
  $container.append($sidebar_variants);
  $container.append(createSkinBlock(sidebar_colors, function () {
    var color = $(this).data('color');
    var sidebar_class = 'sidebar-light-' + color.replace('bg-', '');
    var $sidebar = $('.main-sidebar');
    sidebar_skins.map(function (skin) {
      $sidebar.removeClass(skin);
    });
    $sidebar.addClass(sidebar_class);
    console.log('added ' + sidebar_class);
  }));
  var logo_skins = navbar_all_colors;
  $container.append('<h6>Brand Logo Variants</h6>');
  var $logo_variants = $('<div />', {
    'class': 'd-flex'
  });
  $container.append($logo_variants);
  var $clear_btn = $('<a />', {
    href: 'javascript:void(0)'
  }).text('clear').on('click', function () {
    var $logo = $('.brand-link');
    logo_skins.map(function (skin) {
      $logo.removeClass(skin);
    });
  });
  $container.append(createSkinBlock(logo_skins, function () {
    var color = $(this).data('color');
    var $logo = $('.brand-link');
    logo_skins.map(function (skin) {
      $logo.removeClass(skin);
    });
    $logo.addClass(color);
  }).append($clear_btn));

  function createSkinBlock(colors, callback) {
    var $block = $('<div />', {
      'class': 'd-flex flex-wrap mb-3'
    });
    colors.map(function (color) {
      var $color = $('<div />', {
        'class': (_typeof(color) === 'object' ? color.join(' ') : color) + ' elevation-2'
      });
      $block.append($color);
      $color.data('color', color);
      $color.css({
        width: '40px',
        height: '20px',
        borderRadius: '25px',
        marginRight: 10,
        marginBottom: 10,
        opacity: 0.8,
        cursor: 'pointer'
      });
      $color.hover(function () {
        $(this).css({
          opacity: 1
        }).removeClass('elevation-2').addClass('elevation-4');
      }, function () {
        $(this).css({
          opacity: 0.8
        }).removeClass('elevation-4').addClass('elevation-2');
      });

      if (callback) {
        $color.on('click', callback);
      }
    });
    return $block;
  }
})(jQuery);

/***/ }),

/***/ 1:
/*!*****************************************!*\
  !*** multi ./resources/js/right-bar.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\BMS\resources\js\right-bar.js */"./resources/js/right-bar.js");


/***/ })

/******/ });