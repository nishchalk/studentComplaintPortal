$(document).ready(function(){
$('#status').submit(function(e){
    e.preventDefault(); // stops the form submission

    $.ajax({
      url:$(this).attr('action'), // action attribute of form to send the values
      type:$(this).attr('method'), // method used in the form
      data:$(this).serialize(), // data to be sent to php
      dataType:"text",
      success:function(data){
          alert('submitted, refresh page to see the result');
           // you can alert the success message.
      },
      error:function(err){
          console.log(err);
      }
    });

});
})
    