<?php


$con= mysqli_connect('localhost','root','','test');
if(
    isset($_POST['msg']) 
    
)
{
    $msg = $_POST['msg'];
   
 $sql = "INSERT INTO `login`(`msg`) VALUES('$msg')";
 $rs =mysqli_query($con, $sql);
  if ($rs){
    echo "message  sent";
         }
  else{
    die('CONNECTION ERROR'.mysqli_connect_error());
  }
}
?>