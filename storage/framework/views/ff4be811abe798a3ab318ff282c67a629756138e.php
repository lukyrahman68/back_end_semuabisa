
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data artikel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>ID</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Penulis</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($artikel->id); ?></td>
                    <td><?php echo e($artikel->nama); ?></td>
                    <td><?php echo e($artikel->deskripsi); ?></td>
                    <td><?php echo e($artikel->penulis); ?></td>
                    <td>
                        <form action="<?php echo e(route('artikel.destroy',$artikel->id)); ?>" method="POST">
        
                            <a class="btn btn-info" href="<?php echo e(route('artikel.show',$artikel->id)); ?>">Show</a>
            
                            <a class="btn btn-primary" href="<?php echo e(route('artikel.edit',$artikel->id)); ?>">Edit</a>
        
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
          
          <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>