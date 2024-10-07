<link rel="stylesheet" type="text/css" href="card.css">
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<!-- card start -->

<div class="container">


         <a href="#">
       <div class="box-container">
       <div class="box">
       <img src="images/user..png">
       <h2>User Management</h2>
       <p>  Roles | Permision | Users </p>

        </div>
        </div></a>

        <a href ="<?php echo e(route('viewservices')); ?>">
    <div class="box-container">
       <div class="box">
       <img src="images/Services.png">
       <h2> Services</h2>
        <p> All Services</p>
        </div>
        </div>
</a>
      </a>

       <div class="box-container">
       <div class="box">
       <img src="images/Setting.png">
       <h2>Settings</h2>
         <p>System configuration|Work Flow </p>
        </div>
        </div>
        <a href ="<?php echo e(route('viewcorousel')); ?>">
        <div class="box-container">
       <div class="box">
       <img src="images/batch.png">
       <h2>Corousel</h2>
         <p> All Corousel</p>
        </div>

    </div> </a>
<div class="box-container">
       <div class="box">
       <img src="images/News.png">
       <h2>News</h2>
        <p> All News</p>
        </div>
    </div>
<div class="box-container">
          <div class="box">
          <img src="images/Questions.png">
          <h2>Questions</h2>
          <p> All Questions</p>
          </div>

        </div>
        </div>
        </div>

</div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\SoPE\resources\views\dashboard.blade.php ENDPATH**/ ?>