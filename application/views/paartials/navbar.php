<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/mgs.ico') ?>">
</head>
<body>
    <section id="header">
        <nav id="main-nav">
            <div class="logoNav">
                <a href="<?= base_url() ?>"><img src="<?= base_url('assets/img/mgs1.png') ?>" alt="Mega Giga Solusindo"></a>
            </div>
            <a href="<?= base_url() ?>">Home</a>
            <a href="<?= base_url('user/about') ?>">About</a>
            <a href="<?= base_url('user/career') ?>">Career</a>
            <a class="btn" href="#">Learn More</a>
        </nav>
    </section>
    <script src="../assets/js/script.js"></script>
    <script>
        window.onscroll = function(){myFunction()};

        var header = document.getElementById("header");
        var sticky = header.offsetTop;

        function myFunction(){
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                header.classList.add("nav-sticky");
            } else {
                header.classList.remove("sticky");
                header.classList.remove("nav-sticky");
            }
        }
    </script>
</body>