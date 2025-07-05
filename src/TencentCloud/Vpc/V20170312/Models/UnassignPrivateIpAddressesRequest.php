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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnassignPrivateIpAddresses request structure.
 *
 * @method string getNetworkInterfaceId() Obtain The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the ENI instance, such as `eni-m6dyj72l`.
 * @method array getPrivateIpAddresses() Obtain The information of the specified private IPs. You can specify a maximum of 10 each time.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set The information of the specified private IPs. You can specify a maximum of 10 each time.
 * @method string getInstanceId() Obtain Instance ID of the server bound with this IP. This parameter is only applicable when you need to return an IP and unbind the related servers.
 * @method void setInstanceId(string $InstanceId) Set Instance ID of the server bound with this IP. This parameter is only applicable when you need to return an IP and unbind the related servers.
 */
class UnassignPrivateIpAddressesRequest extends AbstractModel
{
    /**
     * @var string The ID of the ENI instance, such as `eni-m6dyj72l`.
     */
    public $NetworkInterfaceId;

    /**
     * @var array The information of the specified private IPs. You can specify a maximum of 10 each time.
     */
    public $PrivateIpAddresses;

    /**
     * @var string Instance ID of the server bound with this IP. This parameter is only applicable when you need to return an IP and unbind the related servers.
     */
    public $InstanceId;

    /**
     * @param string $NetworkInterfaceId The ID of the ENI instance, such as `eni-m6dyj72l`.
     * @param array $PrivateIpAddresses The information of the specified private IPs. You can specify a maximum of 10 each time.
     * @param string $InstanceId Instance ID of the server bound with this IP. This parameter is only applicable when you need to return an IP and unbind the related servers.
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
