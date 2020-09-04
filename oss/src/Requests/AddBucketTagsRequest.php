<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * add bucket tag
 * Class AddBucketTagsRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class AddBucketTagsRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'add_tag';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['id'])) {
            throw new SDKException('param : id	is invalid');
        }
        if (empty($this->params['key'])) {
            throw new SDKException('param : key is invalid');
        }
    }
}