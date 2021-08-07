// console.log("connected front-page-nav.js");

//Device Judge
function isMobile() {
  if (navigator.userAgent.match(/iPhone|iPad|Android/)) {
    return true;

  } else if (navigator.userAgent.match(/Webkit/)){
    return true;
    
  } else if (navigator.maxTouchPoints > 0){ 
    return true;
    
  } else {
    return false;
  }
}

//Define menus in front-page
const menus = document.querySelectorAll("body.page-front main .wp-block-group:nth-child(2) .wp-block-group__inner-container .wp-block-cover .wp-block-cover__inner-container p a");

// console.log(menus);


// if mobile, show the menu text when the page loads (font-size up)
if(isMobile()){
    window.addEventListener("load", ()=> {
        for(i=0; i<menus.length; i++){
            menus[i].style.fontSize = "40px";
        }
    })
}