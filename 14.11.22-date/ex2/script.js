const time = document.getElementById("time");
const start = document.getElementById("start");
const end = document.getElementById("stop");
let date = new Date();
let timeout;

function uptadeTime() {
    clearTimeout(timeout);
    date = new Date();
    time.textContent = `Godzina; ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
    timeout = setTimeout(uptadeTime, 1000);
}

function stopTime() {
    clearTimeout(timeout);
}

start.addEventListener("click", uptadeTime);
end.addEventListener("click", stopTime)