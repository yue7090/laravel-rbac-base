<?php
function mergeTree($cate, $parent_id = 0, $level = 0, $html = '|----') {
    $arr = array();

    foreach ( $cate as $v ) {
        if ( $v['parent'] == $parent_id ) {
            $v['level'] = $level + 1;
            $v['html']  = str_repeat($html, $level);
            $arr[] = $v;
            //将这一次递归，看成得到的一个数据
            $arr = array_merge($arr, mergeTree($cate, $v['id'], $level+1, $html));
        }
    }

    return $arr;
}


    /**
     * 多维数组
     */
    function getTree($data, $id, $parent_id, $pid = 0) {
        $arr = array();
        foreach ($data as $k=>$v) {
            if ($v[$parent_id] == $pid) {
                $arr[$k] = $v;
                $arr[$k]['children'] = getTree($data, $id, $parent_id, $v[$id] );
            }
        }
        $treedata = [];
        foreach($arr as $k=>$v) 
        {
            $treedata[] =$v;
        }
        return $treedata;
    }

    
    function arrayToObject($e)
    {

        if (gettype($e) != 'array') return;
        foreach ($e as $k => $v) {
            if (gettype($v) == 'array' || getType($v) == 'object')
                $e[$k] = (object)arrayToObject($v);
        }
        return (object)$e;
    }

    function menuTree($data, $name='name', $datavalue=array()) {
        $data_value = '';
        if(!empty($datavalue)){
            foreach($datavalue as $datav)
            {
                $data_value.= ' data-'.$datav.'="'.$data[$datav].'"';
            }
            
        }
        
        $str='<li class="dd-item" data-id="'.$data['id'].'">
        <div class="dd-handle">';
        $str.=$data[$name].'<span class="pull-right dd-nodrag">
        <a href="javascript:void(0);"><i class="fa fa-edit" data-id="'.$data['id'].'"  data-name="'.$data[$name].'" '.$data_value.'></i></a>
        <a href="javascript:void(0);" class="tree_branch_delete"><i class="fa fa-trash-o" data-id="'.$data['id'].'"></i></a>
    </span></div>';
        if(isset($data['children']))
        {
            $str .= '<ol class="dd-list">';
            foreach($data['children'] as $children){
                $str.=menuTree($children, $name, $datavalue);
            }
            $str.='</ol>';
        }
        $str.='</li>';
        return $str;
    }
    function checkboxTree($data, $name='name', $checkboxname='name[]', $hasData=array()) {
        $checked = '';
        if(!empty($hasData))
        {
            foreach( $hasData as $ha)
            {
                if($ha['id'] == $data['id'])
                {
                    $checked = 'checked';
                }
            }
        }
        $str='<li>
            <input type="checkbox" id="" class="permission-group" name="'.$checkboxname.'" '.$checked.' value="'.$data['id'].'">
            <label for="">
                '.$data[$name].'
            </label>';
        if(isset($data['children']))
        {
            $str.="<ul>";
            foreach($data['children'] as $children)
            {
                $str.=checkboxTree($children, $name, $checkboxname, $hasData);
            }
            $str.="</ul>";
        }
        $str.='</li>';
    return $str;
    }
?>