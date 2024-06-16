@extends("layouts.layout")
@section("title","About")
@section("content")
	<div class="parallax" data-background="images/headOffice.jpeg" data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
		<div class="parallax-content">

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<!-- Main Search Container -->
						<div class="main-search-container">
							<h2>About Us</h2>


						</div>
						<!-- Main Search Container / End -->

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Titlebar
================================================== -->
	<div id="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <?php
                     //if(isset($$contents[0])){

				    //$contents[0]->about_us;

                     //}
                    ?>

                    <p>
                        Established on April 1st, 1973, under the Housing Act cap 226, the National Housing Corporation boasts over five decades of dedicated service. As a government-owned entity, our headquarters are conveniently located on Country Road in St. Michael, with multiple depots spread across urban and rural Barbados to better serve our tenants. <br><br>

Our mission encompasses a range of housing solutions, including unit and lot rentals, house and land sales, and the provision of loans through the General Workers Loan Scheme. Additionally, we play a crucial role in responding to national emergencies, offering assistance during events like relocation programs, house fires, and hurricanes by providing new housing and conducting necessary house repairs. <br> <br>

Throughout our long history, the National Housing Corporation has remained steadfast in its commitment to providing affordable housing solutions for low- and middle-income Barbadians. To achieve this goal, we focus on optimizing available land resources, offering more efficiently sized lots, and constructing high-rise apartments, quadruple, and duplex units to diversify housing options, reducing the predominance of single units.
                    </p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Main Search Input -->
				<div class="main-search-input margin-bottom-40">
					<h3>Minister, of Housing, Lands and<br> Maintenance</h3>
				</div>
			</div>
			<div class="col-md-12">
				<!-- Main Search Input -->
				<div class="main-search-input margin-bottom-40">

					<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="agent">

							<div class="agent-avatar">
								<a href="#">
									<img src="images/board.jpg" alt="">
									{{--<span class="view-profile-btn">View Profile</span>--}}
								</a>
							</div>

							<div class="agent-content">
								<div class="agent-name">
									<h4><a href="#">Hon. Dwight G. Sutherland, M.P.</a></h4>
									{{--<span>Board of Directors</span>--}}
								</div>

								<ul class="agent-contact-details">
									<li><i class="sl sl-icon-call-in"></i>1 (246) 535-5001</li>
									<li><i class="fa fa-envelope-o "></i><a href="#">tom@example.com</a></li>
								</ul>

								{{--<ul class="social-icons">--}}
									{{--<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>--}}
									{{--<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>--}}
									{{--<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>--}}
									{{--<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>--}}
								{{--</ul>--}}
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Content
================================================== -->
	<!--div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="main-search-input margin-bottom-40">
					<h3>Our Board Of Directors</h3>
				</div>
			</div>



			<div class="col-md-12">
				<div class="row">


					<div class="About Us-grid-container">




						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-01.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr Morton Holder</a></h4>
										<span>Chairman</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">tom@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-02.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr. Jefferson Lashley</a></h4>
										<span>Deputy Chairman</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">jennie@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-03.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr. Ryan Moseley  </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">david@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-04.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr. Cedric Alleyne  </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">charles@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>



					</div>


				</div>
				<div class="row">


					<div class="About Us-grid-container">


						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-01.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr. Achal Moorjani   </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">tom@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-02.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mrs. Alloysius Blackett </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">jennie@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-03.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr. Dwayne Grazette  </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">david@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-04.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr. Joseph Laflouf   </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">charles@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>



					</div>


				</div>
				<div class="row">

					<div class="About Us-grid-container">


						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-01.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Mr. Mark Owen   </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">tom@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-01.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Representative   </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">tom@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>

						<div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="agent">

								<div class="agent-avatar">
									<a href="#">
										<img src="images/agent-01.jpg" alt="">
										{{--<span class="view-profile-btn">View Profile</span>--}}
									</a>
								</div>

								<div class="agent-content">
									<div class="agent-name">
										<h4><a href="#">Permanent Secretary   </a></h4>
										<span>Member</span>
									</div>

									<ul class="agent-contact-details">
										<li><i class="sl sl-icon-call-in"></i>(123) 123-456</li>
										<li><i class="fa fa-envelope-o "></i><a href="#">tom@example.com</a></li>
									</ul>

									<ul class="social-icons">
										<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
										<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
										<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>







					</div>



				</div>

			</div>
		</div>

		{{--<div class="container">--}}
			{{--<div class="row">--}}
				{{--<div class="col-md-12">--}}

					{{--<h2>Sales Team Profile</h2>--}}

				{{--</div>--}}
				{{--<div class="col-md-12">--}}
					{{--<ul>--}}
						{{--<li>Sales are handled by the Customer Service Department which is headed by the Customer Service Manager who is assisted by 2 Senior Account Executives and 2 Junior Account Executive.</li>--}}
						{{--<li>The Corporation is in the process of establishing a call center with the Customer Care Department</li>--}}
					{{--</ul>--}}

				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	</div-->
@endsection
