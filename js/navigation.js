// console.log("connected navigation.js");


// Click event for main menu in small screen
const mainMenuSlideBtn = document.getElementById("mainMenuSlideBtn");
const mainMenuSlide = document.querySelector(".main-menu-slide");

mainMenuSlideBtn.addEventListener('click', () => {
    // console.log("listening");

    if(mainMenuSlide.classList.contains("close")){

        mainMenuSlide.classList.remove("close");

    } else {
        mainMenuSlide.classList.add("close");

    }
    
})


