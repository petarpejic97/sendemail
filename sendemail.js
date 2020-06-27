function send(){
    email = $("#email").val();
    sender = $("#sender").val();
    message = $("#message").val();
    $.ajax({
        type:'POST',
        url:'/sendemail.php',
        data:{email:email,
            sender:sender,
            message:message},
        success : function(response){
            console.log(response)
        }
    })
}