<div class="navbar navbar-inverse navbar-fixed-bottom" style="height:30px;padding:0;text-align:center;margin-top:50px;">
  <p class="copyright text-muted small" style="color:white">Copyright &copy; TADPS <?php echo date('Y') ?>. All Rights Reserved</p>
</div>



    <!-- Modal -->
    <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header navbar navbar-inverse">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"style="color:red">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel" style="color:white">Please Login</h4>
          </div>
          <div class="modal-body">
                <form action="/login" class="center-block" method="post" style="max-width:300px;">
                        <input type="text" class="form-control input-lg" name="username"  autofocus placeholder="Username">
                        <input type="password" class="form-control input-lg margin-top-5px" name="password" placeholder="Password">

                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn btn-default margin-top-5px">Close</a>
                        <input type="submit" class="btn btn-primary pull-right margin-top-5px" name="btnSubmit" value="Login">
                    </div>
              </form>

        </div>
      </div>
    </div>
  </div>




  <div class="modal fade bs-example-modal-sm" id="reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header navbar navbar-inverse">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"style="color:red">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="color:white">Please Register</h4>
        </div>
        <div class="modal-body">
          <form class="" action="/register" method="post">
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
              <input type="password" name="con_pass" class="form-control" value="?>">
              <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn btn-default margin-top-5px">Close</a>
              <input type="submit" class="btn btn-primary pull-right margin-top-5px" value="Register">
              </div>
          </form>

      </div>
    </div>
  </div>
</div>







</div>




<!-- <footer class="navbar-inverse navbar-fixed-bottom" style="height:10px;"> -->
    <!-- <div class="container"  style="heigth:30px;">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="#about">About</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; TADPS <?php echo date('Y') ?>. All Rights Reserved</p>
            </div>
        </div>
    </div> -->
<!-- </footer> -->
<script src="/assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('.carousel').carousel({
    interval: false;
});
$('#button').click(function(){
   $("input[type='file']").trigger('click');
})

$("input[type='file']").change(function(){
   $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
})
</script>
