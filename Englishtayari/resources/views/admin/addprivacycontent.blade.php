@extends('admin.layout')
@section('content')
<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    
<script type="text/javascript" src="{{URL('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>
<script type="text/javascript">
    /* WYSIWYG editor */

    $(function() { "use strict";
        $('.wysiwyg-editor').summernote({
            height: 350
        });
    });
    $(function() { "use strict";
        $('.wysiwyg-editor-air').summernote({
            airMode: true
        });
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
                               Privacy Policy
                            </h3>
                            <div class="example-box-wrapper">
                                <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{url('postprivacycontent')}}">
                                    {!! csrf_field() !!}

                                     <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                                <textarea class="wysiwyg-editor" name="content">
                                    
                                </textarea>
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
   
<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>






@endsection