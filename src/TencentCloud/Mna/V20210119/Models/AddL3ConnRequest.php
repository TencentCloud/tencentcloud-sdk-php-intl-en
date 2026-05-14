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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddL3Conn request structure.
 *
 * @method string getCidr1() Obtain Set the interconnect CIDR1. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
 * @method void setCidr1(string $Cidr1) Set Set the interconnect CIDR1. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
 * @method string getCidr2() Obtain Set the interconnection CIDR2. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
 * @method void setCidr2(string $Cidr2) Set Set the interconnection CIDR2. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
 * @method string getDeviceId1() Obtain Device ID corresponding to CIDR1
 * @method void setDeviceId1(string $DeviceId1) Set Device ID corresponding to CIDR1
 * @method string getDeviceId2() Obtain Device ID corresponding to CIDR2
 * @method void setDeviceId2(string $DeviceId2) Set Device ID corresponding to CIDR2
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 */
class AddL3ConnRequest extends AbstractModel
{
    /**
     * @var string Set the interconnect CIDR1. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
     */
    public $Cidr1;

    /**
     * @var string Set the interconnection CIDR2. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
     */
    public $Cidr2;

    /**
     * @var string Device ID corresponding to CIDR1
     */
    public $DeviceId1;

    /**
     * @var string Device ID corresponding to CIDR2
     */
    public $DeviceId2;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @param string $Cidr1 Set the interconnect CIDR1. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
     * @param string $Cidr2 Set the interconnection CIDR2. Supported ranges: 10.0.0.0 - 10.255.255.255, 172.16.0.0 - 172.31.255.255, 192.168.0.0 - 192.168.255.255.
     * @param string $DeviceId1 Device ID corresponding to CIDR1
     * @param string $DeviceId2 Device ID corresponding to CIDR2
     * @param string $Description Rule description
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
        if (array_key_exists("Cidr1",$param) and $param["Cidr1"] !== null) {
            $this->Cidr1 = $param["Cidr1"];
        }

        if (array_key_exists("Cidr2",$param) and $param["Cidr2"] !== null) {
            $this->Cidr2 = $param["Cidr2"];
        }

        if (array_key_exists("DeviceId1",$param) and $param["DeviceId1"] !== null) {
            $this->DeviceId1 = $param["DeviceId1"];
        }

        if (array_key_exists("DeviceId2",$param) and $param["DeviceId2"] !== null) {
            $this->DeviceId2 = $param["DeviceId2"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
