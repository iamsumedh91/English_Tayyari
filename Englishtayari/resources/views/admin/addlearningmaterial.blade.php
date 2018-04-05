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
            Add Learning Questions
        </h3>

         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" action="{{url('learning/postlearningmaterial')}}" method="POST" id="demo-form" data-parsley-validate="">
                {{csrf_field()}}
                
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-6">
                              <select class="form-control" name="category" required>
                                 <option value="">Category</option>
                                 @foreach($categories as $category)
                                      <option value="{{ $category->category }}">{{ $category->category }}</option>
                                 @endforeach
                              </select>
                            </div>
                        </div>
                        
                    </div>
              
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Lesson Number</label>
                            <div class="col-sm-6">
                                <input type="number" name="lesson_number" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        
                    </div>
              
                </div>

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

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Topic</label>
                            <div class="col-sm-6">
                                <input type="text" name="topic" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        
                    </div>
              
                </div>

            <div class="wmd-panel">
                <label class="col-sm-3 control-label">Description</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" name="description"
" id="wmd-input">

</textarea>
            </div>

            <div class="wmd-panel">
                <label class="col-sm-3 control-label">Example 1</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" name="example_1"
" id="wmd-input">

</textarea>
            </div>

            <div class="wmd-panel">
                <label class="col-sm-3 control-label">Example 2</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" name="example_2"
" id="wmd-input">

</textarea>
            </div>

            <div class="wmd-panel">
                <label class="col-sm-3 control-label">Use In Sentence</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" name="use_in_sentence"
" id="wmd-input">

</textarea>
            </div>
           <!-- <div id="wmd-preview"  class="wmd-panel wmd-preview" readonly></div>-->
       
    </div>
</div>
                    </div>

                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary" type="submit" name="submit">Add Material</button>
                </div>
            </form>
        </div>

            </div>
        </div>


        @endsection