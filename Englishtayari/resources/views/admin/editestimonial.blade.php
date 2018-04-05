@extends('admin.layout')
@section('content')

<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Parsley -->

<script type="text/javascript" src="{!!url('assets/widgets/parsley/parsley.js')!!}"></script>


<script type="text/javascript" src="{!!url('assets/widgets/markdown/markdown.js')!!}"></script>

<script type="text/javascript">
    $(function () {
        $("textarea#wmd-input").pagedownBootstrap();
    });
</script>

        <link rel="stylesheet" type="text/css" href="{{URL('assets/frontend-elements/blog.css')}}">

<!-- Owlcarousel -->
<link rel="stylesheet" type="text/css" href="{{URL('assets/widgets/owlcarousel/owlcarousel.css')}}">
<script type="text/javascript" src="{{URL('assets/widgets/owlcarousel/owlcarousel.js')}}"></script>
<script type="text/javascript" src="{{URL('assets/widgets/owlcarousel/owlcarousel-demo.js')}}"></script>

<!-- Lazyload -->

<script type="text/javascript" src="{{URL('assets/widgets/lazyload/lazyload.js')}}"></script>
<script type="text/javascript">
    /* Lazyload */

    $(function() {
        $("img.lazy").lazyload({
            effect: "fadeIn",
            threshold: 100
        });
    });
</script>

<!-- PrettyPhoto modals -->

<link rel="stylesheet" type="text/css" href="{{URL('assets/widgets/pretty-photo/prettyphoto.css')}}">
<script type="text/javascript" src="{{URL('assets/widgets/pretty-photo/prettyphoto.js')}}"></script>
<script type="text/javascript">
    /* PrettyPhoto */

    $(document).ready(function() {
        $(".prettyphoto").prettyPhoto();
    });
</script>
@if(session()->has('info'))
<div class="alert alert-success">
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Success</h4>
                             {{ session()->get('info') }}
                        </div>
                    </div>
    
@endif
<div class="row">
    <div class="col-md-9">
        @foreach($data as $values)
        <?php
        $datetime=explode(" ",$values->created_at);
        
        ?>
       <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" method="POST" action="{{ URL('/updatetesti/'.$values->id )}}" enctype="multipart/form-data">
         {!!csrf_field()!!}
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="{{ URL('/uploads/'.$values->client_image )}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="{{ URL('/uploads/'.$values->client_image )}}" alt="">
                </a>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Client Image</label>
                    <div class="col-sm-6">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                     <input type="file" name="client_image" class="form-control" id="" value="{{$values->client_image}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-content-wrapper col-md-8">
                
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Client Name</label>
                    <div class="col-sm-6">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                     <input type="name" name="client_name" value="{{$values->client_name}}" class="form-control" id="">
                        </div>
                    </div>
                </div>
                    
                
                <div class="post-meta">
                     <div class="form-group">
                    <label class="col-sm-3 control-label">Client Email</label>
                    <div class="col-sm-6">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                     <input type="name" name="client_email" value="{{$values->client_email}}" class="form-control" id="">
                        </div>
                    </div>
                </div>
                   
                </div>

                  <div class="post-meta">
                     <div class="form-group">
                    <label class="col-sm-3 control-label">Client URL</label>
                    <div class="col-sm-6">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                     <input type="name" name="client_url" value="{{$values->client_url}}" class="form-control" id="">
                        </div>
                    </div>
                </div>
                   
                </div>

               <div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
           Client Message
        </h3>
        <div class="example-box-wrapper">
            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
<textarea class="wmd-input form-control textarea-md" id="wmd-input" name="client_message">
{{$values->client_message}}
</textarea>
            </div>
            <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
        </div>
    </div>
</div>

                <button type="submit" class="btn btn-blue-alt" title="Edit" >Update</button>

            </div>
        </div>
    </form>
     @endforeach



                    </div>

                

            </div>
        </div>
    @endsection