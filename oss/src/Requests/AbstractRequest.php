<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;
use kuaikuaicloud\oss\Http;
use kuaikuaicloud\oss\Response;
use kuaikuaicloud\oss\Signature;

abstract class AbstractRequest
{
    /**
     * @var array 参数
     */
    protected $params;

    /**
     * @var array 配置
     */
    protected $config;

    public function __construct($config, $params)
    {
        $this->config = $config;
        $this->params = $params;
    }

    /**
     * 检测业务参数
     * @return mixed
     */
    abstract protected function checkTrafficParams();

    /**
     * 设置基础参数
     * @throws SDKException
     */
    protected function setBaseParams()
    {
        $this->params['module'] = $this->module;
        $this->params['action'] = $this->action;
        $this->params['version'] = $this->config['version'];
        $this->params['access_key'] = $this->config['access_key'];
        $this->params['timestamp'] = time();
    }

    /**
     * 执行操作
     */
    public function handle()
    {
        return $this->_handle();
    }

    /**
     * @throws SDKException
     */
    private function _handle()
    {
        $this->setBaseParams();
        $this->checkTrafficParams();
        return $this->done();
    }

    /**
     * 组合参数并请求
     * @throws SDKException
     */
    protected function done()
    {
        $this->params['sign'] = Signature::makeSign($this->params, $this->config['secret_key']);
        $http = new Http();
        return new Response($http->jsonRequest($this->config['api_url'], $this->params, true));
    }
}