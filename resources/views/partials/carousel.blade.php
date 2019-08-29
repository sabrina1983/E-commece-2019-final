<!--

  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/fonts.css">



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
</body>-->


<body>
    <div class="flex-container bd-example">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/bg-1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>#1#</h5>
          <p>Primer ejemplo.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/bg-2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>#2#</h5>
          <p>Segundo ejemplo.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/bg-3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>#3#</h5>
          <p>Tercer ejemplo.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>