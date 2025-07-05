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
 * DisassociateIPv6Address request structure.
 *
 * @method string getIPv6AddressId() Obtain Indicates the unique ID of the EIPv6, such as eipv6-11112222.
 * @method void setIPv6AddressId(string $IPv6AddressId) Set Indicates the unique ID of the EIPv6, such as eipv6-11112222.
 * @method boolean getKeepBindWithEni() Obtain Indicates whether to keep the ENI bound when unbinding.
 * @method void setKeepBindWithEni(boolean $KeepBindWithEni) Set Indicates whether to keep the ENI bound when unbinding.
 */
class DisassociateIPv6AddressRequest extends AbstractModel
{
    /**
     * @var string Indicates the unique ID of the EIPv6, such as eipv6-11112222.
     */
    public $IPv6AddressId;

    /**
     * @var boolean Indicates whether to keep the ENI bound when unbinding.
     */
    public $KeepBindWithEni;

    /**
     * @param string $IPv6AddressId Indicates the unique ID of the EIPv6, such as eipv6-11112222.
     * @param boolean $KeepBindWithEni Indicates whether to keep the ENI bound when unbinding.
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
        if (array_key_exists("IPv6AddressId",$param) and $param["IPv6AddressId"] !== null) {
            $this->IPv6AddressId = $param["IPv6AddressId"];
        }

        if (array_key_exists("KeepBindWithEni",$param) and $param["KeepBindWithEni"] !== null) {
            $this->KeepBindWithEni = $param["KeepBindWithEni"];
        }
    }
}
