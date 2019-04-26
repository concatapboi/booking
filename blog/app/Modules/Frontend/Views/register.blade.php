@extends('Frontend::layouts.master')
@section('content')
<!-- Breadcrumb Area Start -->
	<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(/blog/img/bg-img/16.jpg);">
			<div class="container h-100">
					<div class="row h-100 align-items-center">
							<div class="col-12">
									<div class="breadcrumb-content text-center">
											<h2 class="page-title">Register</h2>
											<nav aria-label="breadcrumb">
													<ol class="breadcrumb justify-content-center">
															<li class="breadcrumb-item"><a href="{{action('PageController@index')}}">Home</a></li>
															<li class="breadcrumb-item active" aria-current="page">Register</li>
													</ol>
											</nav>
									</div>
							</div>
					</div>
			</div>
	</div>
	<!-- Breadcrumb Area End -->

	<!-- Items Area Start -->
	<div class="roberto-news-area section-padding-100-0">
			<div class="container">
					<div class="row justify-content-center">
							<div class="col-12 col-lg-7">
									<form class="" action="" method="post" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										
									</form>
							</div>

							<div class="col-12 col-lg-5">

							</div>
					</div>
			</div>
	</div>
	<!-- Items Area End -->
@stop
