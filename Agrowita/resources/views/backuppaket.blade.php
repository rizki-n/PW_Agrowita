<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Agrowita</title>

  <style>
    .container{
      margin-top: 3%;
      width: 1000%;
      min-height: 300px;
      border-style: dotted;
      background-color: aquamarine;
    }

    .container h2{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 1vw
    }

    .container p{
      font-family: Arial, Helvetica, sans-serif;
    }

    .post{
      width: 100%;
      min-height: 300px;
      background-color: aqua;
      
      margin-bottom: 5%
    }

    .container2{
      width: 1000%;
      min-height: 300px;
      border-style: dotted;
      background-color: aquamarine;
    }
  </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary"> <!-- NAVBARR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="login" style="color: black">Login</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="sign-up" style="color: black">Sign Up</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#" style="color: black">Home</a>
                  <a class="nav-link" href="ticket-reservasi" style="color: black">Tracking/Reservasi</a>
                  <a class="nav-link" href="#" style="color: black">Contact</a>
                </div>
              </div>
            </div>
          </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/sampul2.png" class="d-block w-100" alt="Sampul" width="100%" height="50%">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
    </div>

    <div class="container">
      <p style="font-weight: bold">Paket Edukasi</p>
        <div class="post">                                                                              <!-- post Edukasi -->
          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2%">
            <img src="assets/IMG_0289.png" class="card-img-top" alt="Warung" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket Edukasi Bertani</p>
              <button>Rp 20.000</button>
            </div>
          </div>

          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2% ">
            <img src="assets/IMG_0286.png" class="card-img-top" alt="Gazebo" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket Edukasi Berkebun</p>
              <button>Rp 20.000</button>
            </div>
          </div>

          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2% ">
            <img src="assets/IMG_0261.png" class="card-img-top" alt="Cafe" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket Menangkap Ikan</p>
              <button>Rp 20.000</button>
            </div>
          </div>

          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2% ">
            <img src="assets/IMG_0266.png" class="card-img-top" alt="Warung" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket Mewarnai Caping</p>
              <button>Rp 20.000</button>
            </div>
          </div>
        </div>

        <p style="font-weight: bold">Paket Tracking</p>
        <div class="post">                                                                              <!-- post tracking -->
          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2%">
            <img src="assets/IMG_0289.png" class="card-img-top" alt="Warung" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket 1</p>
              <button>Rp 20.000</button>
            </div>
          </div>

          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2% ">
            <img src="assets/IMG_0286.png" class="card-img-top" alt="Gazebo" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket 2</p>
              <button>Rp 20.000</button>
            </div>
          </div>

          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2% ">
            <img src="assets/IMG_0261.png" class="card-img-top" alt="Cafe" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket 3</p>
              <button>Rp 20.000</button>
            </div>
          </div>

          <div class="card" style="width: 18rem; display:inline-block; border-radius: 5%; margin-right: 2% ">
            <img src="assets/IMG_0266.png" class="card-img-top" alt="Warung" style="border-radius: 5%">
            <div class="card-body">
              <p>Paket 4</p>
              <button>Rp 20.000</button>
            </div>
          </div>
        </div>
    </div>
</body>
</html>