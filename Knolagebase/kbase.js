'use strict';

/**navbar toggle */

const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const overlay = document.querySelector("[data-overlay]");

const elemArr = [navCloseBtn, overlay, navOpenBtn];

for (let i = 0; i < elemArr.length; i++) {
    elemArr[i].addEventListener("click", function () {
        navbar.classList.toggle("active");
        overlay.classList.toggle("active");
    });
}

/**toggle navbar & overlay when click any navbar-link */

const navbarLinks = document.querySelectorAll("[data-navbar-link]");

for (let i = 0; i < navbarLinks.length; i++) {
    navbarLinks[i].addEventListener("click", function () {
        navbar.classList.toggle("active");
        overlay.classList.toggle("active");

    });     
}

/*----------------------------------------------------*\
    #tabs
\*----------------------------------------------------*/

// source:https://www.youtube.com/watch?v=b5-ZyRfBaxI 

function showContent(activeTab, contentsID)
{
    var tabs=document.querySelectorAll('.buttons');
    var contents=document.querySelectorAll('.contents');
    var i=0;
    while(i<tabs.length){
        tabs[i].classList.remove('show');
        contents[i].classList.remove('show');
        i++;
    }
    activeTab.classList.add('show');
    document.getElementById(contentsID).classList.add('show');
}