/*
    VARIABLES
*/

var tesst = document.querySelector(".choice-menu-container");
var oui = tesst.querySelectorAll(".choice-menu-objects");
var projectImageTop = document.querySelector(".image-top");
var projectImageBot = document.querySelector(".image-bottom");

// Get position of the page vertically
var posX = window.scrollY;

// Get position of the Image Container
var Item1 = document.querySelector(".image-container-1");
var Item2 = document.querySelector(".image-container-2");
var Item3 = document.querySelector(".image-container-3");
var posItem1 = Item1.offsetTop;
var posItem2 = Item2.offsetTop;
var posItem3 = Item3.offsetTop;

oui[0].addEventListener('click', () => 
{
    oui[0].classList.add("selected");
    oui[1].classList.remove("selected");
    oui[2].classList.remove("selected");
    window.scrollTo({top: 0, behavior: "smooth"});
})

oui[1].addEventListener('click', () => 
{
    oui[1].classList.add("selected");
    oui[0].classList.remove("selected");
    oui[2].classList.remove("selected");
    window.scrollTo({top: posItem2, behavior: "smooth"});
})

oui[2].addEventListener('click', () => 
{
    oui[2].classList.add("selected");
    oui[0].classList.remove("selected");
    oui[1].classList.remove("selected");
    window.scrollTo({top: posItem3, behavior: "smooth"});
})

document.addEventListener('scroll', () => {
    let variantPosX = window.scrollY;
    let viewPosX = variantPosX + 320;

    if(variantPosX >= 0 && viewPosX < posItem2){
        oui[0].classList.add("selected");
        oui[1].classList.remove("selected");
        oui[2].classList.remove("selected");
    }
    else if(viewPosX >= posItem2 && viewPosX < posItem3) {
        oui[1].classList.add("selected");
        oui[0].classList.remove("selected");
        oui[2].classList.remove("selected");
    }
    else if (viewPosX >= posItem3){
        oui[2].classList.add("selected");
        oui[0].classList.remove("selected");
        oui[1].classList.remove("selected");
    }
})