<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get object tags
 * Class GetObjectTagRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetObjectTagRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'get_tags';

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
        if (empty($this->params['key'])) {
            throw new SDKException('param : key is invalid');
        }
        if (!isset($this->params['version_id'])) {
            throw new SDKException('param : version_id is invalid');
        }
    }
}