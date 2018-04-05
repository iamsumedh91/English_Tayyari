@extends('admin.layout')
@section('content')
<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable-bootstrap.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable-tabletools.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/datatable/datatable-reorder.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/parsley/parsley.js')!!}"></script>
<script type="text/javascript" src="{!!url('assets/widgets/markdown/markdown.js')!!}"></script>

<script type="text/javascript">

    $(document).ready(function() {
        var table = $('#datatable-tabletools').DataTable();
        var tt = new $.fn.dataTable.TableTools( table );

        $( tt.fnContainer() ).insertBefore('#datatable-tabletools_wrapper div.dataTables_filter');

        $('.DTTT_container').addClass('btn-group');
        $('.DTTT_container a').addClass('btn btn-default btn-md');

        $('.dataTables_filter input').attr("placeholder", "Search...");

    } );

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



<script type="text/javascript">
    $(function () {
        $("textarea#wmd-input").pagedownBootstrap();
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
@if(session()->has('error'))
<div class="alert alert-danger">
                        <div class="bg-red alert-icon">
                            <i class="glyph-icon icon-times"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Success</h4>
                             {{ session()->get('error') }}
                        </div>
                    </div>
    
@endif

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Add Test Category
        </h3>

         <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" action="postcategory" method="POST" id="demo-form" data-parsley-validate="">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Category</label>
                            <div class="col-sm-6">
                                <input type="text" name="cname" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                 
                <div class="form-group">
                    <label class="col-sm-3 control-label">Metatitle</label>
                    <div class="col-sm-6">
                        <input type="text" name="metatitle" class="form-control"></input>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Keywords</label>
                    <div class="col-sm-6">
                        <textarea name="keywords" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-6">
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>

                    </div>
              
                </div>
       
        </div>
</div>
                    </div>

                    <div class="bg-default content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary" type="submit" name="submit">Add Category</button>
                </div>
            </form>


            



<div class="panel">
<div class="panel-body">
<h3 class="title-hero">
    View Test Categories
</h3>
<div class="example-box-wrapper">
<table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>S.No.</th>
    <th>Category</th>
    <th>Metatitle</th>
    <th>Keywords</th>
    <th>Description</th>
    <th>Created At</th>
    <th>Action</th>
</tr>
</thead>

<tfoot>
<tr>
    <th>S.No.</th>
    <th>Category</th>
    <th>Metatitle</th>
    <th>Keywords</th>
    <th>Description</th>
    <th>Created At</th>
    <th>Action</th>
</tr>
</tfoot>

<tbody>
    
     @foreach($data as $value)
     <?php $i=1; ?>
<tr>
    <td><?php echo ++$i ?> </td>
    <td>{{$value->cname}} </td>
    <td>{{$value->metatitle}} </td>
    <td>{{$value->keyword}} </td>
    <td>{{$value->description}} </td>
    <td>{{$value->created_at}}</td>
    <td><a href="{{ URL('test/editcategory/'.$value->id )}}"><button class="btn btn-info">Edit</button></a>
    <form class="delete" action="{{ URL('test/categories', $value->id) }}" method="POST" style="float:left;">
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