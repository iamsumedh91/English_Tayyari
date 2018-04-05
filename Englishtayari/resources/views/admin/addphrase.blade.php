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
            Add Daily Phrase
        </h3>

         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" action="dailyphrase" method="POST" id="demo-form" data-parsley-validate="">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub-Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="subtitle" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <input type="text" name="description" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>

                            <div class="form-group">
                    <label class="col-sm-3 control-label">Written</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Written" required>
                           <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Spoken</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Spoken" required>
                           <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Formal</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Formal" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Informal</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="Informal" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Meatadata</label>
                    <div class="col-sm-6">
                        <textarea name="metadata" class="form-control" required></textarea>
                    </div>
                </div>

                    </div>
              
                </div>
                
            <label class="col-sm-3 control-label">Description</label>
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                <textarea class="wmd-input form-control textarea-md" name="description"
                " id="wmd-input" required>

                </textarea>
            </div>
                
            <label class="col-sm-3 control-label">Example 1</label>
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                <textarea class="wmd-input form-control textarea-md" name="example_one"
                " id="wmd-input" required>

                </textarea>
            </div>
            <label class="col-sm-3 control-label">Example 2</label>
             <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                <textarea class="wmd-input form-control textarea-md" name="example_two"
                " id="wmd-input" required>

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
                    <button class="btn btn-lg btn-primary" type="submit" name="submit">Add Phrase</button>
                </div>
            </form>
        </div>

            </div>
        </div>


        @endsection