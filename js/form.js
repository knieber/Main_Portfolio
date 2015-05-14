//Problem: Form does not appear when CONTACT ME or CONTACT is clicked
//Solution: Make Form appear when CONTACT ME or CONTACT is clicked

var $overlay = $('<div id="overlay"></div>');
var $form = $('.contact-form');
var $formX = $('.xButton');

$overlay.append($formX);
$overlay.append($form);


$("body").append($overlay);

function contactButton(event) {
  event.preventDefault();

  //Show the overlay.
  $overlay.fadeIn(400, function() {
    $overlay.show();
  });
  //Show Form
  $form.fadeIn(400, function() {
    $form.show();
  });
  //Show X button
  $formX.show();

}

//Capture the click event on a link to an image
$(".contact-button button").click(contactButton);

$(".contact").click(contactButton);


//When overlay is clicked
$formX.click(function(){
  //Hide the overlay
  $overlay.fadeOut(400, function() {
    $overlay.hide();
  });
  $form.fadeOut(400, function() {
    $form.hide();
  });
});







//Email Send
$("#submit_btn").click(function() {

    var proceed = true;
    //simple validation at client's end
    //loop through each field and we simply change border color to red for invalid fields
    $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
        $(this).css('border-color','');
        if(!$.trim($(this).val())){ //if this field is empty
            $(this).css('border-color','red'); //change border color to red
            proceed = false; //set do not proceed flag
        }
        //check invalid email
        var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if( $(this).attr("type")=="email" && !email_reg.test($.trim($(this).val())) ){
            $(this).css('border-color','red'); //change border color to red
            proceed = false; //set do not proceed flag
        }

        //Checks to see if email == email confirmation field
        if( $("#email").val() !== $("#confirmEmail").val() ) {
            $("#email").css('border-color','red');
            $("#confirmEmail").css('border-color','red');
            proceed = false;
        }

    });



    if(proceed) { //everything looks good! proceed...
        //get input field values data to be sent to server
        var post_data = {
            'user_name'     : $('#name').val(),
            'user_email'    : $('#email').val(),
            'subject'       : $('#subject').val(),
            'msg'           : $('#msg').val()
        };
        //Ajax post data to server
        $.ajax({
            url: "./inc/contactProcess.php",
            type: "POST",
            data: post_data,
            dataType: "html",
            success: function(result) {
                if(result == 'success') {
                    $form.fadeOut();
                    $overlay.append('<div class="success"><p>Your email has been sent! I&#39;ll get back to you as soon as I can.</p></div>');
                }else {
                    $form.fadeOut();
                    $overlay.append('<div class="error"><p>It looks like there was an issue with your email submission. Try again later.</p></div>');
                }
            }
        });
    }
});

//reset previously set border colors and hide all message on .keyup()
$("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
    $(this).css('border-color','');
});
