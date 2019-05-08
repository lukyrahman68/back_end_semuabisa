<?php $__env->startSection('content'); ?>
    
    <!--================End Main Slider Area =================-->
    <section style="padding-top:5em;">
        <div class="container">
            <div class="work_content">
                <div class="main_c_title">
                    <h2> <span style="color:red">Our</span> <br class="title_br"><span style="color:black">Price List</span></h2>
                    <h6><span style="color:black">Provide The Best Price For You</span></h6><br>
                    <div class="col-md-12  col-sm-12 col-xs-12">
                    <div class="btn-group btn-group-toggle " data-toggle="buttons" style="max-width:400px;">
                            <label class="btn btn-primary
                            <?php if($sub_data=="pre-wedding"): ?>
                                active
                            <?php endif; ?>
                          " onclick="location.href='<?php echo e(route("pl_pre-wedding")); ?>'" style="padding-left: 2px;padding-right: 2px;">
                            <input type="radio" name="options" id="option1" autocomplete="off"
                            <?php if($sub_data=="pre-wedding"): ?>
                                checked
                            <?php endif; ?>
                            > Prewedding
                          </label>
                          <label class="btn btn-primary
                            <?php if($sub_data=="wedding"): ?>
                                active
                            <?php endif; ?>
                          " onclick="location.href='<?php echo e(route("pl_wedding")); ?>'" style="padding-left: 2px;padding-right: 2px;">
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
                          " onclick="location.href='<?php echo e(route("pl_dokumentasi")); ?>'" style="padding-left: 2px;padding-right: 2px;">
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
                          " onclick="location.href='<?php echo e(route("pl_branding")); ?>'" style="padding-left: 2px;padding-right: 2px;">
                            <input type="radio" name="options" id="option3" autocomplete="off"
                            <?php if($sub_data=="branding"): ?>
                                checked
                            <?php endif; ?>
                            > Branding
                          </label><br><br>
                    </div>
                    </div>
                    



                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!--================Our Project Area =================-->
    <section class="our_project_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="project_left_side">
                            <div class="main_w_title">
                                <h2>OUR <br class="title_br" /> PRICE LIST</h2>
                                <h6>Great Works & Awesome Price</h6>
                            </div>
                            <?php if($sub_data=="pre-wedding" || $sub_data=="wedding"): ?>
                                
                            <?php else: ?>
                            
                            <ul class="our_project_filter">
                                <li class="active" data-filter="*"><a href="#">All</a></li>
                                <?php $__currentLoopData = $pricelists->unique('subkategori'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-filter=".<?php echo e(str_replace(' ', '_', $pricelist->subkategori)); ?>"><a href="#"><?php echo e($pricelist->subkategori); ?>   </a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="our_project_details">

                            <?php $__currentLoopData = $pricelists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="project_item <?php echo e(str_replace(' ', '_', $pricelist->subkategori)); ?> isolation tiling hitam_putih" style="margin-bottom: 1em;">
                                <div style="border: 1px solid #eee;max-height: 700px;max-width: 270px">
                                    <div style="text-align: center">
                                        <h4 class="FreestyleScript" style="font-size: 50px"><?php echo e($pricelist->paket); ?></h4>
                                        <div style="text-align: left;padding:1em;">
                                            <p><?php echo $pricelist->deskripsi; ?> </p>
                                        </div>
                                        <div style="background-color: black; padding:1em;font-size: 20px;color: #fff">
                                            Rp. <?php echo e(number_format($pricelist->harga)); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Project Area =================-->
        <!--================Term and Condition =================-->
        
    <section class="testimonials_area" style="
    padding-top: 30px;
    padding-bottom: 20px;
">
        <div class="container">
            
            <div class="col-md-12">
                <h3 style="font-weight: bold">ADDITIONAL <span style="font-weight: lighter;">TOOLS</span></h3>
            <ol>
              <li>Morning Express / SDE = Rp. 800.000,-</li>
              <li>Aerial Drone = Rp. 800.000 s/d 1.900.000,-</li>
              <li>Camera HDV for LIVE Screen =  Rp. 900.000,- / Camera </li>
              <li>Proyektor = Rp. 300.000,- / Unit </li>
              <li>Album Photobook Kolase Tambahan = Rp. 650.000,- (100 Foto) </li>
              
            </ol> 
            <h3 style="font-weight: bold">TERMS & <span style="font-weight: lighter;">CONDITIONS</span></h3>
            <ol>
              <li>Pricelist diatas tidak termasuk biaya Lokasi Shoot, Transportasi dan Penginapan jika lokasi diluar surabaya</li>
              <li>Free Make Up Artist(<span style="font-weight: bold">Khusus Surabaya Barat</span>)</li>
              <li>Penambahan 1 hari kerja akan dikenakan biaya</li>
              <li>Waktu penyelesaian foto/video maksimal <b>3</b> minggu setelah acara.</li>
              <li>Sistem pembayaran dapat dilakukan dengan cara:<br>
                  DP(<b>30%</b>) untuk booking tanggal maksimal 7 hari sebelum acara<br>
                  Pelunasan (<b>70%</b>) dapat dilakukan pada hari <b>H</b> acara atau maksimal <b>H+1</b> setelah acara.
              </li>
              <li>Pembayaran dapat dilakukan secara Cash atau Transfer ke <br>No Rekening BCA :<b>2710886892</b><br>
                  Atas nama : <b>Wildan Harits Prasetyo</b>  
              </li>
            </ol> 
            <br>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_frontend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>