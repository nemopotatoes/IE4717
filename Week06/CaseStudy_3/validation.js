function chkName(event) {
    // get target node of the event
    var candName = event.currentTarget;

    // test input name: allow alphabets and character spaces
    var pos = candName.value.search(/^[A-Za-z ]+$/);

    if (pos != 0) {
        alert("The name you entered (" + candName.value +
        ") is not in the correct form. \n" +
        "Special Characters are not allowed.");
        candName.focus();
        candName.select();
		document.getElementById('CandidateName').value = "";
        return false;
    }
}

function chkEmail(event) {
    // get target node of the event
    var candEmail = event.currentTarget;
    
    // Test the format of the input email
    var pos = candEmail.value.search(/^[\w][\w.-]*@([\w][\w-]*\.){1,3}[a-zA-Z]{2,3}$/);
    
    if (pos != 0) {
        alert("The email you entered (" + candEmail.value + 
              ") is not in the correct form. \n");
        candEmail.focus();
        candEmail.select();
		document.getElementById('email').value = "";
        return false;
    }
}

function chkDate(value) {

    var inputDate = new Date(document.getElementById("startDate").value);

    var now = new Date();

    if (inputDate != '') {
        if (inputDate < now) {
            alert("You cannot start before today!");
			document.getElementById('startDate').value = "";
            return false;
        }
        else 
            return true;
    }
    else 
        return false;   
}

