<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title</title>

        <link rel="stylesheet" href="{!! asset('assets/user/style.css') !!}">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        
        <?php
            foreach($bg as $v_bg){
                $bg_icon = $v_bg->bg_name;
                $bg_color = $v_bg->bg_color;
                $bg_color_second = $v_bg->bg_color_second;
            }
        ?>

        <link rel="icon" type="image/x-icon" href="{!! asset('assets/logo/'. $bg_icon) !!}">

        <style>

            :root{
                --white: #fff;
                --black: #000000;
                --light-blue: <?= $bg_color; ?>;
                --dark-blue: <?= $bg_color_second ?>;
            }

            footer .wave{
                position: absolute;
                top: -65px;
                left: 0;
                width: 100%;
                height: 100px;
                background-size: 1000px 100px;
                color: #424769;
                background: url({!! asset('assets/logo/wave.png') !!});
            }

            footer .wave#wave1{
                z-index: 1000;
                opacity: 1;
                bottom: 0;
                animation: animateWave 4s linear infinite;
            }

            footer .wave#wave2{
                z-index: 999;
                opacity: 0.5;
                bottom: 10px;
                animation: animateWave_02 4s linear infinite;
            }

            footer .wave#wave3{
                z-index: 1000;
                opacity: 0.2;
                bottom: 15px;
                animation: animateWave 3s linear infinite;
            }

            footer .wave#wave4{
                z-index: 999;
                opacity: 0.7;
                bottom: 20px;
                animation: animateWave_02 3s linear infinite;
            }

            @keyframes animateWave{
                0%{
                    background-position-x: 1000px;
                }100%{
                    background-position-x: 0px;
                }
            }

            @keyframes animateWave_02{
                0%{
                    background-position-x: 0px;
                }100%{
                    background-position-x: 1000px;
                }
            }

        </style>
    </head>
    <body>
        <header>
            <a href="/" class="logo"><img src="{!! asset('assets/logo/'. $bg_icon) !!}"></a>
            <ul class="navbar">
                <li><a href="{{ route('dashboard') }}" class="active"><i class='bx bx-home'></i> Home</a></li>
                <li><a href="#"><i class='bx bx-notepad'></i> Cek Invoice</a></li>
                <li><a href="#"><i class='bx bx-food-menu'></i> Price List</a></li>
                <li><a href="#"><i class='bx bx-buildings'></i> About</a></li>
            </ul>

            <div class="main">
                <div class="search-container">
                    <form action="{{ route('dashboard.search') }}" method="GET">
                    <input type="text" placeholder="Search.." name="query">
                    <button type="submit"><i class='bx bx-search-alt-2'></i></button>
                    </form>
                </div>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <section class="home container">
            <h4>Pencarian Anda.</h4><br>
            <div class="row">
                @foreach ($product as $v_product)
                <div class="column">
                    <div class="card">
                        <a href="{{ url('order/'.$v_product->idproduct) }}"><img src="{!! asset('assets/logo/'.$v_product->img) !!}" alt></a>
                    </div>
                </div>
                @endforeach
            </div></br></br>
        </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <footer>
            <!-- <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div> -->
            <ul class="social_icon">
                <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
            </ul>
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="#">Cek Invoice</a></li>
                <li><a href="#">Price List</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <p>&copy; Eresta Dev | All Rights Reserved <?= date('Y') ?></p>
        </footer>

        <script>
            let menu = document.querySelector('#menu-icon');
            let navbar = document.querySelector('.navbar');

            menu.onclick = () => {
                menu.classList.toggle('bx-x');
                navbar.classList.toggle('open')
            }

            function topupgame() {
                document.getElementById('card').style.display = 'block';
                document.getElementById('card_voucher').style.display = 'none';
            }

            function voucher() {
                document.getElementById('card').style.display = 'none';
                document.getElementById('card_voucher').style.display = 'block';
            }
        </script>
    </body>
</html>