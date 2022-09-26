let number = Math.round(Math.random() * 100);
let i = 1;
let repeat;

while (true) {
    let typedNumber = prompt("Podaj liczbe")
    if (typedNumber > number) {
        alert("Podałeś za dużą liczbę!");
    } else if (typedNumber < number) {
        alert("Podałeś za małą liczbę");
    } else if (typedNumber = number) {
        alert(`Brawo wylosowana liczba to ${number} i zgadleś za ${i} razem`);
        repeat = prompt("Chcesz powtorzyc losowanie? (Y/N)");
        if (repeat != "Y") {
            break;
        } else {
            number = Math.round(Math.random() * 100);
        }
    }
    i++;
}