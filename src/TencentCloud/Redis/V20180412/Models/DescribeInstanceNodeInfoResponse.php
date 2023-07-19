<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodeInfo response structure.
 *
 * @method integer getProxyCount() Obtain The number of proxy nodes
 * @method void setProxyCount(integer $ProxyCount) Set The number of proxy nodes
 * @method array getProxy() Obtain Proxy node information 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setProxy(array $Proxy) Set Proxy node information 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method integer getRedisCount() Obtain The number of Redis nodes
 * @method void setRedisCount(integer $RedisCount) Set The number of Redis nodes
 * @method array getRedis() Obtain Redis node information 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setRedis(array $Redis) Set Redis node information 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method integer getTendisCount() Obtain This parameter has been disused.
 * @method void setTendisCount(integer $TendisCount) Set This parameter has been disused.
 * @method array getTendis() Obtain This parameter has been disused. 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setTendis(array $Tendis) Set This parameter has been disused. 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInstanceNodeInfoResponse extends AbstractModel
{
    /**
     * @var integer The number of proxy nodes
     */
    public $ProxyCount;

    /**
     * @var array Proxy node information 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Proxy;

    /**
     * @var integer The number of Redis nodes
     */
    public $RedisCount;

    /**
     * @var array Redis node information 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Redis;

    /**
     * @var integer This parameter has been disused.
     */
    public $TendisCount;

    /**
     * @var array This parameter has been disused. 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Tendis;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ProxyCount The number of proxy nodes
     * @param array $Proxy Proxy node information 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param integer $RedisCount The number of Redis nodes
     * @param array $Redis Redis node information 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param integer $TendisCount This parameter has been disused.
     * @param array $Tendis This parameter has been disused. 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = [];
            foreach ($param["Proxy"] as $key => $value){
                $obj = new ProxyNodes();
                $obj->deserialize($value);
                array_push($this->Proxy, $obj);
            }
        }

        if (array_key_exists("RedisCount",$param) and $param["RedisCount"] !== null) {
            $this->RedisCount = $param["RedisCount"];
        }

        if (array_key_exists("Redis",$param) and $param["Redis"] !== null) {
            $this->Redis = [];
            foreach ($param["Redis"] as $key => $value){
                $obj = new RedisNodes();
                $obj->deserialize($value);
                array_push($this->Redis, $obj);
            }
        }

        if (array_key_exists("TendisCount",$param) and $param["TendisCount"] !== null) {
            $this->TendisCount = $param["TendisCount"];
        }

        if (array_key_exists("Tendis",$param) and $param["Tendis"] !== null) {
            $this->Tendis = [];
            foreach ($param["Tendis"] as $key => $value){
                $obj = new TendisNodes();
                $obj->deserialize($value);
                array_push($this->Tendis, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
