
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data site</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Page</th>
                  <th>Deskripsi1</th>
                  <th>Deskripsi2</th>
                  <th>Deskripsi3</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $site; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($site->page); ?></td>
                    <td><?php echo e($site->deskripsi1); ?></td>
                    <td><?php echo e($site->deskripsi2); ?></td>
                    <td><?php echo e($site->deskripsi3); ?></td>
                    <td>
                        <form action="<?php echo e(route('site.destroy',$site->id)); ?>" method="POST">
        
                            <a class="btn btn-info" href="<?php echo e(route('site.show',$site->id)); ?>">Show</a>
            
                            <a class="btn btn-primary" href="<?php echo e(route('site.edit',$site->id)); ?>">Edit</a>
        
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