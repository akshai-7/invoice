<?php 
$conn= mysqli_connect('localhost','root','','id');
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
    <form action="paid.php" method="POST" >
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
        <form action="insert.php" class="form" method="POST">
            
            <div class="form-group row my-3">
                <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm">
                <h4>Prouductname</h4>
                </label>
                <div class="col-sm-8">
                <input type="text" name="productname" class="form-control border border-dark bg-transparent" autocomplete="off" required>
                </div>
            </div>
            <div class="form-group row my-3 ">
                <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm">
                <h4>Quantity</h4>
                </label>
                <div class="col-sm-8">
                <input type="text" name="quantity" class="form-control border border-dark bg-transparent" autocomplete="off" required>
                </div>
            </div>
            <div class="form-group row my-3">
                <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm">
                <h4>Prouductprice</h4>
                </label>
                <div class="col-sm-8">
                <input type="text" name="productprice" class="form-control border border-dark bg-transparent " autocomplete="off" required>
                </div>
            </div>
                <input type="submit" name="submit" value="Add" class= "bg-info col-sm-2 p-2" >
                
        </form>
<?php
if(isset($_GET['submit'])){   
    if($_GET['submit'])
    {


        $Itemcode = $_GET['itemcode'];
        $Productname = $_GET['productname'];
        $Quantity = $_GET['quantity'];
        $Productprice = $_GET['productprice'];
       
        $data=mysqli_query($conn,"INSERT INTO cart VALUES(NULL,'$Productname','$Quantity','$Productprice')");
        if($data)
        {
            // echo"Fruit Saved";
        }
    }
}
?>
         
          <div class="box" >
                <table class="table table-transparent table-striped overflow-hidden " #id=table>
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
    								
    								<td class="no-line text-center"><strong> GrandTotal</strong></td>
    								<td class="no-line text-right">000.0</td>
                                    <td class="no-line"></td>
    				</tr>   
    
                </tbody>
                </table>
            </div>
         

    </div>  
    <?php include'delete.php'?> 
    <?php include'update.php'?> 
    
    <?php include'login.php'?> 
     
</body>
</html>