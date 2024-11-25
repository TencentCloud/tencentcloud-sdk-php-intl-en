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
 * AssignPrivateIpAddresses request structure.
 *
 * @method string getNetworkInterfaceId() Obtain The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method array getPrivateIpAddresses() Obtain The information on private IP addresses, of which you can specify a maximum of 10 at a time. You should provide either this parameter or SecondaryPrivateIpAddressCount, or both.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set The information on private IP addresses, of which you can specify a maximum of 10 at a time. You should provide either this parameter or SecondaryPrivateIpAddressCount, or both.
 * @method integer getSecondaryPrivateIpAddressCount() Obtain The number of newly-applied private IP addresses. You should provide either this parameter or PrivateIpAddresses, or both. The total number of private IP addresses cannot exceed the quota. For more information, see<a href="/document/product/576/18527">ENI Use Limits</a>.
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) Set The number of newly-applied private IP addresses. You should provide either this parameter or PrivateIpAddresses, or both. The total number of private IP addresses cannot exceed the quota. For more information, see<a href="/document/product/576/18527">ENI Use Limits</a>.
 * @method string getQosLevel() Obtain IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT (Default).
 * @method void setQosLevel(string $QosLevel) Set IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT (Default).
 * @method string getClientToken() Obtain 
 * @method void setClientToken(string $ClientToken) Set 
 */
class AssignPrivateIpAddressesRequest extends AbstractModel
{
    /**
     * @var string The ID of the ENI instance, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var array The information on private IP addresses, of which you can specify a maximum of 10 at a time. You should provide either this parameter or SecondaryPrivateIpAddressCount, or both.
     */
    public $PrivateIpAddresses;

    /**
     * @var integer The number of newly-applied private IP addresses. You should provide either this parameter or PrivateIpAddresses, or both. The total number of private IP addresses cannot exceed the quota. For more information, see<a href="/document/product/576/18527">ENI Use Limits</a>.
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @var string IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT (Default).
     */
    public $QosLevel;

    /**
     * @var string 
     */
    public $ClientToken;

    /**
     * @param string $NetworkInterfaceId The ID of the ENI instance, such as `eni-m6dyj72l`.
     * @param array $PrivateIpAddresses The information on private IP addresses, of which you can specify a maximum of 10 at a time. You should provide either this parameter or SecondaryPrivateIpAddressCount, or both.
     * @param integer $SecondaryPrivateIpAddressCount The number of newly-applied private IP addresses. You should provide either this parameter or PrivateIpAddresses, or both. The total number of private IP addresses cannot exceed the quota. For more information, see<a href="/document/product/576/18527">ENI Use Limits</a>.
     * @param string $QosLevel IP service level. It is used together with `SecondaryPrivateIpAddressCount`. Values: PT` (Gold), `AU` (Silver), `AG `(Bronze) and DEFAULT (Default).
     * @param string $ClientToken 
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

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
