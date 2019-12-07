<div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
         
          
          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?php echo e(auth()->user()->name); ?></span>
              <img src="/admin/img/default-user.png" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href="#"><img src="/admin/img/default-user.png" class="wd-80 rounded-circle" alt=""></a>
              <h6 class="logged-fullname"><?php echo e(auth()->user()->name); ?></h6>
                <p><?php echo e(auth()->user()->email); ?></p>
              </div>

              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href="<?php echo e(route('user.profile')); ?>" target="_blank"><i class="icon ion-ios-glob"></i> View Profile</a></li>
                <li><a href="<?php echo e(route('password.edit')); ?>"><i class="icon ion-ios-gear"></i> Reset Password</a></li>
                <li><a href="javascript:void(0)" onclick="$('form.logout').submit();"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>

              <?php echo e(Form::open(['url'=>'/logout','class'=>'logout'])); ?>


              <?php echo e(Form::close()); ?>

            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        
      </div><!-- br-header-right -->
    </div><!-- br-header --><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/admin/inc/top-nav.blade.php ENDPATH**/ ?>