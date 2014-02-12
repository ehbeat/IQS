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
        $("[data-toggle=offcanvas]").toggleClass("width80 width100");
        $(".sidebar").toggle();
    });

    var subNavs = $('.subnav');
    //subNavs.hide();

    $('.subnavclick').click(function ()
    {
        $(this).next(subNavs).slideToggle('slow');

        var navitem = $(this).attr('id'),
            id = $(this).attr('class'),
            subnav = $('subnav.' + id + '-subnav');
        $('a.selected').not(this).removeClass('selected');
        $(this).toggleClass('selected');
        $('#' + id).toggle();
        return false;
    });

    /*$('[data-toggle=offcanvastest]').click(function ()
    {
        $('.row-offcanvas').toggleClass('active');
    });

    if ($(document.outerWidth < 767))
    {
        $('#body-content').addClass("row-offcanvas row-offcanvas-left");
        $('off-nav').toggleClass('sidebar sidebar-offcanvas');
    } else
    {
        $('#body-content').removeClass("row-offcanvas row-offcanvas-left");
        $('off-nav').toggleClass('sidebar sidebar-offcanvas');
    };*/

});