const sum = (x, y) => x + y;
const product = (x, y) => x * y;
const polynomial = (x) => x ** 3 + 4 * x ** 2 + 5 * x + 1;
const circleField3 = () => Math.PI * Math.pow(3, 2);

console.log("sum(3, 2) =", sum(3, 2)); // sum(3, 2) = 5
console.log("product(3, 2) =", product(3, 2)); // product(3, 2) = 6
console.log("polynomial(2) =", polynomial(2)); // polynomial(2) = 41
console.log("circleField3() =", circleField3()); // circleField3() = 28.274333882308138
