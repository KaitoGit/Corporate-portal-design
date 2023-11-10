let minWords, maxWords;
let wordCount;
let wordNumber;

function initPageHR() {
    minWords = 4;
    maxWords = 8;
    createSelect();
}

function createSelect() {
    let wordCountSelect = document.getElementById("wordCountSelectHR");
    for (let i = minWords; i <= maxWords; i++) {
        let wordOption = document.createElement('option');
        wordOption.innerHTML = wordOption.value = i;
        wordCountSelect.appendChild(wordOption);
    }
    let selected = Math.floor((maxWords - minWords) / 2);
    wordCountSelect.getElementsByTagName("option")[selected].selected = true;
}

function startHR() {
    wordNumber = 1;
    document.getElementById("wordCountSelectHR").disabled = true;
    document.getElementById("startBtnHR").disabled = true;
    document.getElementById("stopBtnHR").disabled = false;
    document.getElementById("wordInputHR").disabled = false;
    document.getElementById("enterBtnHR").disabled = false;
    document.getElementById("wordInputHR").value = "";
    wordCount = parseInt(document.getElementById("wordCountSelectHR").value);
    let typedWordsContainer = document.getElementById("typedWordsHR");
    if (typedWordsContainer.children.length > 0) {
        typedWordsContainer.removeChild(typedWordsContainer.lastChild);
    }
    let wordsTable = document.createElement('table');
    typedWordsContainer.appendChild(wordsTable);
    let rowTitle = wordsTable.insertRow(0);
    let cell_0a = rowTitle.insertCell(0);
    cell_0a.innerHTML = "No";
    let cell_0b = rowTitle.insertCell(1);
    cell_0b.innerHTML = "Typed from input field";
    for (let i = 1; i <= wordCount; i++) {
        let row = wordsTable.insertRow(i);
        let cell_1 = row.insertCell(0);
        cell_1.innerHTML = i;
        let cell_2 = row.insertCell(1);
        cell_2.id = "word" + i + "HR";
    }

    // 添加监听事件，当用户在文本框中按下 Enter 键时触发 enterWordHR() 函数
    document.getElementById("wordInputHR").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            enterWordHR();
        }
    });
}



function stopHR() {
    document.getElementById("wordCountSelectHR").disabled = false;
    document.getElementById("startBtnHR").disabled = false;
    document.getElementById("stopBtnHR").disabled = true;
    document.getElementById("wordInputHR").disabled = true; // 禁用文本框，防止用户继续输入
    document.getElementById("enterBtnHR").disabled = true;
}

function enterWordHR() {
    let word = document.getElementById("wordInputHR").value;
    if (wordNumber <= wordCount) {
        document.getElementById("word" + wordNumber + "HR").innerHTML = word;
        document.getElementById("wordInputHR").value = "";
        wordNumber++;
        if (wordNumber > wordCount) {
            document.getElementById("enterBtnHR").disabled = false;
            document.getElementById("stopBtnHR").disabled = false; // 启用 stop 按钮
            document.getElementById("wordInputHR").disabled = true; // 禁用文本框，防止用户继续输入
        } else {
            // 将焦点移动到文本框内，以便用户继续输入
            document.getElementById("wordInputHR").focus();
        }
    }
}

function handleKeyPress(event) {
    if (event.key === "Enter") {
        submitWordHR();
    }
}

function submitWordHR() {
    let word = document.getElementById("wordInputHR").value;
    if (word.trim() !== "") {
        document.getElementById("word" + wordNumber + "HR").innerHTML = word;
        document.getElementById("wordInputHR").value = "";
        wordNumber++;
        if (wordNumber > wordCount) {
            document.getElementById("enterBtnHR").disabled = true;
        }
    } else {
        alert("Please enter a word before submitting.");
    }
}
