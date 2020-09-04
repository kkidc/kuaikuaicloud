<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * delete objects
 * Class MultiDeleteObjectRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class MultiDeleteObjectRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'multi_delete';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['key'])) {
            throw new SDKException('param : bucket_id is invalid');
        }
    }
}