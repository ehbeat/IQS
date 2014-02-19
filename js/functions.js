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

    $("#offcanvas").click(function ()
    {
      //  $("[data-toggle=offcanvas]").toggleClass("width80 width100");
        $(".sidebar").toggle();
        $('.row-offcanvas').toggleClass('active');
    });

    var subNavs = $('.subnav');
    //subNavs.hide();

    $('.subnavclick').click(function ()
    {
        $(this).next(subNavs).slideToggle('slow');
        $(this).children('.arrow').toggleClass('rotate')

        var navitem = $(this).attr('id'),
            id = $(this).attr('class'),
            subnav = $('subnav.' + id + '-subnav');
        $('a.selected').not(this).removeClass('selected');
        $(this).toggleClass('selected');
        $('#' + id).toggle();
        return false;
    });

});