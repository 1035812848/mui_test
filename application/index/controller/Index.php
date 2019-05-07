<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    public function index()
    {
        #姓
        $x = ['赵','王','孙','陈','刘','李','朱','马','姜','蒋','吴'];
        #名
        $m = ['三','五','文','丽','帅','强','国','元章','子牙','明','波','茂盛'];
        $users = [];
        #随机生成100个人
        for ($i=0;$i<100;$i++) {
            $xm            = $x[ rand( 0, count( $x ) -1 ) ];
            $xm           .= $m[ rand( 0, count( $m ) -1 ) ];
            #首字母
            $user['fC'] = getfirstchar($xm);
            $user['xm'] = $xm;
            $users[] = $user;
        }
        #按名字首字母排序，前端直接循环
        sort($users);
        return view('',['users'=>$users]);
    }

}
