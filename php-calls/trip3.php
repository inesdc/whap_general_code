<div class="module-trips">
  <div class="newYork trips-summary">
    <div class="col-xs-12 col-sm-4">
        <h2 class="trip-title"><img src="images/upcoming/timer.png"> New York<</h2>
      </div>
      <div class="trip-description col-xs-12 col-sm-4 col-md-5">
        <p><span>Ready, steady, go!</span></p>
      </div>
      <div class="trip-to-vote hidden-xs col-sm-4 col-md-3">
        <p>you have 3 items left to vote</p>
        <div class="items-to-vote">
          <i class="icon ico-location-blue"></i>
          <i class="icon ico-wallet-blue"></i>
        </div>
      </div>
  </div>
  <div class="trip-steps hide">
    <div class="trip-cards clearfix" data-children-new-height="50">
      <div class="deciding col-xs-12 col-sm-8 pad0R-sm ">
        <h3>Deciding</h3>
        <div class="how-much-cards col-xs-12 col-sm-3">
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
        <div data-target="#where" class="where-cards col-xs-12 col-sm-3">
           <div class="where planningCard trip-card">
            <img src="images/upcoming/location.png">
            <h3>WHERE</h3>
            <p class="amount">Sitjes, Catalonia</p>
            <div class="comments-votes">
              <p>3 new comments</p>
              <p>1 new vote</p>
            </div>
          </div>
        </div>
        <div data-target="#when" class="when-cards col-xs-12 col-sm-3">
          <div class="when planningCard trip-card">
            <img src="images/upcoming/calendar.png">
            <h3>WHEN?</h3>
            <p class="amount">15th to 18th July</p>
            <div class="comments-votes">
              <p>2 new comments</p>
              <p>2 new votes</p>
            </div>
          </div>
        </div>
        <div data-target="#how" class="how-cards col-xs-12 col-sm-3">
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
      </div>
      <div class="decided coll-xs-12 col-sm-4 pad0L-sm">
        <h3>Decided</h3>
        <div data-target="#who" class="who-cards col-xs-12 col-sm-6">
          <div class="who planningCard trip-card">
            <img src="images/upcoming/head.png">
            <h3>WHO?</h3>
            <p class="amount">5 travelers</p>
            <div class="re-open">
              <button class="btn btn-secondary btn-block"><a href="planning_2.php">Re-open</a></button>
            </div>
          </div>
        </div>
        <div data-target="#what" class="what-cards col-xs-12 col-sm-6">
          <div class="what planningCard trip-card">
            <img src="images/upcoming/what.png">
            <h3>WHAT?</h3>
            <p class="amount">3 items</p>
            <div class="re-open">
              <button class="btn btn-secondary btn-block">Re-open</button>
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