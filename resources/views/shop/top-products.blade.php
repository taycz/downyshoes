	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
            @include('shop.option.left-product')
			<!-- product right -->
			<div class="left-ads-display col-md-9">
				<div class="wrapper_top_shop">
					<div class="col-md-6 shop_left">
						<img src="shoes/images/banner3.jpg" alt="">
						<h6>40% off</h6>
					</div>
					<div class="col-md-6 shop_right">
						<img src="shoes/images/banner2.jpg" alt="">
						<h6>50% off</h6>
					</div>
					<div class="clearfix"></div>
					<!-- product-sec1 -->
					<div class="product-sec1">
						<!--/mens-->
						@foreach($products as $product)
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="/{{explode(',',$product->upload)[0]}}" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{url('/single/'.$product->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">{{$product->status=='Off'? 'Hết Hàng' : 'New'}}</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="#">{{$product->name}}</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">${{$product->price}}</span>
													</div>
												</div>
											
											</div>
											<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
												@csrf
												<input type="hidden" name="_token" value="{{ csrf_token() }}" />
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="{{$product->name}}">
													<input type="hidden" name="amount" value="{{$product->price}}">
													<button type="submit" class="shoe-cart pshoe-cart" {{$product->status=='Off' ? 'disabled' : ''}} >
													<i class="fa fa-cart-plus" aria-hidden="true"
													
													 ></i>
													 </button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
						<!-- //mens -->
						<div class="clearfix"></div>

					</div>

					<!-- //product-sec1 -->
					<div class="col-md-6 shop_left shp">
						<img src="shoes/images/banner4.jpg" alt="">
						<h6>21% off</h6>
					</div>
					<div class="col-md-6 shop_right shp">
						<img src="shoes/images/banner1.jpg" alt="">
						<h6>31% off</h6>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //top products -->