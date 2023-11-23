<footer>
    <?php
    $data_social = DB::table('social_media_models')->where('status_sosmed', 1)->get();
    $data = DB::table('about_models')->get();
    foreach($data as $v_data){
        $phone = $v_data->phone;
        $name = $v_data->name_website;
    }
    ?>

    <ul class="social_icon">
        @foreach($data_social as $v_social)  
            <li><a href="<?= $v_social->link_sosmed; ?>"><i class='<?= $v_social->icon_sosmed; ?>'></i></a></li>
        @endforeach
    </ul>
    <ul class="menu">
        <li><a href="/">Home</a></li>
        <li><a href="#">Cek Invoice</a></li>
        <li><a href="#">Price List</a></li>
        <li><a href="#">Terms</a></li>
    </ul>
    <p>&copy; <?= $name ?> | All Rights Reserved <?= date('Y') ?></p>
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