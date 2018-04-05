@extends('admin.layout')
@section('content')
<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    

<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable-bootstrap.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable-tabletools.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable-reorder.js')!!}"></script>

<script type="text/javascript">

    /* Datatables export */

    $(document).ready(function() {
        var table = $('#datatable-tabletools').DataTable();
        var tt = new $.fn.dataTable.TableTools( table );

        $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

    /* Datatables reorder */

    $(document).ready(function() {
        $('#datatable-reorder').DataTable( {
            dom: 'Rlfrtip'
        });

        $('#datatable-reorder_length').hide();
        $('#datatable-reorder_filter').hide();

    });

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
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
    View Categories
</h3>
<div class="example-box-wrapper">
    <div style="overflow-x:auto;">
<table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>S.No.</th>
    <th>Category</th>
    <th>SubCategory</th>
    <th>Type</th>
    <th>Date</th>
    <th>Action</th>
</tr>
</thead>

<tfoot>
<tr>
    <th>S.No.</th>
    <th>Category</th>
    <th>SubCategory</th>
    <th>Type</th>
    <th>Date</th>
    <th>Action</th>
</tr>
</tfoot>

<tbody>
     <?php $i=0; ?>
     @foreach($categories as $value)
<tr>
    <td>{{++$i }} </td>
    <td>{{$value->category}} </td>
    <td>{{$value->subcategory}} </td>
    <td>{{$value->type}} </td>
    <td>{{$value->created_at}}</td>
    <td><a href="{{ URL('/editcategory/'.$value->id )}}"><button class="btn btn-info">Edit</button></a>
    <form class="delete" action="{{ URL('/deletecategory/', $value->id) }}" method="POST" style="float:left;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
    <!-- <span>
        <a href="{{URL('/viewphrase/'.$value->id )}}">
            <i class="glyph-icon tooltip-button demo-icon icon-remove" title="" data-original-title="Delete">
                
            </i>
        </a>
    </span>-->
    </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
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