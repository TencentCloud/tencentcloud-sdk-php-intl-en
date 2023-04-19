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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ID of the idle CLB instance
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getLoadBalancerName() Obtain CLB instance name
 * @method void setLoadBalancerName(string $LoadBalancerName) Set CLB instance name
 * @method string getRegion() Obtain CLB instance region
 * @method void setRegion(string $Region) Set CLB instance region
 * @method string getVip() Obtain CLB instance VIP
 * @method void setVip(string $Vip) Set CLB instance VIP
 * @method string getIdleReason() Obtain The reason why the load balancer is considered idle. `NO_RULES`: No rules configured. `NO_RS`: The rules are not associated with servers.
 * @method void setIdleReason(string $IdleReason) Set The reason why the load balancer is considered idle. `NO_RULES`: No rules configured. `NO_RS`: The rules are not associated with servers.
 * @method integer getStatus() Obtain CLB instance status, including:
`0`: Creating; `1`: Running.
 * @method void setStatus(integer $Status) Set CLB instance status, including:
`0`: Creating; `1`: Running.
 * @method integer getForward() Obtain CLB type. Value range: `1` (CLB); `0` (classic CLB).
 * @method void setForward(integer $Forward) Set CLB type. Value range: `1` (CLB); `0` (classic CLB).
 * @method string getDomain() Obtain The load balancing hostname.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set The load balancing hostname.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class IdleLoadBalancer extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB instance name
     */
    public $LoadBalancerName;

    /**
     * @var string CLB instance region
     */
    public $Region;

    /**
     * @var string CLB instance VIP
     */
    public $Vip;

    /**
     * @var string The reason why the load balancer is considered idle. `NO_RULES`: No rules configured. `NO_RS`: The rules are not associated with servers.
     */
    public $IdleReason;

    /**
     * @var integer CLB instance status, including:
`0`: Creating; `1`: Running.
     */
    public $Status;

    /**
     * @var integer CLB type. Value range: `1` (CLB); `0` (classic CLB).
     */
    public $Forward;

    /**
     * @var string The load balancing hostname.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $LoadBalancerName CLB instance name
     * @param string $Region CLB instance region
     * @param string $Vip CLB instance VIP
     * @param string $IdleReason The reason why the load balancer is considered idle. `NO_RULES`: No rules configured. `NO_RS`: The rules are not associated with servers.
     * @param integer $Status CLB instance status, including:
`0`: Creating; `1`: Running.
     * @param integer $Forward CLB type. Value range: `1` (CLB); `0` (classic CLB).
     * @param string $Domain The load balancing hostname.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("IdleReason",$param) and $param["IdleReason"] !== null) {
            $this->IdleReason = $param["IdleReason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
