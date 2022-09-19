let x = parseInt(prompt("Podaj podstawe"))
let y = parseInt(prompt("Podaj wykladnik"))
let result = 1

for (let i = 0; i < y; i++) {
    result *= x 
}

document.write(`Wynik potegi o podstawie ${x} i wykladniku ${y} to ${result}`)