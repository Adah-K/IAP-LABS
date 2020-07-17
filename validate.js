function validateForm(){

    var fname = document.forms["user_details"]["first_name"].value;
    var lname = document.forms["user_details"]["last_name"].value;
    var city = document.forms["user_details"]["city_name"].value;

    if (fname == "") {

        alert("Please provide your First Name.");
        fname.focus();
        return false;
        
    }
    if (lname == "") {

        alert("Please provide your Last Name.");
        lname.focus();
        return false;
        
    }
    if (city = ""){

        alert("Please provide your City.");
        city.focus();
        return false;
    }
    return true;

}