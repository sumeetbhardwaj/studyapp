<?php include 'templates/header.php'; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- post-container -->
                    <div class="post-container">
                        <div class="post-content">
								<div class="row">
								<div class="col-md-6">
									<div class="login-img">
										<img src="<?php echo site_url(); ?>assets/images/govt-register.jpg" alt="" style="  height: 425px;" />
									</div>
								</div>
                                <div class="col-md-6">                          
									<div class="form-border">
										<h1 class="title-header-login">Register here !</h1>
										<form>
										 <div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
										  </div>
										  <div class="form-group">
											<label>Mobile No.</label>
											<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your vailed mobile no">
										  </div>
										  <div class="form-group">
											<label>Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
										  </div>
										  <div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your valid Password">
										  </div>
										  <div class="form-group form-check">
											<button type="submit" class="btn btn-primary login-btn">Register</button>
										  </div>
										   <div class="form-group">
											<label style="padding-left:135px">Already have an account?  <a href="#"> Log in. </a> </label>
										  </div>
										</form>
									</div>               
                                </div>
                            </div>
                        </div>
                    </div><!-- /post-container -->
                </div>
            </div>
        </div>
    </div>
<?php include 'templates/footer.php'; ?>
