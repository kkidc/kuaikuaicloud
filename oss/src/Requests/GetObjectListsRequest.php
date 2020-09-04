<?php

namespace kuaikuaicloud\oss\Requests;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * get object lists
 * Class GetObjectListsRequest
 * @package kuaikuaicloud\oss\Requests\Buckets
 */
class GetObjectListsRequest extends AbstractRequest
{
    protected $module = 'Objects';

    protected $action = 'get_file_object_lists';

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