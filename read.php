<?php 
require_once 'conn.php';
//  $sql = "SELECT Name,P,M,S,Total FROM user";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
    
//     while($row = $result->fetch_assoc()) {
//         echo  $row["Name"]. " " . $row["P"]. " ".$row["M"]." ".$row['S']." ".$row['Total'];
//     }
// } else {
//     echo "0 results";
// }
// $conn->close();
$sql = "SELECT * FROM user WHERE Name = ?";
    
    if($stmt=$conn->prepare($sql)){
        
        $stmt->bind_param("s", $param_id);
        
      
        $param_id = ($_GET["nm"]);
        
      
        if($stmt->execute()){
            $result = $stmt->get_result();
    
            if($result->num_rows == 1){
               
                $row = $result->fetch_assoc();
               $rn=$row["Name"];
               $rp=$row["P"];
               $rm=$row["M"];
               $rs=$row['S'];
               $rt=$row['Total'];              
            }

}
}
$stmt->close();
?>
<html>
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
h3{
    color: yellow;

}
h2{
    color: white;
}
label
{
    color:tomato;
}
   </style>
</head>
<body class ="b1" align="center">
  <div class="container text-center">
      <h2>Details:</h2>
      <hr>
      <h3>Name:<label><?php echo $rn; ?></label></h3>
      <h3>Physics:<label><?php echo $rp; ?></label></h3>
      <h3>Maths:<label><?php echo $rm; ?></label></h3>
      <h3>Science:<label><?php echo $rs; ?></label></h3>
      <h3>Total Marks:<label><?php echo $rt; ?></label></h3>
      <hr>
      <a href='index.php'><button class='btn btn-success'>Home Page</button></a>
  </div>
</body>
</html>
