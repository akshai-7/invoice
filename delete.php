<?php
$conn= mysqli_connect('localhost','root','','id');


if(isset($_GET['deleteid'])){
     $id = $_GET['deleteid'];

$sql = "DELETE FROM cart WHERE id = $id ";
$result=mysqli_query($conn,$sql);
if ($result) { 
//   echo "Record deleted successfully";
  header('location:index.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}
header("Location:index.php")
?>