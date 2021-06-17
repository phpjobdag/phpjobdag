<?php include_once "./common.php"; ?>
<!DOCTYPE html>
<html lang=<?php echo $lang['lang']; ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Jobdag development">
    <title>Jobdag</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>

<header id="header" class="header">

    <nav class="header__nav">
        <ul class="header__nav__list">
            <li class="header__nav__list__item">
                <a href="#header">Home</a>
            </li>
            <li class="header__nav__list__item">
                <a href="#students">Students</a>
            </li>
            <li class="header__nav__list__item">
                <a href="#agenda">Event Agenda</a>
            </li>
            <li class="header__nav__list__item">
                <a href="#course">Course Scope</a>
            </li>
        </ul>
        <ul class="header__nav__lang">
            <li class="header__nav__lang__switch"><a href="?lang=en">EN</a></li>
            <li class="header__nav__lang__switch"><a href="?lang=nl">NL</a></li>
        </ul>
    </nav>

    <section class="header__section">
        <h3 class="header__section__info">26 August 2021, online</h3>
        <h1 class="header__section__title">PHP Jobdag</h1>
        <h4 class="header__section__subtitle">Back-end developers meet business partners</h4>
        <a href="#footer" class="header__section__registerlink">Register</a>
    </section>

    <section class="header__counter">
        <article class="header__counter__day">
            <h3 class="header__counter__day__time"></h3>
            <h3 class="header__counter__day__unit">Days</h3>
        </article>
        <article class="header__counter__hour">
            <h3 class="header__counter__hour__time"></h3>
            <h3 class="header__counter__hour__unit">Hours</h3>
        </article>
        <article class="header__counter__min">
            <h3 class="header__counter__min__time"></h3>
            <h3 class="header__counter__min__unit">Minutes</h3>
        </article>
        <article class="header__counter__sec">
            <h3 class="header__counter__sec__time"></h3>
            <h3 class="header__counter__sec__unit">Seconds</h3>
        </article>
    </section>

</header>

<section id="students" class="students">
    <h2 class="students__title">Meet the Students</h2>
    <h3 class="students__quote">Quote: “Measuring programming progress by lines of code is like measuring aircraft building progress by weight.” - Bill Gates</h3>

    <article class="students__card">
        <img class="students__card__img" src="alexander.jpg" alt="profile picture Alexander Decoz">
        <h5 class="student__card__name">Albert Alexander Decoz</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="anastaya.jpg" alt="profile picture Anastasya Ovchar">
        <h5 class="student__card__name">Anastasya Ovchar</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="arne.jpg" alt="profile picture Arne Sneyers">
        <h5 class="student__card__name">Arne Sneyers</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="burcu.jpg" alt="profile picture Burcu Avci">
        <h5 class="student__card__name">Burcu Avci</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="daniel.jpg" alt="profile picture Daniel Paz">
        <h5 class="student__card__name">Daniel Paz</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="erik.jpg" alt="profile picture Erik Hendriks">
        <h5 class="student__card__name">Erik Hendriks</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="geert.jpg" alt="profile picture Geert Rumen">
        <h5 class="student__card__name">Geert Rumen</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="mathijs.jpg" alt="profile picture Mathijs Reykers">
        <h5 class="student__card__name">Mathijs Reykers</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="miguel.jpg" alt="profile picture Miguel Duarte">
        <h5 class="student__card__name">Miguel Duarte</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="wouter.jpg" alt="profile picture Wouter Swerts">
        <h5 class="student__card__name">Wouter Swerts</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

    <article class="students__card">
        <img class="students__card__img" src="yves.jpg" alt="profile picture Yves Kerkhofs">
        <h5 class="student__card__name">Yves Kerkhofs</h5>
        <p class="student__card__pitch">  Pitch...</p>
        <section class="students__card__social">
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__cv.svg" alt="cv icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__website.svg" alt="website icon"></a>
            <a class="students__card__social__item" href=""><img class="students__card__social__item__img" src="img/card__linkedin.svg" alt="linkedin icon"></a>
        </section>
    </article>

</section>

<section id="agenda" class="agenda">
    <h2 class=agenda__title">Check out the agenda</h2>

    <section class="agenda__intro">
        <p class="agenda__intro__info">Introductory presentation</p>
        <p class="agenda__intro__time" >9.00-9.30</p>
    </section>

    <section class="agenda__interview">
        <p class="agenda__interview__info">Speed interview session</p>
        <p class="agenda__interview__time">9.30-12</p>
        <p class="agenda__interview__txt">text</p>
    </section>

    <section class="agenda__feedback">
        <p class="agenda__feedback__info">Feedback moment</p>
        <p class="agenda__feedback__time">12-12.30</p>
    </section>

    <p class="agenda__description">It is time to discover our students and to match your favorite...</p>

</section>

<section id="course" class="course">
    <h2 class="course__title">See the course scope</h2>
    <p class="course__body">You can throw at us any online challenge...</p>

    <section class="course__hard">
        <h3 class="course__hard__title">Hard-Skills</h3>

        <article class="course__hard__front">
            <h6 class="course__hard__front__title">Front-end Development</h6>
            <img class="course__hard__front__img" src="img/skills__html5.svg" alt="html5 logo">
            <img class="course__hard__front__img" src="img/skills__css3.svg" alt="css3 logo">
            <img class="course__hard__front__img" src="img/skills__js.svg" alt="js logo">
            <img class="course__hard__front__img" src="img/skills__bootstrap.svg" alt="bootstrap logo">
        </article>

        <article class="course__hard__back">
            <h6 class="course__hard__back__title">Back-end Development</h6>
            <img class="course__hard__back__img" src="img/skills__php.svg" alt="">
            <img class="course__hard__back__img" src="img/skills__mysql.svg" alt="">
            <img class="course__hard__back__img" src="img/skills__laravel.svg" alt="">
        </article>

        <article class="course__hard__edit">
            <h6 class="course__hard__edit__title">Code editors</h6>
            <img class="course__hard__edit__img" src="img/skills__vsc.svg" alt="vsc logo">
            <img class="course__hard__edit__img" src="img/skills__phpstorm.svg" alt="php storm logo">
        </article>

        <article class="course__hard__control">
            <h6 class="course__hard__control__title">Version Control</h6>
            <img class="course__hard__control__img" src="img/skills__github.svg" alt="github logo">
        </article>
    </section>

    <section class="course__soft">
        <h3 class="course__soft__title">Soft-Skills</h3>
        <article class="agile-method">
            <h6 class="course__soft__agile__title">Agile Tools</h6>
            <img class="course__soft__agile__img" src="img/skills__trello.svg" alt="trello logo">
        </article>
        <article class="remote-working">
            <h6 class="course__soft__remote__title">Remote Working</h6>
            <img class="course__soft__remote__img" src="img/skills__zoom.svg" alt="zoom logo">
            <img class="course__soft__remote__img" src="img/skills__slack.svg" alt="slack logo">
            <img class="course__soft__remote__img" src="img/skills__discord.svg" alt="discord logo">
        </article>
    </section>
</section>

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
            <input type="footer__register__form__submit" value="register">
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
        <p class="footer__copyright__text">&copy; 2021 PHP</p>
        <p class="footer__copyright__corporation"></p>
        <img class="footer__copyright__vdablogo" src="img/partners__vdab.svg" alt="">
    </section>
</footer>

</body>
</html>
