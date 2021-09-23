@extends('site.layouts.master')
@php
	$lang = LaravelLocalization::getCurrentLocale();
@endphp
@section('page_content')
<section class="home-slider position-relative pt-50">
	<div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
		
		@foreach ($slides as $slide)
		<div class="single-hero-slider single-animation-wrap">
			<div class="container">
				<div class="row align-items-center slider-animated-1">
					<div class="col-lg-5 col-md-6">
						<div class="hero-slider-content-2">
							<h4 class="animated">{{ $slide['title_'.$lang] }}</h4>
							<h2 class="animated fw-900">{{ $slide['sub_title_'.$lang] }}</h2>
							<h1 class="animated fw-900 text-brand"> {{ $slide['big_title_'.$lang] }} </h1>
{{-- 							<p class="animated">Save more with coupons & up to 70% off</p> --}}
							<a class="animated btn btn-brush btn-brush-3" href="{{ $slide->link }}"> {{ $slide['button_text_'.$lang] }} </a>
						</div>
					</div>
					<div class="col-lg-7 col-md-6">
						<div class="single-slider-img single-slider-img-1">
							<img class="animated slider-1-1" src="{{ Storage::disk('public')->url('slides/'.$slide->image) }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="slider-arrow hero-slider-1-arrow"></div>
</section>

