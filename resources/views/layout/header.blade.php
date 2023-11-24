<?php
    $data = DB::table('about_models')->get();
    foreach($data as $v_data){
        $phone = $v_data->phone;
    }
?>

<header>
    <div class="bx bx-menu" id="menu-icon">
        <ul class="navbar">
            <li><a href="/"><i class='bx bx-home'></i> Home</a></li>
            <li><a href="#"><i class='bx bx-notepad'></i> Cek Invoice</a></li>
            <li><a href="#"><i class='bx bx-food-menu'></i> Price List</a></li>
            <li><a href="#"><i class='bx bx-message-alt-error'></i> Terms</a></li><br>
            <li><hr></li><br>
        </ul>
    </div>
    <a href="/" class="logo"><img src="{!! asset('assets/logo/'. $bg_icon) !!}"></a>
    <div class="text-header">
        <h3>Top Up Game & Voucher Murah Terpecaya.</h3>
    </div>
</header>