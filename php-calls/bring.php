<div id="bring" class="module bring">
  <nav>
    <div class="top">                
        <img id="bring" src="images/bring.png">
        <h2 class="modualHeader">Bring</h2>                
    </div>
  </nav>
  <div class="list">
    <table class="items">
        <thead>
          <tr>
              <th class="edit" colspan="3"><span id="edit">edit</span></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>
  <div class="modualContainer">
      <div class="input">
          <input type="text" class="custinput" id="item-input" placeholder="Enter item here..." autofocus>
          <button type="submit" class="btn">add</button>
      </div>
  </div>
</div>
<script>
var id = 1; // unique id for list items
 
$(document).ready(function(e) {
    editButton();
 
    $("tbody").on("click", ".cross", function() {
        $(this).closest("tr").remove();
    });
 
    $("button").on("click", getInput);
 
    $("tbody").on("click", ".box", function() {
        $(this).closest("tr").find("span").toggleClass("checked");
    });
 
});
 
// triggered on Enter
$(document).on("keydown", function(e) {
    if(e.keyCode === 13) {
        getInput();
    }
});
 
 
 
// Toggle delete icon when edit button is clicked
function editButton() {
    $(".edit").on("click", "span", function() {
        $(".cross").toggle();
    });
}
 
 
// Obtaining customer input and then calling addItem() with the input
function getInput() {
    var custInput = $(".custinput");
    var input = custInput.val();
 
    if ((input !== "") && ($.trim(input) !== "")) {
        addItem(input);
        custInput.val("");
    }
}
 
 
/******************************************************************************
    adding item to the list
    increment id counter for unique id
*******************************************************************************/
function addItem(message) {
 
    $(".cross").hide(); // hiding the delete icon
 
    var checkbox = "<td class=\"check\">" + "<input type=\"checkbox\" id=\"item" + id + "\" class=\"box\">" + "<label for=\"item" + id + "\" class=\"check-label\"></label></td>";
 
    var content = "<td class=\"content\"><span>" + message + "</span></td>";
 
    var delIcon = "<td><img src=\"assets/cross.png\" alt=\"cross\" class=\"cross\"></td>";
 
    $("tbody").append("<tr>" + checkbox + content + delIcon + "</tr>");
 
    id++;
}
</script>
