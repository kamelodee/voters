
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Welcome Back!</h3>
                             <?php if (session()->get('success')): ?>
                                 <div class="alert alert-success" role="alert">
                                  <?= session()->get('success') ?>
                                  </div>
                             <?php endif; ?>
                            <form action="/" method="post">
                                <div class="input-item">
                                    <label for="user">Email</label>
                                  
                                    <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                                </div>
                                <div class="input-item">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" value="">
                                </div>
                                <?php if (isset($validation)): ?>
                                    <div class="col-12">
                                 <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                            </div>
                             <?php endif; ?>
                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-sign-in"></i> Log In</button>
                                </div>
                            </form>
                        </div>

                           
                        <div class="create-ac">
                            <p>Don't have an account? <a href="/register">Sign Up</a></p>
                        </div>
                        <div class="login-menu">
                            <a href="about.html">About</a>
                            <span>|</span>
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->