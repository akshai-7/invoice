<?php

$conn= mysqli_connect('localhost','root','','id');

$id =$_GET['updateid'];
$sql = "SELECT * FROM cart WHERE id = '$id'"; 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

    $id=$row['id'];     
    $Productname = $row['Productname'];
    $Quantity = $row['Quantity'];
    $Productprice = $row['Productprice'];
  
    if(isset($_POST['submit'])){ 
      
        $Productname = $_POST['productname'];
        $Quantity = $_POST['quantity'];
        $Productprice = $_POST['productprice'];
    
       $sql = " UPDATE cart set Productname='$Productname',Quantity='$Quantity',Productprice=$Productprice WHERE id = $id ";
       $result=mysqli_query($conn,$sql);
       if($result){
        // echo "Updated Succesfully";
        // header('location:index.php');
       }
       else{
        die(mysqli_error($conn));
    
       }  
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <form action="paid" method="POST">
      <div class="navbar">
        <a class="text-white" href="#"> BillNum <input type="number" name="BillNum"></a>
        <a class="text-white" href="#"><i class="fa fa-fw fa-user"></i> CustomerName <input type="text" name="CustomerName" > </a>
        <a class="text-white" href="#"><i class="fa fa-fw fa-phone"></i> Contact <input type="text" name="Contact"> </a>
        <input type="submit" name="paid" value="submit" class= "bg-primary text-white col-sm-1 p-1" >
        <button class="btn btn-primary"><a  class="text-white" href="invoice.php" name="submit"><i class="fa fa-fw fa-send "></i> Invoice</a></button>

      </div>
    </form>
    </header>
    <div class="parent">
        
        <form action="index.php" class="form" method="POST">
            
            <div class="form-group row my-3">
                <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm">
                <h4>Prouductname</h4>
                </label>
                <div class="col-sm-8">
                <input type="text" name="productname" class="form-control border border-dark bg-transparent" autocomplete="off" required value=<?php echo $Productname;?>>
                </div>
            </div>
            <div class="form-group row my-3 ">
                <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm">
                <h4>Quantity</h4>
                </label>
                <div class="col-sm-8">
                <input type="text" name="quantity" class="form-control border border-dark bg-transparent" autocomplete="off" required value=<?php echo $Quantity;?>>
                </div>
            </div>
            <div class="form-group row my-3">
                <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm">
                <h4>Prouductprice</h4>
                </label>
                <div class="col-sm-8">
                <input type="text" name="productprice" class="form-control border border-dark bg-transparent " autocomplete="off" required value=<?php echo $Productprice;?>>
                </div>
            </div>
                <input type="submit" name="submit" value="Update" class= "bg-info col-sm-2 p-2" >              
        </form>
        <div class="box" >
                <table class="table table-transparent table-striped overflow-hidden sticky-top  table table-hover" #id=table>
                <thead class="header">
                    <tr class="text-white bg-dark">
                    <th scope="col">S.NO</th>
                    <th scope="col">Productname</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Productprice</th>
                    <th scope="col">Total</th>
                    <th scope="col">Operations</th>
                    </tr> 
                    <?php include'getdata.php'?> 
                </thead>
                <tbody>
                <tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<!-- <td class="no-line"></td> -->
    								<td class="no-line text-center"><strong> Grand Total</strong></td>
    								<td class="no-line text-right">$000.0</td>
                                    <td class="no-line"></td>
    				</tr>   
    
                </tbody>
                </table>
            </div>
    
            
    </div>  


</body>
</html>