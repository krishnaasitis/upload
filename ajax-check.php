<?php
$query=mysql_connect("localhost","root","");
mysql_select_db('relation',$query);
if(isset($_POST['game']))
{
$choice=$_POST['game'];
mysql_query("insert into enroll values('','$choice')");
}
?>