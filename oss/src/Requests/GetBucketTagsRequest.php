<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket tags
 * Class GetBucketTagsRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetBucketTagsRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_tags';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['id'])) {
            throw new SDKException('param : id	 is invalid');
        }
    }
}