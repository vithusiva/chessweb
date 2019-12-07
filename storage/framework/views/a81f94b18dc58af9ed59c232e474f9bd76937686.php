<?php $__env->startPush('css'); ?>
<?php echo datatableSource('css'); ?>

<link rel="stylesheet" href="/back/jquery-confirm-master/dist/jquery-confirm.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
        <h4>User</h4>
        <p class="mg-b-0">List of user</p>
    </div>
    <div class="float-right-force">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add_permission')): ?>
            <a href="<?php echo e(route('user.create')); ?>" class="btn btn-info"><i class="ion-person-add"></i> New user</a>
        <?php endif; ?>
    </div>
</div><!-- d-flex -->

<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="<?php echo e(route('user.index')); ?>">user</a>
        <span class="breadcrumb-item active">List</span>
    </nav>
</div><!-- br-pageheader -->


<div class="br-section-wrapper" style="padding:10px">
<div class="table-wrapper table-responsive">
    <table datatable  class="table display nowrap customer-table" style="font-size:12px">
      <thead>
            <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Email ID</th>
            <th>Created At</th>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_user', 'delete_users')): ?>
                <th class="text-center">Actions</th>
            <?php endif; ?>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->roles->implode('name', ', ')); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->created_at->toFormattedDateString()); ?></td>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_user')): ?>
                <td>
                    <a href="<?php echo e(route('user.edit',$user->id)); ?>" class="btn btn-outline-primary btn-icon rounded-circle">
                        <div><i class="fa fa-pencil"></i></div>
                    </a>
                </td>
            <?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
  
    </table>
  </div><!-- table-wrapper -->
</div>



<?php $__env->startPush('script'); ?>
<?php echo datatableSource('js'); ?>

<script src="/back/jquery-confirm-master/dist/jquery-confirm.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/admin/user/index.blade.php ENDPATH**/ ?>