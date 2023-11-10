let rowCountHR, questionCountHR, sumHR, newAnswerHR; // 用于行数、问题数量、总和和新答案的变量
// 在全局添加正确答案的数量变量
let correctAnswersCount = 0;

// 开始游戏的函数
function startGame() {
    rowCountHR = document.getElementById("rowCountHR").value;
    questionCountHR = document.getElementById("questionCountHR").value;
    
    // 禁用行数和问题数量选择器，启用输入框，清除数字，设置初始值
    document.getElementById("rowCountHR").disabled = true;
    document.getElementById("questionCountHR").disabled = true;
    document.getElementById("sumInputHR").disabled = false;
    clearNumbers();
    document.getElementById("resultHR").innerText = "0";
    document.getElementById("remainingQuestionsHR").innerText = "Remaining questions: " + questionCountHR;
    
    // 启用任务和检查按钮，禁用开始按钮
    document.getElementById("taskBtnHR").disabled = false;
    document.getElementById("checkBtnHR").disabled = false;
    document.getElementById("startBtnHR").disabled = true;
    
    generateTask();
}

// 生成新任务的函数
function generateTask() {
    document.getElementById("taskBtnHR").disabled = true;
    document.getElementById("sumInputHR").disabled = false;
    clearNumbers();
    
    // 如果还有剩余问题，生成新数字并更新界面
    if (questionCountHR > 0) {
        document.getElementById("checkBtnHR").disabled = false;
        questionCountHR--;
        document.getElementById("remainingQuestionsHR").innerText = "Remaining questions: " + questionCountHR;
        sumHR = generateNumbers(rowCountHR);
        document.getElementById("resultHR").innerText = sumHR;
    } else {
        // 如果没有问题了，禁用检查按钮并更新界面
        document.getElementById("checkBtnHR").disabled = true;
        document.getElementById("remainingQuestionsHR").innerText = "No more questions";
        document.getElementById("startBtnHR").disabled = false;
    }
}

// 清除表格中的数字的函数
function clearNumbers() {
    for (let i = 1; i <= 6; i++) {
        document.getElementById("num" + i + "HR").innerText = "";
    }
}

// 生成随机数字并显示在表格中的函数
function generateNumbers(howManyNumbers) {
    let sum = 0;
    for (let i = 1; i <= howManyNumbers * 2; i++) { // 乘以2以生成对应行数的数字
        let randomNumber = Math.ceil(Math.random() * 9);
        sum += randomNumber;
        document.getElementById("num" + i + "HR").innerText = randomNumber;
    }
    return sum;
}

// 检查用户答案的函数
function checkAnswer() {
    let userAnswer = parseInt(document.getElementById("sumInputHR").value);
    let drawnSum = 0;
    for (let i = 1; i <= rowCountHR * 2; i++) {
        drawnSum += parseInt(document.getElementById("num" + i + "HR").innerText);
    }

    // 将用户答案与生成的总和进行比较，并更新结果
    if (userAnswer === drawnSum) {
        correctAnswersCount++; // 增加正确答案的数量
    }

    // 更新"Result"部分的内容以显示答对的题目数量
    document.getElementById("resultCountHR").innerText = correctAnswersCount;

    // 禁用检查按钮和输入框，如果还有问题，启用任务按钮
    document.getElementById("checkBtnHR").disabled = true;
    document.getElementById("sumInputHR").disabled = true;
    if (questionCountHR > 0) {
        document.getElementById("taskBtnHR").disabled = false;
    }
}

// 新游戏的函数，用于刷新页面
function newGame() {
    location.reload();
}


//要求：How many rows:后面代表的是行数，而不是数字的个数，比如说1行会生成num1HR和num2HR，2行会生成num1HRnum2HRnum3HRnum4HR，三行生成num1HRnum2HRnum3HRnum4HRnum5HRnum6HR，
//How many questions:后面代表的是问题数量
//resultHR后面代表的是用户输入的答案正确的个数，而不是结果
//remaining questions:后面代表的是剩余问题的数量
//checkanswerHR后面代表正确的答案，会与用户的输入进行比较，正确会说correct，错误会说wrong