

<?php $__env->startSection('content'); ?>
<style>
li{ list-style:none}
</style>
<div class="panel panel-yellow">
    <div class="panel-heading">修改角色</div>
    <div class="panel-body pan">
        <form action="<?php echo e(route('role.update', ['id'=>$id])); ?>" method="POST" class="form-horizontal form-seperated">
            <input type="hidden" name="_method" value="PUT">
            <?php echo csrf_field(); ?>

            <div class="form-body">
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">角色名<span class='require'>*</span>
                    </label>
                    <div class="col-md-4">
                        <input id="inputFirstName" type="text" placeholder="First Name" class="form-control" name="name" value="<?php echo e($role['name']); ?>"/><span class="help-block">This is help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">显示名称<span class='require'>*</span>
                    </label>
                    <div class="col-md-4">
                        <input id="inputFirstName" type="text" placeholder="First Name" class="form-control" name="display_name" value="<?php echo e($role['display_name']); ?>"/><span class="help-block">This is help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 control-label">权限<span class='require'>*</span>
                    </label>
                    <style type="text/css">
                        .permissions input[type=checkbox]{ margin-left: 0px;}
                    </style>
                    <div class="col-md-4">
                        <ul class="permissions checkbox">
                        <?php 
                        foreach($permissionTree as $permission)
                        {
                            echo checkboxTree($permission, 'display_name', 'permission[]', $role['permission']);
                        }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form-actions text-right pal">
                <button type="submit" class="btn btn-primary">更新</button>&nbsp;
                <button type="button" class="btn btn-green">取消</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>