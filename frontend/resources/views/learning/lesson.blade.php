
@extends('layout')

@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Lesson {{ $data[0]->lesson_number }} -  {{ $data[0]->title }}</h2>
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
					<h3>Lesson {{ $data[0]->lesson_number }} -  {{ $data[0]->title }}<hr/></h3>
					<h4>Use of "{{ $data[0]->topic }}"</h4>
					<p style="text-align:justify;">{{ $data[0]->description }}</p>
					<div class="row">
						<div class="col-md-6">
							<div class="dtips">
								<h4 class="dtips-title">Example 1</h4>
								<div class="dtips-content">
									<p><strong>Example 1:</strong> {{ $data[0]->example_1 }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="dtips">
								<h4 class="dtips-title">Example 2</h4>
								<div class="dtips-content">
									<p><strong>Example 2:</strong> {{ $data[0]->example_2 }}</p>
								</div>
							</div>
						</div>
					</div>
					<div class="dtips">
							<h4 class="dtipsp-title1">Use in Sentense:</h4>
							<div class="dtips-content">
								<p>{{ $data[0]->use_in_sentence }}</p>
							</div>
						</div>
				</div>
			</div>
		</div>
		</section>
	</section>

@endsection