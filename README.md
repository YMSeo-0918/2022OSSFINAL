# Yoomin Seo 21900366
## Thanking Diary
  
  This is an online Thanking Diary for people who want 
  to start recording their daily "thanks to". It is useful for both religiously,
  or for normal use to record one's daily thanks.
  
    
## What does this project do?
  It allows the user to keep on track of how positively he/she is living his/her life.
  Living with a positive mindset is very important.
  This web will help the user to continuously record one's mind and live with a good energy.

## Why is this project useful?
  I got this idea from an application called "갓피플" which is a bible application.
  Although it was useful to use the Thank message in the app, it was quite inconvenient 
  becuase the app already had so much functions. The "thanking message" function was 
  rather difficult for me to seek from menu and use it daily. For this reason, I decided
  to make a new website solely for this function.

## How to get started?
  1. turn of nginx first if it is running, and start apache server
 ```
  $ sudo systemctl stop nginx
  $ sudo service apache2 restart
```
  2. clone it to the raspberrypi
  3. create new user for the diary database
 ```
 $ sudo mysql
 ```
 4. Enter following commands:
 ```
 > create user thanksuser@localhost by 'your_password';
 > grant all privileges on *.* to thankuser@localhost;
 > FLUSH PRIVILEGES;
 > exit;
```
5. log into phpMyadmin and create database named "thankdb" and import the "chat.sql" database to thankdb
6. enter following command:
```
$ sudo cp 2022OSSFINAL/ /var/www/html/ -r
```
7. you are ready to use the website using the website "{your_rasperrypi_ip}/2022OSSFINAL"

## Where can people get more help, if needed?
  If you need any help, contact ymseo0918@handong.ac.kr
  
  
## Presentation Video (YouTube) Link

  
## My Contribution to the project:
  - Added Calendar page
  - Added introduction page
  - Added file upload page

![image](https://user-images.githubusercontent.com/103616497/172192331-6c199e24-f304-414c-95f5-1ec611b32aad.png)
![image](https://user-images.githubusercontent.com/103616497/172195640-8d74a14e-9f6b-42ad-bda5-e1d08f8afa63.png)


  
