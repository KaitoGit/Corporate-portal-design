let operatorsHR = ["+", "-", "*", "/"];  // Define your operators here
let operatorsAllHR = ["%","**"]; // Additional operators if needed
//这两行定义了运算符数组，`operatorsHR` 包含了基本运算符，而 `operatorsAllHR` 包含了额外的运算符。
function startCalculatorHR() {
    document.getElementById("calculatorHR").style.display = "initial";
    document.getElementById("operatorsHR").style.display = "none";
    document.getElementById("memoryHR").style.display = "none";
    workingOperatorsHR();
    allOperatorsHR();
}
//这个函数在页面加载时被调用，用于初始化计算器的显示，并调用其他函数。
function switchToOperatorsHR() {
    document.getElementById("calculatorHR").style.display = "none";
    document.getElementById("operatorsHR").style.display = "initial";
    document.getElementById("memoryHR").style.display = "none";
    let selectHR = document.getElementById("selectOperatorHR");
    let selectChangeHR = document.getElementById("removeSelectHR");
    selectChangeHR.appendChild(selectHR);
}
//当用户点击"Change Operators"按钮时，这个函数将计算器隐藏，显示运算符选择界面，
//并移动选择运算符的下拉列表。
function backToCalculatorHR() {
    document.getElementById("calculatorHR").style.display = "initial";
    document.getElementById("operatorsHR").style.display = "none";
    document.getElementById("memoryHR").style.display = "none";
    let selectHR = document.getElementById("selectOperatorHR");
    let selectCalculatorHR = document.getElementById("calculatorSelectHR");
    selectCalculatorHR.appendChild(selectHR);
}
//当用户点击"Back to Calculator"按钮时，这个函数将运算符选择界面隐藏，
//显示计算器界面，并移动选择运算符的下拉列表。
function viewHistoryHR() {
    document.getElementById("calculatorHR").style.display = "none";
    document.getElementById("operatorsHR").style.display = "none";
    document.getElementById("memoryHR").style.display = "initial";
}
//当用户点击"View Calculation History"按钮时，这个函数将隐藏计算器界面，显示历史记录界面。
function calculateHR() {
    let number1HR = document.getElementById("number1HR").value;
    let number2HR = document.getElementById("number2HR").value;
    let operatorHR = document.getElementById("selectOperatorHR").value;
    let resultHR = number1HR + operatorHR + number2HR;
    resultHR = eval(resultHR);
    if (resultHR) {
        document.getElementById("resultHR").value = resultHR;
        document.getElementById("errorHR").innerHTML = "";
        insertRowHR(number1HR, operatorHR, number2HR, resultHR);
    } else {
        document.getElementById("errorHR").innerHTML = "Invalid data or operator";
        document.getElementById("resultHR").value = "";
    }
}
//当用户点击"="按钮时，
//这个函数从输入框中获取数字和运算符，执行计算并显示结果。如果输入无效或运算符无效，会显示错误消息。
function workingOperatorsHR() {
    let selectWorkingOperatorsHR = document.getElementById("selectOperatorHR");
    for (let operatorHR of operatorsHR) {
        let optionHR = document.createElement('option');
        optionHR.value = operatorHR;
        optionHR.innerHTML = operatorHR;
        selectWorkingOperatorsHR.appendChild(optionHR);
    }
}
//这个函数用于将基本运算符填充到运算符选择下拉列表 `selectOperatorHR` 中。
function allOperatorsHR() {
    let selectAddOperatorHR = document.getElementById("selectAddOperatorHR");
    for (let operatorHR of operatorsAllHR) {
        let optionHR = document.createElement('option');
        optionHR.value = operatorHR;
        optionHR.innerHTML = operatorHR;
        selectAddOperatorHR.appendChild(optionHR);
    }
}
//这个函数用于将所有运算符填充到额外运算符选择下拉列表 `selectAddOperatorHR` 中。
function addOperatorHR() {
    let selectWorkingOperatorsHR = document.getElementById("selectOperatorHR");
    let selectAddOperatorHR = document.getElementById("selectAddOperatorHR");
    let optionHR = selectAddOperatorHR.options[selectAddOperatorHR.selectedIndex];
    selectWorkingOperatorsHR.appendChild(optionHR);
}
//当用户点击"Add Operator"按钮时，这个函数将选择的运算符从额外运算符选择下拉列表移到基本运算符选择下拉列表
function removeOperatorHR() {
    let selectWorkingOperatorsHR = document.getElementById("selectOperatorHR");
    let selectAddOperatorHR = document.getElementById("selectAddOperatorHR");
    let optionHR = selectWorkingOperatorsHR.options[selectWorkingOperatorsHR.selectedIndex];
    selectAddOperatorHR.appendChild(optionHR);
}
//当用户点击"Remove Operator"按钮时，这个函数将选择的运算符从基本运算符选择下拉列表移到额外运算符选择下拉列表。
function insertRowHR(n1HR, opHR, n2HR, resultHR) {
    let N1HR = document.createElement('td');
    N1HR.innerHTML = n1HR;
    let OPHR = document.createElement('td');
    OPHR.innerHTML = opHR;
    let N2HR = document.createElement('td');
    N2HR.innerHTML = n2HR;
    let equalHR = document.createElement('td');
    equalHR.innerHTML = "=";
    let RESHR = document.createElement('td');
    RESHR.innerHTML = resultHR;
    let spaceHR = document.createElement('td');
    spaceHR.innerHTML = "&#x1F449" ;
    let DELETEHR = document.createElement('td');
    DELETEHR.innerHTML = "delete";
    let rowHR = document.createElement('tr');
    rowHR.appendChild(N1HR);
    rowHR.appendChild(OPHR);
    rowHR.appendChild(N2HR);
    rowHR.appendChild(equalHR);
    rowHR.appendChild(RESHR);
    rowHR.appendChild(spaceHR);
    rowHR.appendChild(DELETEHR);
    let tableHR = document.getElementById("memoryCalculationsHR");
    tableHR.appendChild(rowHR);
    DELETEHR.onclick = function () {
        this.parentElement.remove();
    };
}
//这个函数用于将计算结果以及相关数据插入到历史记录表格中。
//同时，它还创建一个"delete"按钮，以便用户可以删除历史记录中的某一行。