console.log("square(2) \tx= ",square(2)); //hoisting effect
function square (x){return x*x;}; //declaration, square is a variable
square = function (x) {return x*x*x;}; //the variable can be modified
console.log("square(3) \tx= ",square(3)); //modified function definition