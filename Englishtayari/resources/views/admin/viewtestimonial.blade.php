@extends('admin.layout')
@section('content')
<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

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

<div class="row">
    <div class="col-md-9">
        @foreach($data as $values)
        <?php
        $datetime=explode(" ",$values->created_at);
        
        ?>
        <div class="blog-box row">
            <div class="post-image col-md-4">
                <a href="{{ URL('/uploads/'.$values->client_image )}}" class="prettyphoto" rel="prettyPhoto[pp_gal]" title="Blog post title">
                    <img class="img-responsive lazy img-rounded" src="#" data-original="{{ URL('/uploads/'.$values->client_image )}}" alt="">
                </a>
            </div>
            <div class="post-content-wrapper col-md-8">
                <a class="post-title" href="#" title="">
                    <h3>{{$values->client_name}}</h3>
                </a>
                <div class="post-meta">
                    <span>
                        <i class="glyph-icon icon-user"></i>
                        <a href="#" title="">{{$values->client_email}}</a>
                    </span>
                    <span>
                        <i class="glyph-icon icon-clock-o"></i>
                        {{$datetime[0]}}
                    </span>
                   
                </div>
                <div class="post-content">
                    <p>{{$values->client_message}}</p>
                </div>

                <a href="{{'/editestimonial/'.$values->id}}" ><button class="btn btn-info" style="float: left;">Edit</button></a>
                <form class="delete" action="{{ URL('viewphrase', $values->id) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
                </form>
            </div>
        </div>
     @endforeach
  
    
        
      <!--  <div class="text-center">
            <ul class="pagination pagination-lg">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>-->
    </div>
    
</div>

   
<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>






@endsection