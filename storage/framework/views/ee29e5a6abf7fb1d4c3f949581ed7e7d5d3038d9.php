<?php $__env->startSection('template_title'); ?>
    <?php echo trans('Input Pasien'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex">
          <div class="col-lg-9">
              Input Pasien
          </div>
          <div class="col-lg-3 text-right">
              <a class="btn btn-light btn-sm" href="<?php echo e(route('pasien')); ?>"><i class="fa fa-fw fa-reply-all" aria-hidden="true"></i><span class="hidden-xs"> Back</span></a>
          </div>
      </div>
      <div class="card-body">
        <form action="<?php echo e(route('pasien.store')); ?>" method="POST">
      		<?php echo csrf_field(); ?>
          <qr-scanner></qr-scanner>
  	     </form>
      </div>
    </div>
  </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zazan/Public/laravel/resources/views/welcome.blade.php ENDPATH**/ ?>