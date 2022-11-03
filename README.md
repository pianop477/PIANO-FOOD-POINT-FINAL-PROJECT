# PIANO-FOOD-POINT-FINAL-PROJECT
PROJECT TITLE:  PIANO FOOD POINT
## A)	INTRODUCTION 

After completion of 16 weeks for studying in Power Learn Project (PLP) for developers in Africa, this is my final project for validating if I have acquired skills for this training. This project title has developed my career.

## B)	PROBLEM STATEMENT

My project deals with selling food Online, after doing observation to my surroundings I have seen that most of small restaurants are not established this system for selling their foods. Most of small restaurants sells their foods locally by waiting customers to come and buy food there where they are. This is time consuming and you cannot get customers who are not interested to attend on your restaurant. Some families want to eat delicious food from any restaurant but they need to be at their home places. So that they can miss this because most of restaurants have no services of distributing foods to their customers at their homes.
So that I come up with Piano Food Point (PFP) as a solution by creating this project which will help most of small restaurant managers to manage their business and their customers, and also it will be helpful for those customers who wants to enjoy food from restaurant at their homes.

## C)	PURPOSE OF THE PROJECT 
The project has many functionalities so that makes the system dynamic and usable to users. The general purpose is to make easy way of selling foods through online and to track different information of customers like the order ordered by customer, customer phone number and much more.
For example: 
•	Customers may able to register themselves in the system and to order different food according to the menus available in the list.
•	Restaurant manager (admin) may able to view different orders ordered by his or her customers.
•	Restaurant manager (admin) may able to view list of customers registered to the system.
•	Admin may able to change user type of customer from normal customer to be an admin.
•	Admin may able to add menu list (list of food) available per day or to remove menu from the menu list.
•	After all the users may able to log out in the system and users information needed in order to login again.

## D)	TECHNICAL REQUIREMENT
Programming language applied to my project includes;
•	HTML, CSS, JavaScript and PHP are the Programming languages used in my project so that make up front end and back end of my project.
•	Also I have added some Bootstrap files in order to make my system look good and attractive. So that I include online links as bootstrap files so that they need internet connection in order to work. 
•	The framework used is XAMPP
•	Coding environment used is VScode.
•	I developed my database using Mysql. Database name is called RESTAURANT (I uploaded it on my files in github) which have 3 tables (customer/users, orders and menus).
. I launched my Project for test using xampp in my local machine (local host).

## E)	PROJECT PLAN
The following is a schedule of my project building development from August 26 to September 30.
Week 	Date 	Activity 
Week 1	26 Aug – 2 Sept	Finding Project
Week 2	3 Sept – 10 Sept 	Preparing Problem statement & Formulating Database
Week 3	11Sept – 18 Sept 	Front End Development
-	HTMLS
-	CSS (BOOTSTRAP)
-	JAVASCRIPT
Week 4	19 Sept – 26 Sept 	Back End Development
-	PHP
-	Database Connection
Week 5	27 Sept – 30 Sept 	Finalizing Project & Submission


## F)	HOW SYSTEM WORKS (USABILITY)
	My system needs user credentials by Signing Up an account which will be used for signing in to the system in order to access it. So the sign up form is available for user for create their account.
	Once account created user will use email and password to login in the system. So that the user must enter his/her email address used for signing up and password in order to login in the system.
	My system has two dashboards interface; first is for normal customers and second for admin.




	In my database I assigned a normal user with as a customer (with value 0) and restaurant manager as admin (with value 1), as shown in the picture below;
 
In the directory column in the picture above assign to customers is 0/1 – the one which have value 0 means it is a normal customer but one with value 1 it is an admin. So once you change user type to be customer or admin also you change directory of a customer.
	After logged in, if user type is normal customer, the system will direct to his or her dashboard, and normally in my system all customers will be directed to the place where they will found there is menu list (foods available) and ready to order foods.
	If user type is admin system will direct to admin dashboard and here after logged in you will see list of orders ordered by normal customers.
Use this account for an example as admin account:
Email: frank@piano.com
Password: 1234

This is a default account as a manager account. Use it to view dashboard of an admin how it looks like and its functionality.

## Roles of a normal customer after logged in:
i.	To create account if he/she doesn’t have
ii.	To view menus listed in the system
iii.	To select her/his favorite menu (food) and to press order
iv.	To logout in the system after use.
v.	To view history of order he or she ordered
vi.	To update his or her information like phone number, street, names and so on.
vii.	To forget password if not remembered






## Role of admin (manager) after logged in:
i.	To view and delete orders sent by customers
ii.	To view, add, update and delete menus list.
iii.	To view, update and delete list of customers registered in the system.
iv.	To update customer’s user type from normal customer to admin or vice versa. So after being admin you assign him or her other roles. (Shift customer to admin).
v.	To logout in the system after use.
vi.	To forget password if not remembered.
vii.	To reply a message to his customers after receiving their orders.

	So, customer send orders of food he or she likes and the order will be sent to admin.
	After order sent to admin, admin will able to track the following details;
	Name of person ordered food (customer name)
	Phone number of ordered person,
	Kind of food (food name), 
	Quantity (how many), 
	The price of food according to its quantity, 
	Location (where the customer is) in case if there is delivery to their home, 
	Order date and time
	Button to reply the order
## N.B
The system offers an option of assigning normal customer to be an admin. This function is done by admin only (manager) – by logging in by using admin account go to Users >> customers >> shift user >> in user type option you can select either customer or admin....by doing that you will be able to change type of user in database and also roles will be changed from normal customer (USER)  to be an admin (RESTAURANT MANAGER).

ALSO the system track the active time when user using the platform.. so if user will stop using the platform within 10 minutes or above, the session will expire and will want to sign in again. (SESSION TIMEOUT SET FOR 10 MINUTES FROM THE LAST ACTIVITY DONE BY USER).

## CONCLUSION
This project is an individual work in some ways can have weakness, but it is a part of learning so that I am still learning more and I hope I will develop my career and become competent in this field.


## ATTACHMENTS

## LIST OF TABLES IN DATABASE
![image](https://user-images.githubusercontent.com/108887102/193447940-3db6f6aa-68b1-4dff-95b3-f20ff067a8af.png)

## TABLES AND THEIR RELATIONSHIP
![image](https://user-images.githubusercontent.com/108887102/193447995-73bbe394-3b5a-4239-abd6-35477e541833.png)

## EXAMPLE OF DATA FOUND IN **CUSTOMER** TABLE
![image](https://user-images.githubusercontent.com/108887102/193448958-88560cf8-beeb-4238-88d4-9228f0ae8ec2.png)

here the user with **directory 1** is an admin, the rest are normal users (customers), **you can update normal user to admin by changing directory from 0 to 1 in admin** dashboard by updating customer information

## EXMPLE OF DATA FOUND IN **MENUS** TABLE
![image](https://user-images.githubusercontent.com/108887102/193448432-e9a251b4-a20e-4d6e-82c4-4c9f1d5ecae9.png)
These are samples you can add more menus in admin dashboard
## EXAMPLE OF DATA FOUND IN **ORDERS** TABLE
![image](https://user-images.githubusercontent.com/108887102/193449058-43450efb-9116-4966-9918-f3e6c84a4f5e.png)

The orders with **reply 1** are those which have been processed **(customer they will get notification about the orders they send to admin)** and those with **reply 0** are not processed (new orders)

## CONTANT INFORMATION
Name: 	Frank Mathias Masaka
Phone: 	+255 678 669 000
Email: 	pianop477@gmail.com


























