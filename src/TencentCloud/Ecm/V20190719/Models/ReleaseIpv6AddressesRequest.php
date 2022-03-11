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
 * ReleaseIpv6Addresses request structure.
 *
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getNetworkInterfaceId() Obtain ENI instance ID, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ENI instance ID, such as `eni-m6dyj72l`.
 * @method array getIpv6Addresses() Obtain List of the specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time.
 * @method void setIpv6Addresses(array $Ipv6Addresses) Set List of the specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time.
 */
class ReleaseIpv6AddressesRequest extends AbstractModel
{
    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string ENI instance ID, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var array List of the specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time.
     */
    public $Ipv6Addresses;

    /**
     * @param string $EcmRegion ECM region
     * @param string $NetworkInterfaceId ENI instance ID, such as `eni-m6dyj72l`.
     * @param array $Ipv6Addresses List of the specified IPv6 addresses. You can specify up to 10 IPv6 addresses at a time.
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
    }
}
