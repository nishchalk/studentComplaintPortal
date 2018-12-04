$(document).ready(function(){
$('#status2').submit(function(b){
    b.preventDefault(); // stops the form submission

    $.ajax({
      url:$(this).attr('action'), // action attribute of form to send the values
      type:$(this).attr('method'), // method used in the form
      data:$(this).serialize(), // data to be sent to php
      dataType:"text",
       
    });

});
})
    