@extends('layouts.master')
@section('content')
	<div class="container-fluid" >
			<!-- news -->
			<div class="row" style="margin-top: -5px;">
				<div class="col-12 pb-5">
					<!--SECTION START-->
						<section class="row">
							<!--Start slider news-->
							<div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
								<div id="featured" class="carousel slide carousel" data-ride="carousel">
									<!--dots navigate-->
									<ol class="carousel-indicators top-indicator">
										@forelse($news as $key => $new)
										@if($key==0)
											<li data-target="#featured" data-slide-to="{{$key}}"  class="active"></li>

										@else
											<li data-target="#featured" data-slide-to="{{$key}}"></li>
										@endif
										@empty
										@endforelse
										<!-- <li data-target="#featured" data-slide-to="0" class="active"></li>
										<li data-target="#featured" data-slide-to="1"></li>
										<li data-target="#featured" data-slide-to="2"></li>
										<li data-target="#featured" data-slide-to="3"></li> -->
									</ol>
                        
										<!--carousel inner-->
										<div class="carousel-inner">
											<!--Item slider-->
											@forelse($news as $key => $new)

											<div class="carousel-item {{$key==0?'active':null}}">
												<div class="card border-0 rounded-0 text-light overflow zoom">
													<div class="position-relative">
														<!--thumbnail img-->
														<div class="ratio_left-cover-1 image-wrapper">
															<a href="{{$new['url']}}" target="_blank"><img class="img-fluid w-100" src="{{$new['urlToImage']}}" alt="The News"></a>
														</div>
														<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
															<!--title-->
															<a href="{{$new['url']}}" target="_blank">
																<h2 class="h3 post-title text-white my-1">{{$new['title']}}</h2>
															</a>
															<!-- meta title -->
															<div class="news-meta">
																<span class="news-author">by <a class="text-white font-weight-bold" href="#">{{$new['author']}}</a></span>
																<span class="news-date">{{\Carbon\Carbon::parse($new['publishedAt'],'UTC')->isoFormat('MMM Do YY')}}</span>

															</div>
														</div>
													</div>
												</div>
											</div>
												@empty
										@endforelse
                            
									</div>
									<!--end carousel inner-->
								</div>
                    
								<!--navigation-->
								<a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#featured" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<!--End slider news-->
                
							<!--Start box news-->
							<div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
								<div class="row">
									<!--news box-->
									<div class="col-6 pb-1 pt-0 pr-1">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="{{$news[16]['url']}}" target="_blank">
														<img class="img-fluid"
															src="{{$news[16]['urlToImage']}}"
															alt="simple blog template bootstrap">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<!-- <a class="p-1 badge badge-primary rounded-0" href="#">Lifestyle</a> -->

													<!--title-->
													<a href="{{$news[16]['url']}}" target="_blank">
														<h2 class="h5 text-white my-1">{{$news[16]['title']}}</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
                        
									<!--news box-->
									<div class="col-6 pb-1 pl-1 pt-0">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="{{$news[17]['url']}}" target="_blank">
														<img class="img-fluid"
															src="{{$news[17]['urlToImage']}}"
															alt="bootstrap templates for blog">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<!-- <a class="p-1 badge badge-primary rounded-0" href="#">Motocross</a> -->
													<!--title-->
													<a href="{{$news[17]['url']}}" target="_blank">
														<h2 class="h5 text-white my-1">{{$news[17]['title']}}</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
                        
									<!--news box-->
									<div class="col-6 pb-1 pr-1 pt-1">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="{{$news[18]['url']}}" target="_blanlk"> 
														<img class="img-fluid"
															src="{{$news[18]['urlToImage']}}"
															alt="bootstrap blog wordpress theme">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<!-- <a class="p-1 badge badge-primary rounded-0" href="#">Fitness</a> -->
													<!--title-->
													<a href="{{$news[18]['url']}}" target="_blank">
														<h2 class="h5 text-white my-1">{{$news[18]['title']}}</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
                        
									<!--news box-->
									<div class="col-6 pb-1 pl-1 pt-1">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="{{$news[19]['url']}}" target="_blank">
														<img class="img-fluid"
															src="{{$news[19]['urlToImage']}}"
															alt="blog website templates bootstrap">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<!-- <a class="p-1 badge badge-primary rounded-0" href="#">Adventure</a> -->
													<!--title-->
													<a href="{{$news[19]['url']}}" target="_blank">
														<h2 class="h5 text-white my-1">{{$news[19]['title']}}</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!--end news box-->
								</div>
							</div>
							<!--End box news-->
						</section>
						<!--END SECTION-->
					</div>
				</div>
			</div>
@endsection