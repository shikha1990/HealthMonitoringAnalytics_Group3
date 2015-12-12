<?php

session_start();


?>


<html>
<head>



    <title>Personal Health Companion</title>
    <link rel="stylesheet" href="http://bootswatch.com/slate/bootstrap.min.css">
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/pojoaque.min.css">
    <style>pre{background-color:#32CD32;border:1px solid #600000}html::-webkit-scrollbar{width:5px}html::-webkit-scrollbar-track{background-color:rgba(0,0,0,.31);-webkit-border-radius:5px}html::-webkit-scrollbar-thumb:vertical{margin:5px;background-color:#464646;border:1px solid #595959;-webkit-border-radius:5px}html::-webkit-scrollbar-button:end:increment,html::-webkit-scrollbar-button:start:decrement{height:5px;display:block}
	
    </style>
    <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
</head>
<body style="margin:100px 5px 2px 400px; background-color:#008000">
<!--<img style="position:absolute ;left:10px" src="images/logo.png">-->
    <div class="col-md-6">
        <center><div class="img_1">
                    <img src="group-exercise.jpg" align="middle" height="300" width="300"/>
        </div>
        <br><h2 style="font-family: Times New Roman;color: white; font-size: 25px; text-align: center">PERSONAL HEALTH COMPANION</h2><br><br>
        <div id="htmlDiv">

           <form action="login.php" method="post">
               
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-family: Times New Roman; font-size: 18px; text-align: center; color:white; margin-top:10px">Username</label><br>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username"><br><br>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="font-family:  Times New Roman; font-size: 18px; text-align: center; color:white; margin-top:10px" >Password</label><br>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    
                    <input type="submit" id="a" name="submit" style="font-family:  Times New Roman; font-size: 18px; text-align: center" value="Sign in" >
                </div>
                           </form><br><br>
                           <center style="font-family:  Times New Roman; font-size: 18px;"><font color="white" size="4"> Not a Member of Personal Health Companion?? <a href="reg.php" style="color:#00ffff; text:no-decoration">Sign Up Here </a></center>

        </div>
    </center></div>


</body>
</html>
<?php include('dbconfig.php'); ?>
<?php


if(isset($_POST['submit'])){

$user_name=$_POST['name'];
$user_pass=$_POST['pass'];
//$unsafeuser_email=$_POST['email'];
//$user_email=mysql_real_escape_string($unsafeuser_email);


/*
if(empty($user_name)) {
 echo " <script> alert('Pls enter name!!')</script>";
 exit();}
if(empty($user_pass)) {
 echo " <script> alert('Pls enter password!!')</script>";
 exit();}
 if(empty($user_email)) {
 echo " <script> alert('Pls enter email!!')</script>";
 exit();} 
*/
 
 
$query1="SELECT email from users WHERE password='$user_pass' AND name='$user_name' limit 1";

$result1=mysqli_query($dbc,$query1)  or die('Not inserted');
if(mysqli_num_rows($result1)>0){

$_SESSION['name']=$user_name;
$_SESSION['pass']=$user_pass;
$row = $result1->fetch_assoc();
$_SESSION['email'] = $row["email"]; 

echo "<script>window.open('index.html','_self')</script>";
}
else{
echo "<script>alert('Username or password is incorrect')</script>";
}


mysqli_close($dbc);
}
?>