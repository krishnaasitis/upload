<html>
<head> <a href="http://krishna.ipt.oamk.fi/upload/events.php"><img id="logo" src="ouluevents1.JPG"></a>
<title>Oulu Events</title>

<link rel="icon" href="http://krishna.ipt.oamk.fi/upload/frisbee.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://krishna.ipt.oamk.fi/upload/frisbee.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="responsive.css">
<script type="text/javascript">
			
			    function toggle_visibility(id) {
			       var e = document.getElementById(id);
			       if(e.style.display == 'block')
			          e.style.display = 'none';
			       else
			          e.style.display = 'block';
			    }
			
		</script>

		<style type="text/css">

			#popupBoxOnePosition{
				top: 0; left: 0; position: fixed; width: 100%; height: 120%;
				background-color: rgba(0,0,0,0.7); display: none;
			}
			.popupBoxWrapper{
				width: 55em; margin: 50px auto; text-align: left;
			}
			.popupBoxContent{
				background-color: #FFF; padding: 15px;
				height: 500px;
				position: relative;
				width: 100%;
			}
			#close{
				position: absolute;
				right: 10px;
				/*bottom: -60px;*/
				bottom: 0em;
				font-size: 3em;
				
			}
			@media only screen and (min-width : 300px) and (max-device-width : 600px){
			h1{
				font-size: 0.1em;
				}
			}
	@media all and (max-width: 699px) and (min-width: 299px) {
  h1 {
    
	font-size: 1em !important;
	/*background: #fafafa;*/
	
  }
img#img_align{ display:none;
}
article{
 font-size: 0.7em;
width: 100%;
}
#center-content{


}
#table1{
display: none;
}
#smallmenu{
display: block !important;

}
.center{
	width: 55%;
}
textarea{
width: 80%;
}
}
@media all and (max-width: 399px) and (min-width: 201px) {
.popupBoxContent{
width: 22% !important;
}
}
@media all and (max-width: 499px) and (min-width: 300px) {
.popupBoxContent{
width: 30%;
}
}
@media all and (max-width: 599px) and (min-width: 500px) {
.popupBoxContent{
width: 38%;
}
}
@media all and (max-width: 699px) and (min-width: 600px) {
.popupBoxContent{
width: 45%;
}
}
@media all and (max-width: 900px) and (min-width: 700px) {
.popupBoxContent{
width: 55%;
}
}
@media all and (max-width: 1000px) and (min-width: 901px) {
.popupBoxContent{
width: 65%;
}
}
@media all and (max-width: 1200px) and (min-width: 1001px) {
.popupBoxContent{
width: 75%;
}
}
		</style>
</head><title>Oulu Events</title>
<body>
         <?php
            include_once('db.php');
            session_start(); 
            if(!$_SESSION['logged']){ 
            header("Location: login.php"); 
            	exit; 
            } else{
            echo "<br />";
	     echo "<h4>";
            echo 'Welcome, '.$_SESSION['username'];
            }
            ?>
         <a href="logout.php" class="logout">Log out</a>
</h4>

<div id="dialog">
<table id="table1" style="display:none;width:15%;min-height:100%;background-color:#07B3D3;margin-top:91px;/*background:url('http://econpapers.repec.org/bg.gif');">
  <tr>
    <td><!--<div id="plus-sign"></div>-->

<div id="wrapper">
			<p><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');" style="font-size:1.5em;color: #fff;padding-left: 11%;">Create Events</a></p>
		</div><!-- wrapper end --><hr></td>
  </tr>

  <tr>
    <td><a href="http://www.w3schools.com"><img id="create" src="http://static.squarespace.com/static/520b550ae4b03f65b5a69ac4/t/526ca257e4b06485ddc2b3f1/1382851160671/?format=1500w"  width="50%" height="30%" padding-left="20px"></a><hr></td>
  </tr>
  <tr>
    <td><p class="contact" style="color:#fff;font-size:1em;text-decoration:none;padding-left:1em;">Krishna Bagale: 0401438609<br>Shafat Shafi: 0414934643<br></p><a href="#"><img id="create" src="http://www.bilex.ie/wp-content/uploads/2014/11/contact_us_icon_transparent_450-380x254.png" width="50%" height="30%" padding-left="20px"></a><hr></td>
  </tr>
</table>
</div>
<div class="center1">
<h1 style="font-size:2.5em;text-align:center;margin-bottom:0;/*padding-top:1em*/color:#133783;">Functions Happening in Oulu, Finland. Come Join Us</h1></div>
<div id='smallmenu' style="/*background-color: #07B3D3;*/background-color: #47c7fa;/color: #fff;height: 50px;padding-top: 1em;padding-left: 0.5em;font-size:1.3em;border-bottom: 2px solid #07B3D3;"><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');" style="color:#fff;padding-right:0.3em;">Create Events</a>
<a href="#" style="color:#fff;border-left: 2px dotted #444;padding-left:0.3em;">Contact us</a>

