
window.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const ulList = document.createElement('ul');
    const olList = document.createElement('ol');
    for (let i = 0; i < 15; i++) {
        const liElement1 = document.createElement('li');
        const liElement2 = document.createElement('li');
        liElement1.textContent = `Programowanie w PHP`;
        ulList.appendChild(liElement1);
        liElement2.textContent = `Programowanie w JavaScript`;
        olList.appendChild(liElement2);
    }
    body.appendChild(ulList);
    body.appendChild(olList);
})