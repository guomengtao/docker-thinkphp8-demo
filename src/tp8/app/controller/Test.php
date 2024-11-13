<?php
namespace app\controller;

use think\facade\Db;

class Test
{
    public function index()
    {
        try {
            Db::query("SELECT 1");
            return 'MySQL连接成功！';
        } catch (\Exception $e) {
            return '数据库连接失败：' . $e->getMessage();
        }
    }
}
