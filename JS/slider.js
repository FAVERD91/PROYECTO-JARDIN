const slider = document.querySelector("#slider");

let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length-1];

const btnleft = document.querySelector("#btn-left");
const btnrigth = document.querySelector("#btn-rigth");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function next()
{
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition ="none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        slider.style.marginLeft="-100%";
    },500);
}

function prev()
{
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition ="none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        slider.style.marginLeft="-100%";
    },500);
}

btnrigth.addEventListener('click', function(){
    next();
});

btnleft.addEventListener('click', function(){
    prev();
});

setInterval(function(){
    next();
},5000);