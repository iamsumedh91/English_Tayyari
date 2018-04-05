@extends('layout')
@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Question Practice</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-3">
					<h3>Quick Links</h3>
					<ul class="side_quick_links">
					<li class="active"><a href="#">Daily Tips</a></li>
					<li><a href="#">Prepare For Exam</a></li>
					<li><a href="#">Learn English</a></li>
					<li><a href="#">English Practice</a></li>
					<li><a href="#">English Tests</a></li>
					<li><a href="#">Test and Quiz</a></li>
					</ul>
					<h3>Our Brochure</h3>
					<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
					<ul class="brochure_quick_links">
					<li class="brochure_pdf">Download PDF Brochure</li>
					<li class="brochure_ppt">Download PPT Brochure</li>
					<li class="brochure_doc">Download DOC Brochure</li>
					</ul>
				</div>
				<div class="col-md-9">
				<h3>English Tests<hr/></h3>
				<p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<div class="row">
                                             @foreach($data as $value)
						<div class="col-md-4">
							<a href="{!!url('/test/'.$value->category)!!}">
                                                             <div class="practice-block">
							     <h4><i class="fa fa-university"></i><br/>{{ $value->category }}<br/>Paper</h4>
							     </div>
                                                        </a>
						</div>
                                              @endforeach
					</div>
					<!-- <div class="row">
						<div class="col-md-12">
							<div class="practice-test-block">
								<h4>Start Your Practice Now!</h4>
								<p>PRACTICE, ANALYZE AND IMPROVE!</p>
								<a class="btn btn-mini" href="#">» Read More</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		</section>
	</section>

@endsection