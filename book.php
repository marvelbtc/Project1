<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking!</title>
    <link rel="stylesheet" href="formdesign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <style>
        .wrapper {
            background-color: #131313;
        }
        
        body {
            background-color: #141414;
        }
    </style>

</head>

<body>
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
                    <a href="gallery.php" class=" navbar__links ">Gallery</a>
                </li>
                <li class="navbar__item">
                    <a href="./user_login/login.php" class=" navbar__links ">Forum</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="wrapper">
        <div class="title">
            Booking
        </div>
        <form action="bookdb.php" method="post" name="registration" id="registration" onSubmit="return formValidation();">
            <div class="form">
                <div class="inputfield">
                    <label>Name</label>
                    <input type="text" class="input" name="fullname" required>
                </div>

                <div class="inputfield">
                    <label>Models</label>
                    <div class="custom_select">
                        <select name="model" required>
              <option value="">Select</option>
              <option value="Figo">Figo</option>
              <option value="Aspire">Aspire</option>
              <option value="Ecosport">Ecosport</option>
              <option value="Endeavour">Endeavour</option>
              <option value="Mustang">Mustang</option>
              <option value="Freestyle">Freestyle</option>
            </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Email </label>
                    <input type="text" class="input" placeholder="Email" name="email" required>
                </div>

                <div class="inputfield">
                    <label>Phone Number</label>
                    <input type="text" class="input" name="phone" required>
                </div>
                <div class="inputfield">
                    <label>Date</label>
                    <input type="date" class="input" name="tdate" required>
                </div>

                <div class="inputfield terms">
                    <label class="check">
            <input type="checkbox" name="check" required>
            <span class="checkmark"></span>
          </label>
                    <p>Agreed to terms and conditions </p>
                </div>
                <div class="inputfield">
                    <input type="submit" value="Book" class="btn">
                </div>
            </div>
        </form>
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


</body>
<script src="msgbox.js"></script>
<script src="js/app.js "></script>


<script>
    function formValidation() {
        var fname = document.registration.fullname;
        var model = document.registration.model;
        var mail = document.registration.email;
        var num = document.registration.phone;
        var date = document.registration.date;
        var check = document.registration.checkbox;
        if (allLetter(fname)) {
            if (allLetter(model)) {
                if (validateEmail(mail)) {
                    if (phoneNumber(num, 10)) {
                        if (date(date)) {
                            if (validateCheckbox(check)) {}
                        }
                    }
                }
            }
        }
        return false;


    }
    //email validation
    function validateEmail(mail) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (mail.value.match(mailformat)) {
            return true;
        } else {
            alert("Enter a Valid Email!");
            mail.focus();
            return false;
        }
    }
    //phone number
    function phoneNumber(num, mx) {
        var num_len = num.value.length;
        if (num_len == 0 || num_len < mx) {
            alert("Phone Number should be 10 Digits.");
            num.focus();
            return false;
        } else {
            return true;
        }
    }
    //checkbox
    function validateCheckbox(check) {
        if (check.checkbox.checked == false) {
            alert("Accept terms and condition to apply");
            return false;
        } else {
            return true;
        }

    }
</script>

</html>