<?php $__env->startSection('content'); ?>
<style>
    select.form-control.score {
    width: 80px;
}
</style>
<div class="row">
<form action="<?php echo e(route('roundresult.store')); ?>" method="POST">   
<?php echo e(csrf_field()); ?>


<input type="hidden" name="tournament_id" value="<?php echo e($round->tournament_id); ?>">
<input type="hidden" name="round_id" value="<?php echo e($round->id); ?>">

    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Player ID</th>
                <th>Name with Initial</th>
                <th>Score</th>
                <th>Opp ID</th>
                <th>Opp Name with Initial</th>
            </tr>
            
            
            <?php $__currentLoopData = $a_players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php 
                $oppAvai = array_key_exists($key,$b_players);
            ?>
            <tr>
                <td>  <?php echo e($player['id']); ?></td>
                <td>  <?php echo e($player['namewithInitial']); ?></td>
                <td>
                    <div class="form-group">
                    <input type="hidden" name="player_id[]" value="<?php echo e($player['id']); ?>">
                    <input type="hidden" name="player_name[]" value="<?php echo e($player['namewithInitial']); ?>">
                    <input type="hidden" name="opp_id[]" value="<?php echo e(($oppAvai)? $b_players[$key]['id'] : 0); ?>">
                    <input type="hidden" name="opp_name[]" value="<?php echo e(($oppAvai)? $b_players[$key]['namewithInitial'] : 0); ?>">
                    <select class="form-control score" name="score[]">
                        <option value="2-0">2 - 0</option>
                        <option value="0-2">0 - 2</option>
                        <option value="1-1">1 - 1</option>
                    </select>
                    </div>
                </td>
                <?php if($oppAvai): ?>
                    <td><?php echo e($b_players[$key]['id']); ?></td>
                    <td><?php echo e($b_players[$key]['namewithInitial']); ?></td>
                <?php else: ?>
                    <td></td>
                    <td></td>
                <?php endif; ?>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>    
    <div class="col-md-4">
        <button type="submit">Save</button>
    </div>
</form>
</div>


    <!-- <form action= "<?php echo e(URL('player')); ?>" method = "get">
        <input type ="Submit" value = "Do Next Round" />
    </form> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ChessAppPHP\resources\views/player/pair.blade.php ENDPATH**/ ?>