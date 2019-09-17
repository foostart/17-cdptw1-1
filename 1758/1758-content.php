
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/'.$pattern_document_root.'(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host.$matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-9">
			<div class="stm-featured-top-cars-title">
				<div class="heading-font">Featured Classified</div>
				<a href="#">
					Show all		
				</a>
			</div>
			<article class="card card-product">
					<div class="card-body">
					<div class="row">
						<aside class="col-sm-3">
							<div class="special-offer">
								<a href="#" class="offer-img-wrap">
									<div class="img-wrap"><img src="images/motor-1-795x463.jpg"></div>
									<div class="offer-discount-wrap">
										<div class="offer-discount">
											<div class="test">
											<div class="offer-discount-rotate"><strong>45%</strong></div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</aside> <!-- col.// -->
						<article class="col-sm-6">
								<h4 class="title"> Ut wisi enim ad minim veniam  </h4>
								<div class="rating-wrap mb-2">
									<ul class="rating-stars">
										<li style="width:50%" class="stars-active"> 
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> 
										</li>
										<li>
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> 
										</li>
									</ul>
									<div class="label-rating">12 reviews</div>
									<div class="label-rating">154 orders </div>
								</div> <!-- rating-wrap.// -->
								<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
								<dl class="dlist-align">
								<dt>Color</dt>
								<dd>Black and white</dd>
								</dl>  <!-- item-property-hor .// -->
								<dl class="dlist-align">
								<dt>Material</dt>
								<dd>Syntetic, wooden</dd>
								</dl>  <!-- item-property-hor .// -->
								<dl class="dlist-align">
								<dt>Delivery</dt>
								<dd>Russia, USA, and Europe</dd>
								</dl>  <!-- item-property-hor .// -->
						</article> <!-- col.// -->
						<aside class="col-sm-3 border-left">
							<div class="action-wrap">
								<div class="price-wrap h4">
									<span class="price"> $245 </span>	
									<del class="price-old"> $528</del>
								</div> <!-- info-price-detail // -->
								<p class="text-success">Free shipping</p>
								<br>
								<p>
									<a href="#" class="btn btn-primary"> Buy now </a>
									<a href="#" class="btn btn-secondary"> Details  </a>
								</p>
								<a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
							</div> <!-- action-wrap.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
					</div> <!-- card-body .// -->
				</article> <!-- card product .// -->

				<article class="card card-product">
					<div class="card-body">
					<div class="row">
						<aside class="col-sm-3">
							<div class="special-offer">
								<a href="#" class="offer-img-wrap">
									<div class="img-wrap"><img src="images/motor-1-795x463.jpg"></div>
									<div class="offer-discount-wrap">
										<div class="offer-discount">
											<div class="test">
											<div class="offer-discount-rotate"><strong>45%</strong></div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</aside> <!-- col.// -->
						<article class="col-sm-6">
								<h4 class="title"> Ut wisi enim ad minim veniam  </h4>
								<div class="rating-wrap mb-2">
									<ul class="rating-stars">
										<li style="width:50%" class="stars-active"> 
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> 
										</li>
										<li>
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
											<i class="fa fa-star"></i> 
										</li>
									</ul>
									<div class="label-rating">12 reviews</div>
									<div class="label-rating">154 orders </div>
								</div> <!-- rating-wrap.// -->
								<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
								<dl class="dlist-align">
								<dt>Color</dt>
								<dd>Black and white</dd>
								</dl>  <!-- item-property-hor .// -->
								<dl class="dlist-align">
								<dt>Material</dt>
								<dd>Syntetic, wooden</dd>
								</dl>  <!-- item-property-hor .// -->
								<dl class="dlist-align">
								<dt>Delivery</dt>
								<dd>Russia, USA, and Europe</dd>
								</dl>  <!-- item-property-hor .// -->
						</article> <!-- col.// -->
						<aside class="col-sm-3 border-left">
							<div class="action-wrap">
								<div class="price-wrap h4">
									<span class="price"> $245 </span>	
									<del class="price-old"> $528</del>
								</div> <!-- info-price-detail // -->
								<p class="text-success">Free shipping</p>
								<br>
								<p>
									<a href="#" class="btn btn-primary"> Buy now </a>
									<a href="#" class="btn btn-secondary"> Details  </a>
								</p>
								<a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
							</div> <!-- action-wrap.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
					</div> <!-- card-body .// -->
				</article> <!-- card product .// -->
		</div>
	</div>
</div>


</div>

    </div>
	</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

