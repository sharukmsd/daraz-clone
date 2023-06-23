function validate() {
    var isValid = true;
    if ($("#pPhoto").val() == "") {
        $("#pPhotoErr").html("Photo Required");
        $("#pPhoto").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#pPhotoErr").html("");
        $("#pPhoto").css('border-color' , 'lightblue');
    }
    if ($("#pName").val() == "") {
        $("#pNameErr").html("Product Name Required");
        $("#pName").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#pNameErr").html("");
        $("#pName").css('border-color' , 'lightblue');
    }
    
    if ($("#pPrice").val() == 0) {
        $("#pPriceErr").html("Price Required");
        $("#pPrice").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#pPriceErr").html("");
        $("#pPrice").css('border-color' , 'lightblue');
    }
    if ($("#pQuantity").val() == 0) {
        $("#pQuantityErr").html("Quantity Required");
        $("#pQuantity").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#pQuantityErr").html("");
        $("#pQuantity").css('border-color' , 'lightblue');
    }
    if ($("#pCat option:selected").val() === "---SELECT---") {
        $("#pCatErr").html("Please select a category");
        $("#pCat").css('border-color' , 'red');
        isValid = false;
    } else {
        $("#pCatErr").html("");
        $("#pCat").css('border-color' , 'lightblue');
    }
    return isValid;
}
