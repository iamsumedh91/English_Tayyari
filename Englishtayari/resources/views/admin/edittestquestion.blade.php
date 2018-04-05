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
                    Edit Test Question
                </h3>
                <div class="example-box-wrapper">
                    <ul class="list-group list-group-separator row list-group-icons">
                        <li class="col-md-3 active">
                            <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-red icon-bullhorn"></i>
                                Question
                            </a>
                        </li>
                        <li class="col-md-3 ">
                            <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon icon-dashboard"></i>
                                Options
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-4" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-green icon-dashboard"></i>
                                Correct Answer
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
                                <i class="glyph-icon font-primary icon-camera"></i>
                                Answer
                            </a>
                        </li>
                       
                    </ul>
                    <div class="tab-content">

                         <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{url('test/updatetestquestion/'.$data[0]->id)}}">
                                {!! csrf_field() !!}
                        <div class="tab-pane fade active in" id="tab-example-1">
                            
                                 <div class="wmd-panel">
                <label class="col-sm-3 control-label">Question</label>
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" name="question"
" id="wmd-input" required>
     {{$data[0]->question}}
</textarea>
            </div>



                        </div>
                        <div class="tab-pane fade" id="tab-example-2">
                             
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Option A</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$data[0]->optiona}}" name="option_a" placeholder="Required Field" required class="form-control" rows="5">
                                </input>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Option B</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$data[0]->optionb}}" name="option_b" placeholder="Required Field" required class="form-control">
                                </input>
                            </div>
                            </div>
                           <div class="form-group">
                            <label class="col-sm-3 control-label">Option C</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$data[0]->optionc}}" name="option_c" placeholder="Required Field" required class="form-control">
                                </input>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-3 control-label">Option D</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$data[0]->optiond}}" name="option_d" placeholder="Required Field" required class="form-control">
                                </input>
                            </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="tab-example-4">
                               
                              <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control round" name="correct_option" required="required">
                                      <option value="" selected>Correct Option</option>
                                      <option value="A">A</option>
                                      <option value="B">B</option>
                                      <option value="C">C</option>
                                      <option value="D">D</option>
                                    </select>
                                </div>
                              </div>

                        </div>

                        <div class="tab-pane fade" id="tab-example-3">
                           
                                 <label class="col-sm-3 control-label">Correct Answer</label>
                                <div class="example-box-wrapper">
                                    <textarea class="wysiwyg-editor" name="answer">
                                        {{$data[0]->answer}}
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

<!--
<script type="text/javascript">
    $('#category').on('change',function(e){

        console.log(e);

        var cat_id = e.target.value;

        $.get('/ajax-subcat?cat_id='+cat_id,function(data){

            $('#subcategory').empty();
            $.each(data,function(index,subcatObj){

                $('#subcategory').append('<option value="'+subcatObj.subcname+'">'+subcatObj.subcname+'</option>');
            });
            
        });

    });

</script>
-->



@endsection