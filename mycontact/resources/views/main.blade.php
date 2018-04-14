<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Главная страница</title>
    <style>
      body {
        margin: 3%;
        background-color: #FFFAFA;
      }
      /* #main {
        height: 700px;
      } */
    </style>
  </head>
  <body>
    <div class="card" id='main'>
      <h1 class="card-header">
        MyContact
      </h1>
      <div class="card-body">
        @yield('content')
      </div>
    </div>
  </body>
</html>
