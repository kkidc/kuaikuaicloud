<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get can choose buckets
 * Class GetLoggingBucketRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetLoggingBucketRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_logging_buckets';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
    }
}