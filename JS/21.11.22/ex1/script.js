const textArea = document.getElementById("text");
const chars = document.getElementById("chars-counter");
const words = document.getElementById("words-counter");
const sentences = document.getElementById("sentences-counter");

textArea.addEventListener("input", (event) => {
    let sentencesNumber = textArea.value.split(".");
    let wordsNumber = textArea.value.split(" ");
    for (let i = 0; i < wordsNumber.length; i++) {
        if ((wordsNumber[i].charAt() < 65) ||
        (wordsNumber[i].charAt() > 122) ||
        (wordsNumber[i] == "[") ||
        (wordsNumber[i] == "/") ||
        (wordsNumber[i] == "]") ||
        (wordsNumber[i] == "^") ||
        (wordsNumber[i] == "_") ||
        (wordsNumber[i] == "`") ||
        (wordsNumber[i] == "")) {
            wordsNumber.splice(i, 1);
        }
    }
    chars.textContent = `Ilość znaków: ${textArea.value.length}`;
    sentences.textContent = `Ilość zdań: ${sentencesNumber.length}`;
    words.textContent = `Ilość słów ${wordsNumber.length}`;
    console.log(wordsNumber)
})