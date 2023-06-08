<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Get Started | QR-Me</title>
</head>

<body>
    <!-- nav -->
    <header>
        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('logo/logo_tech.png') }}"></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="{{ url('contact') }}" onclick="toggleMenu();">Contact us</a></li>
            <li><a href="{{ route('login') }}" onclick="toggleMenu();">Log In</a></li>
        </ul>
        <button type="button" class="btn-primary2"><a href="{{ route('register') }}">Get Started</a></button>
    </header>
    <!-- banner -->
    <section class="banner" id="banner">
        <div class="content">
            <div class="c1">
                <h4>GENERATE FREE QR-CODE</h4>
                <h6>with a Reliable Platform That Never Fails</h6>
            </div>
            <button type="button" class="btn-primary"><a href="{{ route('register') }}">Get Started</a></button>
        </div>

        <div class="content">
            <div><img src="{{ asset('images/landing1.gif') }}" alt="" width="600px" height="500px"></div>
        </div>

    </section>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>This project was inspired by several factors. Firstly, the main motivation was the desire to provide a useful
                    tool for both individuals and businesses. The need for a convenient solution for a variety of purposes, such as
                    sharing contact information and promoting advertisements, was identified. Given that numerous businesses and
                    organizations require a reliable and flexible QR Code generator to create and personalize their codes, this
                    presented a market opportunity that would meet these requirements. The fascination with the technical aspects
                    of QR Codes, such as their encoding, decoding, and error correction algorithms, was also a significant factor
                    that inspired this project. Furthermore, the exploration of the possibilities and limitations of QR Codes
                    contributed to the inspiration behind the project. Click <a href="https://github.com/elameen37/qrcode_generator"><i>here</i></a> to view source code.
                </p>
                <ul class="sci">
                    <!-- <li><a href="https://github.com/elameen37/"><i class="fa fa-github"></i></a></li> -->
                </ul>
            </div>

            <div class="sec contactBx">
                <h2>Our Team</h2>
                <p>Aminu Shaibu</p>
                <ul class="sci">
                    <li><a href="https://github.com/elameen37/"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://linkedin.com/in/aminu-shaibu-ab92368b"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/lmninfohub"><i class="fa fa-twitter"></i></a></li>
                </ul>
                <p>Kehinde Raphael Babalola</p>
                <ul class="sci">
                    <li><a href="https://github.com/geeflows44"><i class="fa fa-github"></i></a></li>
                </ul>
                </li>
                </ul>
            </div>

        </div>
    </footer>
    <div class="copyrightText">
        <p>Copyright &copy; 2023 All Rights Reserved</p>
    </div>
    <!-- Javascript -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0)
        });

        function toggleMenu() {
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation')
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>

</html>