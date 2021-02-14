import $ from 'jquery';
import slick from 'slick-carousel';
import smoothScroll from 'jquery-smooth-scroll';

// Import local modules
import WPHelper from './modules/Waypoints';
import { Slider, GallerySlider } from './modules/Slider';
import {seeMoreHover, phoneHover} from './modules/Hover';

// Instantiate new waypoints
const ctaUnderline = new WPHelper($(".underline"), "70%", "show-underline");
const featureUnderline = new WPHelper($(".underline--feature"), "80%", "show-underline");
const checkMarks = new WPHelper($(".check"), "70%", "check--animate");

$(function() {

  // Smooth Scrolling
  $('.hero__see-more-link').smoothScroll({offset: -100});

  // Reviews slider
  const reviewsSlider = new Slider($('.reviews--slider'), {
    autoplay: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    focusOnSelect: true
  });

  // Hover effect
  seeMoreHover($(".see-more__industry--residential"));
  seeMoreHover($(".see-more__industry--commercial"));

  phoneHover($('.site-header__btn'));

  // Gallery slider
  $('.slider-display').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    autoplay: true,
    autoplaySpeed: 4000,
    lazyLoad: 'ondemand',
    pauseOnFocus: true
  });

  // Gallery slider nav
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-display',
    arrows: false,
    focusOnSelect: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 4000,
    lazyLoad: 'progressive',
    pauseOnFocus: true,
    infinite: true
  });


})
