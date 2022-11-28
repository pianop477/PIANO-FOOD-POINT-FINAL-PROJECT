# PIANO-FOOD-POINT-FINAL-PROJECT
PROJECT TITLE:  PIANO FOOD POINT
## A)	INTRODUCTION 

After completion of 16 weeks for studying in Power Learn Project (PLP) for developers in Africa, this is my final project for validating if I have acquired skills for this training. This project title has developed my career so that  my knowledge has been increased day to day compared for the earlier days. i would like to thank all PLP community for their support materially and all things they provided to me so as to enhance my skills and knowledge.

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
To create account if he/she doesn’t have
To view menus listed in the system
To select her/his favorite menu (food) and to press order
To logout in the system after use.
To view history of order he or she ordered
To update his or her information like phone number, street, names and so on.
To forget password if not remembered






## Role of admin (manager) after logged in:
To view and delete orders sent by customers
To view, add, update and delete menus list.
To view, update and delete list of customers registered in the system.
To update customer’s user type from normal customer to admin or vice versa. So after being admin you assign him or her other roles. (Shift customer to admin).
To logout in the system after use.
To forget password if not remembered.
To reply a message to his customers after receiving their orders.
To update her or his profile

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


## CONCLUSION
This project is an individual work in some ways can have weakness, but it is a part of learning so that I am still learning more and I hope I will develop my career and become competent in this field.


## ATTACHMENTS
##Admin Dashboard Web Interface:
![image](https://user-images.githubusercontent.com/108887102/204351919-9321605d-7a08-4c58-ad63-734b5288b7c0.png)

Description;
In New Order tab........... here it count all new orders ordered by customers
![image](https://user-images.githubusercontent.com/108887102/204354639-858e6168-95da-41f2-8cef-708a57bc1f4d.png)

In processed order tab .........here it count all orders which has been processed by manager/admin
![image](https://user-images.githubusercontent.com/108887102/204354744-dae31c8d-176d-4390-8504-6fb760effae3.png)

In all menu tab............. here it count number of menus available in the system which uploaded by manager
![image](https://user-images.githubusercontent.com/108887102/204354949-073297a1-52ed-48a5-a183-c5a8d6d4348e.png)

In users tab................. here it count the total number of users registered in my system as customers.
![image](https://user-images.githubusercontent.com/108887102/204355131-7fd6454f-2139-4978-ace8-07eec2a253bf.png)
all the above figures are the features found in admini or manager interface on the website

##customer Dashboard Web Interface:
![image](https://user-images.githubusercontent.com/108887102/204355951-e2430e02-2848-4817-b61a-6ec46fcb4d0d.png)

##My Cart 
here it counts the number of orders ordered by customer himself or herself and also it show if the order has been processed or not.
![image](https://user-images.githubusercontent.com/108887102/204356605-52e017ba-4f60-4e8a-b818-c77de053f252.png)
in the notification column the one with green text colour means that the order already processed by restaurant manager and the one with red text colour means that not processed

##All menus
here it counts number of menus available in the system and here is how it looks once clicked
![image](https://user-images.githubusercontent.com/108887102/204357311-13bee551-38ee-4476-8ae8-c9c3bd55134a.png)

in each food item there's order button, when clicked allow user to make order of his or her favourite food



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


























