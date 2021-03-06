
    <header id="header" class="header">  
        
<?php

if($lang["lang"]=="en"){
       echo ' <script type="text/javascript" src="jsFiles/eng.js"></script>  ';
   
}else{
    echo ' <script type="text/javascript" src="jsFiles/nl.js"></script>  ';
}

?>
        <nav class="header__nav">
            <div class="margin__wrapper">
                <div class="header__nav__list">
                    <a class="header__nav__list__item" href="#top">
                        <?php echo $lang['nav1']; ?>
                    </a>

                    <a class="header__nav__list__item" href="#students">
                    <?php echo $lang['nav2']; ?>
                    </a>

                    <a class="header__nav__list__item" href="#agenda">
                        <?php echo $lang['nav3']; ?>
                    </a>

                    <a class="header__nav__list__item" href="#course">
                    <?php echo $lang['nav4']; ?>
                    </a>

                    <ul class="header__nav__lang">
                        <li class="header__nav__lang__switch"><a id="eng" href="?lang=en">EN</a></li>
                        <li class="header__nav__lang__switch"><a  id="nl" href="?lang=nl">NL</a></li>
                    </ul>
                    <a href="#footer"><input type="button" value="<?php echo $lang['intro2']; ?>" class="header__mobile__button"></a>
                </div>
        </div>
        </nav>

<!--    NAVIGATIE MOBIEL     -->

        <nav class="header__mobile">
            <a href="#footer"><input type="button" value="<?php echo $lang['intro2']; ?>" class="header__mobile__button"></a>
            <i class="fas fa-bars header__mobile__hamburger" id="navknop"></i>           
        </nav> 

        <section id="header__mobile__dropdown">
            <a id="linkHome" class="header__mobile__dropdown__link" href="#top"><?php echo $lang['nav1']; ?></a>
            <a id="linkStudents" class="header__mobile__dropdown__link" href="#students"><?php echo $lang['nav2']; ?></a>
            <a id="linkEvent" class="header__mobile__dropdown__link" href="#agenda"><?php echo $lang['nav3']; ?></a>
            <a id="linkCourse" class="header__mobile__dropdown__link" href="#course"><?php echo $lang['nav4']; ?></a>
            <section id="header__mobile_dropdown__languages">
                <p id="engMobile"><a href="?lang=en">EN</a></p>
                <p id="nlMobile"><a href="?lang=nl">NL</a></p>
                
            </section>
        </section>


<!--    EINDE NAVIGATIE MOBIEL     -->

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
            });

            let linkHome = document.getElementById("linkHome");
            let linkStudents = document.getElementById("linkStudents");
            let linkEvent = document.getElementById("linkEvent");
            let linkCourse = document.getElementById("linkCourse");
            
            let arr = [linkHome, linkStudents,linkEvent,linkCourse];
            let menu = document.getElementById("header__mobile__dropdown");
            for(let b=0;b<4;b++){
            arr[b].addEventListener("click",function(){
                menu.style.display="none";
            });
            }
        </script>


 </header>   

