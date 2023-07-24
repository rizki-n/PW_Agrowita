<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrowita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="{{ url('./assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .pemesanan-grid{
            display: grid;
            grid-template-columns: 60% 40%;
            width: 100%;
            height: 92%;
        }
        .paketpanel{
            width: 100%;
            height: 100%;
            
            /* background-color: yellow;
            border-style: dotted; */
        }
        .idenpanel{
            width: 100%;
            height: 100%;
            border-radius: 20px 0px 0px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 4%;
            background-color: #386A2B;
            box-shadow: 5px 5px 20px 3px rgba(0, 0, 0, 0.8);
            color: white;
        }

        .navbg{
            width: 100%;
            height: 8%;
            background-color: #2D2D2D;
            position: relative;
        }
        .navcenter{
            float: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .navbg a.active, .navbg img:hover{
            filter: brightness(150%);
        }
        .listgrid{
            display: grid;
            grid-template-columns: 33% 33% 33%;
            overflow-y: auto;
        }

        .itemlist{
            border-radius: 30px;
            margin: 5%;
            transition: box-shadow .3s;
            transition: filter .3s;
            min-width: 100px;
        }
        .hide{
            overflow: hidden;
        }

        .detailcontainer{
            margin: 0% 4% 0% 4%;
            min-width: min-content; 
            display: grid;
            grid-template-columns: auto auto;
            
            /* background-color:gray;
            border-style:dotted; */
        }
        .imagedetail{
            grid-row: 1 / 3;
            max-height: 250px;
            max-width: 400px;
            margin: 3% 1% 3% 1%;
            border-radius: 30px;
            object-fit: cover;
        }

        .margindetail{
            margin: 5% 10% 2% 10%;
        }

    </style>
</head>
<body>

    <nav class="navbg navbar navbar-expand-lg fixed-top" arialabel="Main navigation">
        <span class="navcenter" style="color:white;">Pemesanan</span>
        <div class="container-fluid">
            <a class="nav-link" href="home"><img src="assets/icon/back.png" min-height=10px width=30% ></a>
        </div>
    </nav>   

    <form class="pemesanan-grid">
        <div class=.paketpanel">
            <div class="detailcontainer">
                <img class="shadow imagedetail " src="assets/IMG_0289.png" alt="Warung">
                <h1 style="margin-top:3%; text-align:center;">Paket Edukasi Bertani</h1>
                <p style="padding: 0% 5% 0% 5%; margin-top:-15%;">
                dalam paket ini anda datang ke tempat untuk bersantai dan mempelajari sesuatu oadfpoa apoidf aopdfupi apdfhapfapdfpi pidfpaosdifpi pop aiusd fao jk fi
                </p>
            </div>
            <div class="detailcontainer">
                    <div class="margindetail">
                        <img class="icon" src="assets/icon/clock.png" style="vertical-align:middle; width:20%;" />
                        <span class="fstyle" style="padding-left:2%">Buka 07:30 - 17:00 WIB</span>
                    </div>
                    <div class="margindetail" style="display:flex; align-items:center;">
                        <img class="icon" src="assets/icon/location.png" style="vertical-align:middle; width:20%; margin-left:-3%" />
                        <span class="fstyle" style="padding-left:2%;">Kampung Agro, Mulyaharja,<br> Kota Bogor, Jawa Barat</span>
                    </div>
         
                <div class="margindetail" style="display:grid; grid-auto-flow:row;">
                    <span>Jumlah Pengunjung</span>
                    <input style="margin-top:5%;" type="number" min="10" max="300" step="1" required>
                    </div>
                <div class="margindetail" style="display:grid; grid-auto-flow:row;">
                    <span>Tanggal Berkunjung</span>
                    <input type="date" id="tglkunjung" name="tglkunjung" required>
                </div>
   
                <span></span>
                <div class="margindetail" style="display:flex">
                    <span>Total Harga  <br> Rp 100.000,00</span>
                </div>
                
            </div>
        </div>


        <div class="idenpanel">
            <div style="width:90%;">
                <h1 class="center"style="padding:5%">Identitas Diri</h1>
                <div class="mb-3 mt-3">
                    <label for="Input" class="form-label">Nama lengkap (sesuai kartu identitas)</label>
                    <input type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="InputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="InputPhone" class="form-label">Phone</label>
                    <input type="tel" onkeypress="return onlyNumberKey(event)" class="form-control" id="InputPhone" required>
                </div>

                <div class="center" style="margin-top:8%;">
                    <span class="center" style="border-style:solid; padding:2%; width:max-content;">Harap membawah kartu identitas saat berkunjung</span>
                </div>
               
                <div class="center" style="margin-top:8%">
                    <button type="submit" class="konfirmasibtn">Submit</button>
                </div> 
            </div>
        </div>
    </form>

    
    <script>
        tglkunjung.min = new Date().toISOString().slice(0, -14);
        
        const maxDate = new Date();
        maxDate.setDate(maxDate.getDate() + 10);
        const [maxDateFormatted] = maxDate.toISOString().split('T');
        tglkunjung.setAttribute('max', maxDateFormatted);
    </script>

    <script defer src="{{url('./assets/js/num_only.js')}}"></script>

</body>
</html>