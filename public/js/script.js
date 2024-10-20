$(function () {
  $('.button').click(function () {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.menu').addClass('active');
    } else {
      $('.menu').removeClass('active');
    }
  });
  $('.menu-wrapper ul li a').click(function () {
    $('.button').removeClass('active');
    $('.menu').removeClass('active');
  });
});
