// 👆
let sortedArray1 = [3, 1, 2].sort();
console.log(`[3, 1, 2].sort() = [${sortedArray1}]`);
// 👇
let sortedArray2 = [3, 1, 2].sort(function(a, b) {
    return b - a;
});
console.log(`[3, 1, 2].sort(function(a, b) { return b - a; }) = [${sortedArray2}]`);
