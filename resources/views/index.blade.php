<x-app-layout>
<!-- Start BEst Seller Area -->
<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
                     @foreach($books as $book)
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
								<a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">{{ $book->title }}</a></h4>
								<ul class="prize d-flex">
									<li>&#x20bd; {{ $book->price }}</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
					<!-- Start Single Product -->
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic" role="tab">BIOGRAPHIC</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">ADVENTURE</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">CHILDREN</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">COOK</a>
                        </div>
					</div>
				</div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						@foreach($books as $book)
							<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
								<div class="single__product">
									<!-- Start Single Product -->
									<div class="col-lg-3 col-md-4 col-sm-6 col-12">
										<div class="product product__style--3">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
											</div>
											<div class="product__content content--center content--center">
												<h4><a href="single-product.html">{{ $book->title }}</a></h4>
												<ul class="prize d-flex">
													<li>&#x20bd; {{ $book->price }}</li>
												</ul>
												<div class="action">
													<div class="actions_inner">
														<ul class="add_to_links">
															<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Start Single Product -->
									<!-- Start Single Product -->
									<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
										<div class="product product__style--3">
											<div class="product__thumb">
												<a class="first__img" href="single-product.html"><img src="images/books/3.jpg" alt="product image"></a>
												<a class="second__img animation1" href="single-product.html"><img src="images/books/9.jpg" alt="product image"></a>
												<div class="hot__box">
													<span class="hot-label">BEST SALER</span>
												</div>
											</div>
											<div class="product__content content--center content--center">
												<h4><a href="single-product.html">Ghost</a></h4>
												<ul class="prize d-flex">
													<li>$50.00</li>
													<li class="old_prize">$35.00</li>
												</ul>
												<div class="action">
													<div class="actions_inner">
														<ul class="add_to_links">
															<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
															<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
															<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
															<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product__hover--content">
													<ul class="rating d-flex">
														<li class="on"><i class="fa fa-star-o"></i></li>
														<li class="on"><i class="fa fa-star-o"></i></li>
														<li class="on"><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>
										</div>
									</div> -->
									<!-- Start Single Product -->
								</div>
							</div>
						@endforeach
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</section>
		<!-- Start BEst Seller Area -->

		<!-- Best Sale Area -->
		<section class="best-seel-area pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center pb--50">
							<h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slider center">
				@foreach($authors as $author)
					<!-- Single product start -->
					<div class="product product__style--3">
						<div class="product__thumb">
							<a class="first__img" href="single-product.html"><img src="images/best-sell-product/1.jpg" alt="product image"></a>
						</div>
						<div class="product__content content--center">
							<h4>
								<a href="#">{{ $author->getFullName() }}</a>
						</div>
					</div>
					<!-- Single product end -->
				@endforeach
			</div>
		</section>
		<!-- Best Sale Area Area -->
</x-app-layout>
