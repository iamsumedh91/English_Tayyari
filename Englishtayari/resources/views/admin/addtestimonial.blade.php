@extends('admin.layout')
@section('content')

<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Parsley -->

<script type="text/javascript" src="{!!url('assets/widgets/parsley/parsley.js')!!}"></script>


<script type="text/javascript" src="{!!url('assets/widgets/markdown/markdown.js')!!}"></script>

<script type="text/javascript">
    $(function () {
        $("textarea#wmd-input").pagedownBootstrap();
    });
</script>
@if(session()->has('success'))
<div class="alert alert-success">
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Success</h4>
                             {{ session()->get('success') }}
                        </div>
                    </div>
    
@endif
@if(session()->has('error'))
<div class="alert alert-danger">
                        <div class="bg-red alert-icon">
                            <i class="glyph-icon icon-times"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Success</h4>
                             {{ session()->get('error') }}
                        </div>
                    </div>
    
@endif
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
           Add Testimonial
        </h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{URL('addtesti')}}" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Client Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" name="client_name" required class="form-control">
                            </div>
                        </div>
                        
                      

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Client Email</label>
                            <div class="col-sm-6">
                                <input type="email" data-parsley-type="email" placeholder="Email address" name="client_email" required class="form-control">
                            </div>
                        </div>
						
						  <div class="form-group">
                            <label class="col-sm-3 control-label">Client URL</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="url" placeholder="URL address" name="client_url" required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                    <label class="col-sm-3 control-label">Client Image</label>
                    <div class="col-sm-6">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                     <input type="file" name="client_image" class="form-control" id="">
                        </div>
                    </div>
                </div>
                    </div>
					
						
                  
                </div>
				
				<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
           Client Message
        </h3>
        <div class="example-box-wrapper">
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" id="wmd-input" name="client_message">

</textarea>
            </div>
            <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
        </div>
    </div>
</div>

                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
                    </div>

                

            </div>
        </div>
    @endsection