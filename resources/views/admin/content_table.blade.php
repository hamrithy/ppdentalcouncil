@extends('admin.layout.master')


@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Content</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Created Date</th>
                    <th>Published</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->categoryName() }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->published  }}</td>
                        <td class="td-action">
                            <button type="button" class="btn btn-block btn-primary btn-flat btn-edit" data-id="{{ $post->id  }}"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-block btn-danger btn-flat btn-delete"  data-id="{{ $post->id  }}"><i class="fa fa-eraser" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop


@section('script')
$('.btn-edit').on('click', function(){

    window.location.href = '/admin/content/edit/' + $(this).data('id');
});

$('.btn-delete').on('click', function(){

    window.location.href = '/admin/content/delete/' + $(this).data('id');
});
@stop