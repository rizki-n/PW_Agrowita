<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrowita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @include ('utility/style')
    <style>
        html, body{
            background-color:gray;
            height:100%;
            width:100%;
            margin:0;
        }
        .cartgrid{
            display: grid;
            grid-template-columns: 60% 40%;
            width: 100%;
            height: 92%;
        }
        .cartlist{
            background-color: yellow;
            border-style: dotted;
            width: 100%;
            height: 100%;
        }
        .checkpanel{
            background-color: aquamarine;
            border-style: solid;
            width: 100%;
            height: 100%;
            border-radius: 30px 0px 0px 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 4%;
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
    </style>
</head>
<body>

    <nav class="navbg navbar navbar-expand-lg fixed-top" arialabel="Main navigation">
        <span class="navcenter" style="color:white; ">Cart</span>
        <div class="container-fluid">
            <a class="nav-link" href="home"><img src="assets/icon/back.png" min-height=10px width=30% ></a>
            
        </div>

        
    </nav>   

    <div class="cartgrid">
        <div class="cartlist">
            <div class="listgrid">
                <!-- foreach -->
                <div>
                    <div class="card itemlist shadow hide">
                        <img src="assets/IMG_0289.png" class="card-img-top" alt="Warung">
                        <div class="card-body">
                            <h3>Paket Edukasi Bertani</h3>
                            <p>Rp 20.000</p>
                        </div>
                    </div>
                </div>

                <!-- endforeach -->
                <div class="card card-body">Card</div>
                <div class="card card-body">Card</div>
                <div class="card card-body">Card</div>
                <div class="card card-body">Card</div>
                <div class="card card-body">Card</div>
                <div class="card card-body">Card</div>
            </div>
        </div>


        <form class="checkpanel">
            <div style="width:100%; background-color:gray;">
                <div class="mb-3">
                    <label for="Input" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="InputNama" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">email</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3" style="margin-top:5%;">
                    <label for="InputPassword1" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="InputPhone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div class="center" style="margin-top: 10%">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
            </div>
        </form>
    </div>

</body>
</html>