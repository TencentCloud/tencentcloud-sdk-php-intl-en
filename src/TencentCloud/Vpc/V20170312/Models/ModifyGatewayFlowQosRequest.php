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
 * ModifyGatewayFlowQos request structure.
 *
 * @method string getGatewayId() Obtain Gateway instance ID, which currently supports these types:
ID of Direct Connect gateway instance, e.g. `dcg-ltjahce6`;
ID of NAT gateway instance, e.g. `nat-ltjahce6`;
ID of VPN gateway instance, e.g. `vpn-ltjahce6`.
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID, which currently supports these types:
ID of Direct Connect gateway instance, e.g. `dcg-ltjahce6`;
ID of NAT gateway instance, e.g. `nat-ltjahce6`;
ID of VPN gateway instance, e.g. `vpn-ltjahce6`.
 * @method integer getBandwidth() Obtain Bandwidth limit value in Mbps. Valid values: >0: set the limit to the specified value. 0: block all traffic. -1: no bandwidth limit.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth limit value in Mbps. Valid values: >0: set the limit to the specified value. 0: block all traffic. -1: no bandwidth limit.
 * @method array getIpAddresses() Obtain CVM private IP addresses with limited bandwidth.
 * @method void setIpAddresses(array $IpAddresses) Set CVM private IP addresses with limited bandwidth.
 */
class ModifyGatewayFlowQosRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID, which currently supports these types:
ID of Direct Connect gateway instance, e.g. `dcg-ltjahce6`;
ID of NAT gateway instance, e.g. `nat-ltjahce6`;
ID of VPN gateway instance, e.g. `vpn-ltjahce6`.
     */
    public $GatewayId;

    /**
     * @var integer Bandwidth limit value in Mbps. Valid values: >0: set the limit to the specified value. 0: block all traffic. -1: no bandwidth limit.
     */
    public $Bandwidth;

    /**
     * @var array CVM private IP addresses with limited bandwidth.
     */
    public $IpAddresses;

    /**
     * @param string $GatewayId Gateway instance ID, which currently supports these types:
ID of Direct Connect gateway instance, e.g. `dcg-ltjahce6`;
ID of NAT gateway instance, e.g. `nat-ltjahce6`;
ID of VPN gateway instance, e.g. `vpn-ltjahce6`.
     * @param integer $Bandwidth Bandwidth limit value in Mbps. Valid values: >0: set the limit to the specified value. 0: block all traffic. -1: no bandwidth limit.
     * @param array $IpAddresses CVM private IP addresses with limited bandwidth.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpAddresses",$param) and $param["IpAddresses"] !== null) {
            $this->IpAddresses = $param["IpAddresses"];
        }
    }
}
