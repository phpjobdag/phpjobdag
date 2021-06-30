<section id="agenda" class="agenda">
    <h2 class="agenda__title"><?php echo $lang['agendaTitle']; ?></h2>
     <div id ="agenda__wrapper">
   
    <p class="agenda__description"><?php echo $lang['agendaDes1']; ?></p>
    <p class="agenda__description"><?php echo $lang['agendaDes2']; ?></p>

    <section class="agenda__block margin2">
        <p class="agenda__block__time" >9.00-9.30</p>
        <div class="agenda__block__info">
            <p><?php echo $lang['agendap1']; ?></p>
            <p class="agenda__block__info__lower"><?php echo $lang['agendap2']; ?></p>
        </div>
    </section>

    <section class="agenda__block middleBlock" > 
        <p class="agenda__block__time middleBlock">9.30-12.00</p>
        <div class="agenda__block__info middleBlock" >
            <p><?php echo $lang['agendap3']; ?></p>
            <p class="agenda__block__info__lower "><?php echo $lang['agendap4']; ?></p>
       </div>      
    </section>

    <section class="agenda__block">
        <p class="agenda__block__time">12.00-12.30</p>
        <div class="agenda__block__info">
            <p><?php echo $lang['agendap5']; ?></p>
            <p class="agenda__block__info__lower"><?php echo $lang['agendap6']; ?></p>
        </div>
    </section>

    <div class="fluid">
        <svg id="agenda__blob__orange__top" viewBox="0 0 1440 845">
        <path d="M0 845C106.409 755 213.95 665 387.148 658.125C560.345 650.625 801.464 725.625 899.949 683.75C997.302 641.25 953.153 481.875 961.077 385.625C970.133 289.375 1030.13 256.875 1134.27 203.125C1237.29 150 1384.45 75 1530.48 0H0V845Z" fill="#E1685E"/>
        </svg>
    </div>

    <svg id="agenda__blob__orange__bottom" viewBox="0 0 380 350">
    <path d="M0 0C33.1775 38.1752 66.1795 76.3503 120.071 79.3991C173.962 82.4478 248.568 50.5026 278.937 68.3972C309.481 86.2918 295.789 154.026 298.246 194.852C300.704 235.546 319.663 249.332 351.787 272.131C383.911 294.93 429.201 326.61 474.667 358.422H0V0Z" fill="#E1685E"/>
    </svg>

    <svg id="agenda__blob__yellow__bottom" viewBox="0 0 258 160">
    <path d="M0 0C16.501 19.0876 33.1775 38.1752 60.0355 39.6333C86.8935 41.2239 124.284 25.3176 139.556 34.1986C154.653 43.2122 147.807 77.0131 149.035 97.4262C150.44 117.839 159.744 124.732 175.893 136.132C191.868 147.399 214.688 163.305 237.333 179.211H0V0Z" fill="#FBAE3C"/>
    </svg>
    </div>
</section>
