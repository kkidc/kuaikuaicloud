<?php


namespace kuaikuaicloud\oss;


use kuaikuaicloud\oss\Exception\SDKException;

class Signature
{

    /**
     * 创建签名
     * @param array $params
     * @param $secretKey
     * @return string
     * @throws SDKException
     */
    public static function makeSign(array $params, $secretKey)
    {
        ksort($params, SORT_STRING);
        $string = '';
        foreach ($params as $key => $param) {
            if (!is_string($param) && !is_numeric($param)) {
                throw new SDKException('param ' . $key . ' is invalid');
            }
            if ($key != 'sign' && $param !== '') {
                $string .= ($key . '=' . $param . '&');
            }
        }
        $string .= ('key=' . $secretKey);
        $sign = strtoupper(md5($string));
        $sign = strtoupper(hash_hmac('sha256', $sign, $secretKey));
        return $sign;
    }

    /**
     * 验证签名
     * @param $params
     * @param $secretKey
     * @param $sign
     * @throws SDKException
     * @return boolean
     */
    public static function verifySign(array $params, $secretKey, $sign)
    {
        return self::makeSign($params, $secretKey) == $sign;
    }

}