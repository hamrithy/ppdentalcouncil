@extends('_layouts.app')
@section('content')

    <div class="container">
        <div class="row" style="margin-top:-1.9%;">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators hidden-xs">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive img-full" src="image/slider1.png" alt="">
                        <!--<div class="carousel-caption">
                        <h3>គណទន្ទពេទ្យរាជធានីភ្នំពេញ </h3>
                        </div>-->
                    </div>

                    <!-- <div class="item">
                         <img class="img-responsive img-full" src="image/slider1.png" alt="">
                         <!--<div class="carousel-caption">
                         <h3>គណទន្ទពេទ្យរាជធានីភ្នំពេញ </h3>
                         </div>
                     </div>-->

                    <!-- <div class="item">
                         <img class="img-responsive img-full" src="image/slider1.png" alt="">
                         <!--<div class="carousel-caption">
                         <h3>គណទន្ទពេទ្យរាជធានីភ្នំពេញ </h3>
                         </div>
                     </div>-->


                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <p><marquee onMouseOver='this.stop();' OnMouseOut='this.start();' style="color: blue;">គណទន្ទពេទ្យរាជធានីភ្នំពេញ គណទន្ទពេទ្យរាជធានីភ្នំពេញ គណទន្ទពេទ្យរាជធានីភ្នំពេញ គណទន្ទពេទ្យរាជធានីភ្នំពេញ</marquee></p>
        </div><!-- close row--->

        <div class="row">
            <div class="col-lg-9">
                <h4 style="margin-left:2.5%;">ពត៍មាន</h4>
                <hr style="margin-top:-0.4%;">
            </div>
            <div class="col-lg-3">
                <h4 style="text-align:center;">សេចក្តីជូនដំណឹង</h4>
                <hr style="margin-top:-1%;">
            </div>
        </div><!-- close row--->
        <!-- គណទន្ទពេទ្យរាជធានីភ្នំពេញ  1--->
        <div class="row">
            <div class="col-lg-9" style="border-right:1px dotted #5762a5;">
                <h4 style="color:blue; border-left:5px solid #5762a5; text-indent: 10px;"><a href="news_test.html">សន្មិសីទទន្ទសាស្រ្តអន្តរជាតិលើកទី៨</a></h4>
                <div class="col-lg-4">
                    <img class="img-responsive" src="image/news.jpg" alt="" style="height:150px;">
                </div>
                <div class="col-lg-8">
                    <p> សេចក្តីជូនដំណឹងគណៈទន្ទទេព្យយើងខ្ញុំនិងមានការរៀបចំធ្វើសន្ទិសិទមួយស្តីអំពីការតាំងពិពណ៌សំភារៈទន្ទពេទ្យដែលនិងរៀបចំឡើងនៅថ្ងៃ ព្រហស្បតិ៍ ទី​១៥​ ដល់ថ្ងៃ សុក្រ ទី១៦​ ខែ កញ្ញា ឆ្នាំ ២០១៦
                        <a href="news_test.html">អានបន្ត</a></p>
                </div>
            </div>
            <!-- close គណទន្ទពេទ្យរាជធានីភ្នំពេញ 1---->
            <!---- សេចក្តីជូនដំណឹង 1  ---->
            <div class="col-lg-3">
                <img class="img-responsive" src="image/IMG_0803.JPG" alt="" style="height:150px;">
                <p>គណទន្ទពេទ្យរាជធានីភ្នំពេញ</p>
            </div>
            <!---- close សេចក្តីជូនដំណឹង 1  ---->
        </div><!-- close row
					<!-- គណទន្ទពេទ្យរាជធានីភ្នំពេញ  2--->
        <div class="row">

            <div class="col-lg-9" style="border-right:1px dotted #5762a5;">
                <div class="text-hide">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-8">
                        <p>គណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញ <a href="">អានបន្ត</a></p>
                    </div>
                </div>
            </div>
            <!-- close គណទន្ទពេទ្យរាជធានីភ្នំពេញ 2---->
            <!---- សេចក្តីជូនដំណឹង  2 ---->
            <div class="col-lg-3">
                <img class="img-responsive " src="image/IMG_0803.JPG" alt="" style="height:150px;">
                <p>គណទន្ទពេទ្យរាជធានីភ្នំពេញ</p>
            </div>
            <!---- close សេចក្តីជូនដំណឹង 2  ---->
        </div><!-- close row--->
        <!-- គណទន្ទពេទ្យរាជធានីភ្នំពេញ  3--->
        <div class="row" style="height:auto;">
            <div class="col-lg-9" style="border-right:1px dotted #5762a5;">
                <div class="text-hide">
                    <div class="col-lg-4" >
                    </div>
                    <div class="col-lg-8">
                        <p>គណទន្ទពេទ្យរាជធានីភ្នំពេញ គណទន្ទពេទ្យរាជធានីភ្នំពេញ  គណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញ គណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញគណទន្ទពេទ្យរាជធានីភ្នំពេញ <a href="">អានបន្ត</a></p>
                    </div>
                </div>
            </div>
            <!-- close គណទន្ទពេទ្យរាជធានីភ្នំពេញ 3---->
            <!---- សេចក្តីជូនដំណឹង   3---->
            <div class="col-lg-3">
                <p style="text-align:center; margin-top:15px;"><b>អ្នកចូលមើលទំព័</b></p>
                <hr style="margin-top:-8px;">
                <a href="http://s11.flagcounter.com/more/StTp"><img src="http://s11.flagcounter.com/count2/StTp/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
            </div>
            <!---- close សេចក្តីជូនដំណឹង  3 ---->
        </div><!-- close row--->

    </div>
    <!-- /.container -->
    @stop