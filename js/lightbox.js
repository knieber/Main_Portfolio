//Problem: Cannot view photos in full size if they're clicked on nor scroll through them
//Solution: When photos are clicked they will pop out with an overlay and have the ability to click through

var $overlayPhoto = $('<div id="overlayPhoto"></div>');
var $photoContainer = $('<div class="photoContainer"></div>');
var $xButtonPhoto = $('<div class="xButtonPhoto"><img src="img/photoViewerX.svg"></div>');
var $prevArrow = $('<div class="prevArrow"><img src="img/prevArrow.svg"></div>');
var $nextArrow = $('<div class="nextArrow"><img src="img/nextArrow.svg"></div>');
var $fullImg = $("<img>");
var $currentImage;

//Append Buttons to Overlay
$overlayPhoto.append($xButtonPhoto);
$overlayPhoto.append($prevArrow);
$overlayPhoto.append($nextArrow);

//Append image container and image element
$overlayPhoto.append($photoContainer);
$photoContainer.append($fullImg);



$("body").append($overlayPhoto);

//When picture is clicked
   $(".photoWrapper a").click(function(event) {

       //Needed for MOZ/IE
       event.stopPropagation();
       //Needed for Chrome
       event.preventDefault();

     $currentImage = $(this);
     var $imageLocation = $currentImage.attr("href");

     //Give fullImg original src
     $fullImg.attr("src", $imageLocation);

     //Pop overlay
     $overlayPhoto.fadeIn(400);

     //Fade img container in
     $photoContainer.fadeIn(400);

     if($currentImage.prev().length == 0){
       $(".prevArrow").hide();
     } else if($currentImage.prev().length > 0){
       $(".prevArrow").show();
     }

     if($currentImage.next().length == 0){
       $(".nextArrow").hide();
     } else if($currentImage.next().length > 0){
       $(".nextArrow").show();
     }

   });



//When "prevArrow" is clicked
  $(".prevArrow").click(function(event){
      //Needed for MOZ/IE
      event.stopPropagation();
      //Needed for Chrome
    event.preventDefault();
    $currentImage = $currentImage.prev();
    var $imageLocation = $currentImage.attr("href");

    $(".nextArrow").fadeIn();

    if($currentImage.prev().length == 0){
      $(this).hide();
    }

    //Fade out current picture, append new source, fade in new img
    $fullImg.animate({ opacity: 0}, 500, function(){
      $fullImg.attr('src', $imageLocation);
        $fullImg.animate({ opacity: 1}, 500);
    });

  });

//When "nextArrow" is clicked
  $(".nextArrow").click(function(event){
      //Needed for MOZ/IE
      event.stopPropagation();
      //Needed for Chrome
    event.preventDefault();
    $currentImage = $currentImage.next();
    var $imageLocation = $currentImage.attr("href");

    $(".prevArrow").fadeIn();

    if($currentImage.next().length == 0){
      $(this).hide();
    }

    //Fade out current picture, append new source, fade in new img
      $fullImg.animate({ opacity: 0}, 500, function(){
          $fullImg.attr('src', $imageLocation);
          $fullImg.animate({ opacity: 1}, 500);
      });


  });


//When X button is clicked
  $(".xButtonPhoto").click(function(event){
      //Needed for MOZ/IE
      event.stopPropagation();
    //Needed for Chrome
    event.preventDefault();

    //hide overlay
    $overlayPhoto.fadeOut(400);

    $photoContainer.fadeOut(400);
  });

//If esc key is pressed
  $(document).keyup(function(e){
    if(e.keyCode == 27) {

    //hide overlay
    $overlayPhoto.fadeOut(400);

    $photoContainer.fadeOut(400);
    }
  });
