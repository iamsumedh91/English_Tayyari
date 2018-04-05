@extends('layout')
@section('content')

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Online Practice</h2>
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
						<h3>{{ $subcategory }}<hr/></h3>
						<!-- <p>This is the verbal ability questions and answers section on "Articles" with explanation for various interview, competitive examination and entrance test. Solved examples with detailed answer description, explanation are given and it would be easy to understand.</p> -->
						<div class="scp-quizzes-main">
                                                        <?php $i = 1; ?>
                                                        @foreach($data as $value)
							<div class="scp-quizzes-data">
							  <h3><?php echo $i; ?>. {{ $value->question }} </h3><br/>
								<input type="radio" id="ques<?php echo $i; ?>" name="question<?php echo $i; ?>">
								   A. <label for="ques<?php echo $i; ?>" onclick = "checkanswer(this, 'A', '<?php echo $value->correct_option; ?>')">{{ $value->optiona }}</label>
								<input type="radio"  name="question<?php echo $i; ?>">
								  B. <label onclick = "checkanswer(this, 'B','<?php echo $value->correct_option; ?>')">{{ $value->optionb }}</label><br/>
								<input type="radio" name="question<?php echo $i; ?>">
								   C. <label onclick = "checkanswer(this, 'C','<?php echo $value->correct_option; ?>')">{{ $value->optionc }}</label> 
								<input type="radio" name="question<?php echo $i; ?>">
								 D. <label onclick = "checkanswer(this, 'D','<?php echo $value->correct_option; ?>')">{{ $value->optiond }}</label> 
								<a href="#ans<?php echo $i; ?>" class="btn btn-info" data-toggle="collapse">View Answer</a>
								  <div id="ans<?php echo $i; ?>" class="collapse">
									<h3><a>Answer</a></h3>
									<p id = "answer<?php echo $value->id; ?>">{{ $value->answer }}</p>
								  </div>
							</div>
                                                        <?php $i++ ?>
                                                        @endforeach
						</div>
                                                {!! $data->render() !!}
						
					</div>
				</div>
			</div>
		</div>
		</section>
    </section>

    @endsection