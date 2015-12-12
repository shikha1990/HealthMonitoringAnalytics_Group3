<?php

session_start();


?>


<html>
<head>



    <title>Personal Health Companion</title>
    <link rel="stylesheet" href="http://bootswatch.com/slate/bootstrap.min.css">
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/pojoaque.min.css">
    <style>pre{background-color:#7a8288;border:1px solid #7a8288}html::-webkit-scrollbar{width:5px}html::-webkit-scrollbar-track{background-color:rgba(0,0,0,.31);-webkit-border-radius:5px}html::-webkit-scrollbar-thumb:vertical{margin:5px;background-color:#464646;border:1px solid #595959;-webkit-border-radius:5px}html::-webkit-scrollbar-button:end:increment,html::-webkit-scrollbar-button:start:decrement{height:5px;display:block}
   
    </style>
    <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
</head>
<body align="center" style="margin:100px 5px 2px 400px;background-color:#008000"">
<!--<img style="position:absolute ;left:10px" src="images/logo.png">-->
    <div class="col-md-6">
        <center><div class="img_1">
                    <img src="group-exercise.jpg" align="middle" height="300" width="300"/>
        </div>
        <h2 style="font-family: Times New Roman; color:white;font-size: 25px; text-align: center">PERSONAL HEALTH COMPANION</h2><br><br>
        <div id="htmlDiv">

            <form action="reg.php" method="post">
                <div class="form-group">
                    <label style="font-family: Times New Roman; font-size: 18px;color:white; text-align: center">User Name</label>
                    <input name="name" type="name" align="center" class="form-control" id="exampleInputEmail1" placeholder="Enter user name"><br>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="font-family: Times New Roman; color:white;font-size: 18px; text-align: center">EmailAddress</label><br>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email"><br>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" style="font-family: Times New Roman; font-size: 18px; text-align: center;color:white;">Password</label><br>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br><br>
                </div>
                <div class="form-group">
                    
                    <input type="submit" id="a" name="submit" style="font-family: Times New Roman; font-size: 18px; text-align: center" value="Signup">
                </div><br><br>
                           </form>
				<center><font color="red" style="font-family: Times New Roman; font-size: 25px; text-align: center; color:#00ffff"> Already a Member ! <a href="login.php" >Sign In</a></center>

        </div>
    </div>


</body>
</html>
<?php include('dbconfig.php'); ?>
<?php

//$dbc=mysqli_connect('127.0.0.1','root','password','stocks_master') or die('Connection not established');


if(isset($_POST['submit'])){

$user_name=$_POST['name'];
$user_pass=$_POST['pass'];
$user_email=$_POST['email'];

if(empty($user_name)) {
 echo " <script> alert('Pls enter name!!')</script>";
 exit();}
if(empty($user_pass)) {
 echo " <script> alert('Pls enter password!!')</script>";
 exit();}
 if(empty($user_email)) {
 echo " <script> alert('Pls enter email!!')</script>";
 exit();} 
 
 
 
$query1="SELECT email from users WHERE email='$user_email'";
$result1=mysqli_query($dbc,$query1)  or die('Not inserted');

if(mysqli_num_rows($result1)>0){

echo "<script>alert('EMail $user_email is already in the database, please register again')</script>";
//echo 'Query Success'.'<br>'; 
}
else{


$query="INSERT INTO users (id, name, password, email) VALUES (0, '$user_name', '$user_pass', '$user_email')";


 $result=mysqli_query($dbc,$query)  or die('Not inserted');


if($result ==true){

$_SESSION['name']=$user_name;
$_SESSION['email'] = $user_email;
$_SESSION['pass'] = $user_pass;

echo "<script>window.open('index.html','_self')</script>";
}
mysqli_close($dbc);
}}
?>