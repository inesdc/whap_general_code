 <?php include ('php-calls/head.php'); ?>
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="past">
    </div>
  </header>
  
<!-- CONTENT -->
<div id="main" class="clearfix profile">
  <section class="profile-data pull-right">
    <?php include ('php-calls/user_profile.php'); ?>
  </section>
    <section>
      <div class="past-trips">
        <div class="section_title">
          <p>Your past trips</p>
        </div>
        <div class="map-trips">
          <img class="map" src="assets/images/map.png">
          <article id="trip1" class="trip">
            <i class="location icon ico-location pull-left"></i>
            <div class="trips-summary">
            </div>
          </article>
          <article id="trip2" class="trip">
            <i class="location icon ico-location pull-left"></i>
            <div class="trips-summary">
            </div>
          </article>
          <article id="trip3" class="trip">
            <i class="location icon ico-location pull-left"></i>
            <div class="trips-summary">
            </div>
          </article>
        </div>
      </div>
    </section>
</div>

<?php include ('php-calls/footer.php'); ?>
