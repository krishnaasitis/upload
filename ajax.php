<html>
<head> It doesn't matter </head>
<body>
<div class="container">
<div class="main">
<form  method="post" name="form" action="">

Title: <input type="text" value="Post" name="title" id="title"/>
Article: <textarea style="width:500px; font-size:14px; height:60px; font-weight:bold; resize:none;" name="article" id="article" ></textarea><br />
User_post: <input type="submit" value="Post" name="submit" class="submit_button"/>
Image: <input type="text" value="Post" name="image" id="image"/>

<input type="submit" value="Post" name="submit" class="submit_button"/>
</form>
</div>
<div class="space"></div>
<div id="flash"></div>
<div id="show"></div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
$(".submit_button").click(function() {
var texttitle = $("#title").val();
var dataString = 'content='+ texttitle;
if(texttitle=='')
{
alert("Enter some text..");
$("#title").focus();
}
else
{
$("#flash").show();
$("#flash").fadeIn(400).html('<span class="load">Loading..</span>');
$.ajax({
type: "POST",
url: "action1.php",
data: dataString,
cache: true,
success: function(html){
$("#show").after(html);
document.getElementById('title').value='';
document.getElementById('title').value='';
document.getElementById('title').value='';
$("#flash").hide();
$("#title").focus();
}  
});
}
return false;
});
});
</script>
</body>
</html>