<script>
    //casetype function
function casetypeFunction(arr) { var out = "";
 var i; for(i = 0; i < arr.length; i++) { out += '<option value="' + arr[i].casetype + '">' + arr[i].casetype + '</option>' + arr[i].display + '</a><br>'; }
  document.getElementById("casetype").innerHTML = out;}
  //category function
  function casetypeFunction(arr) { var out = ""; var i;
   for(i = 0; i < arr.length; i++) { out += '<option value="' + arr[i].casetype + '">' + arr[i].casetype + '</option>' + arr[i].display + '</a><br>'; }
    document.getElementById("casetype").innerHTML = out;}
</script>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Dependent Dropdown List</title>
    </head>
    <style>
     select.courttype{
    padding:10px;
    color:blue;
    margin:20px;
    align:center;
    width:30%;
    border:5px;

        }
    select.casetype{
    padding:10px;
    color:blue;
    margin:20px;
    align:center;
    width:30%;
    border:5px;
     }
     .category{
    padding:10px;
    color:blue;
    margin:20px;
    align:center;
    width:30%;
    border:5px;
     }
    select.category{
        padding:10px;
        color:blue;
        margin:20;
        align:center;
        border:5px;
        width:30%;
      }
    .selectDiv{
        background-color:#0cd1ad;
        width:78%;
        height:auto;
        margin: auto;
      }
    </style>
    <body>
    <div class="selectDiv">
        <label>Select Court</label></br>
        <select class="courttype" id="courttype" >>
        <option value="">High Court</option>
        <option value="">Lower Court</option>
        </select>
       </br>
       <label>Select Case type</label></br>
        <select class="casetype" id="casetype" onchange="updatecategory();">casetype</select>
      <br>
      <label>Select Category</label></br>
      <select class="category" id="category" >category</select></br>
      <label>Case No:</label></br>
      <p class="category id category"><input placeholder="CASE NO..." ></p></br>
      </div>
        <script>
        var myArraycasetype = [
     {"casetype" : "civil" },
     {"casetype" : "criminal" }];
function updatecategory() {var zone = document.getElementById("casetype");
    if (zone.value == "civil"){alert("You clicked civil.");
    var myArraycategory = [ {"category" : "CMCC-Civil Case" },
    {"category" : "CMSUCC-Succession Case" },{"category" : "CMELRC-Employment&Labour Relations Case" },{"category" : "CMELC-Environment&Land Case" },{"category" : "CMDIV-Divorce Case" },{"category" : "CMMISC-Miscellaneous" },];
    categoryFunction(myArraycategory)}
    if (zone.value == "criminal"){alert("You clicked criminal.");
    var myArraycategory = [ {"category" : "aaa" }, {"category" : "aaabbb" }];
    categoryFunction(myArraycategory)}}
    casetypeFunction(myArraycasetype);
    function casetypeFunction(arr) { var out = ""; var i; 
    for(i = 0; i < arr.length; i++) {out += '<option value="' + arr[i].casetype + '">' + arr[i].casetype + '</option>' + arr[i].display + '</a><br>'; }
    document.getElementById("casetype").innerHTML = out;}
    var myArraycategory = [{"category" : "ccc"},
    {"category" : "ckkkk"}];
    categoryFunction(myArraycategory);
    function categoryFunction(arr) { var out = ""; var i;
    for(i = 0; i < arr.length; i++) {out += '<option value="' + arr[i].category + '">' + arr[i].category + '</option>' + arr[i].display + '</a><br>'; }
    document.getElementById("category").innerHTML = out;}
    </script>
    </body>
    </html>