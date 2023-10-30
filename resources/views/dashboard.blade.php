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
    </head>
    <body>
        <header>
            <a href="#" class="logo"><img src="{!! asset('assets/logo/eresta_dev.png') !!}"></a>
            <ul class="navbar">
                <li><a href="#" class="active"><i class='bx bx-home'></i> Home</a></li>
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
            <div id="slider">
                <figure>
                    <img src="{!! asset('assets/logo/banner1.jpg') !!}" alt>
                    <img src="{!! asset('assets/logo/banner2.jpg') !!}" alt>
                    <img src="{!! asset('assets/logo/banner3.jpg') !!}" alt>
                    <img src="{!! asset('assets/logo/banner2.jpg') !!}" alt>
                    <img src="{!! asset('assets/logo/banner3.jpg') !!}" alt>
                </figure>
            </div><br>
            <h4>Popular</h4><br>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
            </div></br></br>

            <button class="button active">Top Up Game</button>
            <button class="button">Voucher</button>

            <div class="row"><br>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#"><img src="{!! asset('assets/logo/game1.png') !!}" alt></a>
                    </div>
                </div>
            </div>
            
        </section>

      

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