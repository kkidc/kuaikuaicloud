<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * set object access
 * Class SetObjectAccessRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class SetObjectAccessRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'set_access';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['bucket_id'])) {
            throw new SDKException('param : bucket_id is invalid');
        }
        if (!isset($this->params['access_type'])) {
            throw new SDKException('param : access_type is invalid');
        }
    }
}