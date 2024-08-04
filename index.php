<?php
$nama = $_GET['nama'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undangan Pernikahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik+Broken+Fax&family=Sacramento&family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./cd/simplyCountdown.theme.default.css">
    <script src="./cd/simplyCountdown.min.js"></script>
</head>
  <body>
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center" >
        <main>
            <h4>Kepada Bapak/Ibu/Saudara/i <?= $nama?></h4>
            <h1>Moymoy & Bowhie</h1>
            <p>Pernikahan akan berlangsung dalam :</p>
            <div class="simply-countdown"></div>
            <a href="#Home" class="btn btn-lg mt-3">Lihat Undangan</a>
        </main>
    </section>

    <nav class="navbar navbar-expand-md  sticky-top navBar">
        <div class="container">
          <a class="navbar-brand" href="#">Moymoy</a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Moymoy</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link "  href="#Home">Home</a>
                    <a class="nav-link" href="#Info">Info</a>
                    <a class="nav-link" href="#Story">Story</a>
                    <a class="nav-link" href="#Galery">Galery</a>
                    <a class="nav-link" href="#RSVP">RSVP</a>
                    <a class="nav-link" href="#Gifts">Gifts</a>
                  </div>
            </div>
          </div>
        </div>
      </nav>

      <section id="Home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Acara Pernikahan</h2>
                    <h3>Akan diselenggarakan pada 14 Januari 2024 di Bengkulu</h2>
                    <p>Oleh karena itu dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i</p>
                </div> 
            </div>
            <div class="row couple">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-8 text-end">
                            <h3>Moymoy</h3>
                            <p>Moymoy adalah kucing yang dipelihara aurel moura </p>
                            <p>Putra dari Bpk. Lorem <br> dan <br> Ibu Ipsum</p>
                        </div>
                        <div class="col-4">
                            <img src="./assets/moymoy.jpg" alt="" class="img-responsive rounded-circle" width="100%" height="220px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-4">
                            <img src="./assets/bowhie.jpg" alt="" class="img-responsive rounded-circle" width="100%" height="220px">
                        </div>
                        <div class="col-8 ">
                            <h3>Bowhie</h3>
                            <p>Bowhie adalah kucing yang dipelihara Rayhan MA</p>
                            <p>Putra dari Bpk. Lorem <br> dan <br> Ibu Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 5, // required
            day: 30, // required
            hours: 0, // Default is 0 [0-23] integer
            minutes: 0, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'hari', plural: 'hari' },
                hours: { singular: 'jam', plural: 'jam' },
                minutes: { singular: 'menit', plural: 'menit' },
                seconds: { singular: 'detik', plural: 'detik' }
            },
           
        });
    </script>
    </body>
</html>