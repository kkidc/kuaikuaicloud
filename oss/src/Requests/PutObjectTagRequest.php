<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * put object tags
 * Class PutObjectTagRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class PutObjectTagRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'put_tag';

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
        if (empty($this->params['tag'])) {
            throw new SDKException('param : tag is invalid');
        }
    }
}