<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * set bucket referer
 * Class SetBucketRefererRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class SetBucketRefererRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'put_referer';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['id'])) {
            throw new SDKException('param : bucket_id is invalid');
        }
    }
}