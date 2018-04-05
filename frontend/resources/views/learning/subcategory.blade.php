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
				<h3>Practice SubCategory<hr/></h3>
					<div class="row">
						<div class="col-md-6">
							<ul class="lesson_links" id="myList1">
                                                        @if($data)
                                                             @foreach($data as $lesson)
							          <li><a href="{!!url('english-for-learning/'.$category.'/'.$lesson->lesson_number)!!}">{{ $lesson->lesson_number }} - {{ $lesson->topic }}</a></li>
							     @endforeach
                                                        @endif
						</ul>
                                                <div id="loadMore1">Load more</div>
                                                <div id="showLess1">Show less</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
	</section>

@endsection