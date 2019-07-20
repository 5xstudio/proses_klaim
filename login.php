<div class="container">
    <div class="row text-center ">
        <div class="col-md-12">
            <br /><br />
            <h2> Silahkan Login</h2>
            <br />
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Enter Details To Login </strong>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input id="username" name="username" type="text" class="form-control" placeholder="Username " />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" /> Remember me
                            </label>
                        </div>

                        <button type="button" onclick="doLogin()" id="btn-login" class="btn btn-primary ">Login Now</button>
                    </form>
                </div>

            </div>
        </div>


    </div>
</div>