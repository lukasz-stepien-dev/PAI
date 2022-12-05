window.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body');
    const ulList = document.createElement('ul');
    const olList = document.createElement('ol');
    ulList.id = 'ul-list';
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

    let counter = 0;
    const colors1 = ['#5D2A42', '#FB6376', '#FCB1A6', '#FFDCCC', '#FFF9EC'];
    const colors2 = ['#BCF4DE', ' #CDE5D7', '#DED6D1', '#EEC6CA', '#FFB7C3'];
    const colors3 = ['#C9CEBD', '#B2BCAA', '#838E83', '#6C6061', '#64403E']

    for (let i = 0; i < ulList.children.length; i++) {
        ulList.children[i].style.background = colors1[i%colors1.length];
        ulList.children[i].style.color = colors3[i%colors3.length]
    }

    for (let i = 0; i < olList.children.length; i++) {
        olList.children[i].style.color = colors2[i%colors2.length];
    }

    body.addEventListener('click', (event) => {
        const allLi = document.querySelectorAll('li');
        for (let i = 0; i < 15; i++) {
            allLi[i].style.opacity = '1';
        }
        event.target.style.opacity = '0.7';
    })
})

