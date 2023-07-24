<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agrowita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <link href="{{ url('./assets/css/style.css') }}" rel="stylesheet" type="text/css" />

  <style>
    html{
      background-color:gray;
      height:100%;
      width:100%;
      margin:0;
    }
    .container{
      width: 100%;
      min-height: 300px;
        /* border-style: dotted;
        background-color: aquamarine; */
    }
    .container h1{
      font-weight: bold;
    }
    .container h2{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 28px;
      font-weight: bold;
    }
    .container p{
      font-family: Arial, Helvetica, sans-serif;
    }
    .fstyle{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px
    }
    
    .post{
      width: 100%;
      /* background-color: aqua; */
      margin-bottom: 2%;
    }
    .cardsize{
      width: 18rem;
      display:inline-block;
      border-radius: 20px;
      margin: 1% 2% 2% 2%;
      background-color: white;
      overflow: hidden;
    }
    .linkbutton{
      border-radius: 20px;
      margin: 6%;
      transition: box-shadow .3s;
      transition: filter .3s;
      min-width: 100px;
    }
    .carousel{
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }
    .grid-container{
      display: grid;  
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto auto;
      grid-auto-flow: column;
      margin-bottom: 3%;
    }
    .grid-item{
      /* padding: 3%; */
    }
    .grid-jam{
      display: grid;
      grid-template-columns: 15% 85%;
      margin-top: 5%;
      margin-bottom: 4%;
    }
    .logo-jam{
      grid-row: 1 / 3;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .text-jam{
      display: grid;
      padding-left: 2%;
    }

    .hide{
      overflow: hidden;
    }
    a:link, a:visited{
      color: black;
      text-decoration: none;
    }

    .linkbutton:hover, .linkbutton:hover .overlay {
      box-shadow: 5px 5px 20px 3px rgba(0, 0, 0, 0.8);
      opacity: 1;
    }
    .horizontalscroll{
      display: grid;
      grid-auto-flow: column;
      grid-auto-columns: 20%;
      overflow-x: auto;
    }
    .overlay{
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .5s ease;
      background-color: rgba(0, 0, 0, 0.8);
      display:flex;
      flex-direction: column;
      text-align: center
    }
    .detail{
      color:white;
      font-size: 18px;
      position: relative;
      padding: 6% 4% 4% 4%;
    }
    .pesan{
      position:absolute;
    bottom: 5px;
    left: 0%;
    right: 0%;
    text-align: center;

      background-color: #9FD534;
      color: black;
      font-weight: bold;
      font-size: 16px;
      margin: 0% 15% 10% 15%;
      border-radius: 5px;
      bottom: 0;
    }
    .pesan:hover{
      filter: brightness(130%);
    }

    .navpoint{
      margin-top:-80px;
      padding-top:70px;
    }

    footer {
      width: 100%;
      background-color: #2D2D2D;
      color: white;
      padding: 2%;  
      margin-top: 2%;
    } 
  </style>
  
</head>

<body data-spy="scroll" data-target="#navbar" style="position: relative;" >@include('utility/nav')   
  <section id="home">

    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3500">
          <img src="assets/sampul.png" class="carousel">
        </div>
        <div class="carousel-item" data-bs-interval="3500">
          <img src="assets/sampul2.png" class="carousel">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>    
      
    <div class="container">
      <h1>Fasilitas</h1>
      <div style="display:flex; justify-content:center; margin-bottom:2%">                                                                              post fasilitas
        <div class="cardsize shadow">
          <img src="assets/IMG_0289.png" class="card-img-top" alt="Warung">
          <div class="card-body">
            <p>Warung</p>
          </div>
        </div>

        <div class="cardsize shadow">
          <img src="assets/IMG_0286.png" class="card-img-top" alt="Gazebo">
          <div class="card-body">
            <p>Gazebo</p>
          </div>
        </div>

        <div class="cardsize shadow">
          <img src="assets/IMG_0261.png" class="card-img-top" alt="Cafe">
          <div class="card-body">
            <p>Caffe</p>
          </div>
        </div>

        <div class="cardsize shadow">
          <img src="assets/IMG_0266.png" class="card-img-top" alt="Warung">
          <div class="card-body">
            <p>Spot Foto</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="navpoint container" id="about">
    <h1>Tentang Kami</h1>  
    <div class="post">
      <p style="font-size: 1.3vw">Agro Eduwisata Organik Mulyaharja merupakan kampung wisata edukasi yang berdiri pada tahun 2021, 
        tujuan utama tempat wisata ini tentusaja pada bidang edukasi dan pariwisata. Edukasi yang ditawarkan 
        berupa tatacara berkebun, informasi tentang ladang sekitar, hingga berlajar menanam padi. Selain itu 
        disini terdapat spot foto dan kuliner makanan lokal yang dimasak langsung oleh warga sekitar,hal ini 
        juga bertujuan untuk meningkatkan perekonomian warga sekitar 
      </p>
    </div>
      
    <div class="grid-container">
      <div style="padding-top:1%;">
        <h1>Lokasi</h1>
      </div>
      <div class="grid-item" style="padding-right: 3%">
        <iframe class="shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.9791001017816!2d106.78373820963249!3d-6.
        6495119933174225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf1336695b2d%3A0xa31be569a3b2645b!2s
        Kampung%20Agro%20Edu%20Wisata%20Organik%20Mulyaharja!5e0!3m2!1sen!2sid!4v1686335439692!5m2!1sen!2sid" 
        height=100% width=100% style="border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div style="padding-top:1%; padding-left: 3%">
        <h1>Informasi</h1>
      </div> 
      <div class="grid-item" style="padding-left: 3%">
        <div class="shadow" style="background-color:white; border-radius:20px; padding:3%;" height=100% width=100%>
          <div style="margin:1%">
            <a href="https://www.instagram.com/visitmulyaharja/">
              <img src="assets/icon/instagram.png" style="vertical-align:middle" width=8%/>
              <span class="fstyle" style="padding-left:2%">VisitMulyaharja</span>
            </a>
          </div>
          <div style="margin:1%">
            <a href="https://api.whatsapp.com/send/?phone=6281292840286&text&type=phone_number&app_absent=0">
              <img src="assets/icon/whatsapp.png" style="vertical-align:middle" width=8%/>
              <span class="fstyle" style="padding-left:2%">Reservasi 1</span>
          </div>
          <div style="margin:1%;">
            <a href="https://api.whatsapp.com/send/?phone=6285694342206&text&type=phone_number&app_absent=0">
              <img src="assets/icon/whatsapp.png" style="vertical-align:middle" width=8%/>
              <span class="fstyle" style="padding-left:2%">Reservasi 2</span>
            </a>
          </div>
          <div style="margin:1%">
            <a href="mailto:agroeduwisatamulyaharja@gmail.com">
              <img src="assets/icon/email.png" style="vertical-align:middle" width=8%/>
              <span class="fstyle" style="padding-left:2%">agroeduwisatamulyaharja@gmail.com</span>
            </a>
          </div>

          <div class="grid-jam">
            <div class="logo-jam">
              <img src="assets/icon/clock.png" style="vertical-align:middle; width: 80%"/>
            </div>
            <div class="text-jam fstyle" style="align-content:end; padding-bottom:1%"> Buka 07:30 - 17:00 WIB</div>
            <div class="text-jam fstyle" style="padding-top:1%">Senin - Minggu</div>
          </div>
        </div>
      </div>
    </div>
  </section>
        <!-- <div class="post">
          <div class="row">
            <div class="col">
              <h1>Location</h1>
            </div>
            <div class="col">
              <h1>Hour & Contact</h1>
            </div>
            <div class="w-100"></div>
            <div class="col" style="margin:1%">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.9791001017816!2d106.78373820963249!3d-6.
              6495119933174225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf1336695b2d%3A0xa31be569a3b2645b!2s
              Kampung%20Agro%20Edu%20Wisata%20Organik%20Mulyaharja!5e0!3m2!1sen!2sid!4v1686335439692!5m2!1sen!2sid" 
              width=100% height=350 style="border-radius:30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col" style="background:gray; border-radius:30px; margin:1%">
              <div class="mt-2">
                <h3 class="h6">Address</h3>
                <div class="pb-2 text-secondary">Bogor, Jawa Barat, Indonesia</div>
                <h3 class="h6">Phone</h3>
                <div class="pb-2 text-secondary">+0838-100-8088</div>
                <h3 class="h6">Email</h3>
                <div class="pb-2 text-secondary">212310060@student.ibik.ac.id</div>
              </div>
            </div>
          </div>
        </div> -->

          <!-- <div style="display: flex; justify-content:space-around;">
            <div style="flex-direction:column; background:yellow" width=40% >
              <p style="font-weight: bold;">Lokasi</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.9791001017816!2d106.78373820963249!3d-6.
              6495119933174225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf1336695b2d%3A0xa31be569a3b2645b!2s
              Kampung%20Agro%20Edu%20Wisata%20Organik%20Mulyaharja!5e0!3m2!1sen!2sid!4v1686335439692!5m2!1sen!2sid" 
              width=600 height=350 allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                
            <div style="background:gray;  flex-direction:column;" width=70%> 
              <p style="font-weight: bold;">Contact</p>
              <div class="mt-2">
                <h3 class="h6">Address</h3>
                <div class="pb-2 text-secondary">Bogor, Jawa Barat, Indonesia</div>
                <h3 class="h6">Phone</h3>
                <div class="pb-2 text-secondary">+0838-100-8088</div>
                <h3 class="h6">Email</h3>
                <div class="pb-2 text-secondary">212310060@student.ibik.ac.id</div>
              </div>
            </div>
          </div> -->


  <section class="navpoint container" id="paket">
    <h1>Paket Edukasi</h1>
    <div class="horizontalscroll">
      <!-- foreach -->
      <a href="booking">
        <div class="card linkbutton shadow hide">
          <img src="assets/IMG_0289.png" class="card-img-top" alt="Warung">
          <div class="card-body">
            <h3>Paket Edukasi Bertani</h3>
            <p>Rp 20.000</p>
          </div>
          <div class="overlay">
            <span class="detail">
              dalam paket ini anda datang ke tempat untuk bersantai dan mempelajari sesuatu
            </span>
            <button class="pesan">
              Pesan
            </button>
          </div>
        </div>
      </a>
      <!-- endforeach -->
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
    </div>

    <h1 style="margin-top:2%">Paket Tracking</h1>
    <div class="horizontalscroll">
      <a href="test">
        <div class="card linkbutton shadow hide">
          <img src="assets/IMG_0289.png" class="card-img-top" alt="Warung">
          <div class="card-body">
            <h3>Paket Edukasi Bertani</h3>
            <p>Rp 20.000</p>
          </div>
        </div>
      </a>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
    </div>

    <h1 style="margin-top:2%">Paket Penginapan</h1>
    <div class="horizontalscroll">
      <a href="test">
        <div class="card linkbutton shadow hide">
          <img src="assets/IMG_0289.png" class="card-img-top" alt="Warung">
          <div class="card-body">
            <h3>Paket Edukasi Bertani</h3>
            <p>Rp 20.000</p>
          </div>
        </div>
      </a>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
      <div class="card card-body">Card</div>
    </div>
  </section>

  <footer>
    <div style="display:grid;">
      <img src="assets/agrowita.png" width=10%>
      <span style="padding-top:1%">copyright 2023</span>
    </div>
  </footer>  

</body>
</html>