<section class="popular-categories section-padding mt-15 mb-25">
	<div class="container wow fadeIn animated">
		<h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
		<div class="carausel-6-columns-cover position-relative">
			<div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
			<div class="carausel-6-columns" id="carausel-6-columns">
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"><img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-1.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">T-Shirt</a></h5>
				</div>
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"> <img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-2.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">Bags</a></h5>
				</div>
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"><img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-3.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">Sandan</a></h5>
				</div>
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"><img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-4.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">Scarf Cap</a></h5>
				</div>
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"><img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-5.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">Shoes</a></h5>
				</div>
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"><img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-6.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">Pillowcase</a></h5>
				</div>
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"><img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-7.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">Jumpsuits</a></h5>
				</div>
				<div class="card-1">
					<figure class=" img-hover-scale overflow-hidden">
						<a href="shop-grid-right.html"><img src="{{ asset('site_assets/assets/imgs/shop/category-thumb-8.jpg') }}" alt=""></a>
					</figure>
					<h5><a href="shop-grid-right.html">Hats</a></h5>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="bg-grey-9 section-padding">
	<div class="container pt-15 pb-25">
		<div class="tab-header">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" type="button" >Best Selling </button>
				</li>
			</ul>
			<a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="tab-content wow fadeIn animated" id="myTabContent-1">
					<div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
						<div class="carausel-4-columns-cover arrow-center position-relative">
							<div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
							<div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
								<div class="product-cart-wrap">
									<div class="product-img-action-wrap">
										<div class="product-img product-img-zoom">
											<a href="shop-product-right.html">
												<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-1.jpg') }}" alt="">
												<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-2.jpg') }}" alt="">
											</a>
										</div>
										<div class="product-action-1">
											<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
												<i class="fi-rs-eye"></i></a>
												<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

											</div>
											<div class="product-badges product-badges-position product-badges-mrg">
												<span class="hot">Hot</span>
											</div>
										</div>
										<div class="product-content-wrap">
											<div class="product-category">
												<a href="shop-grid-right.html">Nulla</a>
											</div>
											<h2><a href="shop-product-right.html">Maecenas eget</a></h2>

											<div class="product-price">
												<span>$238.85 </span>
												<span class="old-price">$245.8</span>
											</div>
											<div class="product-action-1 show">
												<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
											</div>
											<div class="product-category">
												<a href="shop-grid-right.html">Nulla</a>
											</div>
										</div>
									</div>

									<div class="product-cart-wrap">
										<div class="product-img-action-wrap">
											<div class="product-img product-img-zoom">
												<a href="shop-product-right.html">
													<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-1.jpg') }}" alt="">
													<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-2.jpg') }}" alt="">
												</a>
											</div>
											<div class="product-action-1">
												<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
													<i class="fi-rs-eye"></i></a>
													<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

												</div>
												<div class="product-badges product-badges-position product-badges-mrg">
													<span class="hot">Hot</span>
												</div>
											</div>
											<div class="product-content-wrap">
												<div class="product-category">
													<a href="shop-grid-right.html">Nulla</a>
												</div>
												<h2><a href="shop-product-right.html">Maecenas eget</a></h2>

												<div class="product-price">
													<span>$238.85 </span>
													<span class="old-price">$245.8</span>
												</div>
												<div class="product-action-1 show">
													<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
												</div>
												<div class="product-category">
													<a href="shop-grid-right.html">Nulla</a>
												</div>
											</div>
										</div>




										<div class="product-cart-wrap">
											<div class="product-img-action-wrap">
												<div class="product-img product-img-zoom">
													<a href="shop-product-right.html">
														<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-1.jpg') }}" alt="">
														<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-2.jpg') }}" alt="">
													</a>
												</div>
												<div class="product-action-1">
													<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
														<i class="fi-rs-eye"></i></a>
														<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

													</div>
													<div class="product-badges product-badges-position product-badges-mrg">
														<span class="hot">Hot</span>
													</div>
												</div>
												<div class="product-content-wrap">
													<div class="product-category">
														<a href="shop-grid-right.html">Nulla</a>
													</div>
													<h2><a href="shop-product-right.html">Maecenas eget</a></h2>

													<div class="product-price">
														<span>$238.85 </span>
														<span class="old-price">$245.8</span>
													</div>
													<div class="product-action-1 show">
														<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
													</div>
													<div class="product-category">
														<a href="shop-grid-right.html">Nulla</a>
													</div>
												</div>
											</div>




											<div class="product-cart-wrap">
												<div class="product-img-action-wrap">
													<div class="product-img product-img-zoom">
														<a href="shop-product-right.html">
															<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-1.jpg') }}" alt="">
															<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-2.jpg') }}" alt="">
														</a>
													</div>
													<div class="product-action-1">
														<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
															<i class="fi-rs-eye"></i></a>
															<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

														</div>
														<div class="product-badges product-badges-position product-badges-mrg">
															<span class="hot">Hot</span>
														</div>
													</div>
													<div class="product-content-wrap">
														<div class="product-category">
															<a href="shop-grid-right.html">Nulla</a>
														</div>
														<h2><a href="shop-product-right.html">Maecenas eget</a></h2>

														<div class="product-price">
															<span>$238.85 </span>
															<span class="old-price">$245.8</span>
														</div>
														<div class="product-action-1 show">
															<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
														</div>
														<div class="product-category">
															<a href="shop-grid-right.html">Nulla</a>
														</div>
													</div>
												</div>


												<div class="product-cart-wrap">
													<div class="product-img-action-wrap">
														<div class="product-img product-img-zoom">
															<a href="shop-product-right.html">
																<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-1.jpg') }}" alt="">
																<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-1-2.jpg') }}" alt="">
															</a>
														</div>
														<div class="product-action-1">
															<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																<i class="fi-rs-eye"></i></a>
																<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

															</div>
															<div class="product-badges product-badges-position product-badges-mrg">
																<span class="hot">Hot</span>
															</div>
														</div>
														<div class="product-content-wrap">
															<div class="product-category">
																<a href="shop-grid-right.html">Nulla</a>
															</div>
															<h2><a href="shop-product-right.html">Maecenas eget</a></h2>

															<div class="product-price">
																<span>$238.85 </span>
																<span class="old-price">$245.8</span>
															</div>
															<div class="product-action-1 show">
																<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
															</div>
															<div class="product-category">
																<a href="shop-grid-right.html">Nulla</a>
															</div>
														</div>
													</div>




												</div>
											</div>
										</div>


									</div>
									<!--End tab-content-->
								</div>
								<!--End Col-lg-9-->
							</div>
						</div>
					</section>



					<section class="bg-grey-9 section-padding">
						<div class="container pt-15 pb-25">

							<div class="row">

								<div class="col-lg-12 col-md-12">
									<div class="tab-content wow fadeIn animated" id="myTabContent-1">

										<!--End tab-pane-->
										<div class="tab-pane fade show active" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
											<div class="carausel-4-columns-cover arrow-center position-relative">
												<div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
												<div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">



													<div class="product-cart-wrap">
														<div class="product-img-action-wrap">
															<div class="product-img product-img-zoom">
																<a href="shop-product-right.html">
																	<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-1.jpg') }}" alt="">
																	<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-2.jpg') }}" alt="">
																</a>
															</div>
															<div class="product-action-1">
																<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																	<i class="fi-rs-eye"></i></a>
																	<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																</div>
																<div class="product-badges product-badges-position product-badges-mrg">
																	<span class="sale">Sale</span>
																</div>
															</div>
															<div class="product-content-wrap">
																<div class="product-category">
																	<a href="shop-grid-right.html">Watch</a>
																</div>
																<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
																<div class="product-price">
																	<span>$238.85 </span>
																	<span class="old-price">$245.8</span>
																</div>
																<div class="product-action-1 show">
																	<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																</div>
																<div class="product-category">
																	<a href="shop-grid-right.html"> By : shop name</a>
																</div>
															</div>
														</div>


														<div class="product-cart-wrap">
															<div class="product-img-action-wrap">
																<div class="product-img product-img-zoom">
																	<a href="shop-product-right.html">
																		<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-1.jpg') }}" alt="">
																		<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-2.jpg') }}" alt="">
																	</a>
																</div>
																<div class="product-action-1">
																	<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																		<i class="fi-rs-eye"></i></a>
																		<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																	</div>
																	<div class="product-badges product-badges-position product-badges-mrg">
																		<span class="sale">Sale</span>
																	</div>
																</div>
																<div class="product-content-wrap">
																	<div class="product-category">
																		<a href="shop-grid-right.html">Watch</a>
																	</div>
																	<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
																	<div class="product-price">
																		<span>$238.85 </span>
																		<span class="old-price">$245.8</span>
																	</div>
																	<div class="product-action-1 show">
																		<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																	</div>
																	<div class="product-category">
																		<a href="shop-grid-right.html"> By : shop name</a>
																	</div>
																</div>
															</div>



															<div class="product-cart-wrap">
																<div class="product-img-action-wrap">
																	<div class="product-img product-img-zoom">
																		<a href="shop-product-right.html">
																			<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-1.jpg') }}" alt="">
																			<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-2.jpg') }}" alt="">
																		</a>
																	</div>
																	<div class="product-action-1">
																		<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																			<i class="fi-rs-eye"></i></a>
																			<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																		</div>
																		<div class="product-badges product-badges-position product-badges-mrg">
																			<span class="sale">Sale</span>
																		</div>
																	</div>
																	<div class="product-content-wrap">
																		<div class="product-category">
																			<a href="shop-grid-right.html">Watch</a>
																		</div>
																		<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
																		<div class="product-price">
																			<span>$238.85 </span>
																			<span class="old-price">$245.8</span>
																		</div>
																		<div class="product-action-1 show">
																			<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																		</div>
																		<div class="product-category">
																			<a href="shop-grid-right.html"> By : shop name</a>
																		</div>
																	</div>
																</div>



																<div class="product-cart-wrap">
																	<div class="product-img-action-wrap">
																		<div class="product-img product-img-zoom">
																			<a href="shop-product-right.html">
																				<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-1.jpg') }}" alt="">
																				<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-2.jpg') }}" alt="">
																			</a>
																		</div>
																		<div class="product-action-1">
																			<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																				<i class="fi-rs-eye"></i></a>
																				<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																			</div>
																			<div class="product-badges product-badges-position product-badges-mrg">
																				<span class="sale">Sale</span>
																			</div>
																		</div>
																		<div class="product-content-wrap">
																			<div class="product-category">
																				<a href="shop-grid-right.html">Watch</a>
																			</div>
																			<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
																			<div class="product-price">
																				<span>$238.85 </span>
																				<span class="old-price">$245.8</span>
																			</div>
																			<div class="product-action-1 show">
																				<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																			</div>
																			<div class="product-category">
																				<a href="shop-grid-right.html"> By : shop name</a>
																			</div>
																		</div>
																	</div>



																	<div class="product-cart-wrap">
																		<div class="product-img-action-wrap">
																			<div class="product-img product-img-zoom">
																				<a href="shop-product-right.html">
																					<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-1.jpg') }}" alt="">
																					<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-12-2.jpg') }}" alt="">
																				</a>
																			</div>
																			<div class="product-action-1">
																				<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																					<i class="fi-rs-eye"></i></a>
																					<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																				</div>
																				<div class="product-badges product-badges-position product-badges-mrg">
																					<span class="sale">Sale</span>
																				</div>
																			</div>
																			<div class="product-content-wrap">
																				<div class="product-category">
																					<a href="shop-grid-right.html">Watch</a>
																				</div>
																				<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
																				<div class="product-price">
																					<span>$238.85 </span>
																					<span class="old-price">$245.8</span>
																				</div>
																				<div class="product-action-1 show">
																					<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																				</div>
																				<div class="product-category">
																					<a href="shop-grid-right.html"> By : shop name</a>
																				</div>
																			</div>
																		</div>





																	</div>
																</div>
															</div>

														</div>
														<!--End tab-content-->
													</div>
													<!--End Col-lg-9-->
												</div>
											</div>
										</section>





										<section class="bg-grey-9 section-padding">
											<div class="container pt-15 pb-25">
												<div class="tab-header">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item" role="presentation">
															<button class="nav-link active" type="button" > New Arrival  </button>
														</li>
													</ul>
													<a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
												</div>


												<div class="row">

													<div class="col-lg-12 col-md-12">
														<div class="tab-content wow fadeIn animated" id="myTabContent-1">

															<div class="tab-pane fade show active" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
																<div class="carausel-4-columns-cover arrow-center position-relative">
																	<div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
																	<div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">

																		<div class="product-cart-wrap">
																			<div class="product-img-action-wrap">
																				<div class="product-img product-img-zoom">
																					<a href="shop-product-right.html">
																						<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-1.jpg') }}" alt="">
																						<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-2.jpg') }}" alt="">
																					</a>
																				</div>
																				<div class="product-action-1">
																					<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																						<i class="fi-rs-eye"></i></a>
																						<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																					</div>
																					<div class="product-badges product-badges-position product-badges-mrg">
																						<span class="sale">Sale</span>
																					</div>
																				</div>
																				<div class="product-content-wrap">
																					<div class="product-category">
																						<a href="shop-grid-right.html">Watch</a>
																					</div>
																					<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>

																					<div class="product-price">
																						<span>$238.85 </span>
																						<span class="old-price">$245.8</span>
																					</div>
																					<div class="product-action-1 show">
																						<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																					</div>
																					<div class="product-category">
																						<a href="shop-grid-right.html"> Shop Name </a>
																					</div>
																				</div>
																			</div>


																			<div class="product-cart-wrap">
																				<div class="product-img-action-wrap">
																					<div class="product-img product-img-zoom">
																						<a href="shop-product-right.html">
																							<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-1.jpg') }}" alt="">
																							<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-2.jpg') }}" alt="">
																						</a>
																					</div>
																					<div class="product-action-1">
																						<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																							<i class="fi-rs-eye"></i></a>
																							<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																						</div>
																						<div class="product-badges product-badges-position product-badges-mrg">
																							<span class="sale">Sale</span>
																						</div>
																					</div>
																					<div class="product-content-wrap">
																						<div class="product-category">
																							<a href="shop-grid-right.html">Watch</a>
																						</div>
																						<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>

																						<div class="product-price">
																							<span>$238.85 </span>
																							<span class="old-price">$245.8</span>
																						</div>
																						<div class="product-action-1 show">
																							<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																						</div>
																						<div class="product-category">
																							<a href="shop-grid-right.html"> Shop Name </a>
																						</div>
																					</div>
																				</div>



																				<div class="product-cart-wrap">
																					<div class="product-img-action-wrap">
																						<div class="product-img product-img-zoom">
																							<a href="shop-product-right.html">
																								<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-1.jpg') }}" alt="">
																								<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-2.jpg') }}" alt="">
																							</a>
																						</div>
																						<div class="product-action-1">
																							<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																								<i class="fi-rs-eye"></i></a>
																								<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																							</div>
																							<div class="product-badges product-badges-position product-badges-mrg">
																								<span class="sale">Sale</span>
																							</div>
																						</div>
																						<div class="product-content-wrap">
																							<div class="product-category">
																								<a href="shop-grid-right.html">Watch</a>
																							</div>
																							<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>

																							<div class="product-price">
																								<span>$238.85 </span>
																								<span class="old-price">$245.8</span>
																							</div>
																							<div class="product-action-1 show">
																								<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																							</div>
																							<div class="product-category">
																								<a href="shop-grid-right.html"> Shop Name </a>
																							</div>
																						</div>
																					</div>



																					<div class="product-cart-wrap">
																						<div class="product-img-action-wrap">
																							<div class="product-img product-img-zoom">
																								<a href="shop-product-right.html">
																									<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-1.jpg') }}" alt="">
																									<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-2.jpg') }}" alt="">
																								</a>
																							</div>
																							<div class="product-action-1">
																								<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																									<i class="fi-rs-eye"></i></a>
																									<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																								</div>
																								<div class="product-badges product-badges-position product-badges-mrg">
																									<span class="sale">Sale</span>
																								</div>
																							</div>
																							<div class="product-content-wrap">
																								<div class="product-category">
																									<a href="shop-grid-right.html">Watch</a>
																								</div>
																								<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>

																								<div class="product-price">
																									<span>$238.85 </span>
																									<span class="old-price">$245.8</span>
																								</div>
																								<div class="product-action-1 show">
																									<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																								</div>
																								<div class="product-category">
																									<a href="shop-grid-right.html"> Shop Name </a>
																								</div>
																							</div>
																						</div>


																						<div class="product-cart-wrap">
																							<div class="product-img-action-wrap">
																								<div class="product-img product-img-zoom">
																									<a href="shop-product-right.html">
																										<img class="default-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-1.jpg') }}" alt="">
																										<img class="hover-img" src="{{ asset('site_assets/assets/imgs/shop/product-11-2.jpg') }}" alt="">
																									</a>
																								</div>
																								<div class="product-action-1">
																									<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																										<i class="fi-rs-eye"></i></a>
																										<a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>

																									</div>
																									<div class="product-badges product-badges-position product-badges-mrg">
																										<span class="sale">Sale</span>
																									</div>
																								</div>
																								<div class="product-content-wrap">
																									<div class="product-category">
																										<a href="shop-grid-right.html">Watch</a>
																									</div>
																									<h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>

																									<div class="product-price">
																										<span>$238.85 </span>
																										<span class="old-price">$245.8</span>
																									</div>
																									<div class="product-action-1 show">
																										<a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
																									</div>
																									<div class="product-category">
																										<a href="shop-grid-right.html"> Shop Name </a>
																									</div>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>
																			</div>
																			<!--End tab-content-->
																		</div>
																		<!--End Col-lg-9-->
																	</div>
																</div>
															</section>

															<section id="work" class="mt-40 pt-50 pb-50 section-border">
																<div class="container">

																	<div class="tab-header">
																		<ul class="nav nav-tabs" id="myTab" role="tablist">
																			<li class="nav-item" role="presentation">
																				<button class="nav-link active" type="button"> Featured Stores  </button>
																			</li>
																		</ul>
																		<a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
																	</div>

																	<div class="row">
																		<div class="col-md-4 text-center mb-md-0 mb-4">
																			<img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="{{ asset('site_assets/assets/imgs/page/company-1.jpg') }}" alt="">
																			<h4 class="mt-30 mb-15 wow fadeIn animated"> Store Name </h4>
																			<div class="rating_wrap">
																				<div class="product-rate d-inline-block">
																					<div class="product-rating" style="width:90%">
																					</div>
																				</div>
																				<span class="rating_num">(125)</span>
																			</div>
																			<a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand text-hover-white border-radius-5 btn-shadow-brand hover-up" href="{{ url('shop') }}"> View Shop </a>
																		</div>
																		<div class="col-md-4 text-center mb-md-0 mb-4">
																			<img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="{{ asset('site_assets/assets/imgs/page/company-2.jpg') }}" alt="">
																			<h4 class="mt-30 mb-15 wow fadeIn animated"> Store Name </h4>
																			<div class="rating_wrap">
																				<div class="product-rate d-inline-block">
																					<div class="product-rating" style="width:90%">
																					</div>
																				</div>
																				<span class="rating_num">(125)</span>
																			</div>

																			<a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand text-hover-white border-radius-5 btn-shadow-brand hover-up" href="{{ url('shop') }}"> View Shop </a>
																		</div>
																		<div class="col-md-4 text-center">
																			<img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="{{ asset('site_assets/assets/imgs/page/company-3.jpg') }}" alt="">
																			<h4 class="mt-30 mb-15 wow fadeIn animated"> Store Name </h4>
																			<div class="rating_wrap">
																				<div class="product-rate d-inline-block">
																					<div class="product-rating" style="width:90%">
																					</div>
																				</div>
																				<span class="rating_num">(125)</span>
																			</div>
																			<a class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand text-hover-white border-radius-5 btn-shadow-brand hover-up" href="{{ url('shop') }}"> View Shop </a>
																		</div>
																	</div>
																</div>
															</section>




															<section id="testimonials" class="section-padding">
																<div class="container pt-25">
																	<div class="row mb-50">
																		<div class="col-lg-12 col-md-12 text-center">
																			<h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">some facts</h6>
																			<h2 class="mb-15 text-grey-1 wow fadeIn animated">Take a look what<br> our clients say about us</h2>
																			<p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
																		</div>
																	</div>
																	<div class="row align-items-center">
																		<div class="col-md-6 col-lg-4">
																			<div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
																				<div class="hero-card-icon icon-left-2 hover-up ">
																					<img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="{{ asset('site_assets/assets/imgs/2048px-User_icon_2.svg.png') }}" alt="">
																				</div>
																				<div class="pl-30">
																					<h5 class="mb-5 fw-500">
																						J. Bezos
																					</h5>
																					<p class="font-sm text-grey-5">Adobe Jsc</p>
																					<p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-lg-4">
																			<div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
																				<div class="hero-card-icon icon-left-2 hover-up ">
																					<img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="{{ asset('site_assets/assets/imgs/2048px-User_icon_2.svg.png') }}" alt="">
																				</div>
																				<div class="pl-30">
																					<h5 class="mb-5 fw-500">
																						B.Gates
																					</h5>
																					<p class="font-sm text-grey-5">Adobe Jsc</p>
																					<p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-lg-4">
																			<div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
																				<div class="hero-card-icon icon-left-2 hover-up ">
																					<img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="{{ asset('site_assets/assets/imgs/2048px-User_icon_2.svg.png') }}" alt="">
																				</div>
																				<div class="pl-30">
																					<h5 class="mb-5 fw-500">
																						B. Meyers
																					</h5>
																					<p class="font-sm text-grey-5">Adobe Jsc</p>
																					<p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-lg-4">
																			<div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
																				<div class="hero-card-icon icon-left-2 hover-up ">
																					<img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="{{ asset('site_assets/assets/imgs/2048px-User_icon_2.svg.png') }}" alt="">
																				</div>
																				<div class="pl-30">
																					<h5 class="mb-5 fw-500">
																						J. Bezos
																					</h5>
																					<p class="font-sm text-grey-5">Adobe Jsc</p>
																					<p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-lg-4">
																			<div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
																				<div class="hero-card-icon icon-left-2 hover-up ">
																					<img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="{{ asset('site_assets/assets/imgs/2048px-User_icon_2.svg.png') }}" alt="">
																				</div>
																				<div class="pl-30">
																					<h5 class="mb-5 fw-500">
																						B.Gates
																					</h5>
																					<p class="font-sm text-grey-5">Adobe Jsc</p>
																					<p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-lg-4">
																			<div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
																				<div class="hero-card-icon icon-left-2 hover-up ">
																					<img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="{{ asset('site_assets/assets/imgs/2048px-User_icon_2.svg.png') }}" alt="">
																				</div>
																				<div class="pl-30">
																					<h5 class="mb-5 fw-500">
																						B. Meyers
																					</h5>
																					<p class="font-sm text-grey-5">Adobe Jsc</p>
																					<p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row mt-30">
																		<div class="col-12 text-center">
																			<p class="wow fadeIn animated">
																				<a class="btn btn-brand text-white btn-shadow-brand hover-up btn-lg">View More</a>
																			</p>
																		</div>
																	</div>
																</div>
															</section>
															@endsection