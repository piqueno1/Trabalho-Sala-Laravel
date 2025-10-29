

<?php $__env->startSection('conteudo'); ?>
<a href="<?php echo e(route('categorias.create')); ?>" class="btn btn-primary mb-3">Nova Categoria</a>

<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($categoria->nome); ?></td>
        <td>
            <a href="<?php echo e(route('categorias.edit', $categoria)); ?>" class="btn btn-warning btn-sm">Editar</a>
            <form action="<?php echo e(route('categorias.destroy', $categoria)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\UniALFA\Felipe_Aulas\Laravel\gerenciador-tarefas\resources\views/categorias/index.blade.php ENDPATH**/ ?>