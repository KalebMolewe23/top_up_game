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