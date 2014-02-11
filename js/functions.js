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


$(document).ready(function () {

    $(".entypo-menu").click(function () {
		
		
		$( "#body-content" ).toggleClass( "viewnav");
        $(".sidebar").toggle();
    });
	
    var $subNavs = $('.subnav');
    $subNavs.hide();

    $('.subnavclick').click(function () {
        $subNavs.hide();

        var navitem = $(this).attr('id'),
            id = $(this).attr('class'),
            subnav = $('subnav.' + id + '-subnav');
        $('a.selected').not(this).removeClass('selected');
        $(this).toggleClass('selected');
        $('#' + id).toggle();
        return false;
    });
});