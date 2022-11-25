<?php 

$conn= mysqli_connect('localhost','root','','id');

$sql = " SELECT * FROM detail" ;
$result=mysqli_query($conn,$sql);
 if($result){
 for($id=0;$row=mysqli_fetch_assoc($result);$id++)
 {
    

   
    $BillNum= $row['BillNum'];
    $CustomerName  = $row['CustomerName'];
    $Contact= $row['Contact'];


 
  ?>
  <?php
    echo '<tr><th scope="row">'.$BillNum.'</th>
    <td>'. $CustomerName .'</td>
    <td>'.$Contact.'</td>
   
    </tr>';
 }
}else{
echo "not working";
}  

?>