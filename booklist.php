<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
      *{
        margin-top:0px;
        margin-bottom:0px;
      }
      body{
          background-color: #141414;
      }
       table{
                margin-left: auto;
                margin-right: auto;
                
            }
            
            .content-table {  
                border-collapse: collapse;
                margin-top:80px;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        
        .content-table thead tr {
            
            background-color: #a80000;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }
        
        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }
        
        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        
        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        
        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #a80000;
        }
        
        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #a80000;
        }



/* responsive nav - bar*/


@media(max-width: 767px){
  
  .responsive-container{
    margin-top:auto 20px;
    width:100%;
  }
  .responsive-container th{
    display:none;
  }
  .responsive-container td{
    display:block;
  }
  .responsive-container td:first-child{
    padding-top: .5em;
  }
  .responsive-container td:last-child{
    padding-bottom: .5rem;
  }
  .responsive-container td::before{
    content: attr(data-th)":";
    font-weight:bold;
    width:6.5em;
    display:inline-block;
  }
  

}
.footer__container{
  margin-top: 300px;
}

table td{
    color: white;
}

table a{
    background-color:white;
    color:black;
    font-weight:bold;
    text-decoration:none;
}
    </style>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>    


 
</head>
<body>
<!-- Navbar Section -->
<nav class="navbar">
        <div class="navbar__container">
            <a href="index.html" id="navbar__logo">AUTOMOBILE</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index.html" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="models.html" class="navbar__links">Models</a>
                </li>
                <li class="navbar__item">
                    <a href="./user_login/login.php" class=" navbar__links ">Forum</a>
                </li>
                <li class="navbar__item">
                    <a href="admin.php" class=" navbar__links ">Sales</a>
                </li>
                <li class="navbar__btn"><a href="logout.php" class="button">Logout</a></li>
            </ul>
        </div>
    </nav>
<div class="responsive-container">  
    <table class ="content-table" id="myTable" >
        <thead>
            <tr class="tr">
                <th>Id</th>
                <th>Name</th>
                <th>Model</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Edit</th>
            </tr>
        </thead>
            <?php
            //error_reporting(0);
            include("databaseconnection.php");
            $query = "SELECT * FROM booking";
            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);

            //echo $total;

            if($total!=0){
                
                while(($result=mysqli_fetch_assoc($data))){
                    echo"
                        <tbody> 
                                <tr>
                                    <td>".$result['id']."</td>
                                    <td>".$result['fullname']."</td>     
                                    <td>".$result['model']."</td>
                                    <td>".$result['email']."</td>
                                    <td>".$result['phone']."</td>
                                    <td>".$result['tdate']."</td>                         
                                    <td> <a href='delete.php?id=".$result['id']."'>Delete &times;</a></td>                         
                                </tr>
                        </tbody>";        
                }
            }
            else{
                echo "no records found";
            }
            ?>
    </table>
</div> 
<!-- Footer Section -->
<div class="footer__container ">
        <div class="footer__links ">
            <div class="footer__link--wrapper ">
                <div class="footer__link--items ">
                    <h2>Contact Us</h2>
                    <a href="/ ">Contact</a> <a href="/ ">Support</a>
                    <a href="/ ">Destinations</a> <a href="/ ">Sponsorships</a>
                </div>
            </div>
            <div class="footer__link--wrapper ">
                <div class="footer__link--items ">
                    <h2>Social Media</h2>
                    <a href="/ ">Instagram</a> <a href="/ ">Facebook</a>
                    <a href="/ ">Youtube</a> <a href="/ ">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media ">
            <div class="social__media--wrap ">
                <div class="footer__logo">
                    <a href="index.html" id="footer__logo">AUTOMOBILE</a>
                </div>
                <p class="website__rights ">© AUTOMOBILE 2021. All rights reserved</p>
                <div class="social__icons ">
                    <a class="social__icon--link " href="/ " target="_blank " aria-label="Facebook ">
                        <i class="fab fa-facebook "></i>
                    </a>
                    <a class="social__icon--link " href="/ " target="_blank " aria-label="Instagram ">
                        <i class="fab fa-instagram "></i>
                    </a>
                    <a class="social__icon--link " href="/ " target="_blank " aria-label="Youtube ">
                        <i class="fab fa-youtube "></i>
                    </a>
                    <a class="social__icon--link " href="/ " target="_blank " aria-label="Twitter ">
                        <i class="fab fa-twitter "></i>
                    </a>
                    <a class="social__icon--link " href="/ " target="_blank " aria-label="LinkedIn ">
                        <i class="fab fa-linkedin "></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <script src="js/app.js "></script>
</body>
</html>