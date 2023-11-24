<?php
    $data_social = DB::table('social_media_models')->where('status_sosmed', 1)->get();
    $data = DB::table('about_models')->get();
        foreach($data as $v_data){
            $phone = $v_data->phone;
            $name = $v_data->name_website;
        }
?>


<footer>
    <div class="row_footer">
        <div class="col_footer">
            <img src="{!! asset('assets/logo/'. $bg_icon) !!}" class="logo_footer">
        </div>
        <div class="col_footer">
            <h3>Contact Us <div class="underline"><span></span></div> </h3>
            <p>ITPL Road</p>
            <p>Whitefield, Bangalore</p>
            <p>Karnataka, PIN 31323, India</p>
            <p class="email-id">ikigamestore.com</p>
            <h4>+628392839238</h4>
        </div>
        <div class="col_footer">
            <h3>Links <div class="underline"><span></span></div></h3>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Cek Invoice</a></li>
                <li><a href="">Price List</a></li>
                <li><a href="">Terms</a></li>
            </ul>
        </div>
        <div class="col_footer">
            <h3>Social Media <div class="underline"><span></span></div></h3>
            <dic class="social-icons">
                @foreach($data_social as $v_social) 
                    <a href="<?= $v_social->link_sosmed; ?>"><i class='<?= $v_social->icon_sosmed; ?>'></i></a>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright">&copy; <?= $name ?> | All Rights Reserved <?= date('Y') ?></p>
</footer>

<script>
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open')
    }

    var slideImg = document.getElementById("slideImg");

    var images = new Array(
        "{!! asset('assets/logo/pubg_bg.jpg') !!}",
        "{!! asset('assets/logo/ml_bg.jpg') !!}"
    );

    var len = images.length;
    var i = 0;

    function slider(){
        if(i > len-1){
            i = 0;
        }
        slideImg.src = images[i];
        i++;
        setTimeout('slider()', 3000);
    }
</script>