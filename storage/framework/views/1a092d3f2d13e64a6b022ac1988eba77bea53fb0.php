 <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
        <a href="" class="br-menu-link <?php echo e(isActiveRoute('dashboard')); ?>">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->


          <li class="br-menu-item">
            <a href="<?php echo e(route('player.index')); ?>" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Player Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="<?php echo e(route('tournament.index')); ?>" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Tournament Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="<?php echo e(route('round.index')); ?>" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Round Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="<?php echo e(route('roundresult.index')); ?>" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Round Results Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
          <li class="br-menu-item">
            <a href="<?php echo e(route('score.index')); ?>" class="br-menu-link ">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">Score Details</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_user')): ?>
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub <?php echo e(isActiveRoute('user')); ?> <?php echo e(isActiveRoute('permission')); ?> <?php echo e(isActiveRoute('role')); ?>">
              <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
              <span class="menu-item-label">User Control</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
            <li class="sub-item"><a href="<?php echo e(route('user.index')); ?>" class="sub-link <?php echo e(isActiveRoute('user')); ?>">Users</a></li>
              <li class="sub-item"><a href="<?php echo e(route('role.index')); ?>" class="sub-link <?php echo e(isActiveRoute('role')); ?>">Roles</a></li>
              <li class="sub-item"><a href="<?php echo e(route('permission.index')); ?>" class="sub-link <?php echo e(isActiveRoute('permission')); ?>">Permissions</a></li>
            </ul>
          </li><!-- br-menu-item -->
        <?php endif; ?>

        <li class="br-menu-item">
          <a href="javascript:void(0)" onclick="open_popup('<?php echo e(url('media/filemanager/dialog.php?editor=ckeditor&type=2&lang=en_EN&popup=0&crossdomain=0&relative_url=0&akey=key&CKEditorFuncNum=1&CKEditor=content&fldr=news-and-events/&5b83bab48e988&1535359689897')); ?>')" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-book-outline tx-24"></i>
            <span class="menu-item-label">File Manager</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        


        

        
      </ul><!-- br-sideleft-menu -->


  
      <br>
    </div><!-- br-sideleft --><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/admin/inc/nav.blade.php ENDPATH**/ ?>