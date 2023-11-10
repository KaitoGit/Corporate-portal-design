let calculator = {
    operand1: 1,
    operand2: 1,
    opp1(x){
    this.operand1 += x;``
    },
    opp2(x){
    this.operand2 += x;``
    },
    add() {
    this.result = this.operand1 + this.operand2;
    }
    };
    calculator.add();
    calculator.result; //2
    calculator.opp1(10);
    calculator.opp2(20);
    calculator.add();
    calculator.result; //32