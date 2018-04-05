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
            Add Category
        </h3>

         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" action="{{url('/updatecategory/'.$data[0]->id)}}" method="POST" id="demo-form" data-parsley-validate="">
                {{csrf_field()}}
                
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-6">
                                <input type="text" name="category" placeholder="Required Field" required class="form-control" value = "{{ $data[0]->category }}">
                            </div>
                        </div>
                        
                    </div>
              
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub Category</label>
                            <div class="col-sm-6">
                                <input type="text" name="subcategory" class="form-control" value = "{{ $data[0]->subcategory }}">
                            </div>
                        </div>
                        
                    </div>
              
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-6">
                                <input type="text" name="type" placeholder="Required Field" required class="form-control" value = "{{ $data[0]->type }}">
                            </div>
                        </div>
                        
                    </div>
              
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