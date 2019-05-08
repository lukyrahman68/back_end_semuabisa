<?php $__env->startSection('content'); ?>
    
    <!--================End Main Slider Area =================-->
    <section style="padding-top:5em;">
        <div class="container">
            <div class="work_content">
                <div class="main_c_title">
                    <h2> <span style="color:red">Our</span> <br class="title_br"><span style="color:black">Project</span></h2>
                    <h6><span style="color:black">Provide Your Art Solution</span></h6><br>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-primary
                        <?php if($sub_data=="pre-wedding"): ?>
                            active
                        <?php endif; ?>
                      " onclick="location.href='<?php echo e(route("pre-wedding")); ?>'">
                        <input type="radio" name="options" id="option1" autocomplete="off"
                        <?php if($sub_data=="pre-wedding"): ?>
                            checked
                        <?php endif; ?>
                        > Pre-Wedding
                      </label>
                      <label class="btn btn-primary
                        <?php if($sub_data=="wedding"): ?>
                            active
                        <?php endif; ?>
                      " onclick="location.href='<?php echo e(route("wedding")); ?>'">
                        <input type="radio" name="options" id="option2" autocomplete="off"
                        <?php if($sub_data=="wedding"): ?>
                            checked
                        <?php endif; ?>
                        > Wedding
                      </label>
                      <label class="btn btn-primary
                        <?php if($sub_data=="dokumentasi"): ?>
                            active
                        <?php endif; ?>
                      " onclick="location.href='<?php echo e(route("dokumentasi")); ?>'">
                        <input type="radio" name="options" id="option3" autocomplete="off"
                        <?php if($sub_data=="dokumentasi"): ?>
                            checked
                        <?php endif; ?>
                        > Dokumentasi
                      </label>
                      <label class="btn btn-primary
                        <?php if($sub_data=="branding"): ?>
                            active
                        <?php endif; ?>
                      " onclick="location.href='<?php echo e(route("branding")); ?>'">
                        <input type="radio" name="options" id="option3" autocomplete="off"
                        <?php if($sub_data=="branding"): ?>
                            checked
                        <?php endif; ?>
                        > Branding
                      </label><br><br>
                    </div>
                    
                    
<br><br><br>
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-9">
                                        <div class="our_project_details">
                                            <?php $__currentLoopData = $projeks->unique('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="project_item <?php echo e($projek->kategori); ?> isolation tiling hitam_putih">
                                                <img src="<?php echo e(asset('project/'.$projek->id.'-'.$projek->idmedia.'.'.$projek->format)); ?>" alt="" width="275" height="280" style="object-fit: cover; margin-bottom:0.5em;">
                                                <div class="project_hover">
                                                    <div class="project_hover_inner">
                                                        <div class="project_hover_content">
                                                            <a href="#"><h4><?php echo e($projek->nama); ?></h4></a>
                                                            <p><?php echo str_limit($projek->deskripsi,50); ?> </p>
                                                            <a class="view_btn" href="<?php echo e(route('detail_projek',$projek->id)); ?>">View Project</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                </div>
<br><br><br>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--================Testimonials Area =================-->
    <section class="testimonials_area">
        <div class="container">
            <div class="row testimonials_inner">
                <div class="col-md-4">
                    <div class="main_w_title">
                        <h2>Client <br class="title_br" />Says</h2>
                        <h6 style="color:#ffcd00">True Word</h6>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="testimonials_slider owl-carousel">
                        <div class="item">
                            <div class="testi_left">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                <a href="#"><h4>Eng. Abul Kalam</h4></a>
                            </div>
                            <div class="testi_right">
                                <img src="<?php echo e(asset('img/testimonials/test-1.jpg')); ?>" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_left">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                <a href="#"><h4>Eng. Abul Kalam</h4></a>
                            </div>
                            <div class="testi_right">
                                <img src="<?php echo e(asset('img/testimonials/test-1.jpg')); ?>" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_left">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                <a href="#"><h4>Eng. Abul Kalam</h4></a>
                            </div>
                            <div class="testi_right">
                                <img src="<?php echo e(asset('img/testimonials/test-1.jpg')); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_frontend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>