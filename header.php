
    <header id="header" class="header">  
        
<?php

if($lang["lang"]=="en"){
       echo ' <script type="text/javascript" src="jsFiles/eng.js"></script>  ';
   
}else{
    echo ' <script type="text/javascript" src="jsFiles/nl.js"></script>  ';
}

?>
        <nav class="header__nav">
     
            <ul class="header__nav__list">
                <li class="header__nav__list__item">
                    <a href="#header"><?php echo $lang['nav1']; ?></a>
                </li>

                <li class="header__nav__list__item">
                    <a href="#students"><?php echo $lang['nav2']; ?></a>
                </li>

                <li class="header__nav__list__item">
                    <a href="#agenda"><?php echo $lang['nav3']; ?></a>
                </li>

                <li class="header__nav__list__item">
                    <a href="#course"><?php echo $lang['nav4']; ?></a>
                </li>

                <ul class="header__nav__lang">
                    <li class="header__nav__lang__switch"><a  id="eng" href="?lang=en">EN</a></li>
                    <li class="header__nav__lang__switch"><a id="nl" href="?lang=nl">NL</a></li>
                </ul>
                <a href="#footer"><input type="button" value="<?php echo $lang['intro2']; ?>" class="header__mobile__button"></a>
            </ul>
        </nav>

        <nav class="header__mobile">
            <a href="#footer"><input type="button" value="<?php echo $lang['intro2']; ?>" class="header__mobile__button"></a>
            <i class="fas fa-bars header__mobile__hamburger" id="navknop"></i>           
        </nav> 

        <section id="header__mobile__dropdown">
            <a class="header__mobile__dropdown__link" href="#students"><?php echo $lang['nav2']; ?></a>
            <a class="header__mobile__dropdown__link" href="#agenda"><?php echo $lang['nav3']; ?></a>
            <a class="header__mobile__dropdown__link" href="#course"><?php echo $lang['nav4']; ?></a>
            <section id="header__mobile_dropdown__languages">
                <p id="engMobile"><a href="?lang=en">EN</a></p>
                <p id="nlMobile"><a href="?lang=nl">NL</a></p>
                
            </section>
        </section>

        <script>
            // open,close menu
            let navKnop = document.getElementById("navknop");
            navKnop.addEventListener("click", function () {
            let menu = document.getElementById("header__mobile__dropdown");
                if (menu.style.display == "flex") {
                    menu.style.display = "none";
                } else {
                    menu.style.display = "flex";
                }
            })
        </script>


 </header>   

