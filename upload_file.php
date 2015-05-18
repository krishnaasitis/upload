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
