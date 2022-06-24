<?php
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$address = $_POST['address'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spartan gym</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="images/logo2.png">
    <style>
        .headercontact {
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/contact.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            padding: 20px;
        }


        .details {
            margin: auto;
        }

        form {
            padding: 10px;
            width: 80vw;
            display: flex;
            max-width: 600px;
            flex-direction: column;
            justify-content: space-around;
            min-height: 300px;
            align-items: center;
            margin: 20px auto;
        }

        input {
            display: block;
            height: 40px;
            width: 97.5%;
            padding: 5px;
            margin: 10px 0px;
        }

        .main {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 90px 0px;
        }

        textarea {
            width: 97.5%;
            padding: 5px;
            max-width: 97.9%;
            min-width: 97.9%;
            margin: 10px 0px;
            height: 100px !important;
            min-height: 100px;
        }

        .map {
            width: 80vw;
            height: 450px;
            margin: auto;
            max-width: 600px;
        }

        iframe {
            width: 100%;
            height: 100%;
            display: block;
        }

        button {
            /* border: 2px solid black; */
            background-color: transparent;
            padding: 10px 20px;
            transition: .3s;
            margin: 14px;
            border-radius: 3px;
            background-color: black;
            color: rgb(0, 0, 0);
        }

        table,
        tr,
        td,
        th {
            border: 1px solid black;
            padding: 0px;
        }

        table tr td {
            padding: 20px;
        }

        .table-container {
            width: 100%;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgba(30, 30, 30);
            color: white;
        }
    </style>
</head>

<body>

    <!-- header part -->
    <section class="headercontact">

        <!-- nav bar -->
        <nav class="nav-bar">

            <div class="logo">
                <a href="index.html"><img width="80px" height="70px" src="images\logo1.png"></a>
            </div>

            <ul id='list-container' class="list-container">
                <div class="menu-container">
                    <i class="fas fa-times" id="close"></i>
                    <li><a href="index.html">home</a> </li>
                    <li><a href="about.html">about</a> </li>
                    <li><a href="contact.html">contact</a> </li>
                    <li><a href="workout.html">Workouts</a> </li>
                </div>
            </ul>
            <i class="fas fa-bars" id="open"></i>
        </nav>
        <!-- nav bar end -->

        <!-- text-content -->
        <div class="text-container">
            <div class="text-content">
                <h1 style="color:white">CONTACT US</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iusto sed, reiciendis impedit voluptate libero debitis qui. Nostrum asperiores maxime amet.
                </p>
                <button><a href='#details'>Details</a></button>
            </div>
        </div>

        <!-- text-content end -->


    </section>
    <!-- header part end -->



    <!-- content part -->

    <section id='details' class="main">
        <div class="table-container">
            <table cellspacing=' 0' cellpadding='20px' class="table">
                <tr>
                    <th>Title</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $name ?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?php echo $age ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $address ?></td>
                </tr>
            </table>
            <button class="btn" style='display:block;margin:30px auto'><a href='index.html'>Back to Home</a></button>
        </div>
    </section>

    <!-- content part end -->


    <!-- footer section -->
    <footer>
        <div class="footer-content">

            <div class="social-icon">
                <a target="_blank" href="https://www.facebook.com/vedant.patle.3/"> <i class="fab fa-facebook icon1"></i></a>
                <a target="_blank" href="https://www.instagram.com/vedant_03_05/"> <i class="fab fa-instagram icon2"></i></a>
                <a target="_blank" href="https://twitter.com/VedantPatle1?t=WunDaT876fsEnxaHXwocww&s=08"> <i class="fab fa-twitter icon3"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/vedant-patle-9477a31a5"><i class="fab fa-linkedin icon4"></i></a>

            </div>

            <p>The Gym &copy2022 Spartan Fitness Pvt. Ltd.</p>

        </div>

    </footer>
    <!-- footer section end -->
</body>
<script src="logic.js"></script>

</html>