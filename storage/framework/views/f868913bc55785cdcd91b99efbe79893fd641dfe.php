

<?php $__env->startSection('conteudo'); ?>
<a href="<?php echo e(route('tarefas.create')); ?>" class="btn btn-primary mb-3">Nova Tarefa</a>

<table class="table table-bordered align-middle">
    <tr>
        <th>Título</th>
        <th>Categoria</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $tarefas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($t->titulo); ?></td>
        <td><?php echo e($t->categoria->nome ?? '-'); ?></td>
        <td>
            <?php if($t->concluida): ?>
            <span class="badge bg-success">Concluída</span>
            <?php else: ?>
            <span class="badge bg-warning text-dark">Pendente</span>
            <?php endif; ?>
        </td>
        <td>
            <!-- botão alternar status -->
            <form action="<?php echo e(route('tarefas.toggle', $t)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
                <button class="btn btn-sm <?php echo e($t->concluida ? 'btn-secondary' : 'btn-success'); ?>">
                    <?php echo e($t->concluida ? 'Marcar Pendente' : 'Concluir'); ?>

                </button>
            </form>

            <a href="<?php echo e(route('tarefas.edit', $t)); ?>" class="btn btn-warning btn-sm">Editar</a>
            <form action="<?php echo e(route('tarefas.destroy', $t)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\UniALFA\Felipe_Aulas\Laravel\gerenciador-tarefas\resources\views/tarefas/index.blade.php ENDPATH**/ ?>