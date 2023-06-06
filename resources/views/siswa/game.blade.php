<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/style.css"> 
  </head>
  <body>
    <div class="container">
      <h3>Drag & Drop Hewan sesuai dengan cluenya</h3>
      <div class="draggable-objects"></div>
      <div class="drop-points"></div>
    </div>
    <div class="controls-container">
      <p id="result"></p>
      <button id="start">Start Game</button><br><br><br>
      <a class="kembali" href="{{ route('siswa.dashboard') }}">Kembali</a>
    </div>
    <!-- Script -->
    <script src="/js/game.js"></script>
  </body>
</html>