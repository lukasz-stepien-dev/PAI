let randomNumber = [];
let temp = 0;
let repeat = false

for (let i = 0; i < 6; i++) {
    temp = Math.floor(Math.random() * 7 + 1)
    for (let a = 0; a < i; a++) {
        if (randomNumber[a] == temp) {
            repeat = true
        }
    }
    while (repeat == true) {
        repeat = false;
        temp = Math.floor(Math.random() * 7 + 1)
        for (let a = 0; a < i; a++) {
            if (randomNumber[a] == temp) {
                repeat = true
            }
            
        }
    }
    randomNumber[i] = temp;
    document.write(`${randomNumber[i]}, `)
}

