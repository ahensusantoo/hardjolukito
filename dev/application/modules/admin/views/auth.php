<?php $this->view('template/auth/header') ?>
    <?php global $SConfig; ?>
    <div class="d-flex align-items-center justify-content-center bg-primary-second ht-100v">
        <div class="card">
            <div class="card-body wd-xs-500 rounded shadow-base">
                    <span style="color: var(--color-second); text-align: center;"><h4>Hallo Again</h4></span>
                    <span style="color: var(--color-second); text-align: center;"><h4>Welcome back you've been missed</h4></span>
                <div class="logo-name">
                    <div class="row mb-2">
                        <!-- <div class="col-lg-6 col-4 logo-login">
                            <img src="<?=site_url('assets/backend/img/wedding.svg') ?>" class="ml-3" alt="" width="75%;">
                        </div> -->
                        <!-- <div class="col-lg-12 col-8 title-login text-center">
                            <span class="text-center" style="text-transform: uppercase; text-align:center;">Welcome back you've been missed <br> </span>
                        </div> -->
                    </div>
                </div>
                <form action="<?=site_url('admin/auth/proses') ?>" method="post" accept-charset="utf-8" class="pd-xs-20">
                    <?php $this->view('messages') ?>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control rounded-10" placeholder="Username" autocomplete="off">
                    </div><!-- form-group -->
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-10" placeholder="Password" autocomplete="off">
                        <!-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> -->
                    </div><!-- form-group -->
                    <button type="submit" name="login_admin" class="btn color-primary-second tx-white rounded-10 btn-block">Sign in</button>
                </form>

                <div class="row justify-content-center">
                    <div class="col-4">
                        <hr style="border-bottom: 1px solid var(--color-second); margin-top:8px;"> 
                    </div>
                    <div class="col-4">
                        <div class="text-center" >
                            Or Continue With
                        </div> 
                    </div>
                    <div class="col-4">
                        <hr style="border-bottom: 1px solid var(--color-second); margin-top:8px;"> 
                    </div>  
                </div>


                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="row" style="font-size: 40px;">
                            <div class="col-4">
                                <i class=" fa fa-facebook"></i>
                            </div>
                            <div class="col-4">
                                <i class=" fa fa-github"></i>
                            </div>
                            <div class="col-4">
                                <i class=" fa fa-google"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- d-flex -->

<?php $this->view('template/auth/footer') ?>
        