<?php $__env->startSection('content'); ?>

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Edit project</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="box-body">
                <?php if(session('sukses')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session('sukses')); ?>

                  </div>
              <?php endif; ?>

              <?php if(session('gagal')): ?>
                  <div class="alert alert-danger">
                      <?php echo e(session('gagal')); ?>

                  </div>
              <?php endif; ?>
                  <form action="<?php echo e(route('project.update',$projek->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <Strong>File</Strong><br>
                      
                      <!--<input type="file" class="form-control file-input" name="gambar" placeholder="Masukkan gambar">-->
                      <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('project')); ?>/<?php echo e($media->idkonten); ?>-<?php echo e($media->idmedia); ?>.<?php echo e($media->format); ?>" height="400" weight="400">
                    <input type="text" name="hide-<?php echo e($jumlahgambar = $loop->iteration); ?>" value="<?php echo e($media->idkonten); ?>-<?php echo e($media->idmedia); ?>" hidden>
                    <input type="text" name="format-<?php echo e($jumlahgambar); ?>" value="<?php echo e($media->format); ?>" hidden>
                    <input type="file" class="form-control file-input" name="gambar<?php echo e($jumlahgambar); ?>" placeholder="Masukkan gambar">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <input type="text" name="jumlahmedia" id="jumlahmedia" value="<?php echo e($jumlahgambar); ?>" hidden>
                    <br><Strong>Link : </Strong><br>
                    <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <input type="text" class="form-control file-input" name="link<?php echo e($jumlahlink = $loop->iteration); ?>" value="<?php echo e($link->isi); ?>">
                    <br>
                    <input type="text" name="jumlahlink" id="jumlahlink" value="<?php echo e($jumlahlink); ?>" hidden>
                    
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    
                      <div id="link"></div>
                    </div>
                    <div class="form-group">
                    <strong>Judul : </strong>
                      <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo e($projek->nama); ?>">
                    </div>
                    <div class="form-group">
                    <strong>Kategori : </strong>
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="<?php echo e($projek->kategori); ?>">
                    </div>
                    <div>
                    <strong>Deskripsi :</strong>
                      <textarea class="textarea" placeholder="Deskripsi" name="deskripsi" 
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                <?php echo e($projek->deskripsi); ?>

                                </textarea>
                    </div>
                    <div class="box-footer clearfix">
                  <button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                  </form>
                </div>
                
              </div>
    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>