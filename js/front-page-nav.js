console.log("connected front-page-nav.js");


function isMobile() {
    if (navigator.userAgent.match(/iPhone|iPad|Android.+Mobile/)||window.ontouchstart !== 'undefined') {
      return true;
    } else {
      return false;
    }
}


const menus = document.querySelectorAll("body.page-front main .wp-block-group:nth-child(2) .wp-block-group__inner-container .wp-block-cover .wp-block-cover__inner-container p a");

console.log(menus);


if(isMobile()){
    window.addEventListener("load", ()=> {
        for(i=0; i<menus.length; i++){
            menus[i].style.fontSize = "40px";
        }
    })
}