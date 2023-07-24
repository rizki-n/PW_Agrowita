<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link href="{{ url('./assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    

    <style>
        body{
            color: white;
        }
        .form{
            width: 30%;
            height: min-content;
            min-width: 300px;
            min-height: 300px;
            background-color: #386A2B;
            box-shadow: 5px 5px 20px 3px rgba(0, 0, 0, 0.8);
            padding:30px;
            border-radius:20px;
        }
        .container h2 h1 h3{
        font-size: 1vw
        }
        .previewimg{
            max-width: 200px;
            max-height: 200px;
        }

        
    </style>
</head>

<body class="center">
    <div class="form shadow">
        <h1 class="center">Pembayaran</h1>

        <h3 class="center" style="margin:10% 0% 8% 0%;">Paket Test</h3>
        
        <div style="display:grid; grid-auto-flow:column; margin:8% 0% 8% 0%;">
            <div class="center" style="font-size:30px;">
                <i class="bi bi-person" ></i>
                <span style="margin-left: 5%">10</span>
            </div>
            <div class="center" style="font-size:30px;">
                <i class="bi bi-calendar-check"></i>
                <span style="margin-left: 5%">20/7/2023</span>
            </div>
        </div>
        
        <div style="display:grid; margin:8% 0% 8% 0%;">
            <div class="center">Total Harga</div>
            <h2 class="center">Rp 100.000,00</h2>
        </div>

        <div>No Rekening admin: 123321</div>

            <form style="margin-top: 5%">
            
                <div class="mb-3" style="margin-top:5%;">
                    <label for="InputPassword1" class="form-label">Masukan bukti pembayaran</label>
                    <input type="file" class="form-control" id="bukti-pembayaran" onchange="preview()" accept=".png, .jpg, .jpeg" required>
                    <div class="center"><img class="img-fluid previewimg" id="frame" src="" /></div>
                </div>
                <div class="center" style="margin-top: 10%">
                    <button type="submit" class="konfirmasibtn">Konfirmasi</button>
                </div> 
            </form>

    </div>

    
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        function clearImage() {
            document.getElementById('bukti-pembayaran').value = null;
            frame.src = "";
        }
    </script>

</body>
</html>
