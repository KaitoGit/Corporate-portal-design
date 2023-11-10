function hypotenuse(a, b) {
    function square(x) {
        return x * x;
    }
    return Math.sqrt(square(a) + square(b));
}

function factorial(n) {
    if (n === 0 || n === 1) {
        return 1;
    } else {
        return n * factorial(n - 1);
    }
}
//直角三角形斜边和；阶乘
let sumOfDiagonals = hypotenuse(3, 4) + hypotenuse(5, 8); // 14.433981..
let probability = factorial(3) * factorial(2) / factorial(5); // 0.1

console.log("Sum of diagonals:", sumOfDiagonals.toFixed(6));
console.log("Probability:", probability.toFixed(1)); // 0.1
