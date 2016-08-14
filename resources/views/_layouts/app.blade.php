<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="Keywords" content="pp dental,phnom penh dental concil,pp dental clinic,Dental,pp dital,dentist,clinic,phnom penh,international,Apicectomy,Bone,tissue Graft,Bridge,Consultation,Crown,Implant,Veneer,Endodontic,Inlays,Onlays,Pediatric,Periodontics,Preventive,Teeth,Extraction,Whitening,Gum,CEREC,Cerinate,Lumineers,appointment,siem reap,Cambodia">
    <title>គណ:ទន្ទពេទ្យរាជធានីភ្នំពេញ</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css href="{{asset('css/bootstrap.min.css')}}"">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ppditalclinic.css')}}" rel="stylesheet">
    <link rel="sortcut icon"  href="{{asset('image/logo.png')}}">
    <!-- Custom CSS -->

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="brand"><img src="image/logo.png" style="margin-left:-5%;">  គណ:ទន្ទពេទ្យរាជធានីភ្នំពេញ</div>
        <div class="address-bar">PHNOM PENH DENTAL COUNCIL</div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.html">គណ:ទន្ទពេទ្យរាជធានីភ្នំពេញ</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div id="wrapper">
                <div id="navmenu">
                    <ul>
                        <li>
                            <a href="{{asset('Home')}}">ទំព័រដើម</a>
                        </li>
                        <li>
                            <a href="{{asset('structure')}}">រចនាសម្ព័ន</a>
                        </li>
                        <li>
                            <a href="{{asset('news')}}">ពត៌មាន</a>
                        </li>
                        <li>
                            <a href="{{asset('visionary')}}">ចក្ខុវិស័យ</a>
                        </li>
                        <li style="width:150px;">
                            <a href="{{asset('benifits')}}">អត្ថប្រយោជន៍</a>
                        </li>
                        <li>
                            <a href="{{asset('mission')}}">បេសកកម្ម</a>
                        </li>
                        <li><a href="{{asset('member')}}">សមាជិក</a>
                            <ul>
                                <li><a href ="{{asset('register')}}">ទម្រងចុះឈ្មោះជាសមាជិក</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{asset('about')}}" style="border-right: none;">អំពីយើង</a>
                            <ul>
                                <li><a href="{{asset('contact')}}">ទំនាក់ទំនងមកកាន់យើង</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>
<!-- /.container -->

@yield('content')


<footer>
    <div class="container">
        <div class="row" style="background:#5762a5; height:auto;">
            <div class="col-ms-12 col-sd-12 col-lg-12 text-center">
                <p style="color:white;">Copyright &copy; 2016<a href="" style="color:white;"> គណទន្ទពេទ្យរាជធានីភ្នំពេញ</a> Hosting And Developed By <a href="" style="color:white;"> CSTCambodia</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>


</body>

</html>