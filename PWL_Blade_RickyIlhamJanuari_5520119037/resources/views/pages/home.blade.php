@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
<header class="masthead" style="background-image: url('./images/Kucing1.jpeg');background-size:cover;" >
      
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Selamatkan Kucing!</h1>
              <span class="subheading">Peduli Kucing!!</span>
              <div class="bd-example">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="./images/Kucing1.jpeg" class="d-block w-100" alt="...">
						
					</div>
					<div class="carousel-item">
						<img src="./images/Kucing2.jpeg" class="d-block w-100" alt="...">
						
					</div>
					<div class="carousel-item">
						<img src="./images/Kucing3.jpeg" class="d-block w-100" alt="...">
						
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
            </div>
          </div>
        </div>
</header>

@endsection