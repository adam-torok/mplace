
    //LOGIN
  function submitLoginForm(e){
    var email = $("#user-email").val();
    var pass = $("#user-password").val();
    if(validateEmail(email)){
        $("#email-error").css("display","none");
        if( pass.length > 0){
            $("#password-error").css("display","none");
            $("#login-form").submit();
        }else{
             $("#password-error").css("display","flex");
        }
    }
    else{
        $("#email-error").css("display","flex");
        console.log("Hibás bejelentkezési email");
        return false;
    }
}    


    function validateEmail(email) 
    {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
    }