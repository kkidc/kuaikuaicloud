<?php

namespace kuaikuaicloud\oss;

use kuaikuaicloud\oss\Exception\SDKException;

/**
 * Class Client
 * @package oss
 * @method Response AbstractRequest($params)
 * @method Response AddBucketLifecycleRequest($params)
 * @method Response AddBucketRequest($params)
 * @method Response AddBucketTagsRequest($params)
 * @method Response CreateFolderRequest($params)
 * @method Response DeleteBucketLifecycleRequest($params)
 * @method Response DeleteBucketPolicyRequest($params)
 * @method Response DeleteBucketRequest($params)
 * @method Response DeleteBucketTagsRequest($params)
 * @method Response DeleteFolderRequest($params)
 * @method Response DeleteObjectRequest($params)
 * @method Response GetBucketAclRequest($params)
 * @method Response GetBucketInfoRequest($params)
 * @method Response GetBucketLifecycleRequest($params)
 * @method Response GetBucketListsRequest($params)
 * @method Response GetBucketLoggingRequest($params)
 * @method Response GetBucketPolicyRequest($params)
 * @method Response GetBucketRefererRequest($params)
 * @method Response GetBucketRegionsRequest($params)
 * @method Response GetBucketTagsRequest($params)
 * @method Response GetBucketVersionRequest($params)
 * @method Response GetBucketWebsiteRequest($params)
 * @method Response GetLoggingBucketRequest($params)
 * @method Response GetObjectDownloadUrlRequest($params)
 * @method Response GetObjectInfoRequest($params)
 * @method Response GetObjectListsRequest($params)
 * @method Response GetObjectVersionListsRequest($params)
 * @method Response MultiDeleteObjectRequest($params)
 * @method Response SetBucketLoggingRequest($params)
 * @method Response SetBucketPolicyRequest($params)
 * @method Response SetBucketRefererRequest($params)
 * @method Response SetBucketVersionRequest($params)
 * @method Response SetBucketWebsiteRequest($params)
 * @method Response SetObjectAccessRequest($params)
 * @method Response GetObjectTagRequest($params)
 * @method Response PutObjectTagRequest($params)
 * @method Response DeleteObjectTagRequest($params)
 */
class Client
{
    protected $config;

    /**
     * Client constructor.
     * @param array $config
     * @throws SDKException
     */
    public function __construct(array $config = [])
    {
        if (!empty($config)) foreach ($config as $property => $conf) {
            $this->$property = $conf;
        }
        $this->checkProperty();
        $this->config = $config;
    }

    /**
     * 检测配置项
     * @throws SDKException
     */
    protected function checkProperty()
    {
        $need = ['api_url', 'access_key', 'secret_key', 'version'];
        foreach ($need as $key) {
            if (empty($this->$key)) {
                throw new SDKException('params ' . $key .  ' is invalid');
            }
        }
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return property_exists($this, $name) ? $this->$name : '';
    }

    /**
     * @param $name
     * @param $arguments
     * @return Response
     * @throws SDKException
     */
    public function __call($name, $arguments)
    {
        $class = "\\kuaikuaicloud\\oss\\Requests\\" . ucfirst($name);
        if (!class_exists($class)) {
            throw new SDKException('this request is invalid, please check and try it again');
        }
        $arguments = current($arguments);
        $object = new $class($this->config, $arguments);
        return $object->handle();
    }

}