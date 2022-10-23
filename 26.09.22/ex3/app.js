let randomNumber = Math.round(Math.random() * 10); // <1, 10>
let i = 1;
// randomNumber = Math.random() * 5; <0, 5> 
while (randomNumber != 6) {
    document.write(`Wylosowano liczbe ${randomNumber} <br>`)
    randomNumber = Math.round(Math.random() * 10)
    i++
}

document.write(`Wylosowano 6 za ${i}`)