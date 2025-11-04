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
 * Returns multi-operator IPv6 Cidr Block.
 *
 * @method string getIPv6CidrBlock() Obtain IPv6 CIdr Block
 * @method void setIPv6CidrBlock(string $IPv6CidrBlock) Set IPv6 CIdr Block
 * @method string getISPType() Obtain Network operator type. valid values: 'BGP' (default), 'CMCC' (china mobile), 'CTCC' (china telecom), 'CUCC' (china unicom).
 * @method void setISPType(string $ISPType) Set Network operator type. valid values: 'BGP' (default), 'CMCC' (china mobile), 'CTCC' (china telecom), 'CUCC' (china unicom).
 * @method string getAddressType() Obtain Specifies the type of IPv6 Cidr: `GUA` (global unicast address), `ULA` (unique local address).
 * @method void setAddressType(string $AddressType) Set Specifies the type of IPv6 Cidr: `GUA` (global unicast address), `ULA` (unique local address).
 */
class ISPIPv6CidrBlock extends AbstractModel
{
    /**
     * @var string IPv6 CIdr Block
     */
    public $IPv6CidrBlock;

    /**
     * @var string Network operator type. valid values: 'BGP' (default), 'CMCC' (china mobile), 'CTCC' (china telecom), 'CUCC' (china unicom).
     */
    public $ISPType;

    /**
     * @var string Specifies the type of IPv6 Cidr: `GUA` (global unicast address), `ULA` (unique local address).
     */
    public $AddressType;

    /**
     * @param string $IPv6CidrBlock IPv6 CIdr Block
     * @param string $ISPType Network operator type. valid values: 'BGP' (default), 'CMCC' (china mobile), 'CTCC' (china telecom), 'CUCC' (china unicom).
     * @param string $AddressType Specifies the type of IPv6 Cidr: `GUA` (global unicast address), `ULA` (unique local address).
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
        if (array_key_exists("IPv6CidrBlock",$param) and $param["IPv6CidrBlock"] !== null) {
            $this->IPv6CidrBlock = $param["IPv6CidrBlock"];
        }

        if (array_key_exists("ISPType",$param) and $param["ISPType"] !== null) {
            $this->ISPType = $param["ISPType"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }
    }
}
