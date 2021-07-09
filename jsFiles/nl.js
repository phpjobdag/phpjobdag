window.onload = function(){         
   var myNav = document.getElementById("header");  
   var nl = document.getElementById("nl"); 
   var nlMobile = document.getElementById("nlMobile");
   var drop = document.getElementById("header__mobile__dropdown");   
   var hover = document.getElementsByClassName("header__nav__list__item");
   var en = document.getElementById("eng");
   var button = document.getElementsByClassName("header__mobile__button");

   nl.style.color="#BA6EC6";
   nl.style.background="white"
   en.classList.add("hoverPink");
      en.classList.remove("hoverBlack");
      for(var f=0;f<hover.length;f++){
        hover[f].classList.remove("hoverBlack");
        hover[f].classList.add("hoverPink");

    }
    button[0].classList.add("hoverPink");
    nlMobile.style.background="white";
    nlMobile.childNodes[0].style.color="#BA6EC6";

    
    checkWelkeBar;
    function checkWelkeBar(){
        var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
        nl.style.background="white";
         en.classList.add("hoverBlack");
    en.classList.remove("hoverPink");
    nlMobile.style.background="white";
    nlMobile.childNodes[0].style.color="#BA6EC6";
    if (scrollTop >= window.innerHeight ) {
       
      button[0].classList.add("hoverBlack");
      button[0].classList.remove("hoverPink");
      myNav.classList.add("nav__color2");
      nl.style.color=" black";
      nlMobile.childNodes[0].style.color="black";
      drop.style.background="#001220";
      for(var c=0;c<hover.length;c++){
        hover[c].classList.add("hoverBlack");
        hover[c].classList.remove("hoverPink");
    }
  } 
  else { 
      
      myNav.classList.remove("nav__color2");
      nl.style.color=" #BA6EC6";
      en.classList.add("hoverPink");
      en.classList.remove("hoverBlack");
      button[0].classList.add("hoverPink");
      button[0].classList.remove("hoverBlack");
   nlMobile.childNodes[0].style.color="#BA6EC6";
      nlMobile.childNodes[0].classList.remove("lang__icon");
      drop.style.background="#ba6ec6"; 
      
      for(var d=0;d<hover.length;d++){
        hover[d].classList.remove("hoverBlack");
        hover[d].classList.add("hoverPink");

    }
      
  }

    }
   
    window.onscroll = function () { 
checkWelkeBar();
};

}
      
   
