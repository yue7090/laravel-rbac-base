@extends('backend::layouts.master')

@section('content')
<div class="table-container" style="background:#fff; padding:30px;">

<div class="row mbl">
    <div class="col-lg-6"> 
        <div class="input-group input-group-sm mbs caption"><span class="input-group-btn"><button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Filter&nbsp;       <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-tint"></i>&nbsp;Newest</a>
                </li>
                <li><a href="#"><i class="fa fa-star"></i>&nbsp;Rating</a>
                </li>
                <li><a href="#"><i class="fa fa-money"></i>&nbsp;Price</a>
                </li>
                <li><a href="#"><i class="fa fa-user"></i>&nbsp;Sales</a>
                </li>
            </ul>
            </span>
            <input type="text" placeholder="Enter here..." class="form-control" /><span class="input-group-btn"><button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Search</button></span>
        </div>
    </div>
    <div class="actions" style="float:right; padding-right: 18px;">
        <a href="/backend/role/create" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>新建角色</a>
    </div>
</div>
    <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
        <thead>
            <tr>
                <th width="3%">
                    <input type="checkbox" class="checkall" />
                </th>
                <th width="5%">id #</th>
                <th width="18%">角色</th>
                <th width="18%">显示名称</th>
                <th width="12%">创建时间</th>
                <th width="12%">更新时间</th>
                <th>操作</th>
            </tr>
            <tbody>
                @foreach($role as $r)
                <tr>
                    <td>
                        <input type="checkbox" />
                    </td>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->display_name }}</td>
                    <td>{{ date('Y-m-d',strtotime($r->created_at)) }}</td>
                    <td>{{ date('Y-m-d',strtotime($r->updated_at)) }}</td>
                    <td>
                        <a href="{{ route('role.edit',['id'=>$r->id]) }}" type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp; 修改
                        </a>
                        <button type="button" class="btn btn-default btn-xs btn-del" data-id="{{ $r->id }}"><i class="fa fa-trash-o btn-del" data-id="{{ $r->id }}"></i>&nbsp; 删除
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
    {!! $role->links() !!}
    <!-- <div class="row">
        <div class="col-lg-6">
            <div class="pagination-panel">Page &nbsp;
                <a href="#" class="btn btn-sm btn-default btn-prev"><i class="fa fa-angle-left"></i></a>&nbsp;
                <input type="text" maxlenght="5" value="1" class="pagination-panel-input form-control input-mini input-inline input-sm text-center" />&nbsp;<a href="#" class="btn btn-sm btn-default btn-prev"><i class="fa fa-angle-right"></i></a>&nbsp; of 6 | View &nbsp;
                <select class="form-control input-xsmall input-sm input-inline">
                    <option value="20" selected="selected">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="-1">All</option>
                </select>&nbsp; records | Found total 58 records</div>
        </div>
        <div class="col-lg-6 text-right">
            <div class="pagination-panel">
                <ul class="pagination pagination-sm man">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
</div>
<script type="text/javascript">
    $(".btn-del").click(function(){
        var id = $(this).data('id');
        layer.confirm('确定删除?', {
            title: '提示框',
            btn: ['是','否'],
            btn1: function(){
                $.ajax({
                    type: 'POST',
                    url: "{{url('backend/role')}}/"+id,
                    data:{'_method':'delete','_token':"{{csrf_token()}}"},
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
@stop
