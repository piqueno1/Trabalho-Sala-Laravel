

<?php $__env->startSection('conteudo'); ?>
<h2>Nova Categoria</h2>

<form action="<?php echo e(route('categorias.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label class="form-label">Nome da Categoria</label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-secondary">Voltar</a>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\UniALFA\Felipe_Aulas\Laravel\gerenciador-tarefas\resources\views/categorias/create.blade.php ENDPATH**/ ?>