@extends('layout')
@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Word Of the Day</h2>
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
					<div class="about-text">
						<h3> Today's Word<hr/></h3>
                                                <div class="dtips">
                                                     <h4 class="dtipsp-title">@if ($data['record']) {{ date('jS F, Y', strtotime($data['record'][0]->date)) }} @endif</h4>
                                                </div>
						<h2 class="word_day">@if ($data['record']) {{ $data['record'][0]->title }} @endif</h2>
						<blockquote><p class="text-muted">Example</p>
						<p>@if ($data['record']) {{ $data['record'][0]->example_english }} @endif</p>
						</blockquote>
						<h3 class="word_day">@if ($data['record']) {{ $data['record'][0]->description_hindi }} @endif</h3>
						<blockquote><p class="text-muted">उदाहरण</p>
						<p> @if ($data['record']) {{ $data['record'][0]->example_hindi }} @endif</p>
						</blockquote>
						<div class="row">
							<div class="col-md-12 dtips-button">
							<a href="{!!url('dailywords/'.$data['previous'])!!}" class="btn btn-primary">Previous Day</a>
							<a href="{!!url('dailywords/today')!!}" class="btn btn-primary">Today</a>
							<a href="{!!url('dailywords/'.$data['next'])!!}" class="btn btn-primary">Next Day</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
    </section>
    @endsection