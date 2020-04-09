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
 * VPC private IP object.
 *
 * @method string getPrivateIpAddress() Obtain `VPC` private `IP`.
 * @method void setPrivateIpAddress(string $PrivateIpAddress) Set `VPC` private `IP`.
 * @method string getCidrBlock() Obtain The `CIDR` belonging to the subnet.
 * @method void setCidrBlock(string $CidrBlock) Set The `CIDR` belonging to the subnet.
 * @method string getPrivateIpAddressType() Obtain Private `IP` type.
 * @method void setPrivateIpAddressType(string $PrivateIpAddressType) Set Private `IP` type.
 * @method string getCreatedTime() Obtain `IP` application time.
 * @method void setCreatedTime(string $CreatedTime) Set `IP` application time.
 */
class VpcPrivateIpAddress extends AbstractModel
{
    /**
     * @var string `VPC` private `IP`.
     */
    public $PrivateIpAddress;

    /**
     * @var string The `CIDR` belonging to the subnet.
     */
    public $CidrBlock;

    /**
     * @var string Private `IP` type.
     */
    public $PrivateIpAddressType;

    /**
     * @var string `IP` application time.
     */
    public $CreatedTime;

    /**
     * @param string $PrivateIpAddress `VPC` private `IP`.
     * @param string $CidrBlock The `CIDR` belonging to the subnet.
     * @param string $PrivateIpAddressType Private `IP` type.
     * @param string $CreatedTime `IP` application time.
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
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("PrivateIpAddressType",$param) and $param["PrivateIpAddressType"] !== null) {
            $this->PrivateIpAddressType = $param["PrivateIpAddressType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
