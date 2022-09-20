// form elements
var candidateNode = document.getElementById("CandidateName");
var emailNode = document.getElementById("email");
var dateNode = document.getElementById("startDate");

// Event Listeners
candidateNode.addEventListener("change", chkName, false);
emailNode.addEventListener("change", chkEmail, false);
dateNode.addEventListener("change", chkDate, false);