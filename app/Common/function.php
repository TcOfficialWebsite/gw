<?php
    /**
     * 获取子节点
     * @param  array  $data [description]
     * @return [type]       [description]
     */
    function get_childer_node($data = [])
    {
        static $callNum = 1;
        if(empty($data))
            return;
        foreach ($data as $key => $val) {
            if($val ['statu'] == 'y')
                $isShow = '<span class="label label-success radius">启用</span>';
            else
                $isShow = '<span class="label label-danger radius">禁用</span>';
            echo <<<HTML
                    <tr class="text-c">
                    <td><input type="checkbox" value="" name=""></td>
                    <td>{$val ['id']}</td>
                    <td class="text-l"><span style="cursor:pointer;margin-left:{$callNum}0px" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看">|----{$val ['name']}</span></td>
                    <td>{$val ['remark']}</td>
                    <td>{$val ['updated_at']}</td>
                    <td>$isShow</td>
                    <td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>
                        <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','article-add.html','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                        <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                </tr>
HTML;
            if(!empty($val ['childer'])) {
                $callNum ++;
                get_childer_node($val ['childer']);
            }
            $callNum = 1;
        }
    }
?>