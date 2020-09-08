<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * set bucket website
 * Class SetBucketWebsiteRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class SetBucketWebsiteRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'put_website';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['id'])) {
            throw new SDKException('param : id is invalid');
        }
    }
}