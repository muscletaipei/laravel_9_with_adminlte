@extends('layouts.master')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Dashboard</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daily active<small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>

                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="bs-example" data-example-id="simple-jumbotron">
                        <div class="jumbotron">
                            <h1>Hello, everyone!</h1>
                            <p>系統建置中.....</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Start to do list -->
        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>To Do List <small>Sample tasks</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="">
                        <ul class="to_do">
                            <li>
                                <p>
                                    <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" class="flat"> Create email address for new intern</p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                            </li>
                            <li>
                                <p>
                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End to do list -->


    </div>
    <div class="clearfix"></div>
    </div>
    <!-- /page content -->






    </body>

@endsection
