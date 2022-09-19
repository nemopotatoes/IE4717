// The event handler function for password checking


function checkPassword() { 
    var input = document.getElementById("password");

    // var check = input.value.search(/^\d{3}-\d{3}-\d{4}$/);
        var check = input.value.search(/[A-Z]+[a-z]+[0-9]+[!@&-*]+/);

    if (check != 0) {
        var test = false;
    }
    else  {
        // alert("Valid");
        var test = true;
    }

    if (test) {
        // alert("Valid");
        return true;
    } else {
        alert("Invalid");
        return false;
    }
}