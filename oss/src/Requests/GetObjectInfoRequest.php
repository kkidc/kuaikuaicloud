<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get object info
 * Class GetObjectInfoRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetObjectInfoRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'get_info';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['key'])) {
            throw new SDKException('param : key is invalid');
        }
        if (empty($this->params['id'])) {
            throw new SDKException('param : id is invalid');
        }
    }
}