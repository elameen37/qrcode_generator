# Project Title

QR_Code_Generator
## Live link
 click [here]() to visit the website 


### Description

A platform that allows users to generate QR code
that specifically does something when scanned.

### Features requested

#### User: Unauthenticated

Visit the platform to view basic information about it
View and Interact with the documentation
Register to view more details
No access to use until registered

#### User: Authenticated

Full access to the platform
Allow setting on what should happen when QR is scanned - give at least 2 options
Allow users to download png and pdf format or share code via social media
Allow the user to save data and come back to it.


#### Documentation

##### Project Scope

A QR code (quick response code) is a type of two-dimensional (2D) barcode consisting of an array of black and white squares that is used to provide easy access to online information through a digital camera on a smartphone or tablet. The QR code generator is an online software that is used to generate or create QR codes for storing any digital information. This project aims to make sure QR codes are generated quickly and easily. QR codes let you create memorable marketing campaigns with trackable QR codes designed by you, by uploading a file or Link then the generator converts them into a URL and embeds the link to the QR code. With QR-Gen we hope to promote interaction, and engagement and also create a landing Page after our user Research.

##### PROBLEM STATEMENT

QR codes are used to track product information, and many smartphones include built-in QR scanners. QR codes are used for marketing and advertising by a variety of industries, including restaurants, product packaging, postal services, banks, libraries, and retail stores.

QR codes are meant to be simple and easy to use that is why it is called “Quick Response” but secondary research has shown that a lot of these QR platforms are difficult and frustrating for new users and they do not allow users to access information instantly. Also, Some of these platforms request for payment before users can generate a QR code.

To solve this, we will create a free QR platform that would give users a smooth experience when they generate QR codes.

The generated QR code can be downloaded as PDF, among other features, and when scanned will take you to the user's website.

##### RESEARCH BACKGROUND.

Currently, in the project phase under the Zuri training, user research is being carried out on the project topic assigned to our group as part of the requirement of the program.

Technological advances brought an easy way to store, access, share, and download digital information. The QR (quick response) codes are one of these innovations.

Why type when you can scan?
We aim to design and build a platform that generates a QR code when users upload a link or PDF.
QR codes consist of black modules arranged in a square pattern on a white background, the color of the modules can be customized.
QR codes can be two-dimensional, meaning it can be scanned in two directions (horizontal or vertical), or a one-dimensional barcode, this requires a more sophisticated reader.
There are two types of QR codes; static and dynamic. The digital information in static QR codes is hard-coded and cannot be changed but in dynamic QR codes, the information can be edited even after the QR code is deployed. For this project, we will be using the Static QR code.

QR_gen is a website that is used to create or generate these QR codes that store digital information. The user uploads the PDF file or a link to generate the QR code, which can be shared or downloaded. The user can also save data for download later.

##### Modalities for QR_gen

A. Features for unauthenticated users

1. Landing Page:
   Displaying Basic information about the site- header
   Nav bar
   QR code generator itself etc. 2. Demo button to a page that demonstrates how the QR code works( to allow viewers to interact with the documentation)
   “Get more” ( for maybe more design options)button that will lead to
2. An alert that says users would have to sign up before gaining access to the feature.

3. A register/sign-up page

Authenticated Users

1. Full access to the site
2. New dashboard with a new set of nav bars( just two- URL, pdf)
3. A download button and a share button that would enable users to download or share with social media platforms
4. A page for users to track all their generated codes therefore a “saved” documents folder that they can come back to.

##### User case Scenario

I am a HR manager, I set up my account with the application. Then I paste my LinkedIn link and a QR code is generated for me. I have the option of downloading the code as PNG or sharing the code on social media.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
languages used in this project include 
HTML, CSS, JS, PHP

TOOLS/FRAMEWORK USED INCLUDES

GOGGLEDOC, LARAVEL, JETSTREAM, BOOTSTRAP, DRAWSQL

Framework/QR Code Implementation
A QR Code software was used and installed on Laravel on the vs studio terminal, the vs studio
is an app used for coding. Laravel is the framework used on vs Studio that enabled us
to implement every single step and process initiated from the backend.
Laravel also helped ensure everything arranged on the data schema/project structure was
implemented thereby ensuring the right database structure was achieved.

Link to the QR Code Software used; https://api.qrserver.com/v1/create-qr-code/
We also made our own Login and Registration files using the Laravel MVC structure

languages used in this project include HTML, CSS, JS, BOOTSTRAP
Framework/QR Code Implementation A QR Code software was used and installed on Laravel on the vs studio terminal, the vs studio is an app used for coding. Laravel is the framework used on vs Studio that enabled us to implement every single step and process initiated from the backend. Laravel also helped ensure everything arranged on the data schema/project structure was implemented thereby ensuring the right database structure was achieved. Link to the QR Code API used; https://www.goqr.me/api/doc/create-qr-code/
We also made our own Login and Registration files using the Laravel MVC structure

# qr_generator

## Getting started

Assuming you've already installed on your machine: PHP (>= 7.0.0), [Laravel](https://laravel.com), and [Composer](https://getcomposer.org)

Clone the repository

```bash
git clone https://github.com/elameen37/qrcode_generator.git
```

Switch to the repo folder

```bash
cd qrcode_generator
```

Install all the dependencies using the composer

```bash
composer install
```

In your .env file, adjust the required configurations accordingly, and run the database migrations (**Set the database connection and the mail configuration in .env before migrating**)

```bash
php artisan migrate
```

Generate an app key for your .env file using

```bash
php artisan key:generate
```

Then launch the server:

```bash
php artisan serve
```


The Laravel sample project is now up and running! Access it at http://127.0.0.1:8000.


      USABILITY TESTING
After properly implementing all necessary to ensure a very comfortable user experience both on the frontend and backend as well as the product design Users  were able to upload URL and pdf files to derive QR codes specifically for their URL accounts and pdf files and were also able to go back to saved files on the site and all this done after registration as instructed, users were also able to most importantly scan the QR codes both for URL and pdf, they also felt totally safe in terms of password input and reset which is a very important part of every website/company

CONCLUSION
The whole project was a great learning experience for us, working as a team was amazing, and based on the feedback we concluded that the website is effective and ready.
we are sure our users will have a smooth experience when using the website

                              CONTRIBUTORS

Aminu Shaibu 
GITHUB-USERNAME-[elameen37](https://Github.com/elameen37)
Babalola Raphael Kehinde
GITHUB-USERNAME-[geeflows44](https://Github.com/geeflows44)

