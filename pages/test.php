<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Class Exersices</title>

<!-- Bootstrap -->
<link href="bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>
<h1>PHP and MySQLi: SRJC</h1>
<?php	

$dataconnection = new mysqli ("localhost", "lalfaro_admin","cXPXtsqZ", "lalfaro");
$music = $dataconnection->query ("select artist from artists");

while ($row = $music->fetch_object()) {
	echo '<p><h3>'.$row->artist.'</h3></p>';
}
$dataconnection->close();
?>

</body>
</html>
