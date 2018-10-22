
var navButton = document.getElementById("menu-btn");
var hiddenNav = document.getElementById("hidden-nav-wrapper");
var menuButton = document.getElementById("menu-btn");
var btnLine = document.querySelectorAll(".btn-line");
var exitNavScreen = document.getElementById("hidden-nav-background");
var floatingLinks = document.querySelectorAll(".second-section-content-inner-div");
var logIn = document.getElementById("login");
var loginWrapper = document.getElementById("login-wrapper");
var loginContainer = document.getElementById("login-container");
var middleHeadline = document.getElementById("middle-sub-headline");
var loginX = document.getElementById("login-X");
var signUpForm = document.getElementById("sign-up");
var signInForm = document.getElementById("sign-in");
var signUp = document.getElementById("signUp");
var signIn = document.getElementById("signIn");
var navOn = 0;
var logOn = 0;
// Nav button js
navButton.addEventListener("click", function () {
    if (navOn == 0) {
        console.log("on");
        hiddenNav.classList.remove("remove");
        menuButton.classList.add("menu-button-right");
        btnLine.forEach(btnLine =>btnLine.classList.add("menu-X-button"));
        floatingLinks.forEach(floatingLinks => floatingLinks.style.position = " inherit");
        navOn = 1;
    }
    else {
        console.log("off");
        hiddenNav.classList.add("remove");
        menuButton.classList.remove("menu-button-right");
        btnLine.forEach(btnLine => btnLine.classList.remove("menu-X-button"));
        floatingLinks.forEach(floatingLinks => floatingLinks.style.position = "relative");
        navOn = 0;

    }
});
// Exit hidden nav by clicking transparent area
hiddenNav.addEventListener("click", function () {
    hiddenNav.classList.add("remove");
    menuButton.classList.remove("menu-button-right");
    btnLine.forEach(btnLine => btnLine.classList.remove("menu-X-button"));
    floatingLinks.forEach(floatingLinks => floatingLinks.style.position = "relative");
    navOn = 0;
});

// Login/Register
logIn.addEventListener("click", function () {
    loginWrapper.classList.remove("remove");
    loginContainer.classList.remove("remove");
    loginX.classList.remove("remove");
    floatingLinks.forEach(floatingLinks => floatingLinks.style.position = "inherit");
    middleHeadline.style.position = "unset";

});
loginX.addEventListener("click", function () {
    loginWrapper.classList.add("remove");
    loginContainer.classList.add("remove");

    loginX.classList.add("remove");
    floatingLinks.forEach(floatingLinks => floatingLinks.style.position = " relative");
    middleHeadline.style.position = "absolute";
});
signIn.addEventListener("click",function(){
    signUpForm.classList.add("close-sign-up");
    signInForm.classList.remove("close-sign-in");
    
});
signUp.addEventListener("click",function(){
    signUpForm.classList.remove("close-sign-up");
    signInForm.classList.add("close-sign-in");
    
});



