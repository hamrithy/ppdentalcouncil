@extends('admin.layout.master')

@section('content')
<form method="post" action="{{ URL::to('admin/content/edit/' . $post->id ) }}">
    <div class="editor">
        <div class="editor-wrap">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit Content</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $post->title }}">
                    </div>
                    <textarea class="textarea" placeholder="Place some text here" name="article_text" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {{ $post->article_text }}
                    </textarea>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary  btn-flat">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <aside class="pull-right" style="width: 30%">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Categories</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <select class="form-control" name="category">
                            <option>--Select--</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name  }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</form>

@stop