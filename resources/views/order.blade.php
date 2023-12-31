<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body>
    @include('layout.header')
    <section class="home order_container">
            <div class="card-container">
                @foreach ($product as $v_product)
                <!-- <div class="col_card"> -->
                    <div class="card1">
                        <img class="img_logo" src="{!! asset('assets/logo/'.$v_product->img) !!}" alt width="490px">
                        <h4 class="card_title">{!! $v_product->name !!} - {!! $v_product->developer_name !!}</h4><br>
                        <p class="card_text">{!! $v_product->description !!}</p><br>
                        @if($v_product->is_mobile == 1)
                            <a href="<?= $v_product->link1; ?>"><img class="img_product" src="{!! asset('assets/logo/gp.png') !!}"></a>
                            <a href="<?= $v_product->link2; ?>"><img class="img_product" src="{!! asset('assets/logo/app_store.png') !!}"></a>
                        @else()

                        @endif
                    </div>
                    <div class="card2">
                        @if($v_product->developer_name == "Tencent")
                            <h4 class="card_title2">1. No. WhatsApp</h4><hr><br>
                            <input type="text" class="text_card">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Data Akun Kamu</h4><hr>
                            <input type="text" class="text_card">
                            <br><br><p class="card_text">Contoh : 123456789</p>
                            <br><br>
                            <h4 class="card_title2">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price)    
                                    <div class="col_price">
                                        <div class="card_price">
                                            <h5>{!! $v_price->name_price !!}</h5><br>
                                            <i><p>Rp. ({!! number_format($v_price->price) !!})</p></i>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Moonton")
                            <h4 class="card_title2">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Data Akun Kamu</h4><hr>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna"> <input type="text" class="text_card_2" placeholder="Masukkan ID Zona">
                            <br><br><p class="card_text">Contoh : ID Pengguna : 123456789, ID Zona : (1234)</p>
                            <br><br>
                            <h4 class="card_title2">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price2)    
                                    <div class="col_price">
                                        <div class="card_price">
                                            <h5>{!! $v_price2->name_price !!}</h5><br>
                                            <i><p>Rp. ({!! number_format($v_price2->price) !!})</p></i>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Riot Games")
                            <h4 class="card_title2">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Data Akun Kamu</h4><hr>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <br><br><p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title2">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price3)    
                                    <div class="col_price">
                                        <div class="card_price">
                                            <h5>{!! $v_price3->name_price !!}</h5><br>
                                            <i><p>Rp. ({!! number_format($v_price3->price) !!})</p></i>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Garena")
                            <h4 class="card_title2">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Data Akun Kamu</h4><hr>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <br><br><p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title2">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5><br>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "VNG Games")
                            <h4 class="card_title2">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Data Akun Kamu</h4><hr>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <br><br><p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title2">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5><br>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "HoYoverse")
                            <h4 class="card_title2">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Data Akun Kamu</h4><hr>
                            <input type="text" class="text_card" placeholder="Masukkan ID Pengguna">
                            <select type="text" class="select_card">
                                <option value="">Masukkan ID Zona</option>
                                <option value="asia">Asia</option>
                                <option value="amerika">Amerika</option>
                                <option value="eropa">Eropa</option>
                                <option value="tk">TK, HK, MO</option>
                            </select>
                            <br><br><p class="card_text">Contoh : ID Pengguna : 123456789</p>
                            <br><br>
                            <h4 class="card_title2">3. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5><br>
                                                <i><p>Rp. ({!! number_format($v_price4->price) !!})</p></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        @elseif($v_product->developer_name == "Google Play")
                            <h4 class="card_title2">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
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
                            <h4 class="card_title2">1. No. WhatsApps</h4><hr><br>
                            <input type="text" class="text_card" placeholder="Masukkan No Whatsapp">
                            <br><br>
                            <h4 class="card_title2">2. Masukkan Nominal Yang Ingin Kamu Beli</h4><hr>
                            <br>
                                <div class="row_price">
                                    @foreach ($price as $v_price4)
                                        <div class="col_price">
                                            <div class="card_price">
                                                <h5>{!! $v_price4->name_price !!}</h5><br>
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
                <div class="card4">
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