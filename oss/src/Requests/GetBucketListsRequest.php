<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket lists
 * Class GetBucketListsRequest
 * @package kuaikuaicloud\oss\Requests
 */
class GetBucketListsRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_lists';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (isset($this->params['page']) && !is_numeric($this->params['page'])) {
            throw new SDKException('the param : page is invalid');
        }
    }
}