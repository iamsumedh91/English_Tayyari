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
@if(session()->has('message'))
<div class="alert alert-success">
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Success</h4>
                             {{ session()->get('message') }}
                        </div>
                    </div>
    
@endif
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Add Daily Words
        </h3>

         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" action="addword" method="POST" id="demo-form" data-parsley-validate="">
                {{csrf_field()}}
                <div class="row">
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
                 <label class="col-sm-3 control-label">Description</label>
                 <textarea class="wmd-input form-control textarea-md" name="description"
" id="wmd-input" placeholder="Description">

</textarea>
            </div>
           
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                 <label class="col-sm-3 control-label">Description Hindi</label>
                 <textarea class="wmd-input form-control textarea-md" name="description_hindi"
" id="wmd-input" placeholder="Description Hindi">

</textarea>
            </div>

            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                 <label class="col-sm-3 control-label">Example English</label>
                 <textarea class="wmd-input form-control textarea-md" name="example_english"
" id="wmd-input" placeholder="Example English">

</textarea>
            </div>

            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                 <label class="col-sm-3 control-label">Example Hindi</label>
                 <textarea class="wmd-input form-control textarea-md" name="example_hindi"
" id="wmd-input" placeholder="Example Hindi">

</textarea>
            </div>

            <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-6">
                                <input type="text" name="date" placeholder="Required Field" required class="form-control" id="date_input">
                            </div>
            </div>
           <!-- <div id="wmd-preview"  class="wmd-panel wmd-preview" readonly></div>-->
       
    </div>
</div>
                    </div>

                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary" type="submit" name="submit">Add Word</button>
                </div>
            </form>
        </div>

            </div>
        </div>


        @endsection