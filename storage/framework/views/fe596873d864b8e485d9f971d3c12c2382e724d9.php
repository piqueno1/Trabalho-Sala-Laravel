

<?php $__env->startSection('conteudo'); ?>
<h2>Nova Tarefa</h2>

<form action="<?php echo e(route('tarefas.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Descrição</label>
        <textarea name="descricao" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select name="categoria_id" class="form-select" required>
            <option value="">-- selecione --</option>
            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="concluida" value="1" class="form-check-input" id="concluida">
        <label class="form-check-label" for="concluida">Concluída</label>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(route('tarefas.index')); ?>" class="btn btn-secondary">Voltar</a>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\UniALFA\Felipe_Aulas\Laravel\gerenciador-tarefas\resources\views/tarefas/create.blade.php ENDPATH**/ ?>