<?php include ('php-calls/head.php'); ?>
  <header>
    <?php include ('php-calls/header.php'); ?>
    <div class="relative ohidden">
      <ul class="secondary-nav list-unstyled">
        <li class="col-xs-6 col-sm-6 active ideas"><a href="#">Ideas</a></li>
        <li class="col-xs-6 col-sm-6 offers"><a href="offers.php">Offers</a></li>
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
        <fieldset class="dates">
            <label for="dates" style="display:none;">Dates</label>
            <input id="dates" class="form-control" type="date" name="dates">
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
        <div class="module_offers"><?php include ('php-calls/ideaCard.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/ideaCard.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/ideaCard.php');?></div>
      </article>
      <div class="result-pages col-xs-12">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li>
              <a href="#">...22</a>
            </li>
          </ul>
        </div>
        <span class="results-display col-xs-12 col-sm-2">83 results | <strong>View all</strong></span>
      </div>
    </section>
    <section class="friends_liked">
      <h3>Your friends liked:</h3>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/ideaCard.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/ideaCard.php');?></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"><?php include ('php-calls/ideaCard.php');?></div>
      </article>
    </section>
    <section class="aside-2">
        <button id="aside-trigger" class="hidden-xs hidden-extralg">Trips</button>
        <div class="trips-list">
          <h3>Your trips</h3>
          <p>Drag and drop an idea to create a trip or add it to the trips you’re planning.</p>
          <div class="create-from-offer">
            <span class="dropdown-toggle" type="button" data-toggle="dropdown" id="dropdownMenu1" aria-expanded="false" href="#"><i class="icon ico-add-to-trip"></i><span>Create a trip from idea</span></span>
          </div>
          <ul class="dropdown dropdown-menu"  aria-labelledby="dropdownMenu1" role="menu">
            <li>How much</li>
            <li>Where</li>
            <li>When</li>
            <li>How</li>
            <li>Who</li>
            <li>What</li>
          </ul>
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
  </div>
</div>
<?php include ('php-calls/footer.php'); ?>