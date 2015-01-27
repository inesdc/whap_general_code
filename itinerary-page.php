<?php include ('php-calls/head.php'); ?>
<header>
  <?php include('php-calls/header.php'); ?>
  <div class="relative ohidden">
    <div class="col-xs-12 col-sm-3 crear-cont">
      <button type="button" class="btn btn-default btn-block">crear viaje</button>
    </div>
    <ul class="secondary-nav list-unstyled">
      <li class="col-xs-4 col-sm-3 ongoing"><a href="index.php">Ongoing</a></li>
      <li class="col-xs-4 col-sm-3 active planning"><a href="#">Planning</a></li>
      <li class="col-xs-4 col-sm-3 upcoming"><a href="upcoming.php">Upcoming</a></li>
    </ul>
  </div>
</header>
<!-- CONTENT -->  
<div id="main" class="clearfix planning">
  <div id="container-size" class="container">
    <section class="modules trips">
      <article class="trip">
        <?php include('php-calls/trip_itinerary.php'); ?>
      </article>
    </section>
    <section class="aside add_whats_drag">
        <button id="aside-trigger" class="hidden-xs hidden-extralg">Whats</button>
        <h3>This are your Whats</h3>
        <p>Drag&drop your whats into the itinerary to add them.</p>
        <div class="module_offers draggable">
          <p>1</p>
        </div>
        <div class="module_offers draggable">
          <p>2</p>
        </div>
        <div class="module_offers draggable">
          <p>3</p>
        </div>
        <div class="module_offers draggable">
          <p>4</p>
        </div>
    </section>
  </div>
</div>

<?php include ('php-calls/footer.php'); ?>
