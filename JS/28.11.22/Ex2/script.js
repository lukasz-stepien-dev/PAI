const form = document.querySelector('form');
const adress = document.querySelector('#adress');

document.querySelector('#no').addEventListener('click', () => {
    document.querySelector('#spouse').remove();
    document.querySelectorAll('label')[3].remove();
    document.querySelectorAll('br')[4].remove();
});

document.querySelector('#yes').addEventListener("click", () => {
    if (document.querySelector('#spouse') == null) {
        const spouse = document.createElement('input');
        const label  = document.createElement('label');
        spouse.setAttribute('type', 'text');
        spouse.setAttribute('id', 'spouse');
        label.setAttribute('for', 'spouse');
        label.textContent = 'Imię małżonka';
        form.insertBefore(spouse, adress);
        form.insertBefore(label, adress);
        form.insertBefore(document.createElement('br'), adress);
    }
});