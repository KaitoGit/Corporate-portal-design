// Array of animal image file names
var animalImagesHR = ["cat.png", "dog.png", "parrot.png", "eagle.png", "elephant.png"];
// Corresponding animal descriptions
var animalDescriptionsHR = [
    ["The cat is the only domesticated species in the family Felidae.", "It is commonly kept as a house pet and farm cat, ", "but also ranges freely as a feral cat avoiding human contact. "],
    ["The dog is a domesticated descendant of the wolf. ", "Also called the domestic dog, it is derived from extinct Pleistocene wolves,", "and the modern wolf is the dog's nearest living relative."],
    ["The parrot can speak, and yet is nothing more than a bird", "with a strong curved beak, upright stance, and clawed feet.", "The greatest diversity of parrots is in South America and Australasia."],
    ["Eagles are large, powerfully-built birds of prey,", "with heavy heads and beaks.", "Most eagles are larger than any other raptors apart from some vultures."],
    ["Elephants are the largest living land animals. ", "Three living species are currently recognised: ", " the African bush elephant, the African forest elephant, and the Asian elephant."]
];
// Corresponding animal music file names
var animalMusicHR = ["cat.mp3", "dog.mp3", "parrot.mp3", "eagle.mp3", "elephant.mp3"];

var musicPlayerHR = document.getElementById("musicHR");


// 当前动物的索引
var currentAnimalIndexHR = 0;

// 函数：animal change and play music
function changeAnimalHR() {
    var animalImageHR = document.getElementById("animalHR");
    var currentAnimalDescriptionsHR = animalDescriptionsHR[currentAnimalIndexHR];

    // 显示动物描述文字在test1到test3的label元素中
    for (var i = 1; i <= 3; i++) {
        var testLabelHR = document.getElementById("test" + i + "HR");
        testLabelHR.textContent = currentAnimalDescriptionsHR[i - 1];
    }

    animalImageHR.src = "ImgLiang/" + animalImagesHR[currentAnimalIndexHR]; // 设置新动物的图片路径

    // 设置新动物对应的音乐路径
    musicPlayerHR.src = "AudioLiang/" + animalMusicHR[currentAnimalIndexHR];
    musicPlayerHR.load(); // new
    musicPlayerHR.play(); // play
    // 5s
    setTimeout(function() {
        pauseMusicHR();
    }, 5000);

    // 递增索引，确保不超出数组边界
    currentAnimalIndexHR = (currentAnimalIndexHR + 1) % animalImagesHR.length;

    myCounte.incremen(); // 增加点击次数 counter counter counter
    updateClickCountDispla();
}

// 函数：stop music
function pauseMusicHR() {
    musicPlayerHR.pause();
}

// 函数：random animal and play music
function changeAnimalRandomHR() {
    currentAnimalIndexHR = Math.floor(Math.random() * animalImagesHR.length); // 生成一个随机索引
    //changeAnimalHR(); // 调用 changeAnimal 函数，按照随机索引切换动物
    var animalImageHR = document.getElementById("animalHR");
    var currentAnimalDescriptionsHR = animalDescriptionsHR[currentAnimalIndexHR];

    // 显示动物描述文字在test1到test3的label元素中
    for (var i = 1; i <= 3; i++) {
        var testLabelHR = document.getElementById("test" + i + "HR");
        testLabelHR.textContent = currentAnimalDescriptionsHR[i - 1];
    }

    animalImageHR.src = "ImgLiang/" + animalImagesHR[currentAnimalIndexHR]; // 设置新动物的图片路径

    // 设置新动物对应的音乐路径
    musicPlayerHR.src = "AudioLiang/" + animalMusicHR[currentAnimalIndexHR];
    musicPlayerHR.load(); // new
    musicPlayerHR.play(); // play
    // 5s
    setTimeout(function() {
        pauseMusicHR();
    }, 5000);

    // 递增索引，确保不超出数组边界
    currentAnimalIndexHR = (currentAnimalIndexHR + 1) % animalImagesHR.length;

    myCounter.increment(); // 增加点击次数 counter counter counter
    updateClickCountDisplay();
}
/////////////////////////////////////////////////////////////////////////////////////////////////////
function createSafeCounter() {
    let clickCount = 0;

    return {
        increment: function () {
            clickCount++;
        },
        getCount: function () {
            return clickCount;
        },
        reset: function () {
            clickCount = 0;
        }
    };
}

let myCounter = createSafeCounter();


function resetClickCount() {
    myCounter.reset(); // 重置点击次数
    updateClickCountDisplay();
}

function updateClickCountDisplay() {
    const clickCount = myCounter.getCount();
    document.getElementById("clickCountDisplay").textContent = "Click Count: " + clickCount;
}
/////////////////////////////////////////////////////////////////////////////////////////////////////
function createSafeCounte() {
    let clickCoun = 0;

    return {
        incremen: function () {
            clickCoun++;
        },
        getCoun: function () {
            return clickCoun;
        },
        rese: function () {
            clickCoun = 0;
        }
    };
}

let myCounte = createSafeCounte();


function resetClickCoun() {
    myCounte.rese(); // 重置点击次数
    updateClickCountDispla();
}

function updateClickCountDispla() {
    const clickCount = myCounte.getCoun();
    document.getElementById("clickCountDispla").textContent = "Click Count: " + clickCount;
}