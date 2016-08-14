@extends('_layouts.app')
@section('content')
        <!-- /.container -->
<div class="container">

    <div class="row"​​​ style="margin-top:-1.9%;">
        @foreach($news_posts as $news)
        <div class="col-lg-6" style="margin-top:1.5%;">
            <img class="img-responsive " src="{{ $news->photoPrimary() != null ? $news->photoPrimary()->file_name : '' }}" alt=""  ALIGN=LEFT HSPACE=20 style="height:150px;" >
            <h2><a href="">{{ $news->title  }}</a></h2>
            <p>{{ $news->article_text  }}<a href="">អានបន្ត</a></p>
            <hr>
        </div>
        @endforeach
    </div><!-- close row--->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop