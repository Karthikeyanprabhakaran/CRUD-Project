<?php
$nm=$_GET['nm'];
?>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .b1
  {
  	background-image: url('rb.jpg');
  }
  label
  {
  	color:yellow;
  }
</style>
</head>
<body class="b1">
<div class="container text-center"><span class="col-md-4"></span><span class="col-md-4">
<form  action="action.php" align="center" method="post">
<br>
<br>
 <label><h1>Update Marks for <?php echo $nm;?></h1></label>
       <br>
	   <br> <label>Physics:</label>
	  <input type="text" name="p" class="form-control" placeholder=<?php echo $_GET['p'];?>  required>
	  <br>
	   <br> <label >Maths:</label>
	  <input type="text" name="m"class="form-control" placeholder=<?php echo $_GET['m'];?> required>
	  <br>
	 <br>   <label >Science:</label>
	  <input type="text" name="s" class="form-control" placeholder=<?php echo $_GET['s'];?> required>
	  <input type="hidden" name="nn" value=<?php echo $nm;?>>
	  <input type="hidden" name="option" value="update">

<br>
<br>
<input type="submit"  value="Update" style="color: green"></form><a href='index.php'><button class='btn btn-success'>Home Page</button></a></span>
</div>
</body>