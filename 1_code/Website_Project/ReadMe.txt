We have to install Apache,PHP and MySQL inorder to run these files in this folder. Without the php,apache and mysql we cannot view the graphs in the website.

Also make sure that the apache configuration files are modified to use the jpgraph library.

Instructions to view the graphs in our Website.

1)This folder should be placed in Apache24->htdocs in order to view the files in the browser. While running in the browser we have to type localhost/Website_Project/index.html to view the homepage. 

2)Now, to view the graph for weekly trends for Exercises go to Services->Sports. To view  graph for weekly trends for Diet go to Services->Diet.To view graph for weekly trends for Smoking and Alcohol go to Services->Smoking & Alcohol.

3)You can check the colder warmer trends at Colder/Warmer Places Trends.

4)index.html shows you the home page of the website.

5)service_index.html services page which shows the different features of our websites. 

6)Exercise.html shows you the weekly trends fo Exercise. The graphs were generated using jpgraphs library in PHP. For this trend we are getting the grapg from Exercise_trend.php.

7)Diet.html shows you the weekly trends for Diet.The graphs were generated using jpgraphs library in PHP. For this trend we are getting the grapg from Diet_trend.php.

8)smoking&alcohol.html shows you the weekly trends for Smoking and Alcohol.The graphs were generated using jpgraphs library in PHP. For this trend we are getting the grapg from Alcohol_trend.php.

9)coldwarmexercise.html shows you the weekly trends for colder places vs warmer places for Exercise. The php files used for these graphs are Colder-2.php and warmer2.php

10)coldwarmdiet.html shows you the weekly trends for colder places vs warmer places for Diet.The php files used for these graphs are colder3.php and warmer3.php

11)coldwarmsmokingalcohol.html shows you the weekly trends for colder places vs warmer places for Smoking and Alcohol.The php files used for these graphs are Colder.php and Warmer.php

12)contacts.html shows us the Contacts page.


In the Website_Project folder, we have the final.sql files which has all our sql tables and few data we collected. This is how our database tables and commands look like. You can even use these database files for checking our php graphs if they are varying according to the data in the sql tables.