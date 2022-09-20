let x = parseInt(prompt("Podaj liczbe do obliczania silni"))
let result = 1

for (let i = 1; i <= x; i++) {
    result *= i;
}

document.write(`${x}! wynosi: ${result}`)