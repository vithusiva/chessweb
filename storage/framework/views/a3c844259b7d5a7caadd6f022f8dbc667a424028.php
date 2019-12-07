<?php $__env->startSection('content'); ?>

<div class="d-flex align-items-center justify-content-center ht-100v">
    <div class="overlay-body d-flex align-items-center justify-content-center">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> My <span class="tx-info">Admin</span> <span class="tx-normal">]</span></div>
        <div class="tx-white-5 tx-center mg-b-60">Login</div>
        <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <input id="email" type="email" class="form-control fc-outline-dark" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
        <input type="password" class="form-control fc-outline-dark" placeholder="Enter your password" name="password" required>
        
            <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
        <a href="<?php echo e(route('password.request')); ?>" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>
    </div><!-- login-wrapper -->
    </div><!-- overlay-body -->
</div><!-- d-flex -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/auth/login.blade.php ENDPATH**/ ?>