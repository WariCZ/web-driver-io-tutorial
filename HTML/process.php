<html>
<title>Search Sesults Page</title>
<body>
<div id="search-results">
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname']; 

echo "<center><h1>";
echo "Welcome " . $fname . " " . $lname . ".</h1><br>";

echo "<h2>Thank you for submitting your information!</h2></center>";

?>
</div>
</body>
</hmtl>