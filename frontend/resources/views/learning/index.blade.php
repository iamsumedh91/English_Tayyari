@extends('layout')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Learn English Online</h2>
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
					<li><a href="{!!url('daily-tips')!!}">Daily Tips</a></li>
					<li><a href="#">Prepare For Exam</a></li>
					<li class="active"><a href="#">Learn English</a></li>
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
				<h3>Learn English Online<hr/></h3>
                                                @foreach($data as $category->category)
						<div class="col-md-6">
							<a href = "{!!url('/english-for-learning/'.$category->category)!!}">
                                                        <div class="ssc-exam-block">
							<h3>{{ $category->category }}</h3>
							</div>
							<h4 class="exam-text">Learn English {{ $category->category }}</h4>
                                                        </a>
						</div>
                                                @endforeach
				</div>
			</div>
		</div>
		</section>
	</section>

@endsection