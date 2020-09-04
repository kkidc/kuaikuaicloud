<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * set bucket logging
 * Class SetBucketLoggingRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class SetBucketLoggingRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'put_logging';

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
        if (empty($this->params['to_bucket_id'])) {
            throw new SDKException('param : to_bucket_id is invalid');
        }
    }
}