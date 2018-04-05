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
            Edit Daily Phrase
        </h3>
@foreach($data as $value)
         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" action="{{ URL('/updatephrase/'.$value->id )}}" method="POST" id="demo-form" data-parsley-validate="">
                
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" placeholder="Required Field" value="{{$value->title}}" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sub-Title</label>
                            <div class="col-sm-6">
                                <input type="text" name="subtitle" placeholder="Required Field" value="{{$value->subtitle}}" required class="form-control">
                            </div>
                        </div>
                        
                            <div class="form-group">
                    <label class="col-sm-3 control-label">Written</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="written" required>
                            <option value="{{$value->written}}">{{$value->written}}</option>
                           <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Spoken</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="spoken" required>
                            <option value="{{$value->spoken}}">{{$value->spoken}}</option>
                           <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Formal</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="formal" required>
                            <option value="{{$value->formal}}">{{$value->formal}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Informal</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="informal" required>
                            <option value="{{$value->title}}">{{$value->informal}}</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Meatadata</label>
                    <div class="col-sm-6">
                        <textarea name="metadata" class="form-control" required>{{$value->metadata}}</textarea>
                    </div>
                </div>

                    </div>
              
                </div>

            <label class="col-sm-3 control-label">Description</label>
             <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                <textarea class="wmd-input form-control textarea-md" name="description"
                " id="wmd-input" required>
                    {{$value->description}}
                </textarea>
            </div>
                
            <label class="col-sm-3 control-label">Example 1</label>
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                <textarea class="wmd-input form-control textarea-md" name="first_example"
                " id="wmd-input" required>
                    {{$value->first_example}}
                </textarea>
            </div>
            <label class="col-sm-3 control-label">Example 2</label>
             <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                <textarea class="wmd-input form-control textarea-md" name="second_example"
                " id="wmd-input" required>
                    {{$value->second_example}}
                </textarea>
            </div>

            <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-6">
                                <input type="text" name="date" placeholder="Required Field" value="{{$value->date}}" required class="form-control" id="date_input">
                            </div>
            </div>
           <!-- <div id="wmd-preview"  class="wmd-panel wmd-preview" readonly></div>-->
       
    </div>
</div>
                    </div>
@endforeach
                <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary" type="submit">Update Word</button>
                </div>
            </form>
        </div>

            </div>
        </div>


        @endsection