<?php 
if ($_SESSION["logged"] == true && $_SESSION["username"] == "krishna"){
?>
<!-- setting forms can be here :) awesome -->
<a href="foradmin.php" id="adminPanel" style="color:#fff;border-left: 2px dotted #444;padding-left:0.3em;">Admin Access</a>
<?php
}
?>

</div>
<?php
$servername = "localhost";
$username = "root";
$password = "mypass";
$dbname = "relation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM posts ORDER BY postid DESC";
$result = $conn->query($sql);


 $dayvalue = date("d", strtotime($date) );
 $monthname = date("F", strtotime($date) );
 $yearvalue = date("Y", strtotime($date) );

if ($result->num_rows > 0) {
    //echo "<table><tr><th>Post ID</th><th>Title</th><th>Date</th><th>Event Date</th><th>Username Post</th><th>Image</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>" . "</td><td>" . "<h2>" . $row["title"]. "</h2>" ." ".$row["date"]."</td><td>".$row["Event_date"]."</td><td>".$row["username_post"]."</td><td>".$row["image"]."</td></tr>";
    	echo "<div id='main'><div id='center-content' style='/*position:relative;*/width:90%;align:center;/*padding-left:200px;*/left: 15em;'>" . "<tr style='position:relative;width:600px;'>" . "<td>" . "<br>" . "<br>" . "<h2>" . "#" . $row["title"] . "<br></h2> " . "<span id='time1'>" . $row["Event_date"]. "</span>&nbsp;&nbsp;&nbsp;" . "<img src='http://krishna.ipt.oamk.fi/upload/locationicon.png'>" . "&nbsp;" . "<span class='location' style='/*color:#009999;*/color:#660033;'>" . $row["location"] . "</span>" . "<br>" . "<article>" . $row["article"] . "</article>" . "<br>" . "<img src='http://krishna.ipt.oamk.fi/upload/profile.png'> " . "<cite class='here'>" . $row["username_post"] . "</cite>" . " On: " . "<time>" . $row["date"] . "</time>" . "<div class='accordion'><h3>Enrollment for this event</h3><div class='pane'><p>
<form action='register1.php' method='POST'>
    <input type='radio' name='choice' value='going'>Going
    <input type='radio' name='choice' value='maybe'>Maybe
    <input type='submit' name='submit' /></form></p></div></div>" . "</td></div>";
	 echo "<div id='right-content'><br>";?><img src="<?php echo $row["image"] ?>" id="img_align" height="200" width="170">
<?php echo "</td></div>"; 
}
    echo "</table></div>";
} else {
    echo "0 results";
}

$conn->close();
?>


<div id="popupBoxOnePosition">
			<div class="popupBoxWrapper">
				<div class="popupBoxContent">
					<h3>Create Events</h3><br>
<form action="what.php" method="post" enctype="multipart/form-data" id="myForm">
Title: <br>
<input type="text" name="title" id="title"><br><br>
article: <br>
<textarea type="text" name="article" rows="10" cols="80"></textarea><br><br>
<!--username post: <br>
<input type="text" name="username_post"><br>-->
Event Date: <br>
<input type="datetime" name="event_date" placeholder="Y-m-d H:i:s"/><br>
Location: <br>
<input type="text" name="location" id="location"><br>
<br><br><br><br>
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>

<button id="sub" name="submit">submit</button>

</form>
	<!-- here man -->


				<p id="close"><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');" style="color:#d82332;text-decoration:none;">X</a></p>
				</div>
			</div>
		</div>


<div id="footer">
         <a href="#top" style="color:#fff;"><img src="http://adicts.wapsite.me/1con/header/footer_3.png" width="100%" style="margin-bottom:-29px;">&copy; Oulu Events <?php echo date("Y") ?>
</div>
<script src="http://code.jquery.com/jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.10.1.js" type="text/javascript"></script>
<script src="my_script.js" type="text/javascript"></script>
<script>
$('#myForm').submit(function() {
    if($('#title').val() == ''){
        alert('Please fill out your initials.');
        return false;
    }
});
</script>
<script>
$(function () {
    //  Accordion Panels
    $(".accordion div").show();
    setTimeout("$('.accordion div').slideToggle('slow');", 1000);
    $(".accordion h3").click(function () {
        $(this).next(".pane").slideToggle("slow").siblings(".pane:visible").slideUp("slow");
        $(this).toggleClass("current");
        $(this).siblings("h3").removeClass("current");
    });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<style type="text/css">
.accordion {
    margin:1em 0
}
.accordion h3 {
   /* background:url('http://www.epa.gov/region1/images2/misc/accordion-default.jpg') no-repeat right top #559b6a;*/
    background-color: #4289aa;
    color:#fff;
    cursor:pointer;
    margin:0;
    padding:4px 10px;
    width: 75%;
}
.accordion h3.current {
    /*background:url('http://www.epa.gov/region1/images2/misc/accordion-active.jpg') no-repeat right top #4289aa;*/
    background-color: #367588;
    cursor:default;
    width: 75%;
}
.accordion div.pane {
    padding:5px 10px
}
</style>
</body>
</html>