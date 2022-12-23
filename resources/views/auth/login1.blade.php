@extends('layouts.master')

@section('content')
    <div class="right_col" role="main">
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1> DQA | System Login </h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required=""/>
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required=""/>
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Log in</a>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br/>


                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required=""/>
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required=""/>
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required=""/>
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br/>

                        </div>
                    </form>
                </section>
            </div>
        </div>
        <br/>
        
    </div>

@endsection
