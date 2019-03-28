<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Photoshow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.css">
    <style media="screen">
      #album_pic, #photo{
        height: 25vw !important;
      }
    </style>
  </head>
  <body>
    @include('inc.topbar')
    <br>
    <div class="row">
      @include('inc.messages')
      @yield('content')
    </div>
  </body>
</html>
