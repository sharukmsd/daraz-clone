function validate() {
    var isValid = true;
    if ($("#email").val() == "") {
        $("#emailErr").html("Email Required");
        $("#email").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#emailErr").html("");
        $("#email").css('border-color' , 'lightblue');
    }
    if ($("#pwd").val() == "") {
        $("#pwdErr").html("Password Required");
        $("#pwd").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#pwdErr").html("");
        $("#pwd").css('border-color' , 'lightblue');
    }
    
    return isValid;
}