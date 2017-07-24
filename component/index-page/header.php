<header class="business-header" id="header" class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-7">
                <div class="panel panel-default">
                    <div class="panel-heading login">
                        <span class="glyphicon glyphicon-lock"></span> Login</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="post" action="database/connectivity_sign_in.php" id="signin" name="signin">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                                Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm" name="submit" id="submit">
                                    Sign in</button>
                                    <button type="reset" class="btn btn-default btn-sm">
                                    Reset</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Not Registred? <a href="http://www.jquery2dotnet.com">Register here</a></div>
                </div>
            </div>
        </div>
    </div>
</header>