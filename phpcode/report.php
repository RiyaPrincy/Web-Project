
<html>

<head>
   <style>
    .classs{
      
      border: 2px solid black;
  padding: 25px;
  background: url();
  background-repeat: no-repeat;
  background-size:cover;
      
    }
    </style>
        
            
          
</head>

<body class="classs"><?php
$con= mysqli_connect('localhost','root','','test');
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $number= $_POST['number'];
    $Category = $_POST['Category'];
    $dateandtime= $_POST['dateandtime'];
    $reason = $_POST['reason'];
    $place= $_POST['place'];
    $websitename = $_POST['websitename'];
    $filename= $_POST['filename'];
    $subject = $_POST['subject'];
 $sql = "INSERT INTO `reportcomplaint`(`name`,`gender`,`number`,`Category`,`dateandtime`,`reason`,`place`,`websitename`,`filename`,`subject`)
 VALUES('$name','$gender','$number','$Category','$dateandtime','$reason','$place','$websitename','$filename','$subject')";
 $rs =mysqli_query($con, $sql);
  if ($rs){
    echo "complaint filed";
         }
  else{
    die('CONNECTION ERROR'.mysqli_connect_error());
  }
}

