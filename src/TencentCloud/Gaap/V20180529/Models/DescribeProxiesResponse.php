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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取Number of connections.
 * @method void setTotalCount(integer $TotalCount) 设置Number of connections.
 * @method array getInstanceSet() 获取Connection instance information list; It’s an old parameter, please switch to ProxySet.
 * @method void setInstanceSet(array $InstanceSet) 设置Connection instance information list; It’s an old parameter, please switch to ProxySet.
 * @method array getProxySet() 获取Connection instance information list; It’s a new parameter.
 * @method void setProxySet(array $ProxySet) 设置Connection instance information list; It’s a new parameter.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeProxies response structure.
 */
class DescribeProxiesResponse extends AbstractModel
{
    /**
     * @var integer Number of connections.
     */
    public $TotalCount;

    /**
     * @var array Connection instance information list; It’s an old parameter, please switch to ProxySet.
     */
    public $InstanceSet;

    /**
     * @var array Connection instance information list; It’s a new parameter.
     */
    public $ProxySet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Number of connections.
     * @param array $InstanceSet Connection instance information list; It’s an old parameter, please switch to ProxySet.
     * @param array $ProxySet Connection instance information list; It’s a new parameter.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new ProxyInfo();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("ProxySet",$param) and $param["ProxySet"] !== null) {
            $this->ProxySet = [];
            foreach ($param["ProxySet"] as $key => $value){
                $obj = new ProxyInfo();
                $obj->deserialize($value);
                array_push($this->ProxySet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
