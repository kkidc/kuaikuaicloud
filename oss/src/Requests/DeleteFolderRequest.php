<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * delete folder
 * Class DeleteFolderRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class DeleteFolderRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'delete_folder';

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
        if (!isset($this->params['is_version'])) {
            throw new SDKException('param : is_version is invalid');
        }
    }
}