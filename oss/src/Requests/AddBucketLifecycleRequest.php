<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * add bucket lifecycle
 * Class AddBucketLifecycleRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class AddBucketLifecycleRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'add_lifecycle';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        $args = ['days', 'bucket_id', 'name'];
        foreach ($args as $key) {
            if (empty($this->params[$key])) {
                throw new SDKException('param : ' . $key . ' is invalid');
            }
        }
        if (!isset($this->params['prefix'])) {
            throw new SDKException('param : prefix is invalid');
        }
        if (!isset($this->params['status'])) {
            throw new SDKException('param : status is invalid');
        }
    }
}