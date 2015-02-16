<html>

<head><title> Suggestions/Feedback </title>
<link rel="stylesheet" type="text/css" href="osinfo.css">
<script type="text/javascript" src="osinfo.js"></script>
</head>

<body>

<div class="sitelogo"> <img src="sitelogo.png" alt="" usemap="#myMap"/> </div>
<center>
<p style="font-size:36px;color:#0C0"> <strong>Suggestions/Feedback</strong> </p>
<hr color="#999999">


<?php
// define variables and set to empty values
@$nameErr = "";
@$name = $email = $feed_value = "";
$flag=0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $name = test_input($_POST["name"]);
   if (!preg_match("/^[a-zA-Z ]*$/",$name))
      {
      $nameErr = "Only letters and white space allowed";
	  $flag=1;
      }
   $email = test_input($_POST["email"]);
   $feed_value = test_input($_POST["feed_value"]);
  }

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>



<p class="smallp"> Please fill-in the details below </p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<p class="vsmall"> <strong>Name:</strong> <input type="text" name="name" maxlength="25" required> <span class="error"> <?php echo "<br>"; echo $nameErr;?></span></p>
<p class="vsmall"> <strong>Email:</strong> <input type="email" name="email" maxlength="27" required> 
<p class="vsmall"> <strong>Suggestion/Feedback:</strong> <textarea name="feed_value" rows="3" cols="36" required></textarea></p>
<input type="submit" name="submit" value="Submit"><br>
<p class="smallp"><em>Note: All fields are compulsory</em> </p>
</form>

<?php
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['feed_value'])){
	mysql_connect("osinfo1.db.10554283.hostedresource.com", "osinfo1", "Ashu@12345");
	mysql_select_db("osinfo1");
	$query="insert into feedback (name, email, feed_value) values ('$_POST[name]','$_POST[email]','$_POST[feed_value]')";
	$query_run=mysql_query($query);
	@$result=mysql_fetch_assoc($query_run);
	echo "<p>Thank You, your response has been recorded</p>";
	}
?>

<map name="myMap">
	<area shape="rect" coords="5,20,255,55" href="http://www.osinfo.net" title="Home">
    <area shape="rect" coords="8,62,124,77" href="aboutdev.php" title="About Dev">
    <area shape="rect" coords="9,79,186,94" href="http://www.mozilla.org/en-US/firefox/new/" title="Click here to download Firefox ;)">
    </map>
</body>

</html>