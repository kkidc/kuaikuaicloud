<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get monitor
 * Class GetMonitorRequest
 * @package kuaikuaicloud\oss\Requests\Monitor
 */
class GetMonitorRequest extends AbstractRequest
{
    protected $module = 'Monitor';

    protected $action = 'getMonitorData';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['bucket_name'])) {
            throw new SDKException('param : bucket_name	is invalid');
        }
        if (empty($this->params['jk_start_time'])) {
            throw new SDKException('param : jk_start_time is invalid');
        }
        if (empty($this->params['jk_end_time'])) {
            throw new SDKException('param : jk_end_time is invalid');
        }
    }
}