const submit =  document.getElementById("submit");

submit.addEventListener("click", () => {
    let correct = 0;


    if (document.getElementById("question1").checked == true) {
        correct++;
    }
    if (document.getElementById("question2").checked == true) {
        correct++;
    }
    if (document.getElementById("question3").checked == false) {
        correct++;
    }
    if (document.getElementById("question4").checked == false) {
        correct++;
    }
    if (document.getElementById("question5").checked == false) {
        correct++;
    }

    alert(correct);
})