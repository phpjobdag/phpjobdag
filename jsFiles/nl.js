window.onload = function(){         
   var myNav = document.getElementById("header");  
   var nl = document.getElementById("nl"); 
   var nlMobile = document.getElementById("nlMobile");
   var drop = document.getElementById("header__mobile__dropdown");   
   var en = document.getElementById("eng");
   en.style.color="white";
    nl.style.background="white";
    nl.style.color=" #BA6EC6";
    nlMobile.style.background="white";
    nlMobile.childNodes[0].style.color="#BA6EC6";
    checkWelkeBar;
    function checkWelkeBar(){
        var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
    if (scrollTop >= window.innerHeight ) {
      myNav.classList.add("nav__color2");
      nl.style.color=" black";
      nlMobile.childNodes[0].style.color="black";
      drop.style.background="#001220";
      en.style.color="white";
      
  } 
  else { 
      
      myNav.classList.remove("nav__color2");
   nl.style.color=" #BA6EC6";
   nlMobile.childNodes[0].style.color="#BA6EC6";
      nlMobile.childNodes[0].classList.remove("lang__icon");
      drop.style.background="#ba6ec6"; 
      en.style.color="white";
      
  }

    }
   
    window.onscroll = function () { 
checkWelkeBar();
};

}
      
   
