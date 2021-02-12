import $ from 'jquery';

const seeMoreHover = (selector) => {
  $(selector).hover(
    function() {
      $(this).addClass('bg-zoom');
      $(this).children().children().addClass('overline--extend');
    }, function() {
      $(this).removeClass('bg-zoom');
      $(this).children().children().removeClass('overline--extend');
    }
  )
}

const phoneHover = (selector) => {
  $(selector).hover(
    function() {
      $('.site-header__btn__phone').addClass('phone-shake');
    }, function() {
      $('.site-header__btn__phone').removeClass('phone-shake');
    }
  )
}


export {seeMoreHover, phoneHover};
