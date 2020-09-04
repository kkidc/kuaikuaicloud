<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket policy
 * Class GetBucketPolicyRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetBucketPolicyRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_policy';

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