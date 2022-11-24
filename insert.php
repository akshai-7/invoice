<?php 
$conn= mysqli_connect('localhost','root','','id');

if(isset($_GET['submit'])){   
    if($_GET['submit'])
    {


        $Itemcode = $_GET['itemcode'];
        $Productname = $_GET['productname'];
        $Quantity = $_GET['quantity'];
        $Productprice = $_GET['productprice'];
       
        $sql=mysqli_query($conn,"INSERT INTO  cart VALUES(NULL,'$Itemcode','$Productname','$Quantity','$Productprice')");
        if($sql)
        {
            // echo"Fruit Saved";
        }
    }
}

header("Location:index.php")
 ?>