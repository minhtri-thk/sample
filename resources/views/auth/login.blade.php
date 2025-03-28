<x-guest-layout>
    <!-- Begin page -->
    <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="wrapper-page">
            <div class="card card-pages shadow-none">
                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                    </div>
                    <h5 class="font-18 text-center">Sign in to continue to Stexo.</h5>

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <form class="form-horizontal m-t-30" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="col-12">
                                <label>Username</label>
                                <input name="email" class="form-control" type="text" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                        <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group row m-t-30 m-b-0">
                            <div class="col-sm-7">
                                <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="pages-register.html" class="text-muted">Create an account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <!-- END wrapper -->
</x-guest-layout>