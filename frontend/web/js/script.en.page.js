function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    '(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') +
    '=([^;]*)'
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
function myFunc() {
  var x = $('#bg_popup');
  var close_snack = $('#snackbar .close-button,.more_information');
  close_snack.on('click', function() {
    x.css('display', 'none');
  });
  x.css('display', 'block');
  document.cookie = 'cookieShow=1';
}
var cookieShow = getCookie('cookieShow');

if (cookieShow === undefined || cookieShow != 1) {
  setTimeout(function() {
    myFunc();
  }, 1000);
}