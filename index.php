<?php include_once "./common.php"; ?>
<!DOCTYPE html>
<html lang=<?php echo $lang['lang']; ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPjobdag</title>
</head>
<body>
   <a href="?lang=en"> EN </a>
   <a href="?lang=nl"> NL </a>
   <h1><?php echo $lang['h1']; ?></h1>
   <nav>
      <a href=""></a>
      <!--anchor voor doorheen de pagina-->
      <a href=""></a>
      <!--anchor voor doorheen de pagina-->
      <a href=""></a>
      <!--anchor voor doorheen de pagina-->
   </nav>

   <header>
      <button type="button"></button>
      <!--button register-->
      <button type="button"></button>
      <!--button meet the students-->
      <time datetime="2021-08-26">Jobdag</time>
      <!--Jobdag Timer-->
   </header>


   <div class="divider"></div>


   <main>
      <div class="students"></div>
      <!--studenten paneel-->
   </main>


   <div class="divider"></div>


   <section class="agenda">

   </section>


   <div class="divider"></div>


   <section class="course">
      <div class="core-skills"></div>
      <div class="project-skills"></div>
   </section>


   <div class="divider"></div>


   <section class="formulary">
      <input type="text" id="personal-name">
      <input type="text" id="company-naam">
      <input type="text" id="telephone-number">
      <input type="text" id="email-adress">

      <input type="submit">
   </section>

   <footer>
      <img src="" alt="">
      <!--VDAB-->
      <img src="" alt="">
      <!--CEVOFORA-->
      <img src="" alt="">
      <!--Obelisk-->
   </footer>



</body>

</html>
