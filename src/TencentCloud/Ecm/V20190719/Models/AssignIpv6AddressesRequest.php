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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssignIpv6Addresses request structure.
 *
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getNetworkInterfaceId() Obtain ENI instance ID, such as `eni-1snva0vd`. Currently, only the primary ENI will be assigned the ID.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ENI instance ID, such as `eni-1snva0vd`. Currently, only the primary ENI will be assigned the ID.
 * @method array getIpv6Addresses() Obtain List of specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
 * @method void setIpv6Addresses(array $Ipv6Addresses) Set List of specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
 * @method integer getIpv6AddressCount() Obtain Number of automatically assigned IPv6 addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
 * @method void setIpv6AddressCount(integer $Ipv6AddressCount) Set Number of automatically assigned IPv6 addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
 * @method string getIpv6ISP() Obtain Ipv6 ISP. Valid values:
`CTCC`: China Telecom
`CUCC`: China Unicom
`CMCC`: China Mobile
 * @method void setIpv6ISP(string $Ipv6ISP) Set Ipv6 ISP. Valid values:
`CTCC`: China Telecom
`CUCC`: China Unicom
`CMCC`: China Mobile
 */
class AssignIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string ENI instance ID, such as `eni-1snva0vd`. Currently, only the primary ENI will be assigned the ID.
     */
    public $NetworkInterfaceId;

    /**
     * @var array List of specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
     */
    public $Ipv6Addresses;

    /**
     * @var integer Number of automatically assigned IPv6 addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
     */
    public $Ipv6AddressCount;

    /**
     * @var string Ipv6 ISP. Valid values:
`CTCC`: China Telecom
`CUCC`: China Unicom
`CMCC`: China Mobile
     */
    public $Ipv6ISP;

    /**
     * @param string $EcmRegion ECM region
     * @param string $NetworkInterfaceId ENI instance ID, such as `eni-1snva0vd`. Currently, only the primary ENI will be assigned the ID.
     * @param array $Ipv6Addresses List of specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time. The quota is calculated together with that of `Ipv6AddressCount`, a required input parameter alternative to this one.
     * @param integer $Ipv6AddressCount Number of automatically assigned IPv6 addresses. The total number of private IP addresses cannot exceed the quota. The quota is calculated together with that of `Ipv6Addresses`, a required input parameter alternative to this one.
     * @param string $Ipv6ISP Ipv6 ISP. Valid values:
`CTCC`: China Telecom
`CUCC`: China Unicom
`CMCC`: China Mobile
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
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

        if (array_key_exists("Ipv6ISP",$param) and $param["Ipv6ISP"] !== null) {
            $this->Ipv6ISP = $param["Ipv6ISP"];
        }
    }
}
