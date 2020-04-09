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
 * VPC private IPv6 object.
 *
 * @method string getIpv6Address() Obtain `VPC` private `IPv6` address
 * @method void setIpv6Address(string $Ipv6Address) Set `VPC` private `IPv6` address
 * @method string getCidrBlock() Obtain The `IPv6` `CIDR` belonging to the subnet.
 * @method void setCidrBlock(string $CidrBlock) Set The `IPv6` `CIDR` belonging to the subnet.
 * @method string getIpv6AddressType() Obtain `IPv6` type.
 * @method void setIpv6AddressType(string $Ipv6AddressType) Set `IPv6` type.
 * @method string getCreatedTime() Obtain `IPv6` application time.
 * @method void setCreatedTime(string $CreatedTime) Set `IPv6` application time.
 */
class VpcIpv6Address extends AbstractModel
{
    /**
     * @var string `VPC` private `IPv6` address
     */
    public $Ipv6Address;

    /**
     * @var string The `IPv6` `CIDR` belonging to the subnet.
     */
    public $CidrBlock;

    /**
     * @var string `IPv6` type.
     */
    public $Ipv6AddressType;

    /**
     * @var string `IPv6` application time.
     */
    public $CreatedTime;

    /**
     * @param string $Ipv6Address `VPC` private `IPv6` address
     * @param string $CidrBlock The `IPv6` `CIDR` belonging to the subnet.
     * @param string $Ipv6AddressType `IPv6` type.
     * @param string $CreatedTime `IPv6` application time.
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
        if (array_key_exists("Ipv6Address",$param) and $param["Ipv6Address"] !== null) {
            $this->Ipv6Address = $param["Ipv6Address"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6AddressType",$param) and $param["Ipv6AddressType"] !== null) {
            $this->Ipv6AddressType = $param["Ipv6AddressType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
