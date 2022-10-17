function generateUser(name, email, city, job) {
    return {
        name: name,
        email: email,
        city: city,
        job: job
    };
}

let bankAccount = {
    name: "Łukasz",
    surname: "Stępień",
    accountNumber: 123456793931246236382764891234n,
    balance: 1000000000000000000000000n
};

let house = {
    city: "Wrocław",
    street: "Wesoła",
    streetNum: 5,
    surfaceArea: 50,
    height: 10
};

console.log(bankAccount);
console.log(house);

let user1 = generateUser("Łukasz", "luaksz@kljcdsklj", "Łódź", "Milioner");
let user2 = generateUser("Jan", "krupa@jan", "Wieś", "Jeździ na rowerze" );
console.log(user1);
console.log(user2);