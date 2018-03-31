<html>
<head>
<link rel="stylesheet" type="text/css" href="build_form.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['email']))
{

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="build_form.js"></script>

<button id="btn_showElements" onclick="showElements()">Add element</button>
<button id="btn_reset" onclick="reset()">Reset</button>
<div id="full">
<div id="formElements">
<div id="formElements_header">FORM ELEMENTS<button id="hideElements" onclick="hideElements()">x</button></div>
<div id="formElements_buttons">
<div id="name">
<button class="formButtons" id="btnHeader" onclick="appendHeader()"><img src="images\tableicons\002-header.png">Header</button>
</div>
<div id="name">
<button class="formButtons" id="btnName" onclick="appendName()"><img src="images\tableicons\007-user.png">Name</button>
</div>
<div id="email">
<button class="formButtons" id="btnEmail" onclick="appendEmail()"><img src="images\tableicons\006-envelope.png">Email</button>
</div>
<div id="address">
<button class="formButtons" id="btnAddress" onclick="appendAddress()"><img src="images\tableicons\005-house-outline.png">Address</button>
</div>
<div id="Phone">
<button class="formButtons" id="btnPhone" onclick="appendPhone()"><img src="images\tableicons\004-smartphone.png">Phone</button>
</div>
<div id="radio">
<button class="formButtons" id="btnRadio" onclick="appendRadio()"><img src="images\tableicons\003-one-finger-click.png">Single Choice</button>
</div>
<div id="checkBox">
<button class="formButtons" id="btnCheckbox" onclick="appendCheckbox()"><img src="images\tableicons\002-tap-with-two-fingers.png">Multiple Choice</button>
</div>
<div id="dropdown">
<button class="formButtons" id="btnDropdown" onclick="appendDropdown()"><img src="images\tableicons\001-drop-down-list.png">Dropdown</button>
</div>
<div>
<button class="formButtons" id="btnDate" onclick="appendDate()"><img src="images\tableicons\001-calendar.png">Date Picker</button>
</div>
<div id="Submit"> 
<button class="formButtons" id="btnSubmit" onclick="appendSubmit()">Submit</button>
</div>
</div>
</div>

<div id="preview">
<div class='preBox'><h1 id='header1' contenteditable='true'>Heading</h1><hr><button class='temp' onclick='remove(this)'>Remove</button></div>
</div>
<script>
$("#preview").sortable({cancel:"label,h1",axis:"y"});<!-- makes the divisions inside the division with id #preview sortable-->
</script> 
<div><form method="post" action="build_file.php" id="form1"><input type="submit" id="create" value="Publish" onclick="createForm()"></form></div>
</div>
<?php
}
else
{

echo" <script> alert(\"You need to be logged in to access this page.\"); window.location = \"sign_in.html\";</script>";
}
?>


 
</body>
</html>






