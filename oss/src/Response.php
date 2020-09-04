<?php


namespace kuaikuaicloud\oss;

/**
 * Class Response
 * @package kuaikuaicloud\oss
 */
class Response
{
    /**
     * @var 返回参数
     */
    protected $response;

    public function __construct($response = [])
    {
        $this->response = $response;
    }

    /**
     * 是否成功
     * @return bool
     */
    public function isOk()
    {
        return !empty($this->response['status']);
    }

    /**
     * 获取数据集
     * @return mixed
     */
    public function getData()
    {
        return $this->response['data'];
    }

    /**
     * 获取对应的返回码
     * @return mixed
     */
    public function getCode()
    {
        return $this->response['errCode'];
    }

    /**
     * 获取返回的消息
     * @return mixed
     */
    public function getMessage()
    {
        return $this->response['msg'];
    }

}