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
        <style>
            footer .wave{
                position: absolute;
                top: -65px;
                left: 0;
                width: 100%;
                height: 100px;
                background-size: 1000px 100px;
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
            <a href="#" class="logo"><img src="{!! asset('assets/logo/eresta_dev.png') !!}"></a>
            <ul class="navbar">
                <li><a href="{{ route('dashboard') }}"><i class='bx bx-home'></i> Home</a></li>
                <li><a href="#"><i class='bx bx-notepad'></i> Cek Invoice</a></li>
                <li><a href="#"><i class='bx bx-food-menu'></i> Price List</a></li>
                <li><a href="#"><i class='bx bx-buildings'></i> About</a></li>
            </ul>

            <div class="main">
                <div class="search-container">
                    <form action="">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class='bx bx-search-alt-2'></i></button>
                    </form>
                </div>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>

        <section class="home container">
            <div class="card-container">
                @foreach ($product as $v_product)
                <!-- <div class="col_card"> -->
                    <div class="card1">
                        <img src="{!! asset('assets/logo/'.$v_product->img) !!}" alt>
                        <h4 class="card_title">{!! $v_product->name !!} - {!! $v_product->developer_name !!}</h4><br>
                        <p class="card_text">{!! $v_product->description !!}</p>
                    </div>
                    <div class="card2">
                        <h4 class="card_title">1. No. WhatsApp</h4><hr><br>
                        <input type="text" class="text_card">
                        <br><br>
                        <h4 class="card_title">2. Masukkan Data Akun Kamu</h4><hr>
                        <br><h4 class="card_title">ID</h4>
                        <input type="text" class="text_card">
                        <p class="card_text">Contoh : 123456789</p>
                        <br><br>
                        <h4 class="card_title">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                        <br>
                            <div class="row_price">
                                @foreach ($price as $v_price)    
                                <div class="col_price">
                                    <div class="card_price">
                                        <h5>{!! $v_price->name_price !!}</h5>
                                        <i><p>Rp. ({!! number_format($v_price->price) !!})</p></i>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                @endforeach
            </div>
            <div class="card-container">
                <div class="card3">
                    
                </div>
                <div class="card2">
                    <h4 class="card_title">4. Pilih Metode Pembayaran</h4><hr>
                    
                </div>
            </div>
            <div class="card-container">
                <div class="card3">
                    
                </div>
                <button class="button_price">
                    <p><i class='bx bxs-cart-add'></i> Pesan Sekarang!</p>
                </button>
            </div>
        </section>

        <br><br>

        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social_icon">
                <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
            </ul>
            <ul class="menu">
                <li><a href="#">Home</a></li>
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

        </script>
    </body>
</html>