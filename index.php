<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAVASCRIPT FORM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validateForm(){
    var fn=document.forms["regform"]["name"].value;
    
    var gn=document.forms["regform"]["gender"];
    var brn=document.forms["regform"]["branch"];
    var mob=document.forms["regform"]["mobile"].value;
    var yr=document.forms["regform"]["year"].value;
    var adr=document.forms["regform"]["adress"].value;

    if(fn==null||fn==""){
        alert("First name cannot be blank");
        return false;

    }
    else if(ln==null||ln==""){
        alert("Last name cannot be blank");
        return false;

    }
    else if((gn[0].checked==false)&&(gn[1].checked==false)){
        alert("Please enter your gender");
        return false;

    }
    else if((brn.selectedIndex==0)){
        alert("Enter your country");
        return false;

    }}


    </script>
    
</head>
<body>
    <div id="particles-js">
        <h1>REGISTRATION FORM</h1>
        <br>
        <div id="form">
            
        <form name="regform" method="POST" autocomplete="off" action="new_adopt.php" onsubmit="validateForm()">
        <label for="fname">NAME</label>
        <input type="text" id="fname" name="fname" placeholder="Enter First Name">
    
        <label>GENDER</label><br/><br>
        <input type="radio" id="male" value="male" name="gender" size="10">
        <label for="male">Male</label>
        <input type="radio" id="female" value="female" name="gender" size="10">
        <label for="female">Female</label><br><br>
        <label for="branch">Select Branch</label><br>
        <select id="branch" name="branch">
            <option value="default">SELECT</option>
            <option value="CSAI">CSAI</option>
            <option value="cse">CSE</option>
            <option value="ece">ECE</option>
            <option value="it">IT</option>
            <option value="mae">MAE</option>
            
        </select>
        <label for="mobile">Mobile No.</label>
        <input type="text" id="mobile" name="mobile" placeholder="Enter Phone Number">
        <label for="uname">Username</label>
        <input type="text" id="uname" name="uname" placeholder="Enter Unique username">
        <label for="yaer">Year</label>
        <input type="text" id="year" name="yaer" placeholder="Enter Your Year">
        <label for="mail">Email id</label>
        <input type="text" id="mail" name="mail" placeholder="xyz@abc.com">
        <input type="submit" name="adopt" value="Generate Pass">
        


        </form>
    </div>
</div>

<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
    
</body>

</html>