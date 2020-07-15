<?php
// +----------------------------------------------------------------------
// | thinkphp5.1 Addons [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.qilecms.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author:奇乐CMS
// +----------------------------------------------------------------------
namespace think\addons;
use think\facade\Env;
use think\facade\Request;
use think\facade\Config;
use think\Loader;


/**
 * 插件基类模型
 */
class Model extends think\Model
{

      /**
     * 架构函数
     * @access public
     * @param  array|object $data 数据
     */
    public function __construct($data = [])
    {
      

       parent::__construct();

    }


}