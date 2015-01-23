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
        <li class="width33-xs col-sm-3 offers active"><a href="planning.php">Offers</a></li>
      </ul>
    </div>
  </header>
  
<!-- CONTENT -->
<div id="main" class="clearfix explore">
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
        <fieldset class="search">
            <label style="display:none">Search</label>
            <input type="search" class="form-control" placeholder="Search">
            <input class="button" type="submit">
        </fieldset>
      </div>
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
          <h3>Your trips</h3>
          <p>Drag and drop an idea to create a trip or add it to the trips you’re planning.</p>
          <div class="create-from-offer">
            <span class="dropdown-toggle" type="button" data-toggle="dropdown" id="dropdownMenu1" aria-expanded="false" href="#"><i class="icon icon-add-to-trip"></i>Create a trip from offer</span>
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
