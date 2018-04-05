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
            Add Learning Sub Category
        </h3>

         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{url('postsubcategory')}}">
                <div class="row">
                    {!! csrf_field() !!}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select Category</label>
                            <div class="col-sm-6">

                                <select name="cname"  required class="form-control">
                                    @foreach($data as $values)
                                    <option name="{{$values->cname}}">{{$values->cname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub-Category Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="subcname" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Metatitle</label>
                            <div class="col-sm-6">
                                <textarea type="text" name="metatitle" placeholder="Required Field" required class="form-control">
                                    </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Keywords</label>
                            <div class="col-sm-6">
                                <textarea type="text" name="keywords" placeholder="Required Field" required class="form-control">
                                    </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea type="text" name="description" placeholder="Required Field" required class="form-control">
                                    </textarea>
                            </div>
                        </div>

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