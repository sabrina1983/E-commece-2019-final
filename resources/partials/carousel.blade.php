@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles(2).css">
  <link rel="stylesheet" href="css/fonts.css">

  <title>Ferswimwear-carousel de prueba</title>
</head>
<body>
  <div class="main">
    <div class="slides">
      <div>
     <img src="img/bg-0.jpg"  alt="">
    </div>
    <div>
      <img src="img/bg-2.png" alt="">
      </div>
      <div>
     <img src="img/bg-3.png" alt="">
        </div>
    </div>
  </div>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/jquery.slides.js"></script>
<script>

$(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});

</script>
</body>
</html>
