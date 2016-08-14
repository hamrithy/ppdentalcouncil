@extends('_layouts.app')
        @section('content')
<!-- /.container -->
<div class="container">

    <div class="row"​​​ style="margin-top:-1.9%;">
        <div class="col-lg-12" style="margin-top:1.5%;">
            <h4 style="border-left:5px solid #5762a5; text-indent: 10px;">ព្រះរាជក្រឹក្យ​ និង ព្រះរាជក្រម</h4>
            <hr style="max-width:100%;">
        </div>

        <div class="col-lg-12" style="height:426px;">
            <ul>
                <h4><li><a href="{{asset('legal')}}">ព្រះរាជក្រម</a></li></h4>
                <h4><li><a href="{{asset('legal1')}}">ព្រះរាជក្រឹក្យស្តីអំពីការបង្កើតគណទន្តពេទ្យកម្ពុជា</a></li></h4>
                <h4><li><a href="{{asset('legal2')}}">អនុក្រឹត្យស្តីពីក្រមសិលធម៍ទន្តពេទ្យ</a></li></h4>
                <h4><li><a href="{{asset('legal3')}}">អនុក្រឹត្យស្តីពីបែបបទនិងលក្ខខ័ណ្ឌនៃការអនុញ្ញាតិអោយជនបរទេស</a></li></h4>

            </ul>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop