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
										<img src="<?php echo site_url(); ?>assets/images/study-smart.jpeg" alt="" />
									</div>
								</div>
                                <div class="col-md-6">                          
										<div class="form-border">
												<h1 class="title-header-login">Login here !</h1>
											
												<form>
												  <div class="form-group">
													<label>Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
												  </div>
												  <div class="form-group">
													<label for="exampleInputPassword1">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												  </div>
												  <div class="form-group form-check">
													<!--<input type="checkbox" class="form-check-input" id="exampleCheck1">
													<label>Remember Me</label> -->
													<button type="submit" class="btn btn-primary login-btn">Login</button>
												  </div>
												   <div class="form-group">
													<label><a href="#">Forget Password ?</a></label> 
													<label style="float:right">Don't have account ? <a href="#"> Create one </a> </label>
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
