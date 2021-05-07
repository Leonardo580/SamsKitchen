function check() {

    let cin=document.getElementsByName('CIN').value;
    let Age=document.getElementsByName('Age').value;
    let Email=document.getElementsByName('Email').value;
    let Password=document.getElementsByName('Password').value;
    alert(cin+Age+Email+Password);
    if (toString(cin).length!==4)
        alert("CIN must be 4 number");
    else if (Age<18)
        alert("you must be above 18 years old");
    else if (Email.match("^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4}$")==null)
        alert("Not a valid email address");
    else if (Password.match("^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$")==null)
        alert("your password is too weak");
    //else return true;
    return false;

}