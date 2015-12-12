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
//Week 1 diet data****************************************************
$sql = "SELECT `pos_diet` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row1_posdiet = mysqli_fetch_assoc($result);
$week1_posdiet= $row1_posdiet['pos_diet'];
/*echo "<br>";
echo $week1_posdiet; use these echo to only check, but cooment when you want to display the histogram */

$sql = "SELECT `neg_diet` FROM `histogram5` WHERE week = '1'";  
$result = mysqli_query($conn, $sql);
//output data of each row
$row1_negdiet = mysqli_fetch_assoc($result);
$week1_negdiet= $row1_negdiet['neg_diet'];

$sql = "SELECT `mot_diet` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row1_motdiet = mysqli_fetch_assoc($result);
$week1_motdiet= $row1_motdiet['mot_diet'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week1total = mysqli_fetch_assoc($result);
$week1_total= $week1total['total'];

//Week 2 diet***********************************************************
$sql = "SELECT `pos_diet` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_posdiet = mysqli_fetch_assoc($result);
$week2_posdiet= $row2_posdiet['pos_diet'];

$sql = "SELECT `neg_diet` FROM `histogram5` WHERE week = '2'";  
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_negdiet = mysqli_fetch_assoc($result);
$week2_negdiet= $row2_negdiet['neg_diet'];

$sql = "SELECT `mot_diet` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_motdiet = mysqli_fetch_assoc($result);
$week2_motdiet= $row2_motdiet['mot_diet'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week2total = mysqli_fetch_assoc($result);
$week2_total= $week2total['total'];

//Week 3 diet**********************************************************
$sql = "SELECT `pos_diet` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_posdiet = mysqli_fetch_assoc($result);
$week3_posdiet= $row3_posdiet['pos_diet'];


$sql = "SELECT `neg_diet` FROM `histogram5` WHERE week = '3'";  
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_negdiet = mysqli_fetch_assoc($result);
$week3_negdiet= $row3_negdiet['neg_diet'];


$sql = "SELECT `mot_diet` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_motdiet = mysqli_fetch_assoc($result);
$week3_motdiet= $row3_motdiet['mot_diet'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week3total = mysqli_fetch_assoc($result);
$week3_total= $week3total['total'];


//Week 4 diet************************************************************
$sql = "SELECT `pos_diet` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_posdiet = mysqli_fetch_assoc($result);
$week4_posdiet= $row4_posdiet['pos_diet']; 


$sql = "SELECT `neg_diet` FROM `histogram5` WHERE week = '4'";  
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_negdiet = mysqli_fetch_assoc($result);
$week4_negdiet= $row4_negdiet['neg_diet']; 


$sql = "SELECT `mot_diet` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_motdiet = mysqli_fetch_assoc($result);
$week4_motdiet= $row4_motdiet['mot_diet']; 

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

$data1y=array($week1_posdiet,$week2_posdiet,$week3_posdiet,$week4_posdiet); 
$data2y=array($week1_negdiet,$week2_negdiet,$week3_negdiet,$week4_negdiet);  
$data3y=array($week1_motdiet,$week2_motdiet,$week3_motdiet,$week4_motdiet);


// Create the graph. These two calls are always required
$graph = new Graph(450,450,'auto');
$graph->SetScale("textlin");
$theme_class=new UniversalTheme;


$graph->yaxis->scale->SetAutoMin(0);
$graph->yaxis->SetFont(FF_ARIAL,FS_BOLD,10);
$graph->SetBox(false);
$graph->SetTheme($theme_class);

$graph->yaxis->title->Set("Number of Tweets");
$graph->yaxis->SetTitleMargin(-10);
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array("$week1_total T/Wk1" ,"$week2_total T/Wk2","$week3_total T/Wk3","$week4_total T/Wk4"));
$graph->xaxis->SetFont(FF_ARIAL,FS_BOLD,7);
$graph->legend->SetFont(FF_ARIAL,FS_NORMAL,15);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);



// Create the bar plots
$b1plot = new BarPlot($data1y);
$b2plot = new BarPlot($data2y);    
$b3plot = new BarPlot($data3y);

// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot));
// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetFillColor("#66cd00");
$b1plot->SetColor("white");
$b1plot->SetLegend('pos_diet');
$b1plot->value->Show();

$b3plot->SetColor("white");
$b3plot->SetFillColor("#1c86ee");
$b3plot->SetLegend('mot_exercise');
$b3plot->value->Show();

$b2plot->SetColor("white");
$b2plot->SetFillColor("#ff4040"); 
$b2plot->SetLegend('neg_exercise'); 
$b2plot->value->Show();

$graph->title->Set("Weekly Diet Trends in Warmer Places");
$graph->title->SetFont(FF_ARIAL,FS_NORMAL,15);



// position the graph
//$mgraph = new MGraph();
//$xpos1=100;$ypos1=3;
//$mgraph->Add($graph,'auto','auto');

// display the graph
$graph->Stroke();


?>