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
        @include('layout.header')
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <section class="home container">
            <div id="slider">
                <figure>
                    <img src="{!! asset('assets/logo/banner1.jpg') !!}" style="border-radius: 15px;" alt>
                    <img src="{!! asset('assets/logo/banner2.jpg') !!}" style="border-radius: 15px;" alt>
                    <img src="{!! asset('assets/logo/banner3.jpg') !!}" style="border-radius: 15px;" alt>
                    <img src="{!! asset('assets/logo/banner2.jpg') !!}" style="border-radius: 15px;" alt>
                    <img src="{!! asset('assets/logo/banner3.jpg') !!}" style="border-radius: 15px;" alt>
                </figure>
            </div><br>
            <h4>Popular</h4><br>
            <div class="row">
                @foreach ($popular as $v_popular)
                <div class="column">
                    <div class="card">
                        <a href="{{ url('order/'.$v_popular->idproduct) }}"><img src="{!! asset('assets/logo/'.$v_popular->img) !!}" alt></a>
                    </div>
                </div>
                @endforeach
            </div></br></br>

            <div class="rows">
                <div class="cols">
                    <button class="button" onclick="topupgame()">Top Up Game</button>
                    <button class="button" onclick="voucher()">Voucher</button>
                    
                    <form action="{{ route('dashboard.search') }}" method="GET">
                        <input type="text" placeholder="   ketik Nama Game.." name="query">
                    </form>
                </div>
            </div>

            <div class="row" id="card"><br>
                <h4>Top Up Game</h4><br>
                @foreach ($dpopular as $v_dpopular)
                <div class="column">
                    <div class="card">
                        <a href="{{ url('order/'.$v_dpopular->idproduct) }}"><img src="{!! asset('assets/logo/'.$v_dpopular->img) !!}" alt></a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row" id="card_voucher"><br>
                <h4>Top Up Voucher</h4><br>
                @foreach ($dvoucher as $v_voucher)
                <div class="column">
                    <div class="card">
                        <a href="{{ url('order/'.$v_voucher->idproduct) }}"><img src="{!! asset('assets/logo/'.$v_voucher->img) !!}" alt></a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <br><br><br><br>
        @include('layout.footer')
    </body>
</html>