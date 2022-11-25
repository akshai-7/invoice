<?php 
$conn= mysqli_connect('localhost','root','','id');

// if(isset($_GET['submit'])){   
//     if($_GET['submit'])
//     {


       
//         $Productname = $_GET['productname'];
//         $Quantity = $_GET['quantity'];
//         $Productprice = $_GET['productprice'];
       
//         $sql=mysqli_query($conn,"INSERT INTO  cart VALUES(NULL,'$Productname','$Quantity','$Productprice')");
//         if($sql)
//         {
//             // echo"Fruit Saved";
//         }
//     }
// }

// header("Location:index.php")


if(isset($_POST['submit'])){   
    if($_POST['submit'])
    {


       
        $Productname = $_POST['productname'];
        $Quantity = $_POST['quantity'];
        $Productprice = $_POST['productprice'];
       
        $sql=mysqli_query($conn,"INSERT INTO  cart VALUES(NULL,'$Productname','$Quantity','$Productprice')");
        if($sql)
        {
            // echo"Fruit Saved";
        }
    }
}

header("Location:index.php")

 ?>