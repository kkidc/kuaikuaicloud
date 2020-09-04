<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * set bucket policy
 * Class SetBucketPolicyRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class SetBucketPolicyRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'put_policy';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        $args = ['authorized_resources_type', 'id', 'account_id'];
        foreach ($args as $key) {
            if (empty($this->params[$key])) {
                throw new SDKException('param : ' . $key . ' is invalid');
            }
        }
    }
}