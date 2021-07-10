window.onload = function(){   
  
      
     var myNav = document.getElementById("header");  
   var eng = document.getElementById("eng"); 
    var engMobile = document.getElementById("engMobile");
    var drop = document.getElementById("header__mobile__dropdown");  
    var hover = document.getElementsByClassName("header__nav__list__item");
    var nl = document.getElementById("nl");
    var button = document.getElementsByClassName("header__mobile__button");
   
    checkWelkeBar();  
    function checkWelkeBar(){
    var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;   
    eng.style.background="white";
    nl.classList.add("hoverBlack");
    nl.classList.remove("hoverPink");
    
    engMobile.style.background="white";
    engMobile.childNodes[0].style.color="#BA6EC6";
    if (scrollTop >= window.innerHeight ) {
      button[0].classList.add("hoverBlack");
      button[0].classList.remove("hoverPink");
      myNav.classList.add("nav__color2") ;
      eng.style.color="black";
      engMobile.childNodes[0].style.color="black";
      drop.style.background="#001220";
   
       
      
 
}else { 
      
      myNav.classList.remove("nav__color2");
   eng.style.color=" #BA6EC6";
   nl.classList.add("hoverPink");
   nl.classList.remove("hoverBlack");
   button[0].classList.add("hoverPink");
   button[0].classList.remove("hoverBlack");
   engMobile.childNodes[0].style.color="#BA6EC6";
      engMobile.childNodes[0].classList.remove("lang__icon");
      drop.style.background="#ba6ec6";  
    
    
    }

   }   

   window.onscroll = function () { 

  checkWelkeBar();
 

}
      
   
}