@extends('admin.layout')
@section('content')

<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Markdown -->
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
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Add Daily Tips
        </h3>

         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{url('addailytip')}}">
                <div class="row">
                    {!! csrf_field() !!}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        
                    </div>
              
                </div>
                
      
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                 <textarea class="wmd-input form-control textarea-md" name="description" id="wmd-input" placeholder = "Description"></textarea>
            </div>
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                 <textarea class="wmd-input form-control textarea-md" name="example_1" id="wmd-input" placeholder = "Example 1"></textarea>
            </div>
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                 <textarea class="wmd-input form-control textarea-md" name="example_2" id="wmd-input" placeholder = "Example 2"></textarea>
            </div>
            <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-6">
                                <input type="text" name="date" placeholder="Required Field" required class="form-control" id="date_input">
                            </div>
            </div>
            <!--<div id="wmd-preview" class="wmd-panel wmd-preview"></div>-->
       
    </div>
</div>
                    </div>

                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Submit</button>
                </div>
            </form>
        </div>

            </div>
        </div>


        @endsection