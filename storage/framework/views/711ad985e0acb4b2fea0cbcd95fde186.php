<?php $__env->startSection('content'); ?>
    <div class="container page-index pt-3">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">List Barang</h2>
            </div>
            <div class="col-auto">
                <a class="btn bg-light" href="<?php echo e(route('barangs.create')); ?>">Tambah Barang</a>
            </div>
        </div>
        <table class="table mt-2">
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Satuan Barang</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider border-light">
                <?php $__currentLoopData = $dt_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($barang->kode_barang); ?></td>
                        <td><?php echo e($barang->nama_barang); ?></td>
                        
                        <td>Rp. <?php echo e(number_format($barang->harga_barang, 0, ',', '.')); ?></td>
                        <td><?php echo e($barang->satuan->kode_satuan); ?></td>
                        <td><?php echo e($barang->deskripsi_barang); ?></td>

                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('barangs.show', $barang->id)); ?>">Detail</a>
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('barangs.edit', $barang->id)); ?>">Edit</a>

                            <form action="<?php echo e(route('barangs.destroy', $barang->id)); ?>" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Hapus Barang?')">
                                <?php echo csrf_field(); ?>

                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm btn-danger m-0 border-0">Delete</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\masterBarangUts\resources\views/listBarang/index.blade.php ENDPATH**/ ?>