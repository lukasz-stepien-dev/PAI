let number = Math.round(Math.random() * 100);
let i = 1;

while (true) {
    let typedNumber = prompt("Podaj liczbe")
    if (typedNumber > number) {
        alert("Podałeś za dużą liczbę!");
    } else if (typedNumber < number) {
        alert("Podałeś za małą liczbę");
    } else if (typedNumber = number) {
        document.write(`Brawo wylosowana liczba to ${number} i zgadleś za ${i} razem`);
        break;
    }
    i++;
}