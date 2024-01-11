//! PseudoFlow.js
// written by Finn Middleton 10/06/2023
// This script will allow our chart to update dynamically as we input information into out textarea
// ----------------------------------------------------------------------------------------------//

// Function to convert pseudo code to Mermaid flowchart syntax
function convertToFlowchart(input) {
    // Your logic to convert pseudo code to flowchart syntax goes here
    // You can use conditional statements, string manipulation, or regular expressions
    // to transform the pseudo code into Mermaid flowchart code.
    // Return the generated flowchart code as a string.

    return `
        graph TD
            A[${input}] --> B[Load Balancer]
            B --> C[Server01]
            B --> D[Server02]
    `;
}

// Get references to the necessary elements
const pseudoTextArea = document.getElementById('pseudo');
const outputParagraph = document.getElementById('output');
const chartDiv = document.getElementById('chart');

// Event listener for the form input
pseudoTextArea.addEventListener('input', function () {
    const pseudoCode = pseudoTextArea.value;
    const flowchartCode = convertToFlowchart(pseudoCode);

    if (flowchartCode) {
        chartDiv.innerHTML = ''; // Clear the previous chart
        outputParagraph.textContent = 'Flowchart updated successfully!';

        mermaid.initialize({ startOnLoad: false }); // Initialize mermaid

        mermaid.render('chart', flowchartCode, function (svgCode) {
            chartDiv.innerHTML = svgCode;
        });
    } else {
        outputParagraph.textContent = 'Invalid pseudocode!';
        chartDiv.innerHTML = ''; // Clear the chart
    }
});
