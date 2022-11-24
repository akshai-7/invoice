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
    
    <td>
    
    <button class="btn btn-info"> <a href="update.php? updateid='.$id.'" class="text-white " >U</a></button>
    <button class="btn btn-danger"> <a href="delete.php? deleteid='.$id.'" class="text-white">X</a></button></td>
    
   
    </tr>';
 }
}else{
echo "not working";
}  

?>
