<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .table{
      table-layout: fixed;
    }
    .table tr, .table td{
      padding: 1% 3%;
      max-width: 20%;

      border-style: dotted;
    }
    .harga{
      /* min-width: max-content;   */
                                /* yang ini kenapa ya? */
      /* width: max-content; */
      /* word-wrap: normal; */
      word-wrap: break-word;
      max-width:50px;
    }

  </style>
</head>

<body>@include('/utility/navadmin')
<section class="content">
    <div class="text">
      List Paket
    </div>
    <div class="center">
      <div class="tablebase">
        <div class="center">
          <div>
            @yield('content')
            @include('utility/pesan/pesan_error')
          </div>
        </div>

      </div>
    </div>

  </section>

  <script defer src="{{url('./assets/js/num_only.js')}}"></script>

  <script>
document.addEventListener('DOMContentLoaded', e => {
for (let checkbox of document.querySelectorAll('input[type=checkbox]')) {
    checkbox.value = checkbox.checked ? 1 : 0;
    checkbox.addEventListener('change', e => {
            e.target.value = e.target.checked ? 1 : 0;
       });
    }
});
  </script>

</body>
</html>
