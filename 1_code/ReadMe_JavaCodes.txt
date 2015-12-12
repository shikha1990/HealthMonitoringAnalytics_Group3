There are 3 ReadMe files:

1. ReadMe_Setup.txt: To setup all the softwares needed and to configure the database and tables.
2. ReadMe_Rcodes.txt: This readme file is for running the RCodes to provide wordclouds, clustering information and data preprocessing.
3. ReadMe_JavaCodes.txt: This readme file is for running the Java Codes for the following:
	1. Extraction of Tweets from Twitter Streaming API and collecting JSON files and pushing it to MongoDB.	
	2. Transmission of tweets from MongoDB to MySQL.	
	3. Performing Text Classification on the data from MySQL.
	
	
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

ReadMe_JavaCodes:

OPEN THE FOLDER 'JavaCodes'

Step 1: Extracting the tweets
1. Go to the Folder 'Crawler'.
2. Go to src-> Crawler -> streamingapi
3. Run StreamingApiExample.java in NetBeans by configuring the Input and Output File Paths.
4. Data is now in json files under the folder 'TweetCollection' and also in MongoDB under 'twitter2' database.
5. To do the analysis only for Colder Places, copy paste the code from Streaming_Cold.java to StreamingAPIExample.java and run the file to fetch the data into JSON files in the folder 'TweetCollection_Cold'
and also in MongoDB under 'twitterdata_cold' database.
6. To do the analysis only for Colder Places, copy paste the code from Streaming_Warm.java to StreamingAPIExample.java and run the file to fetch the data into JSON files in the folder 'TweetCollection_Warm'
and also in MongoDB under 'twitterdata_warm' database.

Step 2: Transmitting the tweets.
1. Go to the Folder 'mongoExtraction'.
2. Go to src-> mongoextraction.
For transmitting data for U.S:
3. Run TransmitTweetsFromMongoTOSQL.java in NetBeans.
For transmitting data only for Colder Places:
4. Copy code from Transmit_Cold.java and paste it in
TransmitTweetsFromMongoTOSQL.java and run the code.
For transmitting data only for Colder Places:
5. Copy code from Transmit_Warm.java and paste it in
TransmitTweetsFromMongoTOSQL.java and run the code.


Step 3: Running Text Classification for
U.S. Data:
1. Go to folder 'TextClassification'.
2. Go to src-> ProgramToAccessDatabase.
3. Run ProgramToAccessDatabase.java code in Netbeans.
4. All the calculated information goes to MySQL under the database 'SE1'.
Colder Places:
5. Copy paste the code from ProgramToAccessDatabase_Cold.java to ProgramToAccessDatabase.java and run the code.
6. All the calculated information goes to MySQL under the database 'SE2'.
Warmer Places:
7. Copy paste the code from ProgramToAccessDatabase_Warm.java to ProgramToAccessDatabase.java and run the code.
8. All the calculated information goes to MySQL under the database 'SE3'.

Step 4: Shifting required datatables to one common place for website:
1. Create a database called 'final'.
2. Shifting se1.histogram2 to final.histogram2 (for U.S tweets)
CREATE TABLE final.histogram2 LIKE se1.histogram2;
INSERT INTO final.histogram2 SELECT * FROM se1.histogram2;

3. Shifting se2.histogram2 to final.histogram6 (for Colder States)
CREATE TABLE final.histogram6 LIKE se1.histogram2;
INSERT INTO final.histogram6 SELECT * FROM se2.histogram2;

4. Shifting se3.histogram2 to final.histogram5 (for Warmer States)
CREATE TABLE final.histogram5 LIKE se1.histogram2;
INSERT INTO final.histogram5 SELECT * FROM se3.histogram2;

------------------------------------------------------------------------------------------------------------------------------------------------------------------
Code Repo:https://github.com/shikha1990/HealthMonitoringAnalytics_Group3
E-mail Contacts for Group#3 Members:	
Akshita Ambati:aa1406@scarletmail.rutgers.edu  
Harika Matta: harikamatta8@gmail.com
Jianyu Zhang:zhangjianyu1995@gmail.com>
Ruiqi Lin:303072563@qq.com
Shikha Kakar:shikhapm.kakar@gmail.com
Yueyang Chen:244310178@qq.com
-------------------------------------------------------------------------------------------------------------------------------------------------------------------