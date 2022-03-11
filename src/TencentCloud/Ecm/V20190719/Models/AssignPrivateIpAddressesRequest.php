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
 * AssignPrivateIpAddresses request structure.
 *
 * @method string getNetworkInterfaceId() Obtain ENI instance ID, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ENI instance ID, such as `eni-m6dyj72l`.
 * @method string getEcmRegion() Obtain ECM region, such as `ap-xian-ecm`.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region, such as `ap-xian-ecm`.
 * @method array getPrivateIpAddresses() Obtain Information of the specified private IPs. You can specify up to 10 IPs at a time. You must provide either this parameter or `SecondaryPrivateIpAddressCount`, or both.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set Information of the specified private IPs. You can specify up to 10 IPs at a time. You must provide either this parameter or `SecondaryPrivateIpAddressCount`, or both.
 * @method integer getSecondaryPrivateIpAddressCount() Obtain Number of private IP addresses applied for. You must provide either this parameter or `PrivateIpAddresses`, or both. The total number of private IP addresses cannot exceed the quota.
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) Set Number of private IP addresses applied for. You must provide either this parameter or `PrivateIpAddresses`, or both. The total number of private IP addresses cannot exceed the quota.
 */
class AssignPrivateIpAddressesRequest extends AbstractModel
{
    /**
     * @var string ENI instance ID, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string ECM region, such as `ap-xian-ecm`.
     */
    public $EcmRegion;

    /**
     * @var array Information of the specified private IPs. You can specify up to 10 IPs at a time. You must provide either this parameter or `SecondaryPrivateIpAddressCount`, or both.
     */
    public $PrivateIpAddresses;

    /**
     * @var integer Number of private IP addresses applied for. You must provide either this parameter or `PrivateIpAddresses`, or both. The total number of private IP addresses cannot exceed the quota.
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @param string $NetworkInterfaceId ENI instance ID, such as `eni-m6dyj72l`.
     * @param string $EcmRegion ECM region, such as `ap-xian-ecm`.
     * @param array $PrivateIpAddresses Information of the specified private IPs. You can specify up to 10 IPs at a time. You must provide either this parameter or `SecondaryPrivateIpAddressCount`, or both.
     * @param integer $SecondaryPrivateIpAddressCount Number of private IP addresses applied for. You must provide either this parameter or `PrivateIpAddresses`, or both. The total number of private IP addresses cannot exceed the quota.
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

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }
    }
}
