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


<div class="panel">
<div class="panel-body">
<h3 class="title-hero">
    View Daily Words
</h3>
<div class="example-box-wrapper">
<table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>S.No.</th>
    <th>Title</th>
    <th>Description</th>
    <th>Description Hindi</th>
    <th>Example English</th>
    <th>Example Hindi</th>
    <th>Date</th>
    <th>Action</th>
    
</tr>
</thead>

<tfoot>
<tr>
    <th>S.No.</th>
    <th>Title</th>
    <th>Description</th>
    <th>Description Hindi</th>
    <th>Example English</th>
    <th>Example Hindi</th>
    <th>Date</th>
    <th>Action</th>
</tr>
</tfoot>

<tbody>
    
     @foreach($data as $value)
<tr>
    <td>{{$value->id }} </td>
    <td>{{$value->title}} </td>
    <td>{{$value->description}} </td>
    <td>{{$value->description_hindi}} </td>
    <td>{{$value->example_english}} </td>
    <td>{{$value->example_hindi}} </td>
    <td>{{$value->date}}</td>
    <td><a href="{{ URL('/editword/'.$value->id )}}"><button class="btn btn-info">Edit</button></a>
    <form class="delete" action="{{ URL('viewords', $value->id) }}" method="POST" style="float:left;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
    </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>

<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>



@endsection