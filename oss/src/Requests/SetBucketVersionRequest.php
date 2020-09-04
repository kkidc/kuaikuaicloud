<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * set bucket version
 * Class SetBucketVersionRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class SetBucketVersionRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'put_version';

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

        if (!isset($this->params['is_open'])) {
            throw new SDKException('param : is_open is invalid');
        }
    }
}