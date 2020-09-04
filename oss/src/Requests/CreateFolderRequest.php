<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * create folder
 * Class CreateFolderRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class CreateFolderRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'create_folder';

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
        if (empty($this->params['name'])) {
            throw new SDKException('param : name is invalid');
        }
    }
}