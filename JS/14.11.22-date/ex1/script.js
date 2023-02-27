let today = new Date();
const months = ["Stycznia", "Lutego", "Marca", "Kwietnia", "Maja", "Czerwca", "Lipca", "Sierpnia", "Września", "Października", "Listopada", "Grudnia"];
const weekDays = ["Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", 'Sobota'];
const para = document.getElementsByTagName("p");

function seconds() {
    let today = new Date();
    para[1].textContent = `Godzina; ${today.getHours()}:${today.getMinutes()}:${today.getSeconds()}`;
    para[2].textContent = parseInt(para[2].textContent) + 1;
    if (para[2].style.color == "red") {
        para[2].style.color = "green";
    } 
    else {
        para[2].style.color = "red";
    }
    setTimeout(seconds, 1000);
}

para[0].textContent = `Data: ${weekDays[today.getDay()]}, ${today.getDate()} ${months[today.getMonth()]} ${today.getFullYear()}`;

seconds();

