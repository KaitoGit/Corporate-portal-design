function startInputHR() {
    document.getElementById("inputHR").style.display = "initial";
    document.getElementById("clientHR").style.display = "none";
}

function registerClientHR() {
    var clientDataHR = document.getElementById("clientDataHR").value;
    if (clientDataHR.trim() !== "") {
        var memoryHR = document.getElementById("memoryHR");
        memoryHR.value = clientDataHR; // 将输入的值放入新的文本框
    }
    switchToClientHR();
}

function switchToClientHR() {
    document.getElementById("inputHR").style.display = "initial";
    document.getElementById("clientHR").style.display = "initial";
}

function backToInputHR() {
    document.getElementById("inputHR").style.display = "initial";
    document.getElementById("clientHR").style.display = "none";
}
//////////////////////////////////////////////////////////////////////////////////////////
var cupImagesHR = ["black.png", "cappuccino.png", "green.png", "juice.png", "red.png"];
var cupMusicHR = ["black.mp3", "cappuccino.mp3", "green.mp3", "juice.mp3", "red.mp3"];

var currentPlayerNameHR = "";
var remainingQuestionsHR = 0;
var playerScoreHR = 0;
var currentCupIndexHR;
var currentCupTypeHR; // "image" or "sound"

function startHR() {
    document.getElementById("start").style.display = "initial";
    document.getElementById("images").style.display = "none";
    document.getElementById("audio").style.display = "none";
    document.getElementById("mark").style.display = "none";
    document.getElementById("new").style.display = "none";
}

function startGameHR() {
    currentPlayerNameHR = document.getElementById("playerNameHR").value;
    remainingQuestionsHR = parseInt(document.getElementById("questionCountHR").value);
    updateScoreboardHR();
    currentCupTypeHR = document.getElementById("choiceHR").value;
    if (currentCupTypeHR === "image") {
        switchToImagesHR();
        nextQuestionImageHR();
    } else if (currentCupTypeHR === "sound") {
        switchToAudioHR();
        nextQuestionSoundHR();
    }
}

function switchToImagesHR() {
    document.getElementById("start").style.display = "none";
    document.getElementById("images").style.display = "initial";
    document.getElementById("audio").style.display = "none";
    document.getElementById("mark").style.display = "initial";
    document.getElementById("new").style.display = "initial";
}

function switchToAudioHR() {
    document.getElementById("start").style.display = "none";
    document.getElementById("images").style.display = "none";
    document.getElementById("audio").style.display = "initial";
    document.getElementById("mark").style.display = "initial";
    document.getElementById("new").style.display = "initial";
}

function nextQuestionImageHR() {
    currentCupIndexHR = Math.floor(Math.random() * cupImagesHR.length);
    document.getElementById("randomImage").src = "../ImgLiang/" + cupImagesHR[currentCupIndexHR];
}

function nextQuestionSoundHR() {
    currentCupIndexHR = Math.floor(Math.random() * cupMusicHR.length);
    var audio = new Audio("../AudioLiang/" + cupMusicHR[currentCupIndexHR]);
    audio.play();
}

function confirmChoiceImageHR() {
    var selectedCup = document.getElementById("imageSoundOptions").value.replace(".mp3", "");
    checkAnswerHR(selectedCup);
}

function confirmChoiceSoundHR() {
    var selectedCup = document.getElementById("audioImageOptions").value.replace(".png", "");
    checkAnswerHR(selectedCup);
}

function checkAnswerHR(selectedCup) {
    if (selectedCup === (currentCupTypeHR === "image" ? cupImagesHR[currentCupIndexHR].replace(".png", "") : cupMusicHR[currentCupIndexHR].replace(".mp3", ""))) {
        playerScoreHR++;
    }

    remainingQuestionsHR--;
    updateScoreboardHR();
    if (remainingQuestionsHR > 0) {
        if (currentCupTypeHR === "image") {
            nextQuestionImageHR();
        } else if (currentCupTypeHR === "sound") {
            nextQuestionSoundHR();
        }
    } else {
        endGameHR();
    }
}

