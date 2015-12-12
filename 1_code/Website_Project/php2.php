<?php 
 
// content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');
$week1_posexercise=40;
$week2_posexercise=30;
$week3_posexercise=25;
$week4_posexercise=22;
$week1_negexercise=50;
$week2_negexercise=45;
$week3_negexercise=65;
$week4_negexercise=75;

$data1y=array($week1_posexercise,$week2_posexercise,$week3_posexercise,$week4_posexercise); 
$data2y=array($week1_negexercise,$week2_negexercise,$week3_negexercise,$week4_negexercise);

/*$data1y=array(30,60,90,120); 
$data2y=array(61,30,82,105);*/
$data3y=array(115,50,70,93);


// Create the graph. These two calls are always required
$graph = new Graph(400,300,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
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


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");

$b2plot->SetColor("white");
$b2plot->SetFillColor("#11cccc");

$b3plot->SetColor("white");
$b3plot->SetFillColor("#1111cc");

$graph->title->Set("Bar Plots");



// Display the graph
$graph->Stroke();


?>