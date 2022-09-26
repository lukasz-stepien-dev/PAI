const calc = document.getElementById("button");
const para = document.getElementsByTagName("p")[0];

calc.addEventListener("click", () => {
    const number1 = parseInt(document.getElementById("first").value);
    const number2 = parseInt(document.getElementById("second").value);
    let text = "";

    if (number1 > number2) {
        for (let i = number1; i >= number2; i--) {
            text += i + " ";
        }
        
    }
    else if (number1 <= number2) {
        for (let i = number1; i <= number2; i++) {
            text += i + " ";
        }    
    }
    para.textContent = text
})

