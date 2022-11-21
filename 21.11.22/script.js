document.getElementById("submit").addEventListener("click", (event) => {
    const theEmail = document.getElementById("email").value;
    let theAt = theEmail.indexOf("@");
    let theDot = theEmail.lastIndexOf(".");
    let aSpace = theEmail.indexOf(" ");
    if ((theAt != -1) &&
        (theAt != 0) &&
        (theDot != -1) &&
        (theDot > theAt + 1) &&
        (theDot < theEmail.lenght - 1) &&
        (aSpace == -1)) {
            alert("Adres wyglada poprawnie")
    }
    else  {
        alert("Twój adres jest niepoprawny")
        event.preventDefault();
    }
})
