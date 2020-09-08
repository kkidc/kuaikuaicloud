<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * delete bucket tag
 * Class DeleteBucketTagsRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class DeleteBucketTagsRequest extends AbstractRequest
{
    protected $module = 'Buckets';

    protected $action = 'delete_tag';

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
        if (empty($this->params['bucket_id'])) {
            throw new SDKException('param : bucket_id is invalid');
        }
    }
}