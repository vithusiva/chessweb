<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/bracketplus/app/modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 11:04:48 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bracket Plus">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="../img/bracketplus-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/bracketplus">
  <meta property="og:title" content="Bracket Plus">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="../img/bracketplus-social.png">
  <meta property="og:image:secure_url" content="../img/bracketplus-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Modal Templates and Animation Design - Bracket Plus Responsive Bootstrap 4 Admin Template</title>

  <!-- vendor css -->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="../lib/highlightjs/github.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../css/bracket.css">
</head>

<body>

<div class="pd-y-50 bg-gray-700 mg-t-20">
              <div class="modal d-block pos-static">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
                    <div class="modal-body pd-0">
                      <div class="row no-gutters">
                        <div class="col-lg-6 bg-primary">
                            <div class="pd-20" >
                                <img src="/admin/img/chesss19.jpg" width="350" height="450"/>
                            </div>
                        </div>
                        <!-- col-6 -->
                        <div class="col-lg-6 bg-white">
                            <div class="pd-y-30 pd-xl-x-30">
               
                                <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                        <label for="name" class="col-form-label">Name</label>

                                        <div class="col-md-12">
                                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                            <?php if($errors->has('name')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <label for="email" class="col-form-label">E-Mail Address</label>

                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                            <?php if($errors->has('email')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                        <label for="password" class="col-form-label">Password</label>

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            <?php if($errors->has('password')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-form-label">Confirm Password</label>

                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="  row mg-b-25 ">
                            <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary"align left>
                                    Register
                                    </button>
                                </div>   
                                                
                                <div class="col-lg-6"> 
                                    <a href ="<?php echo e(URL('/')); ?>" class="btn btn-primary"align right> back</a>
                                </div>
                                                            
                             </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div><!-- modal-body -->
                    </div><!-- modal-content -->
                  </div><!-- modal-dialog -->
                </div><!-- modal -->
              </div><!-- pd-y-50 -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/auth/register.blade.php ENDPATH**/ ?>