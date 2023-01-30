const name = document.getElementById("full-name");
const select = document.getElementById("province");
const male = document.getElementById("male");
const female = document.getElementById("female");
const errorName = document.getElementById("error-name");
const errorProvince = document.getElementById("error-province");
const errorGender = document.getElementById("error-gender")
const submit = document.getElementById("submit");

submit.addEventListener("click", (event) => {
    errorName.textContent = ""
    if (name.value == "") {
        errorName.textContent += "Musisz podać imie";
        event.preventDefault();
    } else {
        errorName.textContent = "";
    }

    if (select.selectedIndex < 1) {
        errorProvince.textContent = "Musisz wybrać województwo";
        event.preventDefault();
    } else {
        errorProvince.textContent = "";
    }

    if (male.checked == false && female.checked == false) {
        errorGender.textContent = "Musisz wybrac płeć";
        event.preventDefault();
    } else {
        errorGender.textContent = "";
    }
})
