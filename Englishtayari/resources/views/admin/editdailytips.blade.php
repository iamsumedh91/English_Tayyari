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
@if(session()->has('info'))
<div class="alert alert-notice">
                        <div class="bg-blue alert-icon">
                            <i class="glyph-icon icon-info"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Information</h4>
                             {{ session()->get('info') }}
                        </div>
                    </div>
    
@endif
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Edit Daily Tips
        </h3>
        @foreach($data as $value)
         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{ URL('/updatetip/'.$value->id )}}">
                
                 {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field"  name="title" value="{{$value->title}}" required class="form-control">
                            </div>
                        </div>
                        
                    </div>
              
                </div>
                
      
            <div class="wmd-panel">
                <label class="col-sm-3 control-label">Description</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" id="wmd-input" name="description" required>
{{$value->description}}
</textarea>
            </div>

            <div class="wmd-panel">
                <label class="col-sm-3 control-label">Example 1</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" id="wmd-input" name="example_1" required>
{{$value->example_1}}
</textarea>
            </div>

            <div class="wmd-panel">
                <label class="col-sm-3 control-label">Example 2</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" id="wmd-input" name="example_2" required>
{{$value->example_2}}
</textarea>
            </div>

            <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-6">
                                <input type="text" name="date" value="{{$value->date}}" placeholder="Required Field" required class="form-control" id="date_input">
                            </div>
            </div>
          <!--  <div id="wmd-preview" class="wmd-panel wmd-preview"></div>-->
       
    
    
                    

                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
       @endforeach
            </div>
        </div>
       </div>
      </div>
</div>
        @endsection