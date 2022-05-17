<?php $this->view('template/backend/header') ?>
        <?php global $SConfig ?>
        <!-- ########## START: LEFT PANEL ########## -->
        <div class="br-logo" style="background-color: var(--color-second);">
            <a href="">
                <span  style="margin-left: 30px;">
                    </span>Ruang Akad<span>
                </span>
            </a>
        </div>
        <div class="br-sideleft overflow-y-auto">
            <label class="sidebar-label pd-x-15 mg-t-20 op-9" style="color:#e6e6e6">Navigation</label> 
            <div class="br-sideleft-menu">
                <a href="<?=site_url(set_url('dashboard')) ?>" class="br-menu-link <?= @$this->uri->segment(2) == "dashboard" ? 'active show-sub' : null ?>">
                    <div class="br-menu-item">
                        <i class="menu-item-icon fa fa-desktop tx-18"></i>
                        <span class="menu-item-label">Dashboard</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->

                <a href="<?=site_url(set_url('diagnosa')) ?>" class="br-menu-link <?= @$this->uri->segment(2) == "diagnosa" ? 'active show-sub' : null ?>">
                    <div class="br-menu-item">
                        <i class="menu-item-icon fa fa-desktop tx-18"></i>
                        <span class="menu-item-label">Diagnosa</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->

                <a href="<?=site_url(set_url('pasien')) ?>" class="br-menu-link <?= @$this->uri->segment(2) == "pasien" ? 'active show-sub' : null ?>">
                    <div class="br-menu-item">
                        <i class="menu-item-icon fa fa-desktop tx-18"></i>
                        <span class="menu-item-label">Pasien</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->

                <a href="<?=site_url(set_url('auth')) ?>" class="br-menu-link <?= @$this->uri->segment(2) == "auth" ? 'active show-sub' : null ?>">
                    <div class="br-menu-item">
                        <i class="menu-item-icon fa fa-desktop tx-18"></i>
                        <span class="menu-item-label">Login</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
                
            </div><!-- br-sideleft-menu -->
        </div><!-- br-sideleft -->
        <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        <div class="br-header">
            <div class="br-header-left">
                <div class="navicon-left hidden-md-down">
                    <a id="btnLeftMenu" href="">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="navicon-left hidden-lg-up">
                    <a id="btnLeftMenuMobile" href="">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>    
            </div><!-- br-header-left -->
            <div class="br-header-right">
                <nav class="nav">
                    <div class="dropdown">
                        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                            <span class="logged-name hidden-md-down">Admin</span>
                            <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
                            <span class="square-10 bg-success"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-header wd-200">
                            <ul class="list-unstyled user-profile-nav">
                                <!-- <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                                <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                                <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                                <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li> -->
                                <li>
                                    <a href="<?=site_url(set_url('auth/logout')) ?>">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div><!-- dropdown-menu -->
                    </div><!-- dropdown -->
                </nav>  
            </div><!-- br-header-right -->
        </div><!-- br-header -->
        <!-- ########## END: HEAD PANEL ########## -->


        <!-- ########## START: MAIN PANEL ########## -->
            <?= $template ?>
        <!-- ########## END: MAIN PANEL ########## -->
<?php $this->view('template/backend/footer') ?>