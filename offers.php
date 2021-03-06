<?php include ('php-calls/head.php'); ?>
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative">
      <ul class="secondary-nav list-unstyled">
        <li class="col-xs-6 col-sm-6 ideas"><a href="ideas.php">Ideas</a></li>
        <li class="col-xs-6 col-sm-6 active offers"><a href="#">Offers</a></li>
      </ul>
    </div>
  </header>
  
<!-- CONTENT -->
<div id="main" class="clearfix offers-page explore">
  <div id="container-size" class="container">
    <form class="filters form-inline clearfix">
      <div class="form-group col-xs-12 col-sm-4">
        <select id="trip-type" class="form-control">
            <option>Adventure</option>
            <option>Explore</option>
            <option>Chill</option>
            <option>Party</option>
            <option>Sport</option>
        </select>
      </div>
      <div class="form-group col-xs-12 col-sm-2">
        <fieldset class="date">
            <label for="datepicker2" style="display:none;">Dates</label>
            <input id="datepicker2" placeholder="18/01/2015" class="form-control" name="dates">
        </fieldset>
      </div>
      <div class="form-group col-xs-12 col-sm-6">
        <fieldset class="search form-control">
            <label style="display:none">Search</label>
            <input type="search"  placeholder="Search">
            <input class="button pull-right" value="" type="submit">
        </fieldset>
      </div>
    </form>
    <section class="results clearfix">
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/offerCard.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/offerCard_1.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4 hidden-sm">
        <div class="module_offers"><?php include ('php-calls/offerCard_2.php');?></div>
      </article>
      <div class="result-pages col-xs-12">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li>
              <a href="#">...22</a>
            </li>
          </ul>
        </div>
        <span class="results-display col-xs-12 col-sm-3">83 results | <strong>View all</strong></span>
      </div>
    </section>
    <section class="friends_liked">
      <h3>Your friends liked:</h3>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/offerCard_3.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/offerCard_4.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4 hidden-sm">
        <div class="module_offers"><?php include ('php-calls/offerCard_5.php');?></div>
      </article>
    </section>
    <section class="aside-2">
        <button id="aside-trigger" class="hidden-xs hidden-extralg">Trips</button>
        <div class="trips-list">
          <h3>Your trips</h3>
          <p>Drag and drop an offer to create a trip or add it to the trips you’re planning.</p>
          <div class="create-from-offer">
            <span><i class="icon ico-add-to-trip"></i><span>Create a trip from offer</span></span>
          </div>
          <div class="surfing trips-summary">
            <h2 class="trip-title"><img src="images/upcoming/timer.png"> Surfin' N' Rollin'</h2>
          </div>
          <div class="granada trips-summary">
            <h2 class="trip-title"><img src="images/upcoming/timer.png"> Summer in Granada</h2>
          </div>
          <div class="newYork trips-summary">
            <h2 class="trip-title"><img src="images/upcoming/timer.png"> New York<</h2>
          </div>
        </div>
    </section>
    <?php include ('php-calls/content-offer-card.php'); ?>
  </div>
</div>
<?php include ('php-calls/footer.php'); ?>
