<footer id="footer" class="footer">
    <h2 class="footer__title">Save your spot</h2>

    <section class="footer__register">
         <form class="footer__register__form" action="" method="post">
            <label class="footer__register__form__label" for="name">Your Name</label>
            <input class="footer__register__form__input" type="text" id="name" required>
            <label class="footer__register__form__label" for="company-name">Company name</label>
            <input class="footer__register__form__input" type="text" id="company-name" required>
            <label class="footer__register__form__label" for="telephone">Your digits</label>
            <input class="footer__register__form__input" type="tel" id="telephone" required>
            <label class="footer__register__form__label" for="email">Email</label>
            <input class="footer__register__form__input" type="email" id="email" required>
            <input class="footer__register__form__submit" type="submit" value="register">
        </form>
        <article class="footer__register__info">
            <h3 class="footer__register__info__title">Fill in your details and save your spot!</h3>
            <p class="footer__register__info__location">This event is fully remote.</p>
            <p class="footer__register__info__date">Date: 26 August 2021</p>
            <p class="footer__register__info__approval">After your registration is approved we will provide you with a meeting link and the password to the event.</p>
        </article>
    </section>

    <section class="footer__info">
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

        <article class="footer__info__thx">
            <h6 class="footer__info__thx__title">Dankwoord</h6>
            <p class="footer__info__thx__body">Lorem10</p>
        </article>

        <article class="footer__info__partners">
            <h6 class="footer__info__partners__title">Partners</h6>
            <img class="footer__info__partners__image" src="img/partners__multimedi.svg" alt="logo multimedi">
            <img  class="footer__info__partners__image" src="img/partners__cevora.svg" alt="logo cevora">
        </article>

        <article class="footer__info__tools">
            <h6 class="footer__info__tools__title">Deze site werd gemaakt met</h6>
            <img class="footer__info__tools__img" src="img/tools__css3.svg" alt="css3 logo">
            <img class="footer__info__tools__img" src="img/tools__html5.svg" alt="html5 logo">
            <img class="footer__info__tools__img" src="img/tools__js.svg" alt="js logo">
            <img class="footer__info__tools__img" src="img/tools__vsc.svg" alt="vsc logo">
            <img class="footer__info__tools__img" src="img/tools__phpstorm.svg" alt="PHP storm logo">
        </article>
    </section>

    <section class="footer__lang">
        <ul class="footer__lang__lang">
            <li class="footer__lang__lang__switch"><a href="?lang=en">EN</a></li>
            <li class="footer__lang__lang__switch"><a href="?lang=nl">NL</a></li>
        </ul>
    </section>

    <section class="footer__copyright">
        <p class="footer__copyright__text">&copy; <?php echo date("Y");?> PHP</p>
        <p class="footer__copyright__corporation"></p>
        <img class="footer__copyright__vdablogo" src="img/partners__vdab.svg" alt="">
    </section>
</footer>