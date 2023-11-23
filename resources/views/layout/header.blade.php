<?php
    $data = DB::table('about_models')->get();
    foreach($data as $v_data){
        $phone = $v_data->phone;
    }
?>

<header>
    <div class="bx bx-menu" id="menu-icon">
        <ul class="navbar">
            <li><a href="{{ route('dashboard') }}"><i class='bx bx-home'></i> Home</a></li>
            <li><a href="#"><i class='bx bx-notepad'></i> Cek Invoice</a></li>
            <li><a href="#"><i class='bx bx-food-menu'></i> Price List</a></li>
            <li><a href="#"><i class='bx bx-message-alt-error'></i> Terms</a></li><br>
            <li><hr></li><br>
            <li><a href="https://wa.me/<?= $phone; ?>"><i class='bx bxl-whatsapp' ></i> <?= $phone; ?></a></li>
        </ul>
    </div>
    <a href="/" class="logo"><img src="{!! asset('assets/logo/'. $bg_icon) !!}"></a>

    <div class="main">
        <div class="search-container">
            <form action="{{ route('dashboard.search') }}" method="GET">
                <input type="text" placeholder="   ketik Nama Game.." name="query">
            </form>
            <!-- <button type="submit">Login</button> -->
        </div>
    </div>
</header>