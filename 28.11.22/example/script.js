let time  = 30;
let p = 1;

function scroll() {
    let text = document.querySelectorAll("input")[0].value;
    let newText = text.substring(p) + text.substring(p, 0);
    document.querySelector("input").value = newText;
    document.querySelector("#text").textContent = newText;
    window.setTimeout(scroll, time);
    
}


window.setTimeout(scroll, time);