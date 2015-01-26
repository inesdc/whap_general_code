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
        <li class="col-xs-6 col-sm-6 ideas"><a href="ideas.php">Ideas</a></li>
        <li class="col-xs-6 col-sm-6 active offers"><a href="#">Offers</a></li>
      </ul>
    </div>
  </header>
  
<!-- CONTENT -->
<div id="main" class="clearfix offers-page explore">
  <div id="container-size" class="container">
    <form class="filters form-inline">
      <div class="form-group col-xs-12 col-sm-4">
        <select id="trip-type" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
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
        <div class="module_offers"></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
      </article>
      <article class="offer col-xs-12 col-sm-6 col-md-4">
        <div class="module_offers"></div>
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
          <h3>Your trips</h3>
          <p>Drag and drop an offer to create a trip or add it to the trips you’re planning.</p>
          <div class="create-from-offer">
            <span class="dropdown-toggle" type="button" data-toggle="dropdown" id="dropdownMenu1" aria-expanded="false" href="#"><i class="icon ico-add-to-trip"></i><span>Create a trip from offer</span></span>
          </div>
          <ul class="dropdown dropdown-menu"  aria-labelledby="dropdownMenu1" role="menu">
            <li>How much</li>
            <li>Where</li>
            <li>When</li>
            <li>How</li>
            <li>Who</li>
            <li>What</li>
          </ul>
          <div class="trips-summary"></div>
          <div class="trips-summary"></div>
          <div class="trips-summary"></div>
          <div class="trips-summary"></div>
        </div>
    </section>
  </div>
</div>

<!-- Javascript -->
 <?php include ('php-calls/scripts.php'); ?>
</body>
</html>