// Ingredients
const alcoholList = ["Brandy", "Gin", "Rum", "Tequila", "Vodka", "Whiskey"];
const juiceList1 = ["Lemon Juice", "Lime Juice"];
const juiceList2 = ["Apple", "Orange", "Pineapple", "Cranberry"];
const fruitList = ["Apple", "Blackberry", "Blood Orange", "Cranberry", "Grapefruit", "Orange", "Peach", "Pineapple", "Plum", "Raspberry", "Strawberry", "Passionfruit"];
const bittersList = ["Grapefruit", "Chocolate", "Peach", "Lemon", "Cherry", "Rhubarb", "Plum", "Mint"]

// -------------------------------------------------------- //

//* Cocktail Generator

// Liquor Selector
const refreshButton = document.getElementById("refresh");
const liquorP = document.querySelector(".rLiquor");
const fruitP = document.querySelector(".rFruit");
const bittersP = document.querySelector(".rBitters");

// Random Generator
function randomItem(arr) {
    const randomIndex = Math.floor(Math.random() * arr.length);
    return arr[randomIndex];
}

refreshButton.addEventListener("click", () => {
    liquorP.textContent = randomItem(alcoholList);
    fruitP.textContent = randomItem(fruitList);
    bittersP.textContent = randomItem(bittersList);
});