<?php $__env->startSection('content'); ?>
<link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/jquery-nestable/nestable.css')); ?>">
<div class="panel">
    <div class="panel-body">
        <div class="panel panel-yellow" style="width:50%; float:left;">
            <div class="panel-heading">权限列表</div>
            <div class="panel-body pan">
                <div class="form-actions pll prl" id="menulist">
                    <button type="button" class="btn btn-primary" data-action="expand-all">展开</button>&nbsp;
                    <button type="button" class="btn btn-green" data-action="collapse-all">收缩</button>
                </div>
                <div class="dd" id="nestable" style="padding:3px ">
                <ol class="dd-list">
                    <?php
                        foreach($menuTree as $data)
                        {
                            echo menuTree($data, 'display_name', ['router']);
                        }
                    ?>
                </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">新增权限</div>
                <div class="panel-body pan">
                    <form action="<?php echo e(route('permission.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                        <div class="form-body pal">
                            <div class="form-group">
                                <label for="inputUsername" class="control-label">标签 <span class="require">*</span>
                                </label>
                                <div class="input-icon right"><i class="fa"></i>
                                    <input id="inputUsername" type="text" placeholder="标签" class="form-control" name="display_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="control-label">路由 <span class="require">*</span>
                                </label>
                                <div class="input-icon right"><i class="fa"></i>
                                    <input id="inputUsername" type="text" placeholder="路由" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="control-label">所属权限组 <span class="require">*</span>
                                </label>
                                <select data-style="btn-white" class="selectpicker form-control show-tick" name="parent">
                                <option value="0">====顶级权限====</option>
                                    <?php $__currentLoopData = $menuTreeList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($m['id']); ?>"><?php echo e($m['html'].$m['display_name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions pll prl" style="text-align:right">
                            <button type="button" class="btn btn-primary">取消</button>&nbsp;
                            <button type="submit" class="btn btn-green">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-yellow">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="panel-heading" id="myModalLabel">修改权限</div>
            <div class="modal-body">
                <form action="" id="form" data-action="/backend/permission/__id" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputUsername" class="control-label">标签 <span class="require">*</span>
                            </label>
                            <div class="input-icon right"><i class="fa"></i>
                                <input id="display_name" type="text" placeholder="标签" class="form-control" name="display_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">路由 <span class="require">*</span>
                            </label>
                            <div class="input-icon right"><i class="fa"></i>
                                <input id="router" type="text" placeholder="路由" class="form-control" name="value">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">提交更改</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script src="<?php echo e(asset('vendors/jquery-nestable/jquery.nestable.js')); ?>"></script>
<script src="<?php echo e(asset('js/ui-nestable-list.js')); ?>"></script>
<script type="text/javascript">
    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    $('#nestable').nestable({
        group: 1
    }).on('change', updateOutput);
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    $('#menulist').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });
    $("#nestable").on('change', function(){
        var jsonData = $('#nestable').nestable('serialize');
        $.ajax({
            url: "/backend/permission/order",
            method: 'POST',
            data: {
                jsonData: jsonData,
                "_token": '<?php echo e(csrf_token()); ?>'
            },
            success: function( data ) {
                toastr.success('更新成功');
            }
        });
    });
    $(".fa-edit").on('click', function(e, data){
        $("#myModal").modal('show', {data: $(e.currentTarget)});
    });
    $("#myModal").on('show.bs.modal', function(e, data) {
        var _src = e.relatedTarget.data,
            id   = _src.data('id');
        $("#form").attr('action', $("#form").data('action').replace('__id', id)); 
        $("#display_name").val(_src.data('name'));
        $("#router").val(_src.data('router'));
    });
    $(".fa-trash-o").click(function(){
        var id = $(this).data('id');
        layer.confirm('确定删除?', {
            title: '提示框',
            btn: ['是','否'],
            btn1: function(){
                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(url('backend/permission')); ?>/"+id,
                    data:{'_method':'delete','_token':"<?php echo e(csrf_token()); ?>"},
                    dataType: 'json',
                    cache: false,
                    success: function (data) {
                        if(data.status == 0){
                            toastr.info('已删除,正在更新数据......');
                            setTimeout(function(){ 
                                window.location.reload(true); }
                            , 1000);
                        }else{
                            toastr.error('删除失败');
                        }
                    },
                    error: function () {
                        toastr.error('删除失败');
                    }
                });
            },
            btn2: function(){
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>