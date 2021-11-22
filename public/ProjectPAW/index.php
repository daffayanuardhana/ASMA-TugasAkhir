<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="http://fonts.cdnfonts.com/css/sf-ui-display" rel="stylesheet">

    <title>ASMA</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar-scroll">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">ASMA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div id="navbar-scroll" class="navbar-nav mx-auto" style="width: 300px;">
            <a class="nav-link active" aria-current="page" href="#home">Homepage</a>
            <a class="nav-link" href="#aboutUs">AboutUs</a>
            <a class="nav-link" href="#features">Features</a>
            <a class="nav-link" href="#partnership">Partnership</a>
        </div>
        </div>
        <div class="navbar-nav float-end">
            <a class="nav-link" href="login.php"><button class="btn btn-primary btn-login">Login</button></a>
        </div>
    </div>
    </nav>
    <!-- Homepage -->
    <section id="home">
      <div class="container">
    <div class="row">
      <div class="col-5 text">
        <h1><b> Get Started To Manage Your College Life</b></h1>
        <a href="#"><button class="btn btn-primary btn-register mt-3">Get Started</button></a>
      </div>
      <div class="col-7 align-self-center"><img class="img-fluid" src="image/landingPage.png" ></div>
    </div>
    </div>
    </section>

    <!-- About Us -->
    <section id="aboutUs">
      <div class="container">
        <h1><b>Kenapa Harus Memakai ASMA ?</b></h1>
        <div class="row">
          <div class="col-6"><img src="image/task.jpg" class="rounded picture img-fluid mt-5 mb-3"></div>
          <div class="col-6 align-self-center">
            <h3><b>Karena ASMA sudah membantu lebih dari 200 mahasiswa untuk mengelola tugas mereka</b></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Nibh ipsum consequat nisl vel pretium lectus. Scelerisque in dictum non consectetur a. Turpis egestas maecenas pharetra convallis posuere.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-6 align-self-center">
            <h3><b>ASMA siap membantu kamu dalam mengatur keuangan, So gak ada lagi kata bokek di akhir bulan</b></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Nibh ipsum consequat nisl vel pretium lectus. Scelerisque in dictum non consectetur a. Turpis egestas maecenas pharetra convallis posuere.</p>
          </div>
          <div class="col-6"><img src="image/saving.jpg" class="rounded picture img-fluid mt-5 mb-3"></div>
        </div>

        <div class="row">
          <div class="col-6"><img src="image/indonesia.jpg" class="rounded picture img-fluid mt-5 mb-3"></div>
          <div class="col-6 align-self-center">
            <h3><b>Menggunakan ASMA turut serta berkontribusi mendukung #karyaAnakBangsa</b></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Nibh ipsum consequat nisl vel pretium lectus. Scelerisque in dictum non consectetur a. Turpis egestas maecenas pharetra convallis posuere.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section id="features">
      <div class="container">
        <h1 class="text-center"><b>Fitur-Fitur Yang Bikin Kamu Betah Pakai ASMA</b></h1>
        <div class="row justify-content-center">
          <div class="col-6">
          <div class="card">
            <img src="image/task.jpg" class="card-img-top img-fluid">
            <div class="card-body">
              <h4 class="card-text">Tugasmu merupakan tanggung jawabmu, yuk jadi anak paling ambisius dikampusmu dengan manajemen waktu yang baik dengan aplikasi Asisten Mahasiswa</h4>
            </div>
          </div>  

          </div>
          <div class="col-6">
          <div class="card">
            <img src="image/saving.jpg" class="card-img-top img-fluid">
            <div class="card-body">
              <h4 class="card-text">Memanajemen uang gak bakal semudah ini, gunakan fitur expense untuk menghitung pengeluaranmu dan income untuk memastikan pemasukanmu</h4>
            </div>
          </div>  

          </div>
        </div>
      </div>
    </section>

    <!-- Partnership -->
    <section id="partnership" class="mb-5">
      <div class="container">
        <h1 class="text-center mt-3 mb-3"><b>Partnership</b></h1>
        <div id="carousel-partnership" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex">
              <img src="image/ub.png" class="d-block w-25 ms-5 me-5 img-fluid">
              <img src="image/kemendikbud.png" class="d-block w-25 ms-5 me-5 img-fluid">
              <img src="image/kominfo.png" class="d-block w-25 ms-5 me-5 img-fluid">
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex">
              <img src="image/ruangguru.png" class="d-block w-25 ms-5 me-5">
              <img src="image/microsoft.png" class="d-block w-25 ms-5 me-5">
              <img src="image/google.png" class="d-block w-25 ms-5 me-5">
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    
    <script scr="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>