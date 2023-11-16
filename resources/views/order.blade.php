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
            <div class="card-container">
                @foreach ($product as $v_product)
                <!-- <div class="col_card"> -->
                    <div class="card1">
                        <img src="{!! asset('assets/logo/'.$v_product->img) !!}" alt>
                        <h4 class="card_title">{!! $v_product->name !!} - {!! $v_product->developer_name !!}</h4><br>
                        <p class="card_text">{!! $v_product->description !!}</p>
                    </div>
                    <div class="card2">
                        @if($v_product->developer_name == "Tencent")
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
                        @elseif($v_product->developer_name == "Moonton")
                            <h4 class="card_title">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title">2. Masukkan Data Akun Kamu</h4><hr>
                            <br><h4 class="card_title">ID</h4>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna"> <input type="text" class="text_card_2" placeholder="Masukkan ID Zona">
                            <p class="card_text">Contoh : ID Pengguna : 123456789, ID Zona : (1234)</p>
                            <br><br>
                            <h4 class="card_title">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price2)    
                                    <div class="col_price">
                                        <div class="card_price">
                                            <h5>{!! $v_price2->name_price !!}</h5>
                                            <i><p>Rp. ({!! number_format($v_price2->price) !!})</p></i>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Riot Games")
                            <h4 class="card_title">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title">2. Masukkan Data Akun Kamu</h4><hr>
                            <br><h4 class="card_title">ID</h4>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price3)    
                                    <div class="col_price">
                                        <div class="card_price">
                                            <h5>{!! $v_price3->name_price !!}</h5>
                                            <i><p>Rp. ({!! number_format($v_price3->price) !!})</p></i>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Garena")
                            <h4 class="card_title">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title">2. Masukkan Data Akun Kamu</h4><hr>
                            <br><h4 class="card_title">ID</h4>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "VNG Games")
                            <h4 class="card_title">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title">2. Masukkan Data Akun Kamu</h4><hr>
                            <br><h4 class="card_title">ID</h4>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "HoYoverse")
                            <h4 class="card_title">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title">2. Masukkan Data Akun Kamu</h4><hr>
                            <br><h4 class="card_title">ID</h4>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <select type="text" class="select_card">
                                <option value="">Masukkan ID Zona</option>
                                <option value="asia">Asia</option>
                                <option value="amerika">Amerika</option>
                                <option value="eropa">Eropa</option>
                                <option value="tk">TK, HK, MO</option>
                            </select>
                            <p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Google Play")
                            <h4 class="card_title">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title">2. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Steam")
                            <h4 class="card_title">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title">2. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="card-container">
                <div class="card3">
                    
                </div>
                <div class="card2">
                    <h4 class="card_title">3. Pilih Metode Pembayaran</h4><hr>
                    
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

        @include('layout.footer')
    </body>
</html>