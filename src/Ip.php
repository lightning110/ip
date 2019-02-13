<?php
/**
 * Created by PhpStorm.
 * User: gb
 * Date: 2019-02-13
 * Time: 10:05
 */

namespace Lin\Ip;

/**
 * 获取 ip 归属地
 * Class Ip
 * @package Lin\Ip
 */
class Ip
{
    /**
     * 获取 ip 归属地
     *
     * @param $ip
     *
     * @return array|mixed
     */
    public static function find($ip)
    {
        $url = 'http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip;
        $json = file_get_contents($url);
        $data = json_decode($json, true);
        return $data['data'];
    }
}
