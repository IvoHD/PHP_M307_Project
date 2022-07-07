const { Value } = require("sass");

// Javascript
console.info('JS geladen.');
var nameInput = document.getElementById("name");
var emailInput = document.getElementById("email");
var telInput = document.getElementById("tel");
var categoryInput = document.getElementById("category");
var fruitInput = document.getElementById("fruit");
var isDriedInput = document.getElementById("isDried");
var submitInput = document.getElementById("submit");

function validation ()
{
    if(nameInput.getAttribute("value").length > 50)
    {
        e.preventdefault();
    }
    if(emailInput.getAttribute("value").length > 50)
    {
        e.preventdefault();
    }
}

submit.addEventListener(click, validation());
