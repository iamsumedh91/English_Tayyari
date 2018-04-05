@extends('admin.layout')
@section('content')

<div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">

                        <script type="text/javascript" src="{{URL('assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>
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
                        @foreach($data as $values)
                            <div class="content-box">
                                <h3 class="content-box-header bg-primary">
                                    {{$values->title}}
                                </h3>
                                <div class="content-box-wrapper">
                                    <?php echo html_entity_decode($values->content); ?>
                                </div>
                              <a href="{{ URL('editprivacycontent', $values->id) }}"> <button class="btn btn-blue-alt">Edit</button></a>
                            </div>
                        @endforeach
                    </div>

            </div>
</div>


@endsection