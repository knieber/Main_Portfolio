//Problem: Fixed nav always displays extended, blocking content
//Solution: Provide a way to toggle nav to display links


var $menuList = $(".mobileListMenu ul");
var $mobileNav = $("#mobileNav");


$(".topNavButton").click(function(){
  var clicks = $(this).data('clicks');

  if(clicks) {
    //Even click

    //Bring Menu back to original state
    $mobileNav.animate({
      height: "60px"
    }, 400);

    //hide .mainnav-right ul
    $menuList.fadeOut();

  } else {
    //Odd Click

    //Extend Menu when lines are pressed
    $mobileNav.animate({
      height: "360px"
    }, 400);

    //Append homeli at beginning and contacli at the end and show
    $menuList.fadeIn();
  }

  $(this).data("clicks", !clicks);

});
