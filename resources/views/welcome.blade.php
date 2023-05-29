<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Get Started | QR-Code Generator</title>
</head>
<body>
    <!-- nav -->
    <header>
        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('logo/logo.png') }}"></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="{{ url('#') }}" onclick="toggleMenu();">Contact us</a></li>
            <!-- <li><a href="{{ route('dashboard') }}" onclick="toggleMenu();">Home</a></li> -->
            <li><a href="{{ route('login') }}" onclick="toggleMenu();">Log In</a></li>
            <!-- <ul class="navbar-nav">
            <li><button type="button" class="btn btn-outline-light">Get Started</button></li>
            </ul> -->
                        
        </ul>
        <button type="button" class="btn-primary"><a href="{{ route('register') }}">Get Started</a></button>
    </header>
    <!-- banner -->
    <section class="banner" id="banner">
        <div class="content">
            <div class="c1"><h4>FREE ONLINE QRCODE GENERATOR FREE ONLINE QRCODE GENERATOR </h4></div>
        </div>
        
        <div class="content">
        <div class="c2"><h4>FREE ONLINE QRCODE GENERATOR FREE ONLINE QRCODE GENERATOR </h4></div>
        </div>
                           
    </section>
    
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, hic ipsum. Quaerat alias, consequuntur ducimus v
                    elit, quae quasi dolores repellendus iusto qui reiciendis deserunt consequatur doloribus fugit voluptatem cupiditate
                    hic.
                </p>
                <ul class="sci">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
            
            <div class="sec contactBx">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-map-marker"></i></span>
                        <span>Kwaji Close <br> Maitama Abuja (FCT) <br>Nigeria</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <p><a href="tel:+234 803 4992 130 ">+234 803 1234 567 </a><br>
                            <a href="tel:+234 806 6848 007">+234 805 1234 567 </a><br>
                            <a href="tel:+234 803 6717 565">+234 807 1234 567 </a>
                        </p>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope"></i></span>
                        <p><a href="mailto:info@qrcode.com">info@qrcode.com</a></p>
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
        window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0)
        });
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation')
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>

</html>