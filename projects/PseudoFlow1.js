//! PseudoFlow.js
// written by Finn Middleton 10/06/2023
// This script will allow our chart to update dynamically as we input information into out textarea
// ----------------------------------------------------------------------------------------------//

// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function() {
    let pseudoInput = document.getElementById("pseudo").value;
    let testButton =document.getElementById("test");

    testButton.addEventListener('click', function () {
        console.log("Test button pressed");
    });
});
