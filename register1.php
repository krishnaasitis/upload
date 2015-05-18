
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

<?php
            include_once('db.php');
$username_choice = $_SESSION['username'];
//$username_choice = "krishna";
?>
<?php
    if (isset($_POST['submit'])){
        $choice = $_POST['choice'];
	 //$col = "SELECT postid FROM posts WHERE posts.username_post = krishna";

$postid_enroll = mysql_result(mysql_query("SELECT postid FROM posts WHERE posts.username_post = enroll.username_choice"));

        mysql_query("INSERT INTO enroll VALUES ('', '$postid_enroll', '$choice', '$username_choice')");
    }
    ?>


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
$sql = "SELECT * FROM enroll, posts WHERE posts.postid = enroll.postid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id:  " . $row["postid"] . "    choice: " . $row["name"] . "       user: " . $row["username_choice"] . "    title: " . $row["title"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<script type="text/JavaScript">
<!--
setTimeout("location.href = 'http://krishna.ipt.oamk.fi/upload/events.php';",1000);
-->
</script>