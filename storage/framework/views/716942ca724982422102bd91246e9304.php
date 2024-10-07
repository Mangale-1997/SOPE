<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>School of Professional Engineering</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
        <link rel="stylesheet" type="text/css" href="card.css">
   </head>

    <body>


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

<body class="card">

<div class="ag-format-container">
  <div class="ag-courses_box">
    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title-round">
        <div class="box">

        </div>
        </div>

        <div class="ag-courses-item_date-box">

        <h2>User Management</h2>
        <p>  Roles | Permision | Users </p>
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="<?php echo e(route('store.corousel')); ?>" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title-round">
        <div class="box">

        </div>
        </div>

        <div class="ag-courses-item_date-box">

        <h2>Corousel</h2>
        <p>  | All Corousel | </p>
        </div>
      </a>
</div>

<div class="ag-courses_item">
      <a href="<?php echo e(route('store.services')); ?>" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title-round">
        <div class="box">

        </div>
        </div>

        <div class="ag-courses-item_date-box">

        <h2>Services</h2>
        <p>   | All Services| </p>
        </div>
      </a>
</div>

<div class="ag-courses_item ">
      <a href="<?php echo e(route('store.news')); ?>" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title-round">
        <div class="box">

        </div>
        </div>

        <div class="ag-courses-item_date-box">

        <h2>News</h2>
        <p>   | All News | </p>
        </div>
      </a>
</div>

<div class="ag-courses_item">
      <a href="<?php echo e(route('view-articles')); ?>" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title-round">
        <div class="box">

        </div>
        </div>

        <div class="ag-courses-item_date-box">

        <h2>Articles</h2>
        <p>  | All Articles|  </p>
        </div>
      </a>
</div>

<div class="ag-courses_item">
      <a href="<?php echo e(route('view-comment')); ?>" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title-round">
        <div class="box">

        </div>
        </div>

        <div class="ag-courses-item_date-box">

        <h2> Messages| Comment | </h2>
        <p>  All | Messages | Comment </p>
        </div>
      </a>
</div>
    <div class="ag-courses_item">
      <a href="#" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="aag-courses-item_title-round">
        <div class="box">

        </div>
        </div>

        <div class="ag-courses-item_date-box">

        <h2>Video</h2>
        <p>  |  All Video | </p>
        </div>
      </a>
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
</body
>
<?php /**PATH C:\xampp\htdocs\SoPE\resources\views/dashboard.blade.php ENDPATH**/ ?>