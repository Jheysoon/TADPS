<div class="modal fade bs-example-modal-sm" id="reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header navbar navbar-inverse">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"style="color:red">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:white">Please Register</h4>
            </div>
            <div class="modal-body">
                <form class="" action="/register" method="post" id="register_form">
                    <div id="register_error">

                    </div>
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="fname" value="">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lname" value="">
                    <label>Middlename</label>
                    <input type="text" class="form-control" name="mname" value="">
                    <?php if($this->session->has_userdata('id')){ ?>
                    <label>Office</label>
                    <input type="text" class="form-control" name="office" value="">
                    <?php }else{ ?>
                    <label>Contact Number</label>
                    <input type="number" class="form-control" name="contact" value="">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="">
                    <?php } ?>
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="">
                    <label>Confirm Password</label>
                    <input type="password" name="con_pass" class="form-control" value="">
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn btn-default margin-top-5px">Close</a>
                        <input type="submit" class="btn btn-primary pull-right margin-top-5px" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
