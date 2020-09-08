<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket referer
 * Class GetBucketRefererRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetBucketRefererRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_referer';

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