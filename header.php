
    <header id="header" class="header">
        <nav class="header__nav">

            <ul class="header__nav__list">
                <li class="header__nav__list__item">
                    <a href="#header">Home</a>
                </li>

                <li class="header__nav__list__item">
                    <a href="#students"><?php echo $lang['nav1']; ?></a>
                </li>

                <li class="header__nav__list__item">
                    <a href="#agenda"><?php echo $lang['nav2']; ?></a>
                </li>

                <li class="header__nav__list__item">
                    <a href="#course"><?php echo $lang['nav3']; ?></a>
                </li>

                <ul class="header__nav__lang">
                    <li class="header__nav__lang__switch"><a  id="eng" href="?lang=en">EN</a></li>
                    <li class="header__nav__lang__switch"><a id="nl" href="?lang=nl">NL</a></li>
                </ul>
                <a href="#signup"><input type="button" value=<?php echo $lang['intro2']; ?> class="header__mobile__button "></a>
            </ul>
        </nav>

        <nav class="header__mobile">
            <a href="#signup"><input type="button" value=<?php echo $lang['intro2']; ?> class="header__mobile__button "></a>
            <i class="fas fa-bars header__mobile__hamburger" id="navknop"></i>           
        </nav> 

        <section id="header__mobile__dropdown">
            <a class="header__mobile__dropdown__link" href=""><?php echo $lang['nav1']; ?></a>
            <a class="header__mobile__dropdown__link" href=""><?php echo $lang['nav2']; ?></a>
            <a class="header__mobile__dropdown__link" href=""><?php echo $lang['nav3']; ?></a>
            <section id="header__mobile_dropdown__languages">
                <p id="nl"><a href="?lang=nl">NL</a></p>
                <p id="eng"><a href="?lang=en">EN</a></p>
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

    

    

   