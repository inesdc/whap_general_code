<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include ('php-calls/head.php'); ?>
  </head>
  <body>
  <header>
    <?php include('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <div class="col-xs-12 col-sm-3 crear-cont">
        <button type="button" class="btn btn-default btn-block">crear viaje</button>
      </div>
      <ul class="secondary-nav list-unstyled">
        <li class="col-xs-4 col-sm-4 ongoing"><a href="index.php">Ongoing</a></li>
        <li class="col-xs-4 col-sm-4 active planning"><a href="#">Planning</a></li>
        <li class="col-xs-4 col-sm-4 upcoming"><a href="upcoming.php">Upcoming</a></li>
      </ul>
    </div>
  </header>
<!-- CONTENT -->
<div id="main" class="clearfix planning">
  <div id="container-size" class="container">
    <section class="modules trips">
      <article class="trip">
        <?php include('php-calls/trip.php'); ?>
      </article>
      <article class="trip">
        <?php include('php-calls/trip.php'); ?>
      </article>
      <article class="trip">
        <div class="module-trips">
          <?php include('php-calls/trip.php'); ?>
        </div>
      </article>
    </section>
    <section class="aside">
        <button id="aside-trigger" class="hidden-xs hidden-extralg">Offers</button>
        <div class="module_offers">
          <p>1</p>
        </div>
        <div class="module_offers">
          <p>2</p>
        </div>
        <div class="module_offers">
          <p>3</p>
        </div>
        <div class="module_offers">
          <p>4</p>
        </div>
    </section>
  </div>
</div>

<!-- Javascript -->
<?php include ('php-calls/scripts.php'); ?>
</body>
</html>
