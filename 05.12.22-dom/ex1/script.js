const searchBar = document.querySelector('#search');
const body = document.querySelector('body');
const lis = document.querySelectorAll('li');


searchBar.addEventListener('keyup', (event) => {
    const text = event.target.value.toLowerCase();
    let everythingNone = true

    //for (let i = 0; i < lis.length; i++) {
    //    if (lis[i].textContent.toLowerCase().indexOf(text) !== -1) {
    //        setTimeout(() => {lis[i].style.display = 'block';}, 1000);
    //    } else {
    //        setTimeout(() => {lis[i].style.display = 'none';}, 1000);
    //        
    //    }
    //}

    lis.forEach(el => {
        if (el.textContent.toLowerCase().indexOf(text) !== -1) {
            el.style.display = 'block';
        } else {
            el.style.display = 'none';
        }
    })

    
})