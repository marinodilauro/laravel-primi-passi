<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- CSS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>laravel-primi-passi | portfolio</title>
</head>

<body>

  <nav id="navbar">
    <div class="button-container">

      <button class="button">
        <a href="{{route('home')}}">Home</a>
      </button>

      <button class="button">
        <a href="{{route('about')}}">About</a>
      </button>

      <button class="button">
        <a href="{{route('portfolio')}}">Portfolio</a>
      </button>

      <button class="button">
        <a href="{{route('contact')}}">Contact me</a>
      </button>

    </div>
  </nav>


  <h1>My portfolio</h1>

</body>

</html>