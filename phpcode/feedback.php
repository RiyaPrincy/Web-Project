
<html>

<head>
   <style>
    .classs{
      
      border: 2px solid black;
  padding: 25px;
  background: url(feeddddddddssss.png);
  background-repeat: no-repeat;
  background-size:cover;
      
    }
    </style>
        
            
          
</head>

<body class="classs">
 <?php
$con= mysqli_connect('localhost','root','','test');

    $yourname = $_POST['yourname'];
    $email = $_POST['email'];
    $ft= $_POST['ft'];
    $subject= $_POST['subject'];
 $sql = "INSERT INTO `feedback`(`yourname`,`email`,`ft`,`subject`) VALUES('$yourname','$email','$ft','$subject')";
 $rs =mysqli_query($con, $sql);
  if ($rs){
    echo "feedback sent";
         }
  else{
    die('CONNECTION ERROR'.mysqli_connect_error());
  }

?>

