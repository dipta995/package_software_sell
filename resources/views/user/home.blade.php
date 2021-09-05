@extends('layouts.master')
@section('content')
<!-- Start Pricing section
		=========================================== -->
		<section class="hero-area">
			<div class="block">
				<div class="video-button">
					<i class="tf-ion-play"></i>
		
				</div>
				<h1>Become A More Successful Entrepreneur</h1>
				<p>Make your Business Online</p>
				<p>You can share your idea with us.</p>
				<a data-scroll href="#contact-us" class="btn btn-transparent">Contact Us</a>
			</div>
		</section>
		
		<section id="pricing" class="pricing section">
			<div class="container">
				<div class="row">

					<!-- section title -->
				    <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
			        	<h2>Our Greatest<span class="color"> Plans</span></h2>
				        <div class="border"></div>
				    </div>
				    <!-- /section title -->

					<!-- single pricing table -->
                    @foreach ($pacage as $item)

					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
						<div class="price-item">

							<!-- plan name & value -->
							<div class="price-title">
								<h3>{{ $item->pack_name }}</h3>
								<p><strong class="value">{{ $item->price }} Taka</strong>/ {{ $item->month }} month</p>
                                <p><strong class="value">{{ $item->new_discount }} %</strong></p>
							</div>
							<!-- /plan name & value -->

							<!-- plan description -->
                        @php
                     echo $item->details
                        @endphp
						 	<!-- /plan description -->

							<!-- signup button -->
							<a class="btn btn-transparent" href="{{ url('buy/pack/'.$item->pack_name) }}">Buy Now</a>
							<!-- /signup button -->

						</div>
					</div>
                    @endforeach
					<!-- end single pricing table -->




				</div>       <!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
<!--
		Start About Section
		==================================== -->
		<section id="about" class="bg-one about section">
			<div  id="about" class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>About <span class="color">Us</span> </h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="block">
							<div class="icon-box">
								<i class="tf-tools"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3 class="ddd">Website/Software Developers</h3>
								<p>Skilled & Experienced Website/ Software Developers you can count on. Providing Maximum Security assured custom Website/ Software for your business.</p>
							</div>
						</div>
					</div>
					<!-- End About item -->

					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="block">
							<div class="icon-box">
								<i class="tf-strategy"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3>System Developers</h3>
								<p>
                                    Management System Providers you can rely on. Management Systems which can help grow and manage your business with ease. E.g. School Portals, Hospitals, Agriculture, Accounting, etc.</p>
							</div>
						</div>
					</div>
					<!-- End About item -->

					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="block kill-margin-bottom">
							<div class="icon-box">
								<i class="tf-anchor2"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="content text-center">
								<h3>Digital Marketers</h3>
								<p>
                                    The success growth of every business is in the path of Digital Marketing as the world is now moving without Technology. Why not involve your business with DigiWeb Developers.</p>
							</div>
						</div>
					</div>
					<!-- End About item -->

				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

