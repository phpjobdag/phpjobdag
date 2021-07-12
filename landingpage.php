<section id="top" class="landingpage">
    <section class="header__section">
        <h3 class="header__section__info"><?php echo $lang['introDate']; ?></h3>
        <h1 class="header__section__title">PHP JOBDAG</h1>
        <h4 class="header__section__subtitle"><?php echo $lang['intro1']; ?></h4>
        <a href="#signup" class="header__section__registerlink"><?php echo $lang['intro2']; ?></a>
        
    </section>

    <section class="header__counter">

        <h3 class="header__counter__text">
         <?php echo $lang['counterText']; ?>    
        </h3>
        <section class="header__counter__wrapper">
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
    </section>
</section>
        <!-- Countdown Script -->
        <script>
            let countDownDate = <?php echo strtotime('Aug 26, 2021 07:00:00') ?> * 1000;
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
         </section>
