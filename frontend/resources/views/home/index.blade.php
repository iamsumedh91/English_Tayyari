@extends('layout')

@section('content')


<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="{{URL::asset('assets/img/slides/slide1.jpg')}}" alt="" />
                <div class="flex-caption">
					<h6>We are the best for</h6>
                    <h3>English Tyari</h3> 
					<p>Boost your skills with English Tyari and get prepared for competitive exams in india.<br/>Go through test to enhance your skills.</p> 
					 <a href="#" class="btn btn-primary">Explore More</a>
                </div>
              </li>
              <li>
                <img src="{{URL::asset('assets/img/slides/slide2.jpg')}}" alt="" />
                <div class="flex-caption">
					<h6>We are the best for</h6>
                    <h3>English Tyari</h3> 
					<p>Boost your skills with English Tyari and get prepared for competitive exams in india.<br/>Go through test to enhance your skills.</p> 
					<a href="#" class="btn btn-primary">Explore More</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
	</section> 
	


	<section id="call-to-action-2">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-9">
					<p><strong>Daily Tips:</strong>@if ($data['tips']) {{ $data['tips'][0]->title }} @endif</p>
				</div>
				<div class="col-md-2 col-sm-3">
					<a href="{!!url('daily-tips')!!}" class="btn btn-primary">Know More</a>
				</div>
			</div>
		</div>
	</section>
	
	<section id="content">
	<div class="container">
	    	<div class="row">
				<div class="col-md-12">
					<div class="aligncenter"><h2 class="aligncenter">What We Provide You</h2></div>
					<div class="tittle-style"></div>
				</div>
			</div>
			
			<div class="row">
			<div class="skill-home"> 
				<div class="skill-home-solid clearfix"> 
					<div class="col-md-4 text-center">
						<span class="icons c1"><img src="{{URL::asset('assets/img/english-learning-icon.png')}}" alt="English Tyari" title="English Tyari"></span>
						<div class="learning-text">
						<h4>English Learning</h4> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
						<a href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 text-center"> 
						<span class="icons c2"><img src="{{URL::asset('assets/img/english-practice-icon.png')}}" alt="English Tyari" title="English Tyari"></span>
						<div class="learning-text">
						<h4>English Practice</h4> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
						<a href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 text-center"> 
						<span class="icons c3"><img src="{{URL::asset('assets/img/english-test-icon.png')}}" alt="English Tyari')}}" title="English Tyari"></span> 
						<div class="learning-text">
						<h4>English Tests</h4> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
						<a href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	</section>
	
	<section class="section-padding img-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Tabs -->
					<div id="tabs" class="tabs">
						<nav>
							<ul>
								<li><a href="#section-1"><span>Phrase Of the Day</span></a></li>
								<li><a href="#section-2"><span>Word Of the Day</span></a></li>
							</ul>
						</nav>
						<div class="content">
							<section id="section-1">
								<p>@if ($data['phrases']) {{ $data['phrases'][0]->title }} @endif</p>
								<a href="{!!url('dailyphrases')!!}" class="btn btn-primary align-right">View All</a>
							</section>
							<section id="section-2">
								<p>@if ($data['words']) {{ $data['words'][0]->title}} @endif</p>
								<a href="{!!url('dailywords')!!}" class="btn btn-primary align-right">View All</a>
							</section>
						</div><!-- /content -->
					</div><!-- /tabs -->
					<!-- Tabs -->
					
				</div>
			</div>
		</div>
	</section>






		<div class="about home-about">
		<div class="container">
	    	<div class="row">
				<div class="col-md-12">
					<div class="aligncenter"><h2 class="aligncenter">Online Test</h2></div>
					<div class="tittle-style"></div>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="col-xs-12">
		<div class="carousel slide" id="myCarousel">
				<div class="carousel-inner">
					<div class="item active">
							<ul class="thumbnails">
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
							</ul>
					  </div><!-- /Slide1 --> 
					<div class="item">
							<ul class="thumbnails">
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
							</ul>
					  </div><!-- /Slide2 --> 
					<div class="item">
							<ul class="thumbnails">
								<li class="col-sm-3">	
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
								<li class="col-sm-3">
									<div class="fff">
										<div class="thumbnail">
											<a href="#"><img src="img/360x240.jpg" alt=""></a>
										</div>
										<div class="caption">
											<h4>Test paper1</h4>
											<p>Click for more information</p>
											<a class="btn btn-mini" href="#">» Read More</a>
										</div>
									</div>
								</li>
							</ul>
					  </div><!-- /Slide3 --> 
				</div>
				
			   
			   <nav>
					<ul class="control-box pager">
						<li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-angle-left"></i></a></li>
						<li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</nav>
			   <!-- /.control-box -->   
									  
			</div><!-- /#myCarousel -->
				
		</div><!-- /.col-xs-12 -->   
	</div>
	<div class="blue-color home-section">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 class="tittle-white">Appear & Know After Every Test</h3>
					<h5 class="dark_bg"><i class="fa fa-check" aria-hidden="true"> </i>Where you Stand</h5>
					<h5 class="dark_bg"><i class="fa fa-check" aria-hidden="true"> </i>What Next to do Succeed</h5>	
					<div class="row">
						<div class="col-sm-3 test-blocks">
							<i class="test-info-blocks fa fa-file-text fa-5x"></i>
							<div class="test-blocks-in">
								<h3>5000+</h3>
								<p>Test and Quizzes</p>
							</div>
						</div>
						<div class="col-sm-3 test-blocks">
							<i class="test-info-blocks fa fa-book fa-5x"></i>
							<div class="test-blocks-in">
								<h3>10000+</h3>
								<p>Concepts</p>
							</div>
						</div>
						<div class="col-sm-3 test-blocks">
							<i class="test-info-blocks fa fa-group fa-5x"></i>
							<div class="test-blocks-in">
								<h3>1000+</h3>
								<p>Students</p>
							</div>
						</div>
						<div class="col-sm-3 test-blocks">
							<i class="test-info-blocks fa fa-bars fa-5x"></i>
							<div class="test-blocks-in">
								<h3>100%</h3>
								<p>Accurate results</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a class="btn btn-transparent" href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<img src="{{URL::asset('assets/img/computer.png')}}" alt="">
				</div>
			</div>
		</div>		
	</div>	

	<section id="content">
		<div class="container">
	    	<div class="row">
				<div class="col-md-12">
					<div class="aligncenter"><h2 class="aligncenter">Happy Clients</h2></div>
					<div class="tittle-style"></div>
				</div>
			</div>
		</div>
		<div class="container">
		@include('testimonials.testimonials')
        </div>
	</section>

	<div class="wrap">
		<div class="fleft">
			<div class="container_wrap">
				<div class="row">
					<div class="col-md-12" style="margin-top: 45px;">
						<h3 class="tittle-white">Request A call Back</h3>
						<p class="dark_bg">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error...</p>
						<p class="dark_bg"><i class="fa fa-clock-o fa-lg margin-left"> </i> 24X7 Open Support</p>
						<p class="dark_bg"><i class="fa fa-phone fa-lg margin-left"> </i> (+91) 000 000 0000 | (+91) 111 111 1111</p>	
						<p class="dark_bg"><i class="fa fa-envelope fa-lg margin-left"> </i> info@englishtyari.com</p>	
					</div>
				</div>
			</div>
		</div>
		
		<div class="fright">
			<div class="container_wrap">
				<div class="row">
					<div class="col-md-12">
						<form name="sentMessage" id="contactForm"  novalidate>
							<h3>Contact Us</h3>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name" />
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control" placeholder="Mobile No." id="number" required data-validation-required-message="Please enter your mobile Number" />
									<p class="help-block"></p>
								</div>
							</div> 	
							<div class="control-group">
								<div class="controls">
									<input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
									<p class="help-block"></p>
								</div>
							</div> 	
							<div class="control-group">
								<div class="controls">
									<textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
									<p class="help-block"></p>
								</div>
							</div> 		 
							<div id="success"> </div> <!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary pull-right">Send</button><br />
						</form>
					</div>
				</div>
			</div>
		</div>    
	</div>
		
		</div>
	</section>
</div>	
@endsection





