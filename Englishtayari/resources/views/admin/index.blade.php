 @extends('admin.layout')
 @section('content')
 
 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Sparklines charts -->

<script type="text/javascript" src="{!!url('assets/widgets/charts/sparklines/sparklines.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/charts/sparklines/sparklines-demo.js')!!}"></script>

<!-- Flot charts -->

<script type="text/javascript" src="{!!url('assets/widgets/charts/flot/flot.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/charts/flot/flot-resize.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/charts/flot/flot-stack.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/charts/flot/flot-pie.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/charts/flot/flot-tooltip.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/charts/flot/flot-demo-1.js')!!}"></script>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <a href="{!!url('viewdailytips')!!}" title="Example tile shortcut" class="tile-box tile-box-alt btn-success">
                    <div class="tile-header">
                        Daily Tips
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10"><span>{{ $dailytips }}</span></div>
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10"><span>Last Added: {{ $lasttip->title }}</span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{!!url('viewphrase')!!}" title="Example tile shortcut" class="tile-box tile-box-alt btn-info">
                    <div class="tile-header">
                        Daily Phrases
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10"><span>{{ $dailyphrases }}</span></div>
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10"><span>Last Added: {{ $lastphrase->title }}</span></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{!!url('viewdailywords')!!}" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning">
                    <div class="tile-header">
                        Daily Words
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10"><span>{{ $dailywords }}</span></div>
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10"><span>Last Added: {{ $lastword->title }}</span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class = "row" style = "margin-top: 5%;">
    <div class="col-md-12">
        <div class="row mrg20B">
            <div class="col-md-4">
                <a href="{!!url('learning/viewlearningmaterial')!!}" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                    <div class="tile-header">
                        English Learning
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{!!url('practice/viewpracticequestions')!!}" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                    <div class="tile-header">
                        English Practice
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{!!url('test/viewtestquestions')!!}" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                    <div class="tile-header">
                        English Test
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
                    </div>

                

            </div>
        </div>
    </div>
    
    @endsection