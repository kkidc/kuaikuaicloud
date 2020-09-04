<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket logging
 * Class GetBucketLoggingRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetBucketLoggingRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_logging';

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