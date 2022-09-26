const number1 = document.getElementById("first");
const number2 = document.getElementById("second");
const calc = document.getElementById("button");
const para = document.getElementsByTagName("p")[0];

calc.addEventListener("click", (event) => {
    para.textContent = "";
    if (parseInt(number1.value) > parseInt(number2.value)) {
        for (let i = parseInt(number1.value); i >= parseInt(number2.value); i--) {
            para.textContent += i + " ";
            event.preventDefault();
        }
        
    }
    else if (parseInt(number1.value) <= parseInt(number2.value)) {
        for (let i = parseInt(number1.value); i <= parseInt(number2.value); i++) {
            para.textContent += i + " ";
            event.preventDefault();
        }    
    }
})

