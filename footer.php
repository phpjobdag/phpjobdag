<footer id="footer" class="footer">
    <h2 class="footer__title"><?php echo $lang['footerTitle']; ?></h2>

    <div id="footer__wrapper">
    <section id="signup" class="footer__register"> 
        <article class="footer__register__info">
            <h3 class="footer__register__info__title"><?php echo $lang['footerSubtitle']; ?></h3>
            <p class="footer__register__info__location"><?php echo $lang['footerBody1']; ?></br>
            <?php echo $lang['footerBody2']; ?></p>
            <p class="footer__register__info__approval"><?php echo $lang['footerBody3']; ?></br>
            <?php echo $lang['footerBody4']; ?></p>
        </article>
         <form class="footer__register__form" action="" method="post">
            <!-- <label class="footer__register__form__label" for="name">Your Name</label> -->
            <input class="footer__register__form__input" type="text" id="name" placeholder="<?php echo $lang['formName']; ?>" required>
            <!-- <label class="footer__register__form__label" for="company-name">Company name</label> -->
            <input class="footer__register__form__input" type="text" id="company-name" placeholder="<?php echo $lang['formCompany']; ?>" required>
            <!-- <label class="footer__register__form__label" for="telephone">Your digits</label> -->
            <input class="footer__register__form__input" type="tel" id="telephone" placeholder="<?php echo $lang['formTelephone']; ?>" required>
            <!-- <label class="footer__register__form__label" for="email">Email</label> -->
            <input class="footer__register__form__input" type="email" id="email" placeholder="<?php echo $lang['formMail']; ?>" required>
            <input class="footer__register__form__submit" type="submit" value="<?php echo $lang['formSubmit']; ?>">
        </form>
       
    </section>

    <section class="footer__info">
        <article class="footer__info__thx">
            <h6 class="footer__info__thx__title"><?php echo $lang['footerThank1']; ?></h6>
            <p class="footer__info__thx__body"><?php echo $lang['footerThank2']; ?></p>
        </article>

        <section class="footer__info__team__partnerts__container">
            <article class="footer__info__team">
                <h6 class="footer__info__team__title">Project Team</h6>
                <ul class="footer__info__team__list">
                    <li class="footer__info__team__list__name">Alexander Decoz</li>
                    <li class="footer__info__team__list__name">Anastasya Ovchar</li>
                    <li class="footer__info__team__list__name">Arne Sneyers</li>
                    <li class="footer__info__team__list__name">Burcu Avci</li>
                    <li class="footer__info__team__list__name">Daniel Paz</li>
                    <li class="footer__info__team__list__name">Erik Hendriks</li>
                    <li class="footer__info__team__list__name">Geert Rumen</li>
                    <li class="footer__info__team__list__name">Mathijs Reykers</li>
                    <li class="footer__info__team__list__name">Miguel Duarte</li>
                    <li class="footer__info__team__list__name">Wouter Swerts</li>
                    <li class="footer__info__team__list__name">Yves Kerkhofs</li>
                </ul>
            </article>

        

            <article class="footer__info__partners">
                <h6 class="footer__info__partners__title">Partners</h6>
                <img class="footer__info__partners__image" src="img/partners__multimedi.svg" alt="logo multimedi">
                <img  class="footer__info__partners__image" src="img/partners__cevora.svg" alt="logo cevora">
            </article>
        </section>

        <!-- desktopsite geen container -->
        <article class="footer__info__team no__display">
                <h6 class="footer__info__team__title">Project Team</h6>
                <ul class="footer__info__team__list">
                    <li class="footer__info__team__list__name">Alexander Decoz</li>
                    <li class="footer__info__team__list__name">Anastasya Ovchar</li>
                    <li class="footer__info__team__list__name">Arne Sneyers</li>
                    <li class="footer__info__team__list__name">Burcu Avci</li>
                    <li class="footer__info__team__list__name">Daniel Paz</li>
                    <li class="footer__info__team__list__name">Erik Hendriks</li>
                    <li class="footer__info__team__list__name">Geert Rumen</li>
                    <li class="footer__info__team__list__name">Mathijs Reykers</li>
                    <li class="footer__info__team__list__name">Miguel Duarte</li>
                    <li class="footer__info__team__list__name">Wouter Swerts</li>
                    <li class="footer__info__team__list__name">Yves Kerkhofs</li>
                </ul>
            </article>

        

            <article class="footer__info__partners no__display">
                <h6 class="footer__info__partners__title">Partners</h6>
                <img class="footer__info__partners__image" src="img/partners__multimedi.svg" alt="logo multimedi">
                <img  class="footer__info__partners__image" src="img/partners__cevora.svg" alt="logo cevora">
            </article>

        <article class="footer__info__tools">
            <h6 class="footer__info__tools__title"><?php echo $lang['footerMade']; ?></h6>
            <img class="footer__info__tools__img" src="img/tools__css3.svg" alt="css3 logo">
            <img class="footer__info__tools__img" src="img/tools__html5.svg" alt="html5 logo">
            <img class="footer__info__tools__img" src="img/tools__js.svg" alt="js logo">
            <img class="footer__info__tools__img" src="img/tools__vsc.svg" alt="vsc logo">
            <img class="footer__info__tools__img" src="img/tools__phpstorm.svg" alt="PHP storm logo">
        </article>
    </section>

    <section class="footer__lang">
        <ul class="footer__lang__lang">
            <li class="footer__lang__lang__switch"><a id="footer__en" href="?lang=en">EN</a></li>
            <li class="footer__lang__lang__switch bg__white"><a id="footer__nl"href="?lang=nl">NL</a></li>
        </ul>
    </section>

    <section class="footer__copyright">
        <p class="footer__copyright__text">&copy; <?php echo date("Y");?> PHP</p>
        <p class="footer__copyright__corporation"></p>
        <img class="footer__copyright__vdablogo" src="img/partners__vdab.svg" alt="">
    </section>

            <svg id="footer__blob__orange" viewBox="0 0 943 746">
            <path d="M1.5775e-05 745.832C37.07 658.331 74.1401 570.829 111.405 473.214C148.67 375.445 186.326 267.409 278.025 218.371C369.725 169.333 515.859 179.141 636.824 152.63C757.594 125.966 853.586 62.9828 949.578 0L949.578 745.833L1.5775e-05 745.832Z" fill="#E1685E"/>
        </svg>

        <svg id="footer__blob__black" viewBox="0 0 1440 687">
            <path d="M-16 0C136.549 61.7737 289.408 123.547 474.138 150.393C659.178 177.239 876.089 169.012 1038.54 210.579C1201.3 252.002 1309.29 343.364 1375.51 433.57C1441.73 523.922 1465.86 613.118 1490 702.459H-16V0Z" fill="#001220"/>
        </svg>
    </div>
</footer>