<?php 
	include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  
<div class="container">
  <div class="row">
			<h1>Add To Cart In PHP</h1><hr>
			<?php 
			$sql="select * from products";
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '
   <div class="col-sm-4 col-lg-3 col-md-3 text-center">
    
     <img src="images/'. $row['PIC'] .'" alt="" class="img-responsive" >
     <p><strong><a href="#">'. $row['PNAME'] .'</a></strong></p>
     <h4 class="text-danger"> Rs.'. $row['PRICE'] .'</h4>
	<p><a href="view.php?id='. $row['PID'] .'" class="btn btn-success">View Details</a></p>

   </div>
   ';
				}
			}
			?>
  </div>
</div>

</body>
</html>
