<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="new.css">
</head>
<body>


<div class="container">
                <div class="id">
                    <h2>Super Mart!!</h2>
                </div>
        <div class="col-xs-8">
    		<div class="date">
    			<h5 class="pull-right">DATE:<input type="date"></h5>
    		</div>
    		
    		<div class="row">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">BillNum</th>
      <th scope="col">CustomerName</th>
      <th scope="col">Contact</th>
    
    </tr>
  </thead>
  <tbody>
   <?php include'getdetail.php'?>
  </tbody>
</table>
    		<!-- </div> -->
    		<div class="row">
    			<div class="col-xs-6">
    				<!-- <address>
    					<strong>Payment Method:</strong><br>
    					Visa ending **** 4242<br>
    					jsmith@email.com
    				</address> -->
    			</div>
    			<div class="col-xs-6 text-right">
    				<!-- <address>
    					<strong> Date:</strong><br>
    					<input type="date"><br><br>
    				</address> -->
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-5">
    		<div class="">
    			<div class="panel-heading">
                    <h4>Order summary</h4>
    			</div>
    			<div class="">
    				<div class="table">
                    <div class="box " >
                <table class="table table-transparent overflow-hidden " #id=table>
                <thead class="header">
                    <tr class="text-white bg-dark ">
                    <th scope="col">S.NO</th>
                    <th scope="col">Productname</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Productprice</th>
                    <th scope="col">Total</th>
                    
                    </tr> 
                <?php 

                        $conn= mysqli_connect('localhost','root','','id');

                        $sql = " SELECT * FROM cart" ;
                        $result=mysqli_query($conn,$sql);
                        if($result){
                        for($id=0;$row=mysqli_fetch_assoc($result);$id++)
                        {
                            

                        $id=$row['id'];    
                        $Productname = $row['Productname'];
                        $Quantity = $row['Quantity'];
                        $Productprice = $row['Productprice'];
                        //$Total=$Productprice * $Quantity;
                        $Total=$row['Productprice']*$row['Quantity'];
                        
                        ?>
                        <?php
                            echo '<tr><th scope="row">'.$id.'</th>
                            

                            <td>'.$Productname.'</td>
                            <td>'.$Quantity.'</td>
                            <td>'.$Productprice.'</td>
                            <td>'.$Total.'</td>
                            
                            
                        
                            </tr>';
                        }
                        }else{
                        echo "not working";
                        }  

             ?>
                </thead>
                <tbody>
                <tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<!-- <td class="no-line"></td> -->
    								<td class="no-line text-center"><strong> Grand Total</strong></td>
    								<!-- <td class="no-line text-left">$685.99</td> -->
    				</tr>   
    
                </tbody>
                </table>
            </div>
    				</div>
    			</div>
    		</div>

        <button class="btn text-black"> <a href="index.php" class="text-black">Print</a></button>
       
    	</div>
    </div>
</div>
</body>
</html>