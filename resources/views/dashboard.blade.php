<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ikigamestore | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <link rel="stylesheet" href="{!! asset('assets/user/style.css') !!}">

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

        .card-search{
            position: relative;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 0px;
            text-align: center;
            background-image: url('{{ asset('assets/logo/bg_card.jpg') }}');
            border-radius: 10px;
            top: 100px;
            height: 200px;
            width: 100%;
        }

        @media (max-width: 1090px){
            .card-search{
                width: 140%;
            }
        }

        @media (max-width: 1042px){
            .card-search{
                width: 146%;
            }
        }

        @media (max-width: 935px){
            .card-search{
                width: 176%;
            }
        }

        @media (max-width: 835px){
            .card-search{
                width: 216%;
            }
        }

        @media (max-width: 725px){
            .card-search{
                width: 288%;
            }
        }

        @media (max-width: 650px){
            .card-search{
                width: 322%;
            }
        }

        @media (max-width: 564px){
            .card-search{
                width: 364%;
            }
        }

        @media (max-width: 550px){
            .card-search{
                width: 383%;
            }
        }

        @media (max-width: 515px){
            .card-search{
                width: 433%;
            }
        }

        @media (max-width: 502px){
            .card-search{
                width: 390%;
            }
        }
        
        @media (max-width: 470px){
            .card-search{
                width: 335%;
            }
        }
    </style>
</head>
<body onload="slider()">
    @include('layout.header')
    <div class="banner">
        <div class="slider">
            <img src="{!! asset('assets/logo/pubg_bg.jpg') !!}" id="slideImg">
        </div>
        <div class="overlay">
            <div class="content">
                <h1>ENJOY THE GAME</h1>
                <h3>IKIGAMESTORE</h3>

                <div>
                    <button type="button">BELI SEKARANG</button>
                </div>
            </div>
        </div>
    </div>

        <section class="home container">
            <br>
            <div class="card-search">
                <form action="" method="GET">
                    <p>Ingin Cari Sesuatu?</p><br>
                    <div class="search-box">
                        <input class="search-txt" type="text" placeholder=" Apa Yang Kamu Cari.." name="query">
                        <a class="search-btn" href="#"><i class='bx bx-search-alt'></i></a>
                    </div>
                </form>
            </div><br>
            <div class="game_content">
                <h3>TOP UP GAME</h3><br>
                <div class="row">
                    @foreach ($dpopular as $v_dpopular)
                    <div class="column">
                        <div class="card">
                            <a href="{{ url('order/'.$v_dpopular->id) }}"><img src="{!! asset('assets/logo/'.$v_dpopular->img) !!}" alt></a>
                        </div><br>
                    </div>
                    @endforeach
                </div>
                <button type="button" class="button_content">Lihat Semua</button>
            </div>
            <div class="voucher_content">
                <h3>VOUCHERS</h3><br>
                <div class="row">
                    @foreach ($dpopular as $v_dpopular)
                    <div class="column">
                        <div class="card">
                            <a href="{{ url('order/'.$v_dpopular->id) }}"><img src="{!! asset('assets/logo/'.$v_dpopular->img) !!}" alt></a>
                        </div><br>
                    </div>
                    @endforeach
                </div>
                <button type="button" class="button_content">Lihat Semua</button>
            </div>
            <div class="phone_content">
                <h3>PHONE CREDITS</h3><br>
                <div class="row">
                    @foreach ($dpopular as $v_dpopular)
                    <div class="column">
                        <div class="card">
                            <a href="{{ url('order/'.$v_dpopular->id) }}"><img src="{!! asset('assets/logo/'.$v_dpopular->img) !!}" alt></a>
                        </div><br>
                    </div>
                    @endforeach
                </div>
                <button type="button" class="button_content">Lihat Semua</button>
            </div>
            <div class="emoney_content">
                <h3>E-MONEY</h3><br>
                <div class="row">
                    @foreach ($dpopular as $v_dpopular)
                    <div class="column">
                        <div class="card">
                            <a href="{{ url('order/'.$v_dpopular->id) }}"><img src="{!! asset('assets/logo/'.$v_dpopular->img) !!}" alt></a>
                        </div><br>
                    </div>
                    @endforeach
                </div>
                <button type="button" class="button_content">Lihat Semua</button>
            </div>
        </section><br><br>

        <div class="about_content">
            <center>
                <img src="{!! asset('assets/logo/'. $bg_icon) !!}">
                <h3>Top Up Games Voucher Lebih Murah 20%, Cepat, dan Aman</h3>
                <p>Situs resmi top up games dan voucher harga termurah, tercepat, dan terpercaya. Beli Diamond Mobile Legends ML, Free Fire FF DM, Ragnarok X / Global Origin, Higgs Domino Chips MD, Genshin Impact Blessing/Crystals, Call of Duty CODM, PUBG UC, Garena Shells, Steam dengan diskon dan harga promo paling murah dan banyak bonus!</p>
            </center>
        </div><br><br>

        @include('layout.footer')

</body>
</html>