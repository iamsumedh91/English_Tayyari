<!DOCTYPE html> 
<html lang="en">


<head>

    <style>
       
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">

<title> English Tayari Admin</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">



<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/images/icons/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/images/icons/apple-touch-icon-114-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/images/icons/apple-touch-icon-72-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/icons/apple-touch-icon-57-precomposed.png') }}">
<link rel="shortcut icon" href="{{ URL::asset('assets/images/icons/favicon.png') }}">


<link href="{{ URL::asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/animate.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/backgrounds.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/boilerplate.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/grid.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/page-transitions.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/spacing.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/typography.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/utils.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/helpers/colors.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/badges.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/buttons.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/content-box.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/dashboard-box.css') }}" rel="stylesheet" type="text/css" >



<link href="{{ URL::asset('assets/elements/forms.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/images.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/info-box.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/invoice.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/loading-indicators.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/menus.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/panel-box.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/response-messages.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/responsive-tables.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/ribbon.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/social-box.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/tables.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/tile-box.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('assets/elements/timeline.css') }}" rel="stylesheet" type="text/css" >





<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/icons/fontawesome/fontawesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/icons/linecons/linecons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/icons/spinnericon/spinnericon.css') }}">




<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/accordion-ui/accordion.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/calendar/calendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/carousel/carousel.css')}}">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/charts/justgage/justgage.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/charts/morris/morris.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/charts/piegage/piegage.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/charts/xcharts/xcharts.css')}}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/chosen/chosen.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/colorpicker/colorpicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/datatable/datatable.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/datepicker/datepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/datepicker-ui/datepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/dialog/dialog.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/dropdown/dropdown.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/dropzone/dropzone.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/file-input/fileinput.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/input-switch/inputswitch.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/input-switch/inputswitch-alt.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/ionrangeslider/ionrangeslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/jcrop/jcrop.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/jgrowl-notifications/jgrowl.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/loading-bar/loadingbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/maps/vector-maps/vectormaps.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/markdown/markdown.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/modal/modal.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/multi-select/multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/multi-upload/fileupload.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/nestable/nestable.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/noty-notifications/noty.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/popover/popover.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/pretty-photo/prettyphoto.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/progressbar/progressbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/range-slider/rangeslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/slidebars/slidebars.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/slider-ui/slider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/tabs-ui/tabs.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/theme-switcher/themeswitcher.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/timepicker/timepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/tocify/tocify.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/tooltip/tooltip.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/touchspin/touchspin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/uniform/uniform.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/wizard/wizard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/widgets/xeditable/xeditable.css') }}">


<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/chat.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/files-box.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/login-box.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/notification-box.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/progress-box.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/todo.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/user-profile.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/snippets/mobile-navigation.css') }}">


<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/applications/mailbox.css') }}">



<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/themes/admin/layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/themes/admin/color-schemes/default.css') }}">


<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/themes/components/default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/themes/components/border-radius.css') }}">



<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/helpers/responsive-elements.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/helpers/admin-responsive.css') }}">


    <script type="text/javascript" src="{{ URL::asset('assets/js-core/jquery-core.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js-core/jquery-ui-core.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js-core/jquery-ui-widget.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js-core/jquery-ui-mouse.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js-core/jquery-ui-position.js') }}"></script>
    <!--<script type="text/javascript" src={{ URL::asset('assets/js-core/transition.js') }}"></script>-->
    <script type="text/javascript" src="{{ URL::asset('assets/js-core/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js-core/jquery-cookie.js') }}"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>
    <script type="text/javascript">
            $( function() {
                $( "#date_input" ).datepicker({
                 dateFormat: 'yy-mm-dd',
                 changeMonth: true,
                 changeYear: true,
                 yearRange: "1936:2018"
                });
            });
        </script>
    



</head>


    <body>
    <div id="sb-site">
     @if(Auth::guard('admin')->check())
        @include('admin.header.header')
        @include('admin.sidebar.sidebar')
        @yield('content')

      @else
      
      @yield('content')

      @endif  

    </div>

   <script type="text/javascript" src="{{ URL::asset('assets/bootstrap/js/bootstrap.js') }}"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src={{ URL::asset('assets/widgets/dropdown/dropdown.js') }}"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src={{ URL::asset('assets/widgets/tooltip/tooltip.js') }}"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src={{ URL::asset('assets/widgets/popover/popover.js') }}"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/progressbar/progressbar.js') }}"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src={{ URL::asset('assets/widgets/button/button.js') }}"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src={{ URL::asset('assets/widgets/collapse/collapse.js') }}"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/superclick/superclick.js') }}"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/input-switch/inputswitch-alt.js') }}"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/slimscroll/slimscroll.js') }}"></script>

<!-- Slidebars -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/slidebars/slidebars.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/widgets/slidebars/slidebars-demo.js') }}"></script>

<!-- PieGage -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/charts/piegage/piegage.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/widgets/charts/piegage/piegage-demo.js') }}"></script>

<!-- Screenfull -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/screenfull/screenfull.js') }}"></script>

<!-- Content box -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/content-box/contentbox.js') }}"></script>

<!-- Overlay -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/overlay/overlay.js') }}"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="{{ URL::asset('assets/js-init/widgets-init.js') }}"></script>

<!-- Theme layout -->

<script type="text/javascript" src="{{ URL::asset('assets/themes/admin/layout.js') }}"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="{{ URL::asset('assets/widgets/theme-switcher/themeswitcher.js') }}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</div>
</body>
</html>