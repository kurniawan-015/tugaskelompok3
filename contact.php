<!DOCTYPE html>
<html lang="en">
<Title>GatotKaca RentCar</Title>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Tombol Button Pesan */
        #button {
            margin: 5% auto;
            width: 100px;
            text-align: center;
        }

        #button a {
            width: 100px;
            height: 30px;
            vertical-align: middle;
            background-color: #F00;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid transparent;
        }

        /* Jendela Pop Up */
        #popup {
            width: 100%;
            height: 100%;
            position: fixed;
            background: rgba(0, 0, 0, .7);
            top: 0;
            left: 0;
            z-index: 9999;
            visibility: hidden;
        }

        .window {
            width: 400px;
            height: 200px;
            background: #fff;
            border-radius: 10px;
            position: relative;
            padding: 10px;
            text-align: center;
            margin: 15% auto;
        }

        .window h2 {
            margin: 30px 0 0 0;
        }

        /* Button Close */
        .close-button {
            width: 6%;
            height: 12%;
            line-height: 18px;
            background: #000;
            border-radius: 50%;
            border: 3px solid #fff;
            display: block;
            text-align: center;
            color: #fff;
            text-decoration: none;
            position: absolute;
            top: -10px;
            right: -10px;
        }

        /* Memunculkan Jendela Pop Up*/
        #popup:target {
            visibility: visible;
        }
    </style>

</head>

<body>

    <!-- * Preloader Start * -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- * Preloader End * -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li><a href="#"><i class="fa fa-envelope"></i>gatotkacarentcar@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fleet.html">Fleet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <span>feel free to send us a message now!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <a href="#">+62 8123456789</a>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <a href="#">gatotkacarentcar@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="callback-form contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Send us a <em>message</em></h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form" x-data="{
                        nama:'',
                        email:'',
                    }">
                        <form method="POST" id="contact">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input x-model="nama" name="nama" type="text" class="form-control" id="name" placeholder="Full Name">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input x-model="email" name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input x-model="name" name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <div id="button"><a href="#popup">Pesan</a></div>
                                        <div id="popup">
                                            <div class="window">
                                                <a href="#" class="close-button" title="Close">x</a>
                                                <div class="section-heading">
                                                    <h5>Terimakasih... <br>Nama<div x-text="nama"><br></div> Email<div x-text="email">.</div>Data Anda sudah tersimpan dalam database kami..</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Starts Here -->
    <div class="sub-footer">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright © 2021 GatotKaca RentCar.
                </p>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>

</body>

</html>