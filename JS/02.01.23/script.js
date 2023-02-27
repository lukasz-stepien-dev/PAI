const startBtn = document.querySelector('.start');
const pauseBtn = document.querySelector('.pause');
const stopBtn = document.querySelector('.stop');
const resetBtn = document.querySelector('.reset');
const historyBtn = document.querySelector('.history');
const stopwatch = document.querySelector('.stopwatch');
const time = document.querySelector('.time');
const timeList = document.querySelector('.time-list');
const infoBtn = document.querySelector('.info');
const modalShadow = document.querySelector('.modal-shadow');
const closeModalBtn = document.querySelector('.close');
const wrapper = document.querySelector('.wrapper');

let countTime;
let minutes = 0;
let seconds = 0;
let started = false

startBtn.addEventListener('click', () => {
    if (started == false) {
        countTime = setInterval(() => {
            if (seconds < 9) {
                seconds++;
                stopwatch.textContent = `${minutes}:0${seconds}`;
            } else if (seconds >= 9 && seconds < 59) {
                seconds++;
                stopwatch.textContent = `${minutes}:${seconds}`;
            } else {
                minutes++;
                seconds = 0;
                stopwatch.textContent = `${minutes}:00`;
            }
        }, 1000);
    }
    started = true;
});
pauseBtn.addEventListener('click', () => {
    started = false;
    clearInterval(countTime);
});
stopBtn.addEventListener('click', () => {
    let num = 1;
    if (stopwatch.textContent !== '0:00') {
        const newTime = document.createElement('li');
        newTime.innerHTML = `Pomiar nr #${num}: <span>${stopwatch.textContent}</span>`;
        timeList.appendChild(newTime);
        started = false;
        clearInterval(countTime);
        time.textContent = stopwatch.textContent;
        time.style.visibility = 'visible'
        minutes = 0;
        seconds = 0;
        stopwatch.textContent = '0:00';
        num++;
    }
})
infoBtn.addEventListener('click', () => {
    modalShadow.style.display = 'block';
    wrapper.style.marginTop = '40%';

})
closeModalBtn.addEventListener('click', () => {
    modalShadow.style.display = 'none';
    wrapper.style.marginTop = '0%';
})
resetBtn.addEventListener('click', () => {
    time.style.visibility = 'hidden';
    started = false;
    clearInterval(countTime);
    stopwatch.textContent = '0:00'
    let child = timeList.firstElementChild;
    while (child) {
        timeList.removeChild(child)
        child = e.firstElementChild;
    }
})
historyBtn.addEventListener('click', () => {
    timeList.style.display = timeList.style.display == 'none' ? 'block' : 'none';
})
window.addEventListener('click', e => {
    console.log(e.target);
    if (e.target === modalShadow) {
        modalShadow.style.display = 'none'
        wrapper.style.marginTop = '0%';
    }
})