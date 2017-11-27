function validateForm() {
    var userName = document.forms["login"]["usr"].value;
    if (userName == "") {
        document.getElementById("usrError").innerHTML = "Invalid Username";
    }
    var password = document.forms["login"]["pwd"].value;
    if (password == "") {
        document.getElementById("pwdError").innerHTML = "Invalid Password";
    }
    if (userName == "" && password != "") {
        document.getElementById("pwdError").innerHTML = "";
        return false;
    } else if(password == "" &&  userName != "") {
        document.getElementById("usrError").innerHTML = "";
        return false
    }else if (userName == "" && password == "") {
        return false;
    }

}