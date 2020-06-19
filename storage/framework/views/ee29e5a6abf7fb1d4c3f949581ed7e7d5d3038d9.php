<?php $__env->startSection('template_title'); ?>
    <?php echo trans('Input Pasien'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
  <div class="col-lg-12">

    <qr-scanner></qr-scanner>

  </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zazan/Public/laravel/resources/views/welcome.blade.php ENDPATH**/ ?>