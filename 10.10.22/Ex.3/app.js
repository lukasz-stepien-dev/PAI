const body = document.getElementsByTagName("body")[0];
let tips = new Array("Pisząc kod, dodawajcie komentarze", "Strzcie sie nie skonczynych petli", "Pisz zrozuzumialy kod dla innych");
let index = 0;

function tip() {
    document.getElementById("tipBox").value = tips[index];
    index++;

    if (index == tips.length) {
        index = 0;
    }
    setTimeout("tip()", 3500);
}
