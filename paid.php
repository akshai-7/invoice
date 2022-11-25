<?php 
$conn= mysqli_connect('localhost','root','','id');

// if(isset($_GET['paid'])){   
//     if($_GET['paid'])
//     {


       
//         $BillNum= $_GET['BillNum'];
//         $CustomerName = $_GET['CustomerName'];
//         $Contact = $_GET['Contact'];
       
//         $sql=mysqli_query($conn,"INSERT INTO  detail VALUES(NULL,'$BillNum','$CustomerName','$Contact')");
//         if($sql)
//         {
//             // echo"Fruit Saved";
//         }
//     }
// }

header("Location:index.php");



if(isset($_POST['paid'])){   
    if($_POST['paid'])
    {


       
        $BillNum= $_POST['BillNum'];
        $CustomerName = $_POST['CustomerName'];
        $Contact = $_POST['Contact'];
       
        $sql=mysqli_query($conn,"INSERT INTO  detail VALUES(NULL,'$BillNum','$CustomerName','$Contact')");
        if($sql)
        {
            // echo"Fruit Saved";
        }
    }
}
 ?>