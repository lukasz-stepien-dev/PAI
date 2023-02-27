const images = ["images/one.jpg", "images/two.jpg", "images/three.jpg"];
const startButton = document.getElementById("start");
const endButton = document.getElementById("end");
const imgTag = document.getElementById("img");

let theTimeOut;
let i = 0;


function changeImg() {
    if (i == images.length) {
        i = 0;
    }
    imgTag.setAttribute("src", images[i]);
    i++;
    theTimeOut = setTimeout("changeImg()", 1000);
}

startButton.addEventListener("click", () => {
    clearTimeout(theTimeOut);
    changeImg();
})

endButton.addEventListener("click", () => {
    clearTimeout(theTimeOut);
})