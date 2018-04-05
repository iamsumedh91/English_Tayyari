<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>English Tyari</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
 
<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet"> 
<link href="{{ URL::asset('assets/css/flexslider.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
<style>
#myList1 li{ display:none;
}
#loadMore1 {
    color:#5DADE2;
    cursor:pointer;
}
#loadMore1:hover {
    color:black;
}
#showLess1 {
    color:#5DADE2;
    cursor:pointer;
    display:none;
}
#showLess1:hover {
    color:black;
}

#myList2 li{ display:none;
}
#loadMore2 {
    color:#5DADE2;
    cursor:pointer;
}
#loadMore2:hover {
    color:black;
}
#showLess2 {
    color:#5DADE2;
    cursor:pointer;
    display:none;
}
#showLess2:hover {
    color:black;
}
</style>
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<div id="wrapper" class="home-page">

		@include('header.header')
        @yield('content')
        @include('footer.footer')
	

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('assets/js/index.js') }}"></script>
<script src="{{ URL::asset('assets/js/carousel.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.fancybox-media.js') }}"></script>  
<script src="{{ URL::asset('assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ URL::asset('assets/js/animate.js') }}"></script>
<!-- Vendor Scripts -->
<script src="{{ URL::asset('assets/js/modernizr.custom.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/animate.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom.js') }}"></script> 
<script src="https://use.fontawesome.com/5a8a7bb461.js') }}"></script>
<script>
	new CBPFWTabs( document.getElementById( 'tabs' ) );
</script>
<script>
$(document).ready(function () {
    size_li1 = $("#myList1 li").size();
    x=3;
    $('#myList1 li:lt('+x+')').show();
    $('#loadMore1').click(function () {
        x= (x+5 <= size_li1) ? x+5 : size_li1;
        $('#myList1 li:lt('+x+')').show();
         $('#showLess1').show();
        if(x == size_li1){
            $('#loadMore1').hide();
        }
    });
    $('#showLess1').click(function () {
        x=(x-5<0) ? 3 : x-5;
        $('#myList1 li').not(':lt('+x+')').hide();
        $('#loadMore1').show();
         $('#showLess1').show();
        if(x == 3){
            $('#showLess1').hide();
        }
    });

    size_li2 = $("#myList2 li").size();
    x=3;
    $('#myList2 li:lt('+x+')').show();
    $('#loadMore2').click(function () {
        x= (x+5 <= size_li2) ? x+5 : size_li2;
        $('#myList2 li:lt('+x+')').show();
         $('#showLess2').show();
        if(x == size_li2){
            $('#loadMore2').hide();
        }
    });
    $('#showLess2').click(function () {
        x=(x-5<0) ? 3 : x-5;
        $('#myList2 li').not(':lt('+x+')').hide();
        $('#loadMore2').show();
         $('#showLess2').show();
        if(x == 3){
            $('#showLess2').hide();
        }
    });
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
    $('label').click(function() {
        $('label').removeClass('worngans');
        $(this).addClass('worngans');
    });
});
</script>

<script type="text/javascript">
var checkanswer = function(param, id, correct_option) {
    if(id == correct_option){
          param.classList.add('alert-success');
    }
    else{
          param.classList.add('alert-danger');
    }
};
</script>

</body>
</html>        