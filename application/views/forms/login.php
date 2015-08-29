<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header navbar navbar-inverse">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"style="color:red">&times;</span></button> -->
                <h4 class="modal-title" id="myModalLabel" style="color:white">Please Login</h4>
            </div>
            <div class="modal-body">
                <form action="/login" class="center-block" method="post" style="max-width:300px;" id="login_form">
                    <div id="error_message">

                    </div>
                    <input type="text" class="form-control input-lg" name="username1"  autofocus placeholder="Username" required>
                    <input type="password" class="form-control input-lg margin-top-5px" name="password1" placeholder="Password" required>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" id="close" class="btn btn-default margin-top-5px">Close</a>
                        <button type="submit" class="btn btn-primary pull-right margin-top-5px" id="btnSubmit" data-loading-text="Loading..." name="btnSubmit">Login</button>
                    </div>
              </form>
            </div>
        </div>
    </div>
</div>
