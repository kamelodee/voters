
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Register</h3>
                            <form action="/register" method="post">
                              <!-- row start -->
                           <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">

                           <div class="input-item">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="fullname"  name="fullname"placeholder="Full Name">
                                </div>

                            </div>
                           </div>
                            <!-- row end -->
                            <!-- row start -->
                            <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                            
                                <div class="input-item">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number" id="phone_number" name="phone_number" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-8 col-sm-12">

                            <div class="input-item">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="E-mail Address">
                                </div>   
                            </div>
                            </div>
                            <!-- //row end -->
                          
                            <!-- row start -->
                            <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                            <div class="input-item">
                                 <label for="birthdate">Birth Date</label>
                                 <input type="date" id="birthdate" name="birthdate" placeholder="Birth Date" data-date-format="mm/dd/yyyy">
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                            <div class="input-item">
                                    <label for="polling_station">Member Type</label> 


                                    <select name="membertype" class="form-contro" id="polling_station">
                                    <?php  foreach($alldata[1] as $value){?>
                                    <option value="<?= $value['membertype']; ?>"> <?php echo $value['membertype']; ?></option>
                                    <?php }  ?>
                                    </select>


                                    
                                </div>
                            </div>
                            </div>
                            <!-- //row end -->
                              <!-- row start -->
                              <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">                
                           
                            <div class="input-item">
                                    <label for="polling_station">Polling Station</label>
                        
                                    <select name="polling_station" class="form-contro" id="polling_station">
                                    <?php  foreach($alldata[0] as $value){?>
                                    <option value="<?= $value['name']; ?>"> <?php echo $value['name']; ?></option>
                                    <?php }  ?>
                                    </select>
                                    
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-12">                       
                            <div class="input-item">
                                <label for="location">Neighbourhood</label>
                                    <input type="text" id="location" name="location"  placeholder="Neighbourhood">
                                </div>
                            </div>
                            </div>
                           <!-- //row end -->
                            <!-- row start -->
                            <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">                
                                <div class="input-item">
                                    <label for="pass"> Password</label>
                                    <input type="password" id="pass" name="password"  placeholder="Password">
                                </div>     
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-12">                       
                            <div class="input-item">
                                    <label for="pass">Password Confirm</label>
                                    <input type="password" id="pass-confirm" name="password_confirm" placeholder="Password confirm">
                                </div>
                            </div>
                            </div>
                           <!-- //row end -->                                     
                                  <div class="col-12">
                             <!-- validation message -->
                                     <?php if (isset($validation)): ?>
                                        <div class="col-12">
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->listErrors() ?>
                                        </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- //end validation message -->
                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-sign-in"></i> Register</button>
                                </div>

                             </div>
                            </form>
                        </div>  
                        <div class="create-ac">
                            <p>Already you have an account? <a href="/">Sign In</a></p>
                        </div>
                        <div class="login-menu">
                            <a href="/dashboard">About</a>
                            <span>|</span>
                            <a href="/dashboard">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
