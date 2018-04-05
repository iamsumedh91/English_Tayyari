@extends('admin.layout')
@section('content')

<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">

<script type="text/javascript" src="{!!url('assets/widgets/tabs-ui/tabs.js')!!}""></script>
<script type="text/javascript" src="{!!url('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/tabs/tabs.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/tabs/tabs-responsive.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/parsley/parsley.js')!!}"></script>
<script type="text/javascript">
    /* jQuery UI Tabs */

    $(function() { "use strict";
        $(".tabs").tabs();
    });

    $(function() { "use strict";
        $(".tabs-hover").tabs({
            event: "mouseover"
        });
    });
</script>

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

<script type="text/javascript">
    
    $(function() { "use strict";
        $('.nav-responsive').tabdrop();
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
                    Horizontal list tabs menu
                </h3>
                <div class="example-box-wrapper">
                    <ul class="list-group list-group-separator row list-group-icons">
                        <li class="col-md-3 active">
                            <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-red icon-bullhorn"></i>
                                Basic
                            </a>
                        </li>
                        <li class="col-md-3 ">
                            <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon icon-dashboard"></i>
                                SEO Description
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-primary icon-camera"></i>
                                Content
                            </a>
                        </li>
                       
                    </ul>
                    <div class="tab-content">

                         <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{url('postpagecontent')}}">
                                {!! csrf_field() !!}
                        <div class="tab-pane fade active in" id="tab-example-1">
                            
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Required Field" required class="form-control">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Metatitle</label>
                            <div class="col-sm-6">
                                <input type="text" name="metatitle" placeholder="Required Field" required class="form-control"/>
                              
                            </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="tab-example-2">
                             
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Keywords</label>
                            <div class="col-sm-6">
                                <textarea type="text" name="keywords" placeholder="Required Field" required class="form-control" rows="5">
                                </textarea>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea type="text" name="description" placeholder="Required Field" required class="form-control" rows="5">
                                </textarea>
                            </div>
                            </div>
                           

                        </div>
                        <div class="tab-pane fade" id="tab-example-3">
                           
                                 <label class="col-sm-3 control-label">Page Content</label>
                                <div class="example-box-wrapper">
                                    <textarea class="wysiwyg-editor" name="pagecontent">
                                        
                                    </textarea>
                                </div>

                        </div>
                        <div class="bg-default content-box text-center pad20A mrg25T">
                        <button class="btn btn-lg btn-primary">Submit</button>
                        </div>
                     </form>  
                    </div>
                </div>
            </div>
        </div>


                    </div>

            </div>
</div>


@endsection