let randomNumber = [];
let temp = 0;
let repeat = true;
let repeatCount = 0;

for (let i = 0; i < 30000; i++) {
    do {
        repeat = false;
        temp = Math.floor(Math.random() * 30000 + 1)
        for (let a = 0; a < i; a++) {
            if (randomNumber[a] == temp) {
                repeat = true
            }
            
        }
        repeatCount++;
    } while (repeat == true);
    randomNumber[i] = temp;
    document.write(`${randomNumber[i]}, `)
}

console.log(repeatCount);