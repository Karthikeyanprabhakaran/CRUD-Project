<?php
require_once 'conn.php';
if(isset($_GET['nm']))
{	require_once 'conn.php';
 		$sql = "DELETE  from user where Name=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $bname);
            $bname =$_GET['nm'] ;
            if($stmt->execute()){
                header("location: index.php");
                exit();
            } 
            else{
                echo "Error Deleting  User table";
                }
          }
        $stmt->close();
?>