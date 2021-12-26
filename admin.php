<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        .video_content {
            width: 900px;
            height: 100%;

            margin-left: 100px;
            padding-bottom: 30px;
            align-items: center;
            justify-content: center;
            
        }
        .main {
            padding-bottom: 40px;   
        }
        @media (max-width: 720px){
            .video_content{
                height: 588px;
                width: 360px;
            }
        }
    </style>   
</head>

<body>
<nav class="navbar">
        <div class="navbar__container">
            <a href="index.html" id="navbar__logo"><i class="/"></i>AUTOMOBILE</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index.html" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="tech.html" class="navbar__links">Models</a>
                </li>
                <li class="navbar__item">
                    <a href="./user_login/login.php" class=" navbar__links ">Forum</a>
                </li>
                <li class="navbar__item">
                    <a href="booklist.php" class="navbar__links">Bookings</a>
                </li>
                <li class="navbar__btn"><a href="logout.php" class="button">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>Sales Dashboard</h1>
                <!-- <a href="https://app.powerbi.com/reportEmbed?reportId=ffe2093a-2b41-4870-a7a9-2707c8952fbd&autoAuth=true&ctid=0b3b6b0c-464c-4a1a-8987-800b8401d56c&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWluZGlhLWNlbnRyYWwtYS1wcmltYXJ5LXJlZGlyZWN0LmFuYWx5c2lzLndpbmRvd3MubmV0LyJ9"></a>              -->
                <!-- <iframe width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=ffe2093a-2b41-4870-a7a9-2707c8952fbd&autoAuth=true&ctid=0b3b6b0c-464c-4a1a-8987-800b8401d56c&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWluZGlhLWNlbnRyYWwtYS1wcmltYXJ5LXJlZGlyZWN0LmFuYWx5c2lzLndpbmRvd3MubmV0LyJ9" frameborder="0" allowFullScreen="true"></iframe>    -->
                    <video src="images/SalesDash.mp4" class="video_content" type="video/mp4" controls repeat></video>
            </div>
        </div>
    </div>     
    <!-- Footer Section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <!-- <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
                    <a href="/">Careers</a> <a href="/">Investments</a>
                    <a href="/">Terms of Service</a>
                </div> -->
                <div class="footer__link--items">
                    <h2>Contact Us</h2>
                    <a href="/">Contact</a> <a href="/">Support</a>
                    <a href="/">Destinations</a> <a href="/">Sponsorships</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <!-- <div class="footer__link--items">
                    <h2>Videos</h2>
                    <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
                    <a href="/">Agency</a> <a href="/">Influencer</a>
                </div> -->
                <div class="footer__link--items">
                    <h2>Social Media</h2>
                    <a href="/">Instagram</a> <a href="/">Facebook</a>
                    <a href="/">Youtube</a> <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="index.html" id="footer__logo"><i class="/"></i>AUTOMOBILE</a>
                </div>
                <p class="website__rights">© AUTOMOBILE 2020. All rights reserved</p>
                <div class="social__icons">
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Youtube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <script src="js/app.js"></script>
</body>

</html>