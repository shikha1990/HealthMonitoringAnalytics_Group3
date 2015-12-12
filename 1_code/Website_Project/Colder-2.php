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
//Week 1 Exercise data****************************************************
$sql = "SELECT `pos_exercise` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row1_posexercise = mysqli_fetch_assoc($result);
$week1_posexercise= $row1_posexercise['pos_exercise'];
/*echo "<br>";
echo $week1_posexercise; use these echo to only check, but cooment when you want to display the histogram */

//$sql = "SELECT `neg_exercise` FROM `histogram2` WHERE week = '1'"; uncomment if neg_exercise required
//$result = mysqli_query($conn, $sql);
//output data of each row
//$row1_negexercise = mysqli_fetch_assoc($result);
//$week1_negexercise= $row1_negexercise['neg_exercise'];

$sql = "SELECT `mot_exercise` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row1_motexercise = mysqli_fetch_assoc($result);
$week1_motexercise= $row1_motexercise['mot_exercise'];


$sql = "SELECT `total` FROM `histogram5` WHERE week = '1'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week1total = mysqli_fetch_assoc($result);
$week1_total= $week1total['total'];

//Week 2 Exercise***********************************************************
$sql = "SELECT `pos_exercise` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_posexercise = mysqli_fetch_assoc($result);
$week2_posexercise= $row2_posexercise['pos_exercise'];

//$sql = "SELECT `neg_exercise` FROM `histogram2` WHERE week = '2'"; uncomment if neg_exercise required
//$result = mysqli_query($conn, $sql);
// output data of each row
//$row2_negexercise = mysqli_fetch_assoc($result);
//$week2_negexercise= $row2_negexercise['neg_exercise'];

$sql = "SELECT `mot_exercise` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row2_motexercise = mysqli_fetch_assoc($result);
$week2_motexercise= $row2_motexercise['mot_exercise'];


$sql = "SELECT `total` FROM `histogram5` WHERE week = '2'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week2total = mysqli_fetch_assoc($result);
$week2_total= $week2total['total'];

//Week 3 Exercise**********************************************************
$sql = "SELECT `pos_exercise` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_posexercise = mysqli_fetch_assoc($result);
$week3_posexercise= $row3_posexercise['pos_exercise'];


// $sql = "SELECT `neg_exercise` FROM `histogram2` WHERE week = '3'"; uncomment if neg_exercise required
//$result = mysqli_query($conn, $sql);
// output data of each row
//$row3_negexercise = mysqli_fetch_assoc($result);
//$week3_negexercise= $row3_negexercise['neg_exercise'];


$sql = "SELECT `mot_exercise` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row3_motexercise = mysqli_fetch_assoc($result);
$week3_motexercise= $row3_motexercise['mot_exercise'];

$sql = "SELECT `total` FROM `histogram5` WHERE week = '3'";
$result = mysqli_query($conn, $sql);
// output total of each row
$week3total = mysqli_fetch_assoc($result);
$week3_total= $week3total['total'];


//Week 4 Exercise************************************************************
$sql = "SELECT `pos_exercise` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_posexercise = mysqli_fetch_assoc($result);
$week4_posexercise= $row4_posexercise['pos_exercise']; 


// $sql = "SELECT `neg_exercise` FROM `histogram2` WHERE week = '4'"; uncomment if neg_exercise required
$result = mysqli_query($conn, $sql);
// output data of each row
//$row4_negexercise = mysqli_fetch_assoc($result);
//$week4_negexercise= $row4_negexercise['neg_exercise']; 


$sql = "SELECT `mot_exercise` FROM `histogram5` WHERE week = '4'";
$result = mysqli_query($conn, $sql);
// output data of each row
$row4_motexercise = mysqli_fetch_assoc($result);
$week4_motexercise= $row4_motexercise['mot_exercise']; 

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

$data1y=array($week1_posexercise,$week2_posexercise,$week3_posexercise,$week4_posexercise); 
$data2y=array($week1_motexercise,$week2_motexercise,$week3_motexercise,$week4_motexercise);


// Create the graph. These two calls are always required
$graph = new Graph(650,650,'auto');
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
//$b3plot = new BarPlot($data3y); 
//$b4plot = new BarPlot($data4y);

// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
// ...and add it to the graPH
$graph->Add($gbplot);



$b1plot->SetColor("white");
$b1plot->SetFillColor("#66cd00");
$b1plot->value->Show();
$b1plot->SetLegend('pos_exercise');

$b2plot->SetColor("white");
$b2plot->SetFillColor("#1c86ee");
$b2plot->value->Show();
$b2plot->SetLegend('mot_exercise');

//$b3plot->SetColor("white");
//$b3plot->SetFillColor("#ee1289");


//$b4plot->SetColor("white");
//$b4plot->SetFillColor("#6600ff");

$graph->title->Set("Weekly Exercise Trends in Warmer Places");


// position the graph
//$mgraph = new MGraph();
//$xpos1=100;$ypos1=3;
//$mgraph->Add($graph,'auto','auto');

// display the graph
$graph->Stroke();


?>