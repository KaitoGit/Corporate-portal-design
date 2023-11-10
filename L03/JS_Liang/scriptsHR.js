let display = document.getElementById("display");
let currentInput = "";
let historyList = document.getElementById("history-list");

function appendToDisplay(value) {
    currentInput += value;
    display.value = currentInput;
}

function clearDisplay() {
    currentInput = "";
    display.value = "";
}

function calculateResult() {
    try {
        let result = eval(currentInput);
        display.value = result;
        const historyEntry = currentInput + " = " + result;
        saveToHistoryEntry(historyEntry);
        currentInput = result.toString();
    } catch (error) {
        display.value = "Error";
        currentInput = "";
    }
}

function calculateExponentiation() {
    currentInput += "**";
    display.value = currentInput;
}

function saveToHistoryEntry(entry) {
    if (currentInput !== "") {
        let listItem = document.createElement("li");
        listItem.textContent = entry;
        historyList.appendChild(listItem);
    }
}

function calculateCustom() {
    const input1 = parseFloat(document.getElementById("input1").value);
    const operator = document.getElementById("operator").value;
    const input2 = parseFloat(document.getElementById("input2").value);

    if (isNaN(input1) || isNaN(input2)) {
        document.getElementById("result").value = "Invalid input";
    } else {
        let customResult;
        switch (operator) {
            case "+":
                customResult = input1 + input2;
                break;
            case "-":
                customResult = input1 - input2;
                break;
            case "*":
                customResult = input1 * input2;
                break;
            case "/":
                if (input2 === 0) {
                    customResult = "Division by zero";
                } else {
                    customResult = input1 / input2;
                }
                break;
            default:
                customResult = "Invalid operator";
        }

        document.getElementById("result").value = customResult;
        const historyEntry = `${input1} ${operator} ${input2} = ${customResult}`;
        saveToHistoryEntry(historyEntry);
    }
}

function saveCustomToHistory() {
    const customHistoryEntry = document.getElementById("result").value;
    if (customHistoryEntry) {
        saveToHistoryEntry(customHistoryEntry);
    }
}
