<div class="module-trips">
  <div class="surfing trips-summary">
    <div class="col-xs-12 col-sm-4">
        <h2 class="trip-title"><img src="images/upcoming/timer.png"> Surfin' N' Rollin'</h2>
      </div>
      <div class="trip-description col-xs-12 col-sm-5">
        <p><span>A magic trip full of beaches surfing and vans.</span></p>
      </div>
      <div class="trip-to-vote hidden-xs col-sm-3">
        <p>you have 3 items left to vote</p>
        <div class="items-to-vote">
          <i class="icon ico-location-blue"></i>
          <i class="icon ico-calendar-blue"></i>
          <i class="icon ico-what-blue"></i>
        </div>
      </div>
  </div>
  <div class="trip-steps">
    <div class="trip-cards clearfix" data-children-new-height="50">
      <div class="deciding" style="float:left; width:83.3333%; padding-left:10px;">
        <h3 style="margin-left:-10px;">Deciding</h3>
        <div class="how-much-cards"  style="float:left; width:20%;padding:5px;">
          <div data-target="#how-much" class="howMuch planningCard trip-card">
            <img src="images/upcoming/wallet.png">
            <h3>HOW MUCH?</h3>
            <p class="amount">$200</p>
            <div class="comments-votes">
              <p>1 new comment</p>
              <p>2 new votes</p>
            </div>
        </div>
        </div>
        <div data-target="#where" class="where-cards"  style="float:left; width:20%; padding:5px;">
           <div class="where planningCard trip-card">
            <img src="images/upcoming/location.png">
            <h3>WHERE</h3>
            <p class="amount">Sitjes. Catalonia</p>
            <div class="comments-votes">
              <p>3 new comments</p>
              <p>1 new vote</p>
            </div>
          </div>
        </div>
        <div data-target="#when" class="when-cards"  style="float:left; width:20%;padding:5px;">
          <div class="when planningCard trip-card">
            <img src="images/upcoming/wallet.png">
            <h3>WHEN?</h3>
            <p class="amount">15th to 18th July</p>
            <div class="comments-votes">
              <p>2 new comments</p>
              <p>2 new votes</p>
            </div>
          </div>
        </div>
        <div data-target="#how" class="how-cards"  style="float:left; width:20%;padding:5px;">
          <div class="how planningCard trip-card">
            <img src="images/upcoming/airplane.png">
            <h3>HOW?</h3>
            <p class="amount">Plane</p>
            <div class="comments-votes">
              <p>1 new comment</p>
              <p>2 new votes</p>
            </div>
          </div>
        </div>
        <div data-target="#who" class="who-cards"  style="float:left; width:20%; padding:5px;">
          <div class="who planningCard trip-card">
            <img src="images/upcoming/head.png">
            <h3>WHO?</h3>
            <p class="amount">5 travelers</p>
            <div class="comments-votes">
              <p>Nothing new</p>
            </div>
          </div>
        </div>
        </div>
      <div class="decided" style="float:left; width:16.666666%; padding-right:10px;">
        <h3 style="margin-right:-10px;">Decided</h3>
        <div data-target="#what" class="what-cards"  style="float:left; width:100%; padding:5px;">
          <div class="what planningCard trip-card">
            <img src="images/upcoming/what.png">
            <h3>WHAT?</h3>
            <p class="amount">3 items</p>
            <div class="re-open">
              <button class="btn btn-default btn-block">Re-open</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="options_admin clearfix">
      <button type="button" class="btn btn-default btn-block pull-left"><a href="itinerary-page.php">Add itinerary</a></button>
      <button type="button" class="btn btn-default btn-block pull-right"><a href="itinerary-page.php">Add budget control</a></button>
    </div>
    <div class="planning-contents">
      <div id="how-much" class="how-much-content hide">
        <div class="step-content"></div>
        <div class="chat">
          <?php include('chat.php'); ?>
        </div>
      </div>
      <div id="where" class="where-content hide">
        <p>Hola</p>
      </div>
      <div id="when" class="when-content hide">
      </div>
      <div id="how" class="how-content hide">
      </div>
      <div id="who" class="who-content hide">
      </div>
      <div id="what" class="what-content hide">
      </div>
    </div>
  </div>
</div>