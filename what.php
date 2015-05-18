         <?php
            include_once('db.php');
            session_start(); 
            if(!$_SESSION['logged']){ 
            header("Location: login.php"); 
            	exit; 
            } else{
            echo "<br />";
            echo 'Welcome, '.$_SESSION['username'];
            
            }
            ?>
         <a href="logout.php" class="logout">Log out</a>
<?php
     $allowedExts = array("gif", "GIF", "jpeg", "JPEG", "jpg", "JPG", "png", "PNG");
      $extension = end(explode(".", $_FILES["file"]["name"]));

      $timestamp = time();
      $filename = $timestamp. $_FILES["file"]["name"];


     if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 20000000) // increased allowed size may be your problem
    && in_array($extension, $allowedExts))
   {
   if ($_FILES["file"]["error"] > 0)
  {
  echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
 }
  else
{
   echo "Upload: " . $filename . "<br>";
   echo "Type: " . $_FILES["file"]["type"] . "<br>";
   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
   echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

     if (file_exists("upload/" . $filename))
      {
       echo $_FILES["file"]["name"] . " already exists. ";
        }
      else
      {
       move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
	
	$path = 'upload/' . $filename;

   // echo "Stored in: " . "upload/" . $filename;

	echo "Stored in: " . $path;
}
}
}
?>

<?php
 		include_once('db.php');
 
 	$postid;
	$title = $_POST["title"];
       $date = date('Y-m-d H:i:s', strtotime('+2 hour'));
	//$Event_date = new DateTime($_POST['event_date']);
	//$dateString = $Event_date->format('Y-m-d H:i:s');	

	$article = $_POST["article"];
	$location = $_POST["location"];
	$username_post = $_SESSION['username'];
	$image = $path;
	$time = $_POST["time"];

  try {
    $Event_date = new DateTime($_POST['event_date']);
    $dateString = $Event_date->format('Y-m-d H:i:s');
    //$ed = $dateString + $time;
} catch (\Exception $e) {
    // If we get here, the user provided an invalid date
	echo "Invalid date";
}

// Do something with $dateString here (like put it in the database)



		if(mysql_query("INSERT INTO posts VALUES('$postid', '$title', '$date', '$dateString', '$location', '$article', '$username_post', '$image')"))
		  echo "Successfully Inserted";
		else
		  echo "Insertion Failed";
?>
<script type="text/JavaScript">
<!--
setTimeout("location.href = 'http://krishna.ipt.oamk.fi/upload/events.php';",1000);
-->
</script>