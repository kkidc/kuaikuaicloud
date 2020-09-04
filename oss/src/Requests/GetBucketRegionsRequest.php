<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get bucket regions
 * Class GetBucketRegionsRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetBucketRegionsRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'get_regions';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
    }
}