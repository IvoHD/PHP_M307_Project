
// Javascript
console.info('JS geladen.');

function validation ()
{
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var telInput = document.getElementById("tel");
    var categoryInput = document.getElementById("category");
    var fruitInput = document.getElementById("fruit");
    var isDriedInput = document.getElementById("isDried");
    var submitInput = document.getElementById("submit");
    if(nameInput.getAttribute("value").length > 50)
    {
        alert("Bitte geben sie ihren Echten Namen ein.");
        return false;
    }
    if(emailInput.getAttribute("value").length > 50 || emailInput.getAttribute("value").length < 5 || !(emailInput.getAttribute("value").includes("@")))
    {
        alert("Bitte geben sie eine gültige E-Mail Addresse an." + emailInput.getAttribute("value"));
        return false;
    }
    if(telInput.getAttribute("value").length > 25)
    {
        alert("Bitte geben sie eine gültige Telefonnummer an.");
        return false;
    }
    if(!(categoryInput.getAttribute("value").includes("kg")))
    {
        alert("Bitte wählen sie einen Eintrag im Dropdown.");
        return false;
    }
    if(fruitInput.getAttribute("value").length > 50)
    {
        alert("Bitte geben sie weniger Früchte an.");
        return false;
    }
    if(isDriedInput.getAttribute("value") != true || isDriedInput.getAttribute("value") != false)
    {
        alert("Bitte ändern sie nicht den Code der Webseite.");
        return false;
    }

}

submitInput.addEventListener("click", validation);
