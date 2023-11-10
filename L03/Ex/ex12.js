const f = x => {
    return { value: x + 10 };
};

const g = x => ({ value: x + 20 });

const h = x => {
    return { value: x };
};

const i = x => ({ v: x, w: x * 2 });

const j = x => ({ v: x, w: x * 2 });

console.log("f.value = ", f(3).value); // f.value = 13
console.log("g.value = ", g(3).value); // g.value = 23
console.log("h.value = ", h(3).value); // h.value = 3
console.log("i.v = ", i(3).v, " i.w = ", i(3).w); // i.v = 3  i.w = 6
console.log("j(3).v = ", j(3).v, " j(3).w = ", j(3).w); // j(3).v = 3  j(3).w = 6
