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
 * AssignIpv6Addresses request structure.
 *
 * @method string getNetworkInterfaceId() Obtain The `ID` of the ENI instance, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The `ID` of the ENI instance, such as `eni-m6dyj72l`.
 * @method array getIpv6Addresses() Obtain A list of `IPv6` addresses. You can specify a maximum of 10 at one time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
 * @method void setIpv6Addresses(array $Ipv6Addresses) Set A list of `IPv6` addresses. You can specify a maximum of 10 at one time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
 * @method integer getIpv6AddressCount() Obtain The number of automatically assigned `IPv6` addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set The number of automatically assigned `IPv6` addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
 */
class AssignIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string The `ID` of the ENI instance, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var array A list of `IPv6` addresses. You can specify a maximum of 10 at one time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
     */
    public $Ipv6Addresses;

    /**
     * @var integer The number of automatically assigned `IPv6` addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
     */
    public $Ipv6AddressCount;

    /**
     * @param string $NetworkInterfaceId The `ID` of the ENI instance, such as `eni-m6dyj72l`.
     * @param array $Ipv6Addresses A list of `IPv6` addresses. You can specify a maximum of 10 at one time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
     * @param integer $Ipv6AddressCount The number of automatically assigned `IPv6` addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("Ipv6Addresses",$param) and $param["Ipv6Addresses"] !== null) {
            $this->Ipv6Addresses = [];
            foreach ($param["Ipv6Addresses"] as $key => $value){
                $obj = new Ipv6Address();
                $obj->deserialize($value);
                array_push($this->Ipv6Addresses, $obj);
            }
        }

        if (array_key_exists("Ipv6AddressCount",$param) and $param["Ipv6AddressCount"] !== null) {
            $this->Ipv6AddressCount = $param["Ipv6AddressCount"];
        }
    }
}
