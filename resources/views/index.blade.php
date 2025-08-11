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
								<h4><a href="single-product.html">{{ $book->title}}</a></h4>
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
</x-app-layout>
