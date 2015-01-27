<div class="profile-content">
  <div class="user-info">
    <a id="edit-profile-btn" class="edit-btn pull-right"></a>
    <img class="profile_pic" src="assets/images/user_profilepic.png">
    <p class="user_name"><strong>MaryDC</strong></p>
    <p class="user_type">Adventurer</p>
    <p class="user_email">marydc@gmail.com</p>
    <p class="user_country">UK</p>
  </div>
  <form class="form-group edit_profile hidden">
      <div class="change_user_pic">
        <img class="profile_pic" src="assets/images/user_profilepic_edit.png">
        <i class="edit-btn"></i>
      </div>
      <fieldset class="change_user_name">
        <label>Username</label>
        <input class="form-control" type="text" value="MaryDC">
      </fieldset>
      <fieldset class="change_user_type">
        <label>What kind of traveller are you?</label>
        <select class="form-control">
            <option>Adventurer</option>
            <option>Party animal</option>
            <option>Explorer</option>
            <option>Chill master</option>
            <option>Sport rules</option>
        </select>
      </fieldset>
      <fieldset class="change_user_email">
        <label>Email</label>
        <input class="form-control" type="text" value="marydc@gmail.com">
      </fieldset>
      <fieldset class="change_user_country">
        <label>Country</label>
        <input class="form-control" type="text" value="UK">
      </fieldset>
      <fieldset class="change_user_password">
        <label>Password</label>
        <input class="form-control" type="text" value="********">
      </fieldset>
      <button class="end-editing btn btn-default btn-block">Save changes</button>
</form>
  <div class="secondary-menu clearfix hidden">
    <a href="#" class="tab tab-friends col-xs-6" data-target="#friends">Friends</a>
    <a href="#" class="tab tab-trips active col-xs-6" data-target=".past-trips-content">Past trips</a>
  </div>
  <div id="friends" class="user-friends col-xs-12 col-sm-6">
    <h3>Friends</h3>
    <div class="form-group">
      <fieldset class="search form-control">
          <label style="display:none">Search</label>
          <input type="search"  placeholder="Search">
          <input class="button pull-right" value="" type="submit">
      </fieldset>
    </div>
    <ul class="friends first_page list-unstyled">
      <li class="friend friend_1">
        <img src="images/guy1.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
      <li class="friend friend_2">
        <img src="images/guy2.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
      <li class="friend friend_3">
        <img src="images/guy3.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
      <li class="friend friend_4">
        <img src="images/guy4.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
      <li class="friend friend_5">
        <img src="images/guy5.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
      <li class="friend friend_6">
        <img src="images/guy3.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
    </ul>
    <ul class="friends second_page list-unstyled hidden">
      <li class="friend friend_1">
        <img src="images/guy4.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
      <li class="friend friend_2">
        <img src="images/guy5.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
      <li class="friend friend_3">
        <img src="images/guy3.png">
        <p><strong>Frank_fromthejungle</strong></p>
        <p>Adventurer</p>
        <p><small>3 trips</small></p>
      </li>
    </ul>
    <div class="result-pages">
      <ul class="pagination">
        <li id="page_1" class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li id="page_22">
          <a href="#">...22</a>
        </li>
      </ul>
    </div>
  </div>
</div> 
