@extends('_layouts.app')
@section('content')

    <div class="container">

        <div class="row"​​​ style="margin-top:-1.9%;">
            <div class="col-lg-12" style="margin-top:1.5%;">
                <h4 style="border-left:5px solid #5762a5; text-indent: 10px;">អនុក្រឹត្យស្តីពីក្រមសិលធម៍ទន្តពេទ្យ</h4>
                <hr style="max-width:100%;">
            </div>
            <div class="col-lg-12" style="height:500px;">
                <iframe src="pdf/Binder3.pdf" style="width:100%; height:100%;" frameborder="0"></iframe>
            </div>
            <a href="{{asset('about')}}">
                <button  type="button" class="btn btn-info"  style="margin: 10px; margin-left: 45%">
                    ត្រឡប់ក្រោយ
                </button>
            </a>
        </div>
    </div>
    <!-- /.row -->
    </div>
@stop