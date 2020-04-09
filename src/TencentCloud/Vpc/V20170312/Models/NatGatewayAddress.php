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
 * The EIP bound to the NAT gateway
 *
 * @method string getAddressId() Obtain The unique ID of the Elastic IP (EIP), such as `eip-11112222`.
 * @method void setAddressId(string $AddressId) Set The unique ID of the Elastic IP (EIP), such as `eip-11112222`.
 * @method string getPublicIpAddress() Obtain The public IP address, such as `123.121.34.33`.
 * @method void setPublicIpAddress(string $PublicIpAddress) Set The public IP address, such as `123.121.34.33`.
 * @method boolean getIsBlocked() Obtain The block status of the resource. `true` indicates the EIP is blocked. `false` indicates that the EIP is not blocked.
 * @method void setIsBlocked(boolean $IsBlocked) Set The block status of the resource. `true` indicates the EIP is blocked. `false` indicates that the EIP is not blocked.
 */
class NatGatewayAddress extends AbstractModel
{
    /**
     * @var string The unique ID of the Elastic IP (EIP), such as `eip-11112222`.
     */
    public $AddressId;

    /**
     * @var string The public IP address, such as `123.121.34.33`.
     */
    public $PublicIpAddress;

    /**
     * @var boolean The block status of the resource. `true` indicates the EIP is blocked. `false` indicates that the EIP is not blocked.
     */
    public $IsBlocked;

    /**
     * @param string $AddressId The unique ID of the Elastic IP (EIP), such as `eip-11112222`.
     * @param string $PublicIpAddress The public IP address, such as `123.121.34.33`.
     * @param boolean $IsBlocked The block status of the resource. `true` indicates the EIP is blocked. `false` indicates that the EIP is not blocked.
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("IsBlocked",$param) and $param["IsBlocked"] !== null) {
            $this->IsBlocked = $param["IsBlocked"];
        }
    }
}
