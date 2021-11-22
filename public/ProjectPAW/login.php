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
            <a class="nav-link" href="#"><button class="btn btn-primary btn-login">Login</button></a>
        </div>
    </div>
    </nav>
    
    <!-- Card -->
    <section id="login">
        <div class="container">
        <div class="card" style="margin:5em 0 0 0;">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6 align-self-center">
                    <h5 class="card-title text-center">LOGIN</h5>
                        <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center"> <a href="#" class="btn mb-2">LOGIN</a></div>
                    <p class="text-center">Didn’t have account yet? <br> Click <span><a href="register.php">Sign Up</a></span></p>
                    <a href="#" class="float-end link">Forgot Password</a>
                    
                </div>
                <div class="col-md-6" style="background-color: #FFE1D5; height: ;"><img src="image/login.png" class="img-fluid"></div>
            </div>
        </div>
        </div>
        </div>
    </section>
    
    <script scr="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>