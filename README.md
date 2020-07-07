
                         
                                                                                                                           ********************* OBJECTIVE*****************

This repository shows an example  of the overall flow of a web application where users can chat with each other.


                                                                                                                             *****************HOW IT WORKS*****************
  

1.Open chat website by using your local browser & click on Create new account. 

2.A signup page will pop up then you fillin all the details to register successfully.

3.After filling in all the details click on sign in button which will direct you to login form .

4.This form asks for user name and password  once the user fills in all the details correctly then the login button directs the user to the  home page where the user can communicate with other users. 

5. If there is some error with  username and password filled in by  the user then it will provide a response that your username and password are invalid and redirect to the login page.

6. Empty forms will not be accepted..

7. In the home page the user can type in messages in the type to send message area and click on send button to send the message .

8. The messages send by the user as well as rececived from other uses will be displayed in the display area .ie:the name of the user who has send the message followed by the message the user has send     and date and time.


                                                                                                                                 ******************DATABASE*********************
                   
            Database name : mydatabase
                 
                 Table: login

	#	Name	Type	                   Collation	          Attributes	Null	Default	         Comments	     Extra	                   Action
	
                1          uid Primary	 int(11)			                                                No            None                                     AUTO_INCREMENT    Change Change	Drop Drop    More More

	2          username	 varchar(200)	utf8mb4_general_ci		No	None			                                    Change Change	Drop Drop    More More	
	
                3          password	 varchar(200)	utf8mb4_general_ci		No	None			                                    Change Change	Drop Drop    More More	

                 Table: signup
       
                 #	Name	         Type	            Collation	        Attributes	Null	Default	   Comments	Extra	                Action
	
                 1	uid Primary       int(11)			                                No            None                              AUTO_INCREMENT	Change Change	Drop Drop    More More	

	 2	username         varchar(200)	   utf8mb4_general_ci		No	None			                                Change Change	Drop Drop    More More	

	 3	email	          varchar(200)	    utf8mb4_general_ci		No	None			                                Change Change	Drop Drop    More More	

	 4	password          varchar(200)      utf8mb4_general_ci		No	None			                                Change Change	Drop Drop    More More

	Table: posts
	
                #	Name	     Type	                       Collation	Attributes  	Null	Default	    Comments	  Extra	                  Action
	
                1	id Primary    int(11)			                                                 No	None		             AUTO_INCREMENT	  Change Change	Drop Drop      More More	

	2	name	    varchar(200)	utf8mb4_general_ci		 No	None			                                  Change Change	Drop Drop      More More	

	3	msg	    varchar(200)	utf8mb4_general_ci		No	None			                                  Change Change	Drop Drop      More More	

	4	date	     timestamp			                               Yes	current_timestamp()			  Change Change	Drop Drop      More More




                                                                                                                                    *****************SETUP AND USAGE*****************


1. Install zampp server go to the location where you have installed zamp and open  zamp control panel.

2. Sart apache and mySQL then open local browser and type localhost/myphpmyadmin/ and create a new database and create three tables  with the above details shown in the database section.

3. Then go tho the zamp folder open htdocs and create a new file with name chat website .

4. under this chat website folder create this files 
        A. index.php
       B. registration.php
       C.logout.php
       D. login.php
       E. home.php
       F. dbh.php
      G. send.php
      H. signup.php
       I. sess.php
      J. style.css
6. copy paste the attached source code to respective files using notepad++ or any other editor and save all the files.

7. Run localhost/chat website on your browser

                                                                                                                                             ***************** THANK YOU  *****************
