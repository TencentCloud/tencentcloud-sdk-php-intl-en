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
 * @method array getProxySet() 获取Information of connections that the statistics can be derived from
 * @method void setProxySet(array $ProxySet) 设置Information of connections that the statistics can be derived from
 * @method integer getTotalCount() 获取Quantity of connections
 * @method void setTotalCount(integer $TotalCount) 设置Quantity of connections
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeProxyAndStatisticsListeners response structure.
 */
class DescribeProxyAndStatisticsListenersResponse extends AbstractModel
{
    /**
     * @var array Information of connections that the statistics can be derived from
     */
    public $ProxySet;

    /**
     * @var integer Quantity of connections
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $ProxySet Information of connections that the statistics can be derived from
     * @param integer $TotalCount Quantity of connections
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
        if (array_key_exists("ProxySet",$param) and $param["ProxySet"] !== null) {
            $this->ProxySet = [];
            foreach ($param["ProxySet"] as $key => $value){
                $obj = new ProxySimpleInfo();
                $obj->deserialize($value);
                array_push($this->ProxySet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
