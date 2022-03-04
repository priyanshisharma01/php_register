<?php
    require_once('connection_adopt.php');
    if(isset($_POST['adopt']))
    {
        
       /* $qry_rcv="SELECT 'rcv_no' FROM 'rcv' order by 'id' DESC LIMIT 1";
        $get_last_rcv = mysqli_query($connn , $qry_rcv);
        $data = mysqli_fetch_assoc($get_last_rcv);
        $rcv_no = $data['rcv_no'];
        $rcv_no++; */
        $name=mysqli_real_escape_string($connn,$_POST['fname']);
        $branch=mysqli_real_escape_string($connn,$_POST['branch']);
        $gender=mysqli_real_escape_string($connn,$_POST['gender']);
        $mobile=mysqli_real_escape_string($connn,$_POST['mobile']);
        $uname=mysqli_real_escape_string($connn,$_POST['uname']);
        $yaer=mysqli_real_escape_string($connn,$_POST['yaer']);
        $mail=mysqli_real_escape_string($connn,$_POST['mail']);

        
        $qry = "INSERT INTO rcv (name, branch, gender,mobile,uname,yaer,mail) VALUES ('$name','$branch','$gender','$mobile','$uname','$yaer','$mail') ";
        $result = mysqli_query($connn,$qry);

   /* if($result)
    {
        echo 'problem';
    }
    else
    {
        echo 'Your record is saved';
    }
        
    }*/
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style2.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="card">
  <div class="card-header">
    <h2>Welcome To TAARANGANA</h2>
    <div class="card-info"><span class="date">13 Mar, 2021</span><span class="dot"></span></div>
  </div>
  <div class="card-body">
    <p>Hi!!!!</p><?php echo $_POST['fname'];?>
   
  </div>
  <input type="button" onclick="window.print()" value="print now" style="margin-top: 8px;" />
  <a href="index.php" style="margin-left: 50px;">Go Back</a>
</div>
</body>
</html>
