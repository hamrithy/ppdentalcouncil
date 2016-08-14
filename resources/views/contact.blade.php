@extends('_layouts.app')
        @section('content')
<!-- /.container -->
<div class="container">

    <div class="row"​​​ style="margin-top:-1.9%;">
        <div class="col-lg-12" style="margin-top:1.5%;">
            <h4 style="border-left:5px solid #5762a5; text-indent: 10px;">​ទំនាក់ទំនងមកកាន់យើង</h4>
            <hr style="max-width:100%;">
        </div>

        <!-- Content Row -->
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <div class="animated zoomIn">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.8726475193034!2d104.9183603147486!3d11.560986247382946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513eb7371027%3A0x35db7c9bf7922c02!2sIDC-+International+Dental+Clinic!5e0!3m2!1skm!2skh!4v1467346289699" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">

            <h4>ទំនាក់ទំនង</h4>
            <p>ផ្ទះលេខ 193, ផ្លូវ 208, សង្កាត់បឹងរាំង, ខណ្ឌដូនពេញ, 12211 ភ្នំពេញ</p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">លេខទូរស័ព្ទ​</abbr>: (+855) 23 212-909</p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">សារអេឡិចត្រូនិច</abbr>: <a href="info@imiclinic.com">info@imiclinic.com</a>
            </p>


        </div>




    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8"​​ style="height:600px;">
            <h4>ផ្ញើសារមកយើង</h4>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>ឈ្មោះ​</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>លេខទូរស័ព្ទ​</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>អាស័យ​ដ្ឋាន​អ៊ី​ម៉េ​ល​</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>សេចក្តីអត្ថាធិប្បាយ </label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">សារមកយើង</button>
            </form>
        </div>

    </div>

</div>
<!-- /.row -->
</div>
<!-- /.container -->
@stop