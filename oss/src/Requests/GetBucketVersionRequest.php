<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket version
 * Class GetBucketVersionRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetBucketVersionRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_version';

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