function updateScoreboardHR() {
    document.getElementById("playerNameSpanHR").textContent = currentPlayerNameHR;
    document.getElementById("remainingQuestionsSpanHR").textContent = remainingQuestionsHR;
    document.getElementById("playerScoreSpanHR").textContent = playerScoreHR;
}

function endGameHR() {
    document.getElementById("mark").style.display = "initial";
    document.getElementById("new").style.display = "initial";
    document.getElementById("confirmImageBtn").style.display = "none";
    document.getElementById("confirmSoundBtn").style.display = "none";
}

function playCupSoundHR() {
    var audio = new Audio("../AudioLiang/" + document.getElementById("imageSoundOptions").value);
    audio.play();
}

function putCupPhotoHR() {
    document.getElementById("animalImage").style.display = "block";
    document.getElementById("animalImage").src = "../ImgLiang/" + document.getElementById("audioImageOptions").value;
}

function newGameHR() {
    location.reload();
}

//////////////////////////////////////////////////////////////////////////////////////////
function createSafeCounterHR() {
    let clickCountHR = 0;

    return {
        incrementHR: function () {
            clickCountHR++;
        },
        getCountHR: function () {
            return clickCountHR;
        },
        resetHR: function () {
            clickCountHR = 0;
        }
    };
}

let leftButtonCounterHR;
let rightButtonCounterHR;
let correctClicksHR;
let incorrectClicksHR;

const leftButtonHR = document.getElementById('leftButtonHR');
const rightButtonHR = document.getElementById('rightButtonHR');
const newGameButtonHR = document.getElementById('newGameButton');

function generateRandomNumberHR() {
    return Math.floor(Math.random() * 298) + 1;
}

function updateButtonsHR() {
    const leftNumberHR = generateRandomNumberHR();
    const rightNumberHR = generateRandomNumberHR();

    leftButtonHR.textContent = leftNumberHR;
    rightButtonHR.textContent = rightNumberHR;

    leftButtonHR.onclick = function () {
        leftButtonCounterHR.incrementHR();
        if (leftNumberHR < rightNumberHR) {
            correctClicksHR++;
        } else {
            incorrectClicksHR++;
        }
        updateClickCountDisplayHR();
        updateScoreDisplayHR();
        updateButtonsHR();
    };

    rightButtonHR.onclick = function () {
        rightButtonCounterHR.incrementHR();
        if (rightNumberHR < leftNumberHR) {
            correctClicksHR++;
        } else {
            incorrectClicksHR++;
        }
        updateClickCountDisplayHR();
        updateScoreDisplayHR();
        updateButtonsHR();
    };
}

function resetCountersHR() {
    leftButtonCounterHR = createSafeCounterHR();
    rightButtonCounterHR = createSafeCounterHR();
    correctClicksHR = 0;
    incorrectClicksHR = 0;
    updateClickCountDisplayHR();
    updateScoreDisplayHR();
    updateButtonsHR();
}

function updateClickCountDisplayHR() {
    document.getElementById("leftCountDisplayHR").textContent = "Left Clicks: " + leftButtonCounterHR.getCountHR();
    document.getElementById("rightCountDisplayHR").textContent = "Right Clicks: " + rightButtonCounterHR.getCountHR();
}

function updateScoreDisplayHR() {
    const scoreHR = correctClicksHR - incorrectClicksHR;
    document.getElementById("scoreDisplayHR").textContent = "Score: " + scoreHR;
}

document.getElementById("leftCountDisplayHR").onclick = function() {
    leftButtonCounterHR.resetHR();
    updateClickCountDisplayHR();
};

document.getElementById("rightCountDisplayHR").onclick = function() {
    rightButtonCounterHR.resetHR();
    updateClickCountDisplayHR();
};

newGameButtonHR.onclick = resetCountersHR;

resetCountersHR(); // 初始化游戏
//////////////////////////////////////////////////////////////////////////////////////////