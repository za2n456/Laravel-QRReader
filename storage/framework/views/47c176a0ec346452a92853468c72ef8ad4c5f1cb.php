<?php $__env->startSection('template_title'); ?>
    <?php echo trans('Homepage'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!--<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="card-deck mb-3 text-center">
      <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"><?php echo e($plan->plan_name); ?></h4>
        </div>
        <div class="card-body">
          <div class="h1 card-title pricing-card-title"><?php echo e($plan->price); ?></div>
          <?php echo $plan->description; ?>

          <a class="btn btn-lg btn-block btn-outline-primary" href="<?php echo e(route('select.plan', ['plan' => $plan->id])); ?>">Sign up Now</a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>-->
	<div class="row">
			<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-md-4 col-sm-4 col-xs-12">
		<form action="<?php echo e(route('order',$plan->id)); ?>">
        <div class="pri_table_list">
			<h3 class="my-0"><?php echo e($plan->plan_name); ?><br/> <span><?php echo e($plan->price); ?></span></h3>
			<ol>
			<li><?php echo $plan->description; ?></li>
			</ol>
			<button type="submit">Book now</button></a>	
		</div>
		</form>
	</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zazan/Public/laravel/resources/views/frontend/index.blade.php ENDPATH**/ ?>