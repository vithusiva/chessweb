<?php $__env->startSection('content'); ?>

<!-- <div class="container my-5"> -->
    <h3> Add Player</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="<?php echo e(route('player.store')); ?>" method="POST" class="was-validated">
                <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="playername" class="col-form-label">Full Name</label>
                            <input type="text" field="playername" class="form-control" name = "playername" id="playername" placeholder="Full name" required>
                            <span if="fields.hasErrors('playername')" errors="playername" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="namewithInitial" class="col-form-label">Name with Initial</label>
                            <input type="text" field="namewithInitial" class="form-control" name = "namewithInitial" id="namewithInitial" placeholder="Name with Initial" required>
                            <span if="fields.hasErrors('namewithInitial')" errors="namewithInitial" class="text-danger"></span>
                           
                        </div>
                        <div class="form-group col-md-8" >
                            <label class="col-form-label">Gender</label> &nbsp; &nbsp; &nbsp;
                            <input type="radio"   name ="gender" id="Male" value="Male" required> <label>Male</label>&nbsp;&nbsp;&nbsp;
                            <input type="radio"   name ="gender" id="Female" value="Female" required> <label>Female</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group col-md-8">
                            <label for="insitution" class="col-form-label">Insitution</label>
                            <input type="text" field="insitution" class="form-control" name="insitution" id="insitution" placeholder="Institution" required>
                            <span if="fields.hasErrors('insitution')" errors="insitution" class="text-danger"></span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="dob" class="col-form-label">Date of Birth</label>
                            <input type="date" field="dob" class="form-control" name = "dob" id="dob" placeholder="DOB" required>
                           <span if="fields.hasErrors('dob')" errors="dob" class="text-danger"></span>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="tournament_id" class="col-form-label">Tournament ID</label>
                            <select field="tournament_id" class="form-control" name = "tournament_id" id="tournament_id" required>
                                <?php $__currentLoopData = $tournaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tournament->id); ?>"><?php echo e($tournament->type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            
                            <span if="fields.hasErrors('tournament_id')" errors="tournament_id" class="text-danger"></span> 
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-md-6">
                            <input type = "submit" value ="Add Player">
                        </div>

                        <div class="form-group col-md-8"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH M:\Project3rdYear\Laravel\ChessAppPHP\resources\views/player/create.blade.php ENDPATH**/ ?>