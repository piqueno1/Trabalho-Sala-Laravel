

<?php $__env->startSection('conteudo'); ?>
<h2>Editar Categoria</h2>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($err); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('categorias.update', $categoria)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome da Categoria</label>
        <input type="text" id="nome" name="nome" value="<?php echo e(old('nome', $categoria->nome)); ?>" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-secondary">Voltar</a>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\UniALFA\Felipe_Aulas\Laravel\gerenciador-tarefas\resources\views/categorias/edit.blade.php ENDPATH**/ ?>