{{-- <section class="section about-2 padding-0 bg-dark" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 padding-0 ">
				<img class="img-responsive" src="images/about/about-business-man.jpg" alt="">
			</div>
			<div class="col-md-6">
				<div class="content-block">
					<h2>We’re A Digital Design Agency.</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempora itaque, autem dolores culpa cum mollitia voluptate nesciunt voluptatibus quasi.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eveniet vel et mollitia nemo corporis sed ut, exercitationem incidunt, rerum nam doloremque quos ratione doloribus, officiis adipisci error quasi soluta?</p>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, magnam.</p>
					<div class="row">
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-circle-compass"></i>
								</div>
								<div class="media-body">
									<h4 class="media-heading">SEO Optimized</h4>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus eos saepe</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="media">
								<div class="pull-left">
									<i class="tf-hotairballoon"></i>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Easy Customization</h4>
									<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus consectetur dolores repellendus </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section-sm bg-1 overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Great Design & Incredible Features</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur odio impedit incidunt? <br> Omnis accusantium ea reiciendis, fugit commodi nostrum.</p>
				<a href="#" class="btn btn-main">Start a project with us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Services Section
==================================== -->

<section id="services" class="bg-one section">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Our <span class="color">Services</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->

            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-globe"></i>
					</div>
					<h3>Software Development</h3>
					<p>We take part in the area of Software Development best practices. Understanding what our clients needs, delivering every of their projects and giving them our best I.T supportive efforts</p>
				</div>
			</article>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-laptop"></i>
					</div>
					<h3>Website Development</h3>
					<p>We build and create websites that are not only visually beautiful, but also functionally effective. We work together to helping clients meet their business objectives.</p>
				</div>
			</article>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-genius"></i>
					</div>
					<h3>IT Support, Solutions & Website Maintenance</h3>
					<p>
                        Unlimited IT Support for clients. At Digiweb Developers, helping your business and seeing you succeed is our concern. We provide IT support for both our potential and prospective clients.</p>
				</div>
			</article>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			{{-- <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-dial"></i>
					</div>
					<h3>Graphic Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-target3"></i>
					</div>
					<h3>Apps Development</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="service-block text-center kill-margin-bottom">
					<div class="service-icon text-center">
						<i class="tf-lifesaver"></i>
					</div>
					<h3>Networking</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</article> --}}
			<!-- End Single Service Item -->

		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->




<!-- Start Portfolio Section
		=========================================== -->

		{{-- <section class="portfolio section" id="portfolio">
			<div class="container">
				<div class="row " >
					<div class="col-lg-12">

						<!-- section title -->
						<div class="title text-center">
							<h2>Our <span class="color">Works</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
				<div class="row">
						<div class="col-md-12">
							<div class="portfolio-filter">
								<button  type="button" data-filter="all">All</button>
								<button type="button" data-filter=".photography">Photography</button>
								<button type="button" data-filter=".design">Design</button>
								<button type="button" data-filter=".development">Development</button>
							</div>
						</div>
					</div>
					<div class="row portfolio-items-wrapper">
						<div class="mix col-md-4 design">
							<div class="portfolio-block">
								<img class="img-responsive" src="images/portfolio/portfolio-1.jpg" alt="">
								<div class="caption">

									<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
										<i class="tf-ion-android-search"></i>
									</a>
									<h4><a href="">Tag Design</a></h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
								</div>
							</div>
						</div>
						<div class="mix col-md-4 design">
							<div class="portfolio-block">
									<img class="img-responsive" src="images/portfolio/portfolio-2.jpg" alt="">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-2.jpg" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href="">Sound system</a></h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
									</div>
								</div>
						</div>
						<div class="mix col-md-4 design development">
							<div class="portfolio-block">
									<img class="img-responsive" src="images/portfolio/portfolio-3.jpg" alt="">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-3.jpg" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href="">Clock Product</a></h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
									</div>
								</div>
						</div>
						<div class="mix col-md-4 photography development">
							<div class="portfolio-block">
									<img class="img-responsive" src="images/portfolio/portfolio-4.jpg" alt="">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-4.jpg" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href="">Bottol Label</a></h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
									</div>
								</div>
						</div>
						<div class="mix col-md-4 design">
							<div class="portfolio-block">
									<img class="img-responsive" src="images/portfolio/portfolio-5.jpg" alt="">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-5.jpg" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href="">Shopping Bag</a></h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
									</div>
								</div>
						</div>
						<div class="mix col-md-4 photography" >
							<div class="portfolio-block">
									<img class="img-responsive" src="images/portfolio/portfolio-6.jpg" alt="">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-6.jpg" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href="">Tag Design</a></h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
									</div>
								</div>
						</div>
						<div class="mix col-md-4 design">
							<div class="portfolio-block">
									<img class="img-responsive" src="images/portfolio/portfolio-7.jpg" alt="">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-7.jpg" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href="">Business Card</a></h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
									</div>
								</div>
						</div>
						<div class="mix col-md-4 design">
							<div class="portfolio-block">
									<img class="img-responsive" src="images/portfolio/portfolio-8.jpg" alt="">
									<div class="caption">
										<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-8.jpg" data-lightbox="image-1">
											<i class="tf-ion-android-search"></i>
										</a>
										<h4><a href="">Stationary Design</a></h4>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
									</div>
								</div>
						</div>
						<div class="mix col-md-4  photography development">
							<div class="portfolio-block">
								<img class="img-responsive" src="images/portfolio/portfolio-1.jpg" alt="">
								<div class="caption">
									<a class="search-icon image-popup" data-effect="mfp-with-zoom" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
										<i class="tf-ion-android-search"></i>
									</a>
									<h4><a href="">Tag Design</a></h4>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo!</p>
								</div>
							</div>
						</div>

					</div>



			</div>	<!-- end container -->
		</section>   <!-- End section --> --}}

<!--
Start Counter Section
==================================== -->

<section id="counter" class="parallax-section bg-1 section overly">
	<div class="container">
		<div class="row">

			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
				<div class="counters-item">
					<i class="tf-ion-android-happy"></i>
					<span data-speed="3000" data-to="320">320</span>
					<h3>Happy Clients</h3>
				</div>
			</div>
			<!-- end first count item -->

			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
				<div class="counters-item">
					<i class="tf-ion-archive"></i>
					<span data-speed="3000" data-to="565">565</span>
					<h3>Projects completed</h3>
				</div>
			</div>
			<!-- end second count item -->

			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
				<div class="counters-item">
					<i class="tf-ion-thumbsup"></i>
					<span data-speed="3000" data-to="95">95</span>
					<h3>Positive feedback</h3>

				</div>
			</div>
			<!-- end third count item -->

			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
				<div class="counters-item kill-margin-bottom">
					<i class="tf-ion-coffee"></i>
					<span data-speed="3000" data-to="2500">2500</span>
					<h3>Cups of Coffee</h3>
				</div>
			</div>
			<!-- end fourth count item -->

		</div> 		<!-- end row -->
	</div>   	<!-- end container -->
</section>   <!-- end section -->

<!--
Start Our Team
=========================================== -->

{{-- <section id="our-team" class="section">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
				<h2>Our <span class="color">Team</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/team-1.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Abul Mal Muhit</h4>
						<span>CEO/Founder</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->

               </div>
            </div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/team-2.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Frank Miller</h4>
						<span>Manager</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
				</div>
            </div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/team-3.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Michael Jonson</h4>
						<span>Web Developer</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
               </div>
            </div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
               <div class="team-member">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-responsive" src="images/team/team-4.jpg" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="list-inline">
								<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
								<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-meta">
						<h4>Mo. Kha. Alamgir</h4>
						<span>SEO Specialist</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->
					<!-- /about member -->
               </div>
            </div>
			<!-- end team member -->

		</div>  	<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section --> --}}




<!-- Start Testimonial
		=========================================== -->
{{--
<section id="testimonial" class="testimonial overly section bg-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- testimonial wrapper -->
				<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

					<!-- testimonial single -->
					<div class="item text-center">

						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->

						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Jonathon Andrew</h3>
								<span>Dec 26, 2018</span>
							</div>
							<div class="client-comment">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium minima ex, quia error, deserunt voluptatibus repellendus? Incidunt eligendi aliquam repellat molestias, vel sed optio rem odit quis ratione non consequuntur!</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->

					<!-- testimonial single -->
					<div class="item text-center">

						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/team/client-2.jpg" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->

						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Jonathon Andrew</h3>
								<span>Dec 26, 2018</span>
							</div>
							<div class="client-comment">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel reiciendis qui in laborum obcaecati expedita blanditiis animi placeat, nemo exercitationem porro. Consequuntur qui commodi minima molestiae, dolores reprehenderit nemo inventore.</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->

					<!-- testimonial single -->
					<div class="item text-center">

						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
						</div>
						<!-- /client photo -->

						<!-- client info -->
						<div class="client-info">
							<div class="client-meta">
								<h3>Jonathon Andrew</h3>
								<span>Dec 26, 2018</span>
							</div>
							<div class="client-comment">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolorem non delectus neque, voluptatem accusamus atque expedita doloribus minima iusto nemo, numquam eos quia maiores harum! Quaerat illum beatae necessitatibus!</p>
							</div>
						</div>
						<!-- /client info -->
					</div>
					<!-- /testimonial single -->

				</div>		<!-- end testimonial wrapper -->
			</div> 		<!-- end col lg 12 -->
		</div>	    <!-- End row -->
	</div>       <!-- End container -->
</section>    <!-- End Section --> --}}


<!--
Start Blog Section
=========================================== -->

{{-- <section id="blog" class="section">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="title text-center wow fadeInDown">
				<h2> Latest <span class="color">Posts</span></h2>
			<div class="border"></div>
			</div>
			<!-- /section title -->

			<div class="clearfix">

				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
					<div class="post-block">
						<div class="media-wrapper">
							<img src="images/blog/blog-post-1.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>

						<div class="content">
							<h3><a href="">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-transparent" href="single-post.html">Read more</a>
						</div>
					</div>
				</article>
				<!-- /single blog post -->

				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
					<div class="post-block">
						<div id="gallery-post" class="media-wrapper">
							<div class="item">
								<img src="images/blog/blog-post-2.jpg" alt="blog post" class="img-responsive">
							</div>
							<div class="item">
								<img src="images/blog/blog-post-3.jpg" alt="blog post" class="img-responsive">
							</div>
							<div class="item">
								<img src="images/blog/blog-post-1.jpg" alt="blog post | Meghna" class="img-responsive">
							</div>
						</div>

						<div class="content">
							<h3><a href="">Simple Slider Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-transparent" href="single-post.html">Read more</a>
						</div>
					</div>
				</article>
				<!-- end single blog post -->

				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
					<div class="post-block">
						<div class="media-wrapper">
							<img src="images/blog/blog-post-3.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>

						<div class="content">
							<h3><a href="">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-transparent" href="single-post.html">Read more</a>
						</div>
					</div>
				</article>
				<!-- end single blog post -->
			</div>

			<div class="all-post text-center">
				<a class="btn btn-main" href="#">View All Post</a>
			</div>

		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section --> --}}


<!-- Srart Contact Us
=========================================== -->
<section id="contact-us" class="contact-us section-bg">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>Get In <span class="color">Touch</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<!-- Contact Details -->
			<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
				<h3>Contact Details</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
				<div class="contact-details">
					<div class="con-info clearfix">
						<i class="tf-map-pin"></i>
						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
					</div>

					<div class="con-info clearfix">
						<i class="tf-ion-ios-telephone-outline"></i>
						<span>Phone: +880-31-000-000</span>
					</div>

					<div class="con-info clearfix">
						<i class="tf-ion-iphone"></i>
						<span>Fax: +880-31-000-000</span>
					</div>

					<div class="con-info clearfix">
						<i class="tf-ion-ios-email-outline"></i>
						<span>Email: hello@meghna.com</span>
					</div>
				</div>
			</div>
			<!-- / End Contact Details -->

			<!-- Contact Form -->
			<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
				<form id="contact-form" method="post" action="{{ url('/contactemailmessage') }}" role="form" enctype="multipart/form-data" >
					@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
@csrf
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>

					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
					</div>

					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>

					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="msg" id="message"></textarea>
					</div>

			 

					<div id="cf-submit">
						<button name="sendemail" type="submit" id="contact-submit" class="btn btn-transparent" >Send </button>
					</div>

				</form>
			</div>
			<!-- ./End Contact Form -->

		</div> <!-- end row -->
	</div> <!-- end container -->

	<!-- Google Map -->
	{{-- <div class="google-map">
		<div id="map-canvas"></div>
	</div> --}}
	<!-- /Google Map -->

</section> <!-- end section -->





@stop
