
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data pricelist</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Kategori</th>
                  <th>Sub Kategori</th>
                  <th>Paket</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $pricelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pricelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pricelist->kategori); ?></td>
                    <td><?php echo e($pricelist->subkategori); ?></td>
                    <td><?php echo e($pricelist->paket); ?></td>
                    <td><?php echo e($pricelist->deskripsi); ?></td>
                    <td><?php echo e($pricelist->harga); ?></td>
                    <td>
                        <form action="<?php echo e(route('pricelist.destroy',$pricelist->id)); ?>" method="POST">
                            <a class="btn btn-info" href="<?php echo e(route('pricelist.show',$pricelist->id)); ?>">Show</a>
                            <a class="btn btn-primary" href="<?php echo e(route('pricelist.edit',$pricelist->id)); ?>">Edit</a>
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