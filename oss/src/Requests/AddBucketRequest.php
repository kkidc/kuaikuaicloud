<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * add buckets
 * Class AddBucketRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class AddBucketRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'add';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (!isset($this->params['version_control'])) {
            throw new SDKException('params : version_control is invalid');
        }
        if (!isset($this->params['access_type'])) {
            throw new SDKException('params : access_type is invalid');
        }
        if (!isset($this->params['name'])) {
            throw new SDKException('params : name is invalid');
        }
        if (!isset($this->params['region'])) {
            throw new SDKException('params : region is invalid');
        }
        if (!isset($this->params['storage_type'])) {
            throw new SDKException('params : storage_type is invalid');
        }
    }
}