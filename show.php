<?php
 $files = glob("upload/*.*"); 
for ($i=1; $i<count($files); $i++) 
{

 $num = $files[$i];
 print $num."<br />";
 echo '<img src="'.$num.'" alt="random image" height="200px" width="500px" />'."<br /><br />"; } 
?>