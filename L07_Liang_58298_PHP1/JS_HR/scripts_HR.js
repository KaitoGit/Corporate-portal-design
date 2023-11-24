// Array of town names
let towns = ["Warsaw", "London", "Berlin", "Kyiv", "Paris"];

// Array of product names
let products = ["monitor", "computer", "keyboard", "CPU", "GPU", "Memory"];

// Array of quantity numbers
let quantity = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

// Function to initialize the town selection dropdown
function startStart() {
    let selectTown = document.getElementById("selectTown");
    // Loop through each town and create an option element for it
    for (let town of towns) {
        let option = document.createElement('option');
        option.value = option.innerHTML = town;
        selectTown.appendChild(option); // Append the option to the dropdown
    }
}

// Function to initialize the product and quantity selection dropdowns
function startOrder() {
    orderProducts(); // Initialize product selection
    orderQuantity(); // Initialize quantity selection
}

// Function to populate product selection dropdowns
function orderProducts() {
    // Get product selection dropdown elements
    let selectProd1 = document.getElementById("selectProd1");
    let selectProd2 = document.getElementById("selectProd2");
    let selectProd3 = document.getElementById("selectProd3");
    // Loop through each product and create an option element for it
    for (let product of products) {
        let option1 = document.createElement('option');
        option1.value = option1.innerHTML = product;
        selectProd1.appendChild(option1); // Append to the first dropdown
        let option2 = document.createElement('option');
        option2.value = option2.innerHTML = product;
        selectProd2.appendChild(option2); // Append to the second dropdown
        let option3 = document.createElement('option');
        option3.value = option3.innerHTML = product;
        selectProd3.appendChild(option3); // Append to the third dropdown
    }
}

// Function to populate quantity selection dropdowns
function orderQuantity() {
    // Get quantity selection dropdown elements
    let selectNo1 = document.getElementById("selectNo1");
    let selectNo2 = document.getElementById("selectNo2");
    let selectNo3 = document.getElementById("selectNo3");
    // Loop through each quantity number and create an option element for it
    for (let numb of quantity) {
        let option1 = document.createElement('option');
        option1.value = option1.innerHTML = numb;
        selectNo1.appendChild(option1); // Append to the first dropdown
        let option2 = document.createElement('option');
        option2.value = option2.innerHTML = numb;
        selectNo2.appendChild(option2); // Append to the second dropdown
        let option3 = document.createElement('option');
        option3.value = option3.innerHTML = numb;
        selectNo3.appendChild(option3); // Append to the third dropdown
    }
}