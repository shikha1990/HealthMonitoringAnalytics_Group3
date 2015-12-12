There are 3 ReadMe files:

1. ReadMe_Setup.txt: To setup all the softwares needed and to configure the database and tables.
2. ReadMe_Rcodes.txt: This readme file is for running the RCodes to provide wordclouds, clustering information and data preprocessing.
3. ReadMe_JavaCodes.txt: This readme file is for running the Java Codes for the following:

	1. Extraction of Tweets from Twitter Streaming API and collecting JSON files
	and pushing it to MongoDB.	
	2. Transmission of tweets from MongoDB to MySQL.	
	3. Performing Text Classification on the data from MySQL.


------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	
	
ReadMe_Setup:	
	
Softwares needed:
1. Download and Install NetBeans.
2. Download and Install R.
3. Download and Install MongoDB.
4. Download and install PHP, Apache and MySQL

Opening MongoDB:
1. Go to C:/MongoDB/bin/ and open mongod.exe to turn on MongoDB.


Using MySQL:
1. Create database 'SE1' - meant for tweet collection and text classification for the entire U.S.
2. Create database 'SE2' - meant from tweet collection and text classification for only Colder Places.
3. Create database 'SE3' - meant from tweet collection and text classification for only Warmer Places.
4. In all these three databases, create these new tables:

CREATE TABLE garbage_all(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE mot_diet(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE mot_exercise(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE neg_diet(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE pos_alcohol(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE pos_diet(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE pos_exercise(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE pos_smoking(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE quit_alcohol(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);
CREATE TABLE quit_smoking(
   UserID VARCHAR(100) NOT NULL,
   TweetID VARCHAR(100) NOT NULL,
   TweetText VARCHAR(1200) NOT NULL,
   PRIMARY KEY ( TweetID )
);

CREATE TABLE `histogram2` (
  `week` varchar(10) NOT NULL,
  `pos_exercise` varchar(10) NOT NULL,
  `mot_exercise` varchar(10) NOT NULL,
  `pos_diet` varchar(10) NOT NULL,
  `neg_diet` varchar(10) NOT NULL,
  `mot_diet` varchar(10) NOT NULL,
  `pos_alcohol` varchar(10) NOT NULL,
  `quit_alcohol` varchar(10) NOT NULL,
  `pos_smoking` varchar(10) NOT NULL,
  `quit_smoking` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Code Repo:https://github.com/shikha1990/HealthMonitoringAnalytics_Group3
E-mail Contacts for Group#3 Members:
Akshita Ambati:aa1406@scarletmail.rutgers.edu  
Harika Matta: harikamatta8@gmail.com
Jianyu Zhang:zhangjianyu1995@gmail.com>
Ruiqi Lin:303072563@qq.com
Shikha Kakar:shikhapm.kakar@gmail.com
Yueyang Chen:244310178@qq.com
