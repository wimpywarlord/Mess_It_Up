# MESS IT UP

[![Stay Motivated](https://img.shields.io/badge/Stay-Motivated-teal.svg?style=for-the-badge)](https://github.com/wimpywarlord/Mess_It_Up) 
[![Think Big](https://img.shields.io/badge/Think-Big-orange.svg?style=for-the-badge)](https://www.linkedin.com/in/kshitijdhyani/)
[![Work Hard](https://img.shields.io/badge/Work-Hard-blue.svg?style=for-the-badge)](https://github.com/wimpywarlord)

The idea originated from the fact that the paid mess (food mall) in the L Block men hostel still use the primitive pen and paper method to maintain their records and monthly accounts of the customers. This is an open invitation to human error and malpractice, and hence we came to the rescue of our fellow Vitians. We build a full-proof Food Mall management 
the system, which not only efficiently tallies the accounts of all the students but also has a user-friendly interface for users to check their current balance and contact details of the mess. In near future we tend to introduce the feature of dish review which will help our users to make the best choice when it comes to food. Also, another interesting feature that our web app offers is that we very transparently offer the ability to check and cross-check your transactions history at any moment in time. Also, this cut shorts the long and cumbersome process of standing in queues just waiting to order, everything is digital and lighting fast in the blink of an eye.
It is an all-around product which will massively improve the management of the food mall and fortify it as well. 
It's fast, its safe, its useful, its mess it up by kshitij Dhyani

![alt-text](https://github.com/wimpywarlord/Mess_It_Up/blob/master/mess/Screenshot_1.png)

## Getting Started

[![THINK](https://img.shields.io/badge/Stay-Motivated-teal.svg?style=for-the-badge)](https://github.com/wimpywarlord/Mess_It_Up) 
[![MAKE](https://img.shields.io/badge/Think-Big-orange.svg?style=for-the-badge)](https://www.linkedin.com/in/kshitijdhyani/)
[![SELL](https://img.shields.io/badge/Work-Hard-blue.svg?style=for-the-badge)](https://github.com/wimpywarlord)

Its quite simple, just follow the following steps.

Start with cloning the repository in the desired directory :

```
git clone <http url>
```
  
You will need to download and install xampp from [here](https://www.apachefriends.org/download.html)

Now copy the cloned repo folder named mess and paste it into the **htdocs** folder inside the **xampp** folder which is installed by default into the C drive of your computer.

Xampp is installed by default to :

```
C:\xampp\htdocs
```

Now open xampp control panel and start the Apache Service and MySql service.

Open your browser and type in the url 

```
http://localhost/mess/login.php
```

Enjoy the service of MessItUp.

### Prerequisites

All you need is a knack for learning.
As the saying goes.

> Your life will flash in front of your eyes one day,make sure its worth watching.
A step by step series of examples that tell you how to get a development env running

### Installing

All you need to dowload is xampp from [here](https://www.apachefriends.org/download.html)
The installation process is fairly simple and the wizard will walk you through the process.

Optionally I recommend you to download **Sublime text** 3.Its a amazing free editor from [here](https://www.sublimetext.com/3). 
 
In the end you should end up with the xampp control panel which looks something like this :

![yumyum](https://user-images.githubusercontent.com/41532804/67155518-d808a080-f32e-11e9-98de-b1ebef43ef70.PNG)

## Deployment

Start the xampp software , and click the start button for apache server and mysql database.
Now click on admin of MySQL and create the following tables with the exact names and heading. If you fail to do this , the website wont work , the names need to match exaclty.

The creation of tables and datbases are fairly simple and straight forward with a interactive UI , no coding is required hence i am going to leave it at your diposal. 

**Create** a **database** called **"user"** with tables as :

**insert values as per your own desire.**

**choose all data types as string.**

```
"menu" with the attributes "dish_type" , "price" , "dish" , "mess_name"
```

```
"mess" with attributes "mess_name" , "mess_capacity" , "mess_head" , "mess_contact"
```

```
"student" with attributes "username" , "password" , "room_no" , "contact_no" , "balance" , "mess_name"
```

```
"transaction" with attributes "transaction_id" , "time_of_t" , "dish" ,"price" , "username"
```

Open your browser and type in the url 

```
http://localhost/mess/login.php
```

Enjoy the service of MessItUp.

## Built With

[![Built with Love](https://forthebadge.com/images/badges/built-with-love.svg)](https://www.linkedin.com/in/kshitijdhyani/) [![KSHITIJ DHYANI](https://forthebadge.com/images/badges/makes-people-smile.svg)](https://www.linkedin.com/in/kshitijdhyani/) 

Build with love and some php and MySQL.

## Contributing

Help us make the site better in any way possible.

## I'm a social animal!

So connect with me on social media and share your experience.

I would love to interact with this world full of amazing people such as you. 

<a href="https://www.facebook.com/kshitij.dhyani.3" target="_blank"><img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/facebook.svg" /></a> &nbsp;&nbsp;<a href="https://www.linkedin.com/in/kshitijdhyani/" target="_blank"><img height="32" width="32" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/collection/build/ionicons/svg/logo-linkedin.svg" /></a> &nbsp;&nbsp;<a href="https://www.instagram.com/kshitij_dhyani/?hl=en" target="_blank"><img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/instagram.svg" /></a>
