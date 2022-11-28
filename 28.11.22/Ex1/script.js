const container  = document.querySelector('article');
let counter = 1;
let divs = []

document.querySelector('form').addEventListener('click', (e) => {
    if (e.target.value == 'Kliknij, aby dodać diva') {
        const newDiv = document.createElement("div");
        newDiv.textContent = `Jestem twoim ${counter}. divem`;
        container.appendChild(newDiv);
        counter++;
        divs.push(newDiv);
    } else if (e.target.value == 'Kliknij, aby usunać') {
        container.removeChild(document.querySelector('div:last-child'));
        counter--;
        divs.pop();
    }
})

container.addEventListener("click", (e) => {
    e.target.remove();
    counter--;
})