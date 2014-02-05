//IE 10 fix for mobiles
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}


$(document).ready(function ()
{
    //Off canvas toggle
    $('[data-toggle=offcanvas]').click(function ()
    {
        $('.row-offcanvas').toggleClass('active');
    });
});