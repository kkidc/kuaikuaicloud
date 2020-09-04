<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * delete bucket lifecycle
 * Class DeleteBucketLifecycleRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class DeleteBucketLifecycleRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'delete_lifecycle';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        $args = ['bucket_id', 'name'];
        foreach ($args as $key) {
            if (empty($this->params[$key])) {
                throw new SDKException('param : ' . $key . ' is invalid');
            }
        }
    }
}