<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * delete object
 * Class DeleteObjectRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class DeleteObjectRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'delete';

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
        if (!isset($this->params['key'])) {
            throw new SDKException('param : key is invalid');
        }
    }
}