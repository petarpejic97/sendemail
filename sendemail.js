function send(){
    email = $("#email").val();
    sender = $("#sender").val();
    message = $("#message").val();
    console.log(email+sender+message)
    $.ajax({
        type:'POST',
        url:'sendemail.php',
        data:{email:email,
            sender:sender,
            message:message},
        success : function(response){
            console.log(response)
        }
    })
}