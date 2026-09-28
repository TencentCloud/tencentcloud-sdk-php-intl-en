<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AZ and subnet mapping structure
 *
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getZoneId() Obtain <p>Availability zone ID. Maximum support for adding 10 availability zones. If the current region supports 2 or more availability zones, at least 2 availability zones need to be added.<br>You can obtain the availability zone information corresponding to the availability zone ID by calling the <a href="https://www.tencentcloud.com/document/api/1822/133727?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Availability zone ID. Maximum support for adding 10 availability zones. If the current region supports 2 or more availability zones, at least 2 availability zones need to be added.<br>You can obtain the availability zone information corresponding to the availability zone ID by calling the <a href="https://www.tencentcloud.com/document/api/1822/133727?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method LoadBalancerAddress getLoadBalancerAddress() Obtain <p>Load balancing VIP/EIP information</p>
 * @method void setLoadBalancerAddress(LoadBalancerAddress $LoadBalancerAddress) Set <p>Load balancing VIP/EIP information</p>
 * @method string getStatus() Obtain <p>Availability zone status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Stopped</strong>: Stopped.</li><li><strong>Shifted</strong>: Has been removed.</li><li><strong>Starting</strong>: Starting.</li><li><strong>Stopping</strong>: Stopping.</li></ul>
 * @method void setStatus(string $Status) Set <p>Availability zone status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Stopped</strong>: Stopped.</li><li><strong>Shifted</strong>: Has been removed.</li><li><strong>Starting</strong>: Starting.</li><li><strong>Stopping</strong>: Stopping.</li></ul>
 */
class ZoneMappingInfo extends AbstractModel
{
    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Availability zone ID. Maximum support for adding 10 availability zones. If the current region supports 2 or more availability zones, at least 2 availability zones need to be added.<br>You can obtain the availability zone information corresponding to the availability zone ID by calling the <a href="https://www.tencentcloud.com/document/api/1822/133727?from_cn_redirect=1">DescribeZones</a> API.</p>
     */
    public $ZoneId;

    /**
     * @var LoadBalancerAddress <p>Load balancing VIP/EIP information</p>
     */
    public $LoadBalancerAddress;

    /**
     * @var string <p>Availability zone status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Stopped</strong>: Stopped.</li><li><strong>Shifted</strong>: Has been removed.</li><li><strong>Starting</strong>: Starting.</li><li><strong>Stopping</strong>: Stopping.</li></ul>
     */
    public $Status;

    /**
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $ZoneId <p>Availability zone ID. Maximum support for adding 10 availability zones. If the current region supports 2 or more availability zones, at least 2 availability zones need to be added.<br>You can obtain the availability zone information corresponding to the availability zone ID by calling the <a href="https://www.tencentcloud.com/document/api/1822/133727?from_cn_redirect=1">DescribeZones</a> API.</p>
     * @param LoadBalancerAddress $LoadBalancerAddress <p>Load balancing VIP/EIP information</p>
     * @param string $Status <p>Availability zone status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Stopped</strong>: Stopped.</li><li><strong>Shifted</strong>: Has been removed.</li><li><strong>Starting</strong>: Starting.</li><li><strong>Stopping</strong>: Stopping.</li></ul>
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LoadBalancerAddress",$param) and $param["LoadBalancerAddress"] !== null) {
            $this->LoadBalancerAddress = new LoadBalancerAddress();
            $this->LoadBalancerAddress->deserialize($param["LoadBalancerAddress"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
