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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取符合条件的对象数。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的对象数。
 * @method array getGatewayFlowMonitorDetailSet() 获取网关流量监控明细。
 * @method void setGatewayFlowMonitorDetailSet(array $GatewayFlowMonitorDetailSet) 设置网关流量监控明细。
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeGatewayFlowMonitorDetail response structure.
 */
class DescribeGatewayFlowMonitorDetailResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的对象数。
     */
    public $TotalCount;

    /**
     * @var array 网关流量监控明细。
     */
    public $GatewayFlowMonitorDetailSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 符合条件的对象数。
     * @param array $GatewayFlowMonitorDetailSet 网关流量监控明细。
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

        if (array_key_exists("GatewayFlowMonitorDetailSet",$param) and $param["GatewayFlowMonitorDetailSet"] !== null) {
            $this->GatewayFlowMonitorDetailSet = [];
            foreach ($param["GatewayFlowMonitorDetailSet"] as $key => $value){
                $obj = new GatewayFlowMonitorDetail();
                $obj->deserialize($value);
                array_push($this->GatewayFlowMonitorDetailSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
