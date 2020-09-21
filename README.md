# Criminal Management System
Criminal Records Management System using Codeigniter  
* Register Police 
* Add Criminals
* Delete Criminals
* View added Criminals and Police

<!-- TABLE OF CONTENTS -->
## Table of Contents

* [About the Project](#about-the-project)
  * [Tech Stack](#tech-stack)
  * [File Structure](#file-structure)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Results and Demo](#results-and-demo)
* [Contributors](#contributors)
* [Resources](#resources)

<!-- ABOUT THE PROJECT -->
## About The Project
![landing-page](https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem/blob/master/assets/readme/home.jpg)  

### Tech Stack
* [CodeIgniter v3](https://codeigniter.com/)
* [XAMPP](https://www.apachefriends.org/index.html)

### File Structure
    .
    application/
    ├── config                   
    │   ├── autoload.php          # remember to modify models if adding any new models, in last line
    │   ├── config.php            # Base url and index page
    │   ├── routes.php            
    │   └── databse.php           # username, hostname, database name
    ├── controllers 
    │   ├── Pages.php             # localhost/(:any)
    │   ├── Police.php            # Police class --> login, register, index, logout
    │   └── Criminal.php          # Criminal class --> create, delete, index
    ├── models                    
    │   ├── Police_model.php      # Police_model class --> get, register, login
    │   └── Criminal_model.php    # Criminal_model class --> get, create, delete
    ├── views                    
    │   ├── templates/            # header, footer
    │   ├── pages/                # home, about
    │   ├── police/               # register, login, index
    │   └── criminal/             # create, index
    

<!-- GETTING STARTED -->
## Getting Started

### Prerequisites
* Download XAMPP from [here](https://www.apachefriends.org/download.html)
* Download CodeIgniter v3 from [here](https://codeigniter.com/download), Extract the zip inside `htdocs` folder in xampp

### Installation
1. Clone the repo
```sh
git clone https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem.git
```

2. Start the XAMPP server (Apache and MySql)
3. Go to `localhost/phpmyadmin` and create new database named `criminal_management`
4. Run [these queries](https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem/blob/master/create-queries.sql) to create tables
5. Go to `localhost/CodeIgniterCrimeManagementSystem/`


<!-- RESULTS AND DEMO -->
## Results and Demo
![Criminals Page](https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem/blob/master/assets/readme/criminals.png)
![Police Page](https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem/blob/master/assets/readme/police.png)

|![Registration Page](https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem/blob/master/assets/readme/registration.png)|![Login Page](https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem/blob/master/assets/readme/login.png)|![Add Criminals Page](https://github.com/ganadhish1999/CodeIgniterCriminalManagementSystem/blob/master/assets/readme/add-criminals.png)|
|:---:|:---:|:---:|
| Registration | Login | Add Criminals |


<!-- CONTRIBUTORS -->
## Contributors
* [Arnav](https://github.com/CaptainArnav/)
* [Ganadhish](https://github.com/ganadhish1999/)
* [Saharsh](https://github.com/saharshleo/)


<!-- REFERENCES -->
## Resources
* [Traversy Media](https://youtu.be/I752ofYu7ag)  
