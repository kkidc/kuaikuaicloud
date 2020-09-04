<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * delete bucket policy
 * Class DeleteBucketPolicyRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class DeleteBucketPolicyRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'delete_policy';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        $args = ['config_id', 'id'];
        foreach ($args as $key) {
            if (empty($this->params[$key])) {
                throw new SDKException('param : ' . $key . ' is invalid');
            }
        }
    }
}