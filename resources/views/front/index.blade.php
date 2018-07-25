@extends (front.layouts.master)

@section('contetn')
<div class="container" style="margin-top:25px">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox" style="height:300px">
							<div class="carousel-icarousel-innertem active">
								<img class="d-block img-fluid" width="100%"  src="css/images.jpg" alt="First slide">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-right"> 
						<h4>آخر الإعلانات</h4><hr/>
					</div>
					<div class="col-lg-4 col-md-6 mb-4 text-right">
						<div class="card h-100">
							<a href="#"><img class="card-img-top" height="150px" src="" alt="image" ></a>
							<div class="card-body">
								<h5 class="card-title">
								  <a href="">title1</a>
								</h5>
								<h6>6000</h6>
							</div>
						</div>            
					</div>
					<div class="col-lg-4 col-md-6 mb-4 text-right">
						<div class="card h-100">
							<a href="#"><img class="card-img-top" height="150px" src=""  alt="image" ></a>
							<div class="card-body">
								<h5 class="card-title">
								  <a href="">title2</a>
								</h5>
								<h6>3000</h6>
							</div>
						</div>            
					</div>
					<div class="col-lg-4 col-md-6 mb-4 text-right">
						<div class="card h-100">
							<a href="#"><img class="card-img-top" height="150px" src=""  alt="image" ></a>
							<div class="card-body">
								<h5 class="card-title">
								<a href="">title3</a>
								</h5>
								<h6>4000</h6>
							</div>
						</div>            
					</div>
				</div>

@endsection
