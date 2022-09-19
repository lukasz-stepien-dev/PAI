const a = document.getElementById("a")
const b = document.getElementById("b")
const result = document.getElementById("result")

function operation(chars, a, b) {
    switch (chars) {
        case "+":
            result.textContent = a + b
            break;
        case "-":
            result.textContent = a - b
            break;
        case "/":
            if (b != 0) {
                result.textContent = a / b
            } else {
                result.textContent = "Nie można dzielic przez 0"
            }
            break;
        case "*":
            result.textContent = a * b
            break;
        default:
            result.textContent = "Nie prawidłowy znak!"
            break;
    }
}

document.getElementById("calc").addEventListener("click", function() {
    let char = document.getElementById("char").value
    operation(char, parseFloat(a.value), parseFloat(b.value))
}, false)