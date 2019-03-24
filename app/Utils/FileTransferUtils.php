<?php
namespace app\Utils;
use Qcloud\Cos\Client;

/**
 * Copyright © 大连理工大学软件学院
 * File: FileTransferUtils.php
 * Author: 郗晓斌
 * Email: wall1002@mail.dlut.edu.cn
 * Date: 2019/3/13 11:34 AM
 * Desc:
 */
class FileTransferUtils
{

    private static $_cosClient;//静态对象存储客户端实例

    private final function __construct()
    {
        self::$_cosClient = new Client(array(
            'region'      => env('COS_REGION'),
            'schema'      => 'https', //协议头部，默认为http
            'credentials' => array(
                'secretId'  => env('COS_SECRET_ID'),
                'secretKey' => env('COS_SECCRET_KEY'),
            ),
        ));
    }

    //定义私有的__clone()方法，确保单例类不能被复制或克隆
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //对外提供获取唯一实例的方法
    public static function getInstance()
    {
        if (!(self::$_cosClient instanceof self)) {
            self::$_cosClient = new FileTransferUtils();
        }
        return self::$_cosClient;

    }




}

