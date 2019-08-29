@extends('layouts.master')
@section('content')
<!---<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->

@section('content')
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
<div class="row prodhome">
  <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
          <img src="/img/malla.jpg"  alt="..." class="img-responsive">
          <div class="caption">
              <h3>Product title</h3>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                      Omnis amet ipsam debitis magni officia fugit veniam eos voluptate minus, 
                      tempora reiciendis odio alias et, aut laborum accusantium 
                      dolor asperiores esse.</p>
             <div class="clearfix">
                   <div class="pull-right price">$1.500</div>
                   <a href="#" class="btn btn-success pull-right" role="button">Agregar al carrito</a>

                 </div>
            </div>
         </div>
    </div>

<div class="col-sm-6 col-md-4">
      <div class="thumbnail">
          <img src="/img/beach.jpg"  alt="..." class="img-responsive">
          <div class="caption">
              <h3>Product title</h3>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
     Omnis amet ipsam debitis magni officia fugit veniam eos voluptate minus, 
     tempora reiciendis odio alias et, aut laborum accusantium 
     dolor asperiores esse.</p>
     
                 <div class="clearfix">
                 <div class="pull-right price">$1.500</div>
                   <a href="#" class="btn btn-success pull-right" role="button">Agregar al carrito</a>
        
          </div>
          
          </div>

      </div>
  </div>

  <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
          <img src="/img/bikini-vintage.jpg"  alt="..." class="img-responsive">
          <div class="caption">
              <h3>Product title</h3>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
     Omnis amet ipsam debitis magni officia fugit veniam eos voluptate minus, 
     tempora reiciendis odio alias et, aut laborum accusantium 
     dolor asperiores esse.</p>
     
                 <div class="clearfix">
                 <div class="pull-right price">$1.500</div>
                   <a href="#" class="btn btn-success pull-right" role="button">Agregar al carrito</a>
        
          </div>
          
          </div>

      </div>
  </div>

  <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
          <img src="/img/malla-entera.jpg"  alt="..." class="img-responsive">
          <div class="caption">
              <h3>Product title</h3>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
     Omnis amet ipsam debitis magni officia fugit veniam eos voluptate minus, 
     tempora reiciendis odio alias et, aut laborum accusantium 
     dolor asperiores esse.</p>
     
                 <div class="clearfix">
                 <div class="pull-right price">$1.500</div>
                   <a href="#" class="btn btn-success pull-right" role="button">Agregar al carrito</a>
        
          </div>
          
          </div>

      </div>
  </div>

  <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
          <img src="/img/bikini-azul.png"  alt="..." class="img-responsive">
          <div class="caption">
              <h3>Product title</h3>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
     Omnis amet ipsam debitis magni officia fugit veniam eos voluptate minus, 
     tempora reiciendis odio alias et, aut laborum accusantium 
     dolor asperiores esse.</p>
     
                 <div class="clearfix">
                 <div class="pull-right price">$1.500</div>
                   <a href="#" class="btn btn-success pull-right" role="button">Agregar al carrito</a>
        
          </div>
          
          </div>

      </div>
  </div>

  <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
          <img src="/img/women-swimsuit.jpg"  alt="..." class="img-responsive">
          <div class="caption">
              <h3>Product title</h3>
              <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
     Omnis amet ipsam debitis magni officia fugit veniam eos voluptate minus, 
     tempora reiciendis odio alias et, aut laborum accusantium 
     dolor asperiores esse.</p>
     
                 <div class="clearfix">
                 <div class="pull-right price">$1.500</div>
                   <a href="#" class="btn btn-success pull-right" role="button">Agregar al carrito</a>
        
          </div>
          
          </div>

      </div>
  </div>

  </div>



<!-- whatsapp -->
<div class="btn-whatsapp">
  <a href="whatsapp://send?text= http://localhost/E-CommerceDH-master/" data-action="share/whatsapp/share"><i class="fab fa-whatsapp fa-3x"></i></a>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script>$(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 30){
            $('.fixed-top').css('background', 'transparent');
            } else{
            $('.fixed-top').css('background', 'rgba(250, 229, 211, 0.9)');
            }
    });</script>-->
  </body>
</html>
@endsection
