
let password = document.getElementById("psw");
let confirm_password = document.getElementById("re-psw");

    function validatePassword(){
        if(password.value != confirm_password.value){
            confirm_password.setCustomValidity("Password don't match");
        }
        else{
             confirm_password.setCustomValidity("");
        }
        }
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
    