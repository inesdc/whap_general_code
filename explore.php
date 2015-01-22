<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include ('php-calls/head.php'); ?>
  </head>
  <body>
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="width33-xs col-sm-3 ideas"><a href="index.php">Ideas</a></li>
        <li class="width33-xs col-sm-3 offers"><a href="planning.php">Offers</a></li>
      </ul>
    </div>
  </header>
  
<!-- CONTENT -->
<div id="main" class="clearfix explore">
  <div id="container-size" class="container">
    <form class="filters">
    </form>
    <section class="results">
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
      </article>
      <div class="pagination"></div>
    </section>
    <section class="friends_liked">
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
      </article>
    </section>
    <section class="aside">
        <button id="aside-trigger" class="hidden-xs hidden-extralg">Trips</button>
        <div class="trips-list">
          <div class="create-from-offer"></div>
          <div class="trips-summary">
          <div class="trips-summary">
          <div class="trips-summary">
          <div class="trips-summary">
        </div>
    </section>
  </div>
</div>

<!-- Javascript -->
 <?php include ('php-calls/scripts.php'); ?>
</body>
</html>
