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
            width: 1600px;
            min-height: 300px;
            
            background-color: rgb(244, 244, 244);
    
        }

        .form{
            width: 550px;
            min-height: 700px;
            background-color: rgb(244, 244, 244)
        }

        .logo{
            width: 100%;
            min-height: 250px;
            background-color: aliceblue
        }
  
        .container h2 h1 h3{
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
          margin-left: 5%;
          margin-bottom: 5%
        }
  
        .postAbout{
          width: 100%;
          min-height: 200px;
          background-color: aqua;
          margin-left: 5%;
          margin-bottom: 5%
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
                  <a class="nav-link active" aria-current="page" href="/" style="color: black">Home</a>
                  <a class="nav-link" href="ticket-reservasi" style="color: black">Tracking/Reservasi</a>
                  <a class="nav-link" href="" style="color: black">Contact</a>
                </div>
              </div>
            </div>
          </nav>
    
    <div class="container">
        <div class="form">
            <h1 style="margin-top: 10%">Sign Up!</h1>
            <p>Mari memulai petualangan baru bersama kami!!</p>
        <form style="margin-top: 15%">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Telpon</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-inline: 40%; margin-top: 5%">Submit</button>
          </form>
        </div>
        <img src="assets/visittt.png" alt="visitt" width="700px" height="700px" style="display: inline-block">
    </div>
    
</body>
</html>