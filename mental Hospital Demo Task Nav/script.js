var buttonElement2 = document.getElementsByClassName("vbpcart")[0];
var cartBox2 = document.getElementsByClassName("woocart")[0];

buttonElement2.addEventListener("click", handleClick);

function handleClick() {

    var currentDisplay = window.getComputedStyle(cartBox2).display;


    if (currentDisplay == "none") {
        
        cartBox2.style.display = "block";
    } else if(currentDisplay == "block") {
        cartBox2.style.display = "none";
    }
}