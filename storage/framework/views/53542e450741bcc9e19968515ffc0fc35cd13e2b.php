<header class="header">
    <a href="<?php echo e(url('dashboard')); ?>" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        Shikkha Bhaban
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <?php echo $__env->make('layouts.partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>