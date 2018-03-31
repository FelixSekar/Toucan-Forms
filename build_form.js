
var header=1;
var name=0;
var email=0;
var address=0;
var phone=0;
var radio=0;
var checkbox=0;
var checkboxOptions;
var dropdown=0;
var dropOptions=0;
var date=0;
var divFocus;
function appendHeader()
{
header = +header + 1;
$('#preview').append("<div class='preBox'><h1 id='header"+header+"' contenteditable='true' onclick='$(this).focus();'>Heading</h1><hr><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function appendName()
{
name = +name + 1;      // + is used to show that the variable is a number
var code="<div class='preBox'><label contenteditable='true' onclick='$(this).focus();'>Name</label><input class='ch' type='text' name='name"+name+"First' placeholder='First'>&nbsp;<input type='text' name='name"+name+"Last' placeholder='Last'/><button class='temp' onclick='remove(this)'>Remove</button></div>";
$('#preview').append(code);
}
function appendEmail()
{
email = +email + 1;
$('#preview').append("<div class='preBox'><label contenteditable='true' onclick='$(this).focus();'>Email</label><input type='email' name='email"+email+"'/><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function appendAddress()
{
address = +address + 1;
$('#preview').append("<div class='preBox'><label contenteditable='true' onclick='$(this).focus();'>Address</label><input type='text' name='address"+address+"'/><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function appendPhone()
{
phone = +phone + 1;
$('#preview').append("<div class='preBox'><label contenteditable='true' onclick='$(this).focus();'>Phone</label><input type='text' name='phone"+phone+"'/><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function appendRadio()
{
radio = +radio + 1;
$('#preview').append("<div class='preBox'><label contenteditable='true' onclick='$(this).focus();'>Add a question here</label><div></div><button class='temp' onclick='addRadio(this)'>Add option</button><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function addRadio(btnId)
{
var dId = $(btnId).prev();
$(dId).append("<div><input type='radio' name='radio"+radio+"'><label contenteditable='true' onclick='$(this).focus();'>Edit</label><button class='temp' onclick='remove(this)'>X</button></div>")
}
function appendCheckbox()
{
checkbox = +checkbox + 1;
$('#preview').append("<div class='preBox'><label contenteditable='true' onclick='$(this).focus();'>Add a question here</label><div></div><button class='temp' onclick='addCheckbox(this)'>Add option</button><button class='temp' onclick='remove(this)'>Remove</button></div>");
checkboxOptions=0;
}
function addCheckbox(btnId)
{
checkboxOptions = +checkboxOptions + 1;
var dId = $(btnId).prev();
$(dId).append("<div><input type='checkbox' name='checkBox"+checkbox+"_"+checkboxOptions+"'><label contenteditable='true' onclick='$(this).focus();'>Edit</label><button class='temp' onclick='remove(this)'>X</button></div>")
}
function appendDropdown()
{
dropdown = +dropdown + 1;
$('#preview').append("<div class='preBox' id='test'><label contenteditable='true' onclick='$(this).focus();'>Add a question here</label><br><select id='dropdown"+dropdown+"' name='initial'  onclick='$(this).focus();'></select><br><textarea rows='4' class='txtRemove' onclick='$(this).focus();'>Options here</textarea><button class='temp' onclick='saveChanges(this)'>Save Changes</button><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function saveChanges(btnId)
{
var dId = $(btnId).prev();  //   textarea <- button
var lines = $(dId).val().split('\n');
dId=$(dId).prev().prev(); // select <- br <- textarea
var l=$(dId).prev().prev(); //label selecting
var s=l.html();
$(dId).attr('name', s); 


for(var i = 0;i < lines.length;i++){
$(dId).append("<option>"+lines[i]+"</option>");
}
}
function appendDate()
{
date=+date +1;
$("#preview").append("<div class='preBox'>Date:<input type='text' id='date"+date+"' class='date' name='date"+date+"'/><script>$(function(){$('#date"+date+"').datepicker();});</script><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function appendSubmit()
{
$('#preview').append("<div class='preBox'><button type='submit' form='form2'>SUBMIT</button><button class='temp' onclick='remove(this)'>Remove</button></div>");
}
function remove(btnId)
{
var divId=btnId.parentNode;
$(divId).remove();
}
function hideElements()
{
$("#formElements").hide("slow");
$("#btn_showElements").show("slow");
}
function showElements()
{
$("#formElements").show("slow");
$("#btn_showElements").hide("slow");
}
function reset()
{
$(".preBox").remove();
}

$(".preBox").click(function(){
$(this).css("border","1px solid black");
});
function createForm()
{
//var l=$(".ch").prev();
//var s=l.html();
//$(".ch").attr('name', s); 
$(".temp").hide();
$(".txtRemove").remove();
$("label,h1").attr("contenteditable","false");
$(".date").removeAttr("class");
$("#preview").unbind();
var fCode=$("#preview").html();
fCode=btoa(fCode);
$('#form1').append("<div><input type='hidden' name='fCode' value='"+fCode+"'></div>");
}	





