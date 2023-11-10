let x = 1;

console.log("Outside \tx =", x);
x = addTwo(x);
console.log("Outside \tx =", x);

function addTwo(x) {
    x += 2;
    console.log("In function \tx =", x);
    return x;
}
