async function name(params) {
    
}

document.querySelector('#search').addEventListener('keyup', (event) => {
    const text = event.target.value.toLowerCase();
    const lis = document.querySelectorAll('li');

    for (let i = 0; i < lis.length; i++) {
        if (lis[i].textContent.toLowerCase().indexOf(text) !== -1) {
            lis[i].style.display = 'block';
        } else {
            lis[i].style.display = 'none';
        }
    }
})