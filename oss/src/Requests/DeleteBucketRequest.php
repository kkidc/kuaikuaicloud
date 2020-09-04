<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * delete buckets
 * Class DeleteBucketRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class DeleteBucketRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'delete';

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
    }
}