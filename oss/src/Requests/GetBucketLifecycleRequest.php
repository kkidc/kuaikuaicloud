<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket lifecycle
 * Class GetBucketLifecycleRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetBucketLifecycleRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_lifecycle';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        $args = ['bucket_id'];
        foreach ($args as $key) {
            if (empty($this->params[$key])) {
                throw new SDKException('param : ' . $key . ' is invalid');
            }
        }
    }
}