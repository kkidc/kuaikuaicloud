<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get object download url
 * Class GetObjectDownloadUrlRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetObjectDownloadUrlRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'get_download_url';

    /**
     * 检测参数
     * @return mixed|void
     * @throws SDKException
     */
    protected function checkTrafficParams()
    {
        if (empty($this->params['key'])) {
            throw new SDKException('param : key is invalid');
        }
        if (empty($this->params['bucket_id'])) {
            throw new SDKException('param : bucket_id is invalid');
        }
    }
}