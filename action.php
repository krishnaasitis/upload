
Hi


<html>
<head></head>
<body>

<form action="what.php" method="post" enctype="multipart/form-data" id="myForm">


<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<table>
Title: <br>
<input type="text" name="title" id="title"><br>
article: <br>
<textarea type="text" name="article" rows="4" cols="80"></textarea><br>
username post: <br>
<input type="text" name="username_post"><br>

//image vanya tyo path  which is already there
<!-- <input type="submit" name="submit" onsubmit="return validateForm();" value="Submit" id="sub"> -->
<button id="sub" name="submit">submit</button>
</form>

<script src="http://code.jquery.com/jquery-1.8.1.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.10.1.js" type="text/javascript"></script>
<script src="my_script.js" type="text/javascript"></script>
</body>
</head>

<script>
$('#myForm').submit(function() {
    if($('#title').val() == ''){
        alert('Please fill out your initials.');
        return false;
    }
});
</script>
