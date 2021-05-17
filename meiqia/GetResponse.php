<?php
/**
 * GetResponse.php
 *
 * @author libojian <bojian.li@foxmail.com>
 * @since 2021/4/23 17:58
 * @version 0.1
 */

/**
 * 通用文件上传类
 * @author  guanguans <yzmguanguan@gmail.com>
 */
namespace meiqia;  // 注意命名空间与 composer.json 中的一致

class GetResponse
{
    private $sign;
    private $appId;
    private $offset;
    private $fromTime;
    private $endTime;
    private $enterpriseId;
    private $_URL = 'http://api.meiqia.com/v1/conversations';


    public function __construct()
    {
    }
}