<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Class Exercises</title>

<!-- Bootstrap -->
<link href="../bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>

<div class="span10">
<h2>Lesson 2 </h2>
<form action="exercises.php" method="post">
Name: <input type="text" name="fname">
Age: <input type="text" name="age">
<input type="submit">
</form>

Welcome <?php echo $_POST["fname"]; ?> !<br>
You are <?php echo $_POST["age"]; ?> years old.

</div>

 <!-- Button to trigger modal -->
   <a href="#myModal" role="button" class="btn" data-toggle="modal">Contact</a>
     
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Modal header</h3>
</div>
<div class="modal-body">
<p>One fine body…</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary">Save changes</button>
</div>
</div>
    
     <script>
    $('#myModal').modal('show')
	
	
	</script>
<script src="../bootstrap/bootstrap.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>



</body>
</html>
