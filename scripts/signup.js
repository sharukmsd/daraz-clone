function validate() {
    var isValid = true;
    if ($("#fName").val() == "") {
        $("#fNameErr").html("First Name Required");
        $("#fName").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#fNameErr").html("");
        $("#fName").css('border-color' , 'lightblue');
    }
    if ($("#lName").val() == "") {
        $("#lNameErr").html("Last Name Required");
        $("#lName").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#lNameErr").html("");
        $("#lName").css('border-color' , 'lightblue');
    }
    if ($("#photo").val() == "") {
        $("#photoErr").html("Photo Required");
        $("#photo").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#photoErr").html("");
        $("#photo").css('border-color' , 'lightblue');
    }
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
    if ($("#cPwd").val() == "") {
        $("#cPwdErr").html("Enter Password Again");
        $("#cPwd").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#cPwdErr").html("");
        $("#cPwd").css('border-color' , 'lightblue');
    }
    if($("#pwd").val() != $("#cPwd").val()){
        $("#cPwdErr").html("Password Doesn't Match");
        $("#cPwd").css('border-color' , 'red');
        isValid = false;
    }else{
        $("#cPwdErr").html("");
        $("#cPwd").css('border-color' , 'lightblue');
    }
    if(!$("#dob").val()){
        $("#dobErr").html("Date of Birth Required");
        $("#dob").css('border-color' , 'red');
        isValid = false;
    }else{
        $("#dobErr").html("");
        $("#dob").css('border-color' , 'lightblue');
    }
    if($("#adrs").val() == ""){
        $("#adrsErr").html("Address Required");
        $("#adrs").css('border-color' , 'red');
        isValid = false;
    }else{
        $("#adrsErr").html("");
        $("#adrs").css('border-color' , 'lightblue');
    }
    return isValid;
}
