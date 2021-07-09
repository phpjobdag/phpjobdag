window.onload = function(){   
  
      
     var myNav = document.getElementById("header");  
   var eng = document.getElementById("eng"); 
    var engMobile = document.getElementById("engMobile");
    var drop = document.getElementById("header__mobile__dropdown");   
    var footerEn = document.getElementById("footer__en");
    footerEn.parentNode.style.background="white";
    footerEn.style.color="black";
    checkWelkeBar();  
    function checkWelkeBar(){
    var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;   
    eng.style.background="white";
    engMobile.style.background="white";
    engMobile.childNodes[0].style.color="#BA6EC6";
    if (scrollTop >= window.innerHeight ) {
      myNav.classList.add("nav__color2");
      eng.style.color=" black";
      engMobile.childNodes[0].style.color="black";
      drop.style.background="#001220";
      
  } 
  else { 
      
      myNav.classList.remove("nav__color2");
   eng.style.color=" #BA6EC6";
   engMobile.childNodes[0].style.color="#BA6EC6";
      engMobile.childNodes[0].classList.remove("lang__icon");
      drop.style.background="#ba6ec6"; 
  }
    }

    

   window.onscroll = function () { 

  checkWelkeBar();

}
      
   
}