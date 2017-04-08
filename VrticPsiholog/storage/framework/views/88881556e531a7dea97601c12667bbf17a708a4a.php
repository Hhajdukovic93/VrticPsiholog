<?php $__env->startSection('content'); ?>

    <div class="col-xs-12 col-sm-12">
        <div class="jumbotron">
            <h2 class="text-center" style="margin-bottom: 15px;"><b>ERA dijagram</b></h2>
            <img src="<?php echo e(URL::asset('images/DjecaVrtic.png')); ?>" class="img-responsive center-block" alt="" style="max-height: 600px; max-width: 600px;"/>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>