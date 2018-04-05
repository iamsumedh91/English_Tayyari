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
                               Edit Page
                            </h3>
                            <div class="example-box-wrapper">
                                @foreach($data as $values)
                                <?php $content= html_entity_decode($values->pagecontent);?>
                                <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{url('updatepagecontent', $values->id)}}">
                                    {!! csrf_field() !!}

                                <div class="form-group">
                                <label class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Required Field" value="{{$values->title}}" required class="form-control">
                                </div>
                                </div>

                               
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Metatitle</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="metatitle" placeholder="Required Field" value="{{$values->metatitle}}" required class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Keywords</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="keywords" placeholder="Required Field" value="{{$values->keyword}}" required class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="description" placeholder="Required Field" value="{{$values->description}}" required class="form-control">
                                    </div>
                                </div>

                                <textarea class="wysiwyg-editor" name="pagecontent">
                                    <?php echo $content ?>
                                </textarea>
                                 <div class="bg-default content-box text-center pad20A mrg25T">
                                    <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                            @endforeach
                            </div>
                        </div>
                        </div>


                        </div>
    
            </div>
</div>
@endsection