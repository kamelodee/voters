
    <!--== create polling Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Add Member Type</h3>
                            
                            <form action="<?= base_url('membertype/save') ?>"  method="post">
                                <div class="input-item">
                                    <label for="membertype">Member type</label>                             
                                    <input type="text" class="form-control" name="membertype" id="membertype">
                                </div>
                                <div class="input-item">
                                    <label for="description">description</label>
                                    <input type="text" class="form-control" name="description" id="description" value="">
                                </div>

                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-sign-in"></i>Add</button>
                                </div>
                            </form>
                        </div>

                        <div class="login-menu">
                            <a href="/membertpy">Go Back</a>
                            <span>|</span>
                            <a href="/dashbaod">dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== creat polling Page Content End ==-->