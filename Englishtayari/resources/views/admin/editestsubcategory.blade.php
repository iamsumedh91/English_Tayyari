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
            Edit Test Subcategory
        </h3>
        @foreach($data as $value)
         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{ URL('/test/updatesubcategory/'.$value->id )}}">
                
                 {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Parent Category</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="parentc">
                                    @foreach($categories as $values)
                                    <option value="{{$values->cname}}">{{$values->cname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub-Category</label>
                            <div class="col-sm-6">
                                <input type="text" name="cname" placeholder="Required Field" value="{{$value->subcname}}" required class="form-control">
                            </div>
                        </div>
                 
                <div class="form-group">
                    <label class="col-sm-3 control-label">Meatatitle</label>
                    <div class="col-sm-6">
                        <input type="text" name="metatitle" class="form-control" value="{{$value->metatitle}}"></input>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Keywords</label>
                    <div class="col-sm-6">
                        <textarea name="keywords" class="form-control">{{$value->keyword}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-6">
                        <textarea name="description" class="form-control">{{$value->description}}</textarea>
                    </div>
                </div>
                        
                    </div>
              
                </div>
       
    </div>
    @endforeach
</div>
                    </div>

                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Update</button>
                </div>
                
            </form>
        </div>

            </div>
        </div>


        @endsection