<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        $messages = Db::table('message')
            ->order('created_at', 'desc')
            ->select();
        
        return View::fetch('index', [
            'messages' => $messages
        ]);
    }

    public function submit()
    {
        if (!$this->request->isPost()) {
            return '非法请求';
        }

        $content = $this->request->post('content');
        
        if (empty($content)) {
            return '留言内容不能为空';
        }

        try {
            $result = Db::name('message')->insert([
                'content' => $content,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            if ($result) {
                // 提交成功后重定向到首页
                return redirect('/');
            }
            return '留言失败';
        } catch (\Exception $e) {
            return '系统错误：' . $e->getMessage();
        }
    }
}