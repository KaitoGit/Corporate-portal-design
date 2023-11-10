function hypotenuse(a, b) {
    function square(x) {
        return x * x;
    }
    return Math.sqrt(square(a) + square(b));
}

let result = hypotenuse(3, 4);
console.log(result); // 直角三角形🔺\ 5
