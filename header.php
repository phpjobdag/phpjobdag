
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

    

    <section class="header__section">
        <h3 class="header__section__info"><?php echo $lang['introDate']; ?></h3>
        <h1 class="header__section__title">PHP JOBDAG</h1>
        <h4 class="header__section__subtitle"><?php echo $lang['intro1']; ?></h4>
        <a href="#signup" class="header__section__registerlink"><?php echo $lang['intro2']; ?></a>
    </section>

    <section class="header__counter">

        <article class="header__counter__box">
            <h3 class="header__counter__box__time" id="days"></h3>
            <h3 class="header__counter__box__unit"><?php echo $lang['counter1']; ?></h3>
        </article>

        <article class="header__counter__box">
            <h3 class="header__counter__box__time" id="hours"></h3>
            <h3 class="header__counter__box__unit"><?php echo $lang['counter2']; ?></h3>
        </article>

        <article class="header__counter__box">
            <h3 class="header__counter__box__time" id="minutes"></h3>
            <h3 class="header__counter__box__unit"><?php echo $lang['counter3']; ?></h3>
        </article>

        <article class="header__counter__box">
            <h3 class="header__counter__box__time" id="seconds"></h3>
            <h3 class="header__counter__box__unit"><?php echo $lang['counter4']; ?></h3>
        </article>

        <!-- Countdown Script -->
        <script>
            let countDownDate = <?php echo strtotime('Aug 26, 2021 09:37:25') ?> * 1000;
            let now = <?php echo time() ?> * 1000;

            let x = setInterval(function() {

                now = now + 1000;

                let distance = countDownDate - now;

                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = days;

                document.getElementById("hours").innerHTML = hours;

                document.getElementById("minutes").innerHTML = minutes;

                document.getElementById("seconds").innerHTML = seconds;
                
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
        
    </section>


   