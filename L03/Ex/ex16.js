function write(x) {
    console.log('\nGood number x= ', x);
}

function data() {
    const d = new Date();
    let text = d.toLocaleString();
    console.log('\nDate= ', text);
}

function squareRoot(x, f = write) {
    const result = Math.sqrt(x);
    f?.(x, result);
    return result;
}

// 10
squareRoot(100, (x, result) => console.log(result)); 

// Date= 15.10.2023, 12:33:17 // 8
console.log(squareRoot(64, (x, result) => {
    data();
}));

//  5
squareRoot(25, (x, result) => console.log(result)); 
