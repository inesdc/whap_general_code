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
  
    <section class="past-trips-content hiden-xs-md">
      <div id="past-trips" class="past-trips">
        <div class="section_title">
          <p>Your past trips</p>
        </div>
        <div class="map-trips">
          <img class="map" src="assets/images/map.png">
          <article id="trip1" class="trip">
            <i class="location icon ico-location-pink pull-left"></i>
            <div class="surfing trips-summary">
              <h2 class="trip-title"><img src="images/upcoming/timer.png"> Surfin' N' Rollin'</h2>
              <div class="trip-description col-xs-12">
                <p><span>A magic trip full of beaches surfing and vans.</span></p>
              </div>
            </div>
          </article>
          <article id="trip2" class="trip">
            <i class="location icon ico-location-pink pull-left"></i>
            <div class="granada trips-summary">
              <h2 class="trip-title"><img src="images/upcoming/timer.png"> Summer in Granada</h2>
              <div class="trip-description col-xs-12">
                <p><span>Party, tapas and sun.</span></p>
              </div>
            </div>
          </article>
          <article id="trip3" class="trip">
            <i class="location icon ico-location-pink pull-left"></i>
            <div class="newYork trips-summary">
              <h2 class="trip-title"><img src="images/upcoming/timer.png"> New York</h2>
              <div class="trip-description col-xs-12">
                <p><span>Ready, steady, go!</span></p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
</div>

<?php include ('php-calls/footer.php'); ?>
