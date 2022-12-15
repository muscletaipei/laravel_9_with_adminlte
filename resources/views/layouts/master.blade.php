<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href={{asset('/images/favicon.ico')}} type="image/ico"/>

    <title>ACS-DQA | Website</title>
    @include('/layouts/css')

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href={{asset('/')}} class="site_title"><i class="fa fa-paw"></i> <span>ACS | DQA</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src={{asset('/adminlte/production/images/img.jpg')}} alt="..."
                             class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>JoeLin</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                @include('/layouts/sidebar')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                @include('/layouts/footerbuttons')
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        @include('/layouts/header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('/layouts/footer')
        <!-- /footer content -->
    </div>
</div>
@include('/layouts/script')

</body>

</html>
