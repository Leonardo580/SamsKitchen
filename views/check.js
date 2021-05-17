function check() {

    
    let nom=document.getElementsByName('nom').value;
    let numero=document.getElementsByName('quantite').value;
    let adresse=document.getElementsByName('prix').value;
    alert(nom+numero+adresse);
    if (toString(nom).length!==4)
        alert("CIN must be 4 number");
    else if (numero<0)
        alert("verifier votre numero");
    else if (Password.match("^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$")==null)
        alert("your password is too weak");
    //else return true;
    return false;

}
function check1() {

    
    let nom=document.getElementsByName('nom').value;
    let quantite=document.getElementsByName('quantite').value;
    let prix=document.getElementsByName('prix').value;
    alert(nom+quantite+prix);
    if (toString(nom).length!==4)
        alert("CIN must be 4 number");
    else if (quantite<0)
        alert("verifier votre quantite");
    else if (Password.match("^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$")==null)
        alert("your password is too weak");
    //else return true;
    return false;

}


