<?php $__env->startSection('content'); ?>
    <!--================Main Slider Area =================-->
    <br>
    <!--================End Main Slider Area =================-->
    <div class="container pad">
        <div class="owl-carousel owl-theme">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="embed-responsive embed-responsive-16by9">
                    <iframe frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="<?php echo e($link->isi); ?>" style="max-width: 1920px;max-height: 1080px;"></iframe>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $projek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset('project/'.$item->id.'-'.$item->idmedia.'.'.$item->format)); ?>" alt="" srcset="" style="max-width:300px;max-height: 250px;object-fit: contain">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="col-md-12">
            <?php $__currentLoopData = $projek->unique('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <b><h2><?php echo e($item->nama); ?></h2></b><br>
                <?php echo $item->deskripsi; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <br><br>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
        $(document).ready(function(){
         $('.owl-carousel').owlCarousel({
             loop:true,
             margin:10,
             responsiveClass:true,
             responsive:{
                 0:{
                     items:1,
                     nav:true
                 },
                 600:{
                     items:2,
                     nav:false
                 },
                 1000:{
                     items:3,
                     nav:true,
                     loop:false
                 }
             }
         })
         });
         </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_frontend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>