<?php

$servername1 = "127.0.0.1";
$username1 = "analyst";
$password1 = "welcome123";
$dbname1 = "stocks_master";
require_once ('jpgraph/jpgraph_mgraph.php');

// Create connection
$conn = mysqli_connect($servername1, $username1, $password1, $dbname1);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Week 1 Alcohol data****************************************************
$sql = "SELECT `pos_alcohol` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row1_posalcohol = mysqli_fetch_assoc($result);
$week1_posalcohol= $row1_posalcohol['pos_alcohol'];
/*echo "<br>";
echo $week1_posalcohol; use these echo to only check, but cooment when you want to display the histogram */

$sql = "SELECT `quit_alcohol` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row1_quitalcohol = mysqli_fetch_assoc($result);
$week1_quitalcohol= $row1_quitalcohol['quit_alcohol'];

$sql = "SELECT `pos_smoking` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
//output data of each row
$row1_possmoking = mysqli_fetch_assoc($result);
$week1_possmoking= $row1_possmoking['pos_smoking'];

$sql = "SELECT `quit_smoking` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row1_quitsmoking = mysqli_fetch_assoc($result);
$week1_quitsmoking= $row1_quitsmoking['quit_smoking'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week1total = mysqli_fetch_assoc($result);
$week1_total= $week1total['total'];

//Week 2 Alcohol***********************************************************
$sql = "SELECT `pos_alcohol` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_posalcohol = mysqli_fetch_assoc($result);
$week2_posalcohol= $row2_posalcohol['pos_alcohol'];

$sql = "SELECT `quit_alcohol` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_quitalcohol = mysqli_fetch_assoc($result);
$week2_quitalcohol= $row2_quitalcohol['quit_alcohol'];

$sql = "SELECT `pos_smoking` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_possmoking = mysqli_fetch_assoc($result);
$week2_possmoking= $row2_possmoking['pos_smoking'];

$sql = "SELECT `quit_smoking` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_quitsmoking = mysqli_fetch_assoc($result);
$week2_quitsmoking= $row2_quitsmoking['quit_smoking'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week2total = mysqli_fetch_assoc($result);
$week2_total= $week2total['total'];

//Week 3 Alcohol**********************************************************
$sql = "SELECT `pos_alcohol` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_posalcohol = mysqli_fetch_assoc($result);
$week3_posalcohol= $row3_posalcohol['pos_alcohol'];

$sql = "SELECT `quit_alcohol` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_quitalcohol = mysqli_fetch_assoc($result);
$week3_quitalcohol= $row3_quitalcohol['quit_alcohol'];

$sql = "SELECT `pos_smoking` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_possmoking = mysqli_fetch_assoc($result);
$week3_possmoking= $row3_possmoking['pos_smoking'];

$sql = "SELECT `quit_smoking` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_quitsmoking = mysqli_fetch_assoc($result);
$week3_quitsmoking= $row3_quitsmoking['quit_smoking'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week3total = mysqli_fetch_assoc($result);
$week3_total= $week3total['total'];


//Week 4 Alcohol************************************************************
$sql = "SELECT `pos_alcohol` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_posalcohol = mysqli_fetch_assoc($result);
$week4_posalcohol= $row4_posalcohol['pos_alcohol']; 


$sql = "SELECT `quit_alcohol` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_quitalcohol = mysqli_fetch_assoc($result);
$week4_quitalcohol= $row4_quitalcohol['quit_alcohol']; 

$sql = "SELECT `pos_smoking` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_possmoking = mysqli_fetch_assoc($result);
$week4_possmoking= $row4_possmoking['pos_smoking'];

$sql = "SELECT `quit_smoking` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_quitsmoking = mysqli_fetch_assoc($result);
$week4_quitsmoking= $row4_quitsmoking['quit_smoking'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week4total = mysqli_fetch_assoc($result);
$week4_total= $week4total['total'];

//Closing sql connection
mysqli_close($conn);
/* ***************************************************** */

// content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

$data1y=array($week1_posalcohol,$week2_posalcohol,$week3_posalcohol,$week4_posalcohol);
$data2y=array($week1_quitalcohol,$week2_quitalcohol,$week3_quitalcohol,$week4_quitalcohol);
$data3y=array($week1_possmoking,$week2_possmoking,$week3_possmoking,$week4_possmoking);
$data4y=array($week1_quitsmoking,$week2_quitsmoking,$week3_quitsmoking,$week4_quitsmoking);


// Create the graph. These two calls are always required
$graph = new Graph(400,300,'auto');
$graph->SetScale("textlin");
$theme_class=new UniversalTheme;


$graph->yaxis->scale->SetAutoMin(0);
$graph->yaxis->SetFont(FF_ARIAL,FS_NORMAL,10);
$graph->SetBox(false);
$graph->SetTheme($theme_class);

$graph->yaxis->title->Set("Number of Tweets");
$graph->yaxis->SetTitleMargin(-10);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array("$week1_total T/Wk1" ,"$week2_total T/Wk2","$week3_total T/Wk3","$week4_total T/Wk4"));
$graph->xaxis->SetFont(FF_ARIAL,FS_NORMAL,7);

$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);



// Create the bar plots
$b1plot = new BarPlot($data1y);
$b2plot = new BarPlot($data2y); 
$b3plot = new BarPlot($data3y); 
$b4plot = new BarPlot($data4y);

// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot,$b4plot));
// ...and add it to the graPH
$graph->Add($gbplot);



$b1plot->SetColor("white");
$b1plot->SetFillColor("#66cd00");

$b2plot->SetColor("white");
$b2plot->SetFillColor("#1c86ee");

$b3plot->SetColor("white");
$b3plot->SetFillColor("#ee1289");


$b4plot->SetColor("white");
$b4plot->SetFillColor("#6600ff");

$graph->title->Set("Trends in colder places");


// position the graph
//$mgraph = new MGraph();
//$xpos1=100;$ypos1=3;
//$mgraph->Add($graph,'auto','auto');

// display the graph
$graph->Stroke();


?>