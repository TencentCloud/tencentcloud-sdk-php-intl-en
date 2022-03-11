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
 * DisassociateAddress request structure.
 *
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getAddressId() Obtain Unique EIP ID, such as `eip-11112222`.
 * @method void setAddressId(string $AddressId) Set Unique EIP ID, such as `eip-11112222`.
 * @method boolean getReallocateNormalPublicIp() Obtain Indicates whether to assign a general public IP after unbinding an EIP. Valid values:
TRUE: yes
FALSE: no.
Default value: FALSE.

You can specify this parameter only under the following conditions:
You can specify this parameter only when you unbind an EIP from the primary private IP of the primary ENI.
An account can reassign a general public IP after unbinding an EIP 10 times a day. More information can be obtained through the `DescribeAddressQuota` API.
 * @method void setReallocateNormalPublicIp(boolean $ReallocateNormalPublicIp) Set Indicates whether to assign a general public IP after unbinding an EIP. Valid values:
TRUE: yes
FALSE: no.
Default value: FALSE.

You can specify this parameter only under the following conditions:
You can specify this parameter only when you unbind an EIP from the primary private IP of the primary ENI.
An account can reassign a general public IP after unbinding an EIP 10 times a day. More information can be obtained through the `DescribeAddressQuota` API.
 */
class DisassociateAddressRequest extends AbstractModel
{
    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string Unique EIP ID, such as `eip-11112222`.
     */
    public $AddressId;

    /**
     * @var boolean Indicates whether to assign a general public IP after unbinding an EIP. Valid values:
TRUE: yes
FALSE: no.
Default value: FALSE.

You can specify this parameter only under the following conditions:
You can specify this parameter only when you unbind an EIP from the primary private IP of the primary ENI.
An account can reassign a general public IP after unbinding an EIP 10 times a day. More information can be obtained through the `DescribeAddressQuota` API.
     */
    public $ReallocateNormalPublicIp;

    /**
     * @param string $EcmRegion ECM region
     * @param string $AddressId Unique EIP ID, such as `eip-11112222`.
     * @param boolean $ReallocateNormalPublicIp Indicates whether to assign a general public IP after unbinding an EIP. Valid values:
TRUE: yes
FALSE: no.
Default value: FALSE.

You can specify this parameter only under the following conditions:
You can specify this parameter only when you unbind an EIP from the primary private IP of the primary ENI.
An account can reassign a general public IP after unbinding an EIP 10 times a day. More information can be obtained through the `DescribeAddressQuota` API.
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

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("ReallocateNormalPublicIp",$param) and $param["ReallocateNormalPublicIp"] !== null) {
            $this->ReallocateNormalPublicIp = $param["ReallocateNormalPublicIp"];
        }
    }
}
