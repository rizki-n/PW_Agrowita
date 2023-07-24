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
    .form{
        width: 30%;
        height: min-content;
        min-width: 300px;
        min-height: 300px;
        background-color: rgb(244, 244, 244);
        padding:30px;
        border-radius:20px;
    }
    .container h2 h1 h3{
      font-size: 1vw
    }
  </style>
</head>

<body class="center">
    <div class="form shadow">
        <h1 class="center">Web Admin</h1>
        <form style="margin-top: 10%">
            <div class="mb-3">
                <label for="InputAdmin" class="form-label">Username</label>
                <input type="text" class="form-control" id="InputAdmin" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3" style="margin-top:5%;">
                <label for="InputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="InputPassword1" required>
            </div>
            <div class="center" style="margin-top: 10%">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div> 
        </form>
    </div>
</body>
</html>