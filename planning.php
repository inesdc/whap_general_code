<?php include ('php-calls/head.php'); ?>
<header>
  <?php include('php-calls/header.php'); ?>
  <div class="relative ohidden">
    <div class="col-xs-12 col-sm-3 crear-cont">
      <button type="button" class="btn btn-default btn-block">crear viaje</button>
    </div>
    <ul class="secondary-nav list-unstyled">
      <li class="col-xs-4 col-sm-3 ongoing"><a href="ongoing.php"><i class="icon ico-ongoing visible-xs"></i>Ongoing</a></li>
      <li class="col-xs-4 col-sm-3 active planning"><a href="#"><i class="icon ico-planning visible-xs"></i>Planning</a></li>
      <li class="col-xs-4 col-sm-3 upcoming"><a href="upcoming.php"><i class="icon ico-upcoming visible-xs"></i>Upcoming</a></li>
    </ul>
  </div>
</header>
<!-- CONTENT -->  
<div id="main" class="clearfix planning">
  <div id="container-size" class="container">
    <section class="modules trips">
      <article class="trip">
        <?php include('php-calls/upcomingTrip[1].php'); ?>
      </article>
      <article class="trip">
        <?php include('php-calls/upcomingTripClosed[0].php'); ?>
      </article>
      <article class="trip">
        <div class="module-trips">
          <?php include('php-calls/upcomingTripClosed[1].php'); ?>
        </div>
      </article>
    </section>
    <section class="aside hidden-xs">
        <button id="aside-trigger" class="btn-aside hidden-xs hidden-extralg"></button>
        <h3>Offers related to your trip</h3>
        <div class="module_offers"><?php include ('php-calls/offerCard.php');?></div>
        <div class="module_offers"><?php include ('php-calls/offerCard.php');?></div>
        <div class="module_offers"><?php include ('php-calls/offerCard.php');?></div>
        <div class="module_offers"><?php include ('php-calls/offerCard.php');?></div>
    </section>
  </div>
</div>

<?php include ('php-calls/footer.php'); ?>