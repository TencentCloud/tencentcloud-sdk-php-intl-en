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
 * SetVpnGatewaysRenewFlag request structure.
 *
 * @method array getVpnGatewayIds() Obtain VPN gateway IDs
 * @method void setVpnGatewayIds(array $VpnGatewayIds) Set VPN gateway IDs
 * @method integer getAutoRenewFlag() Obtain Status of auto-renewal
Values: `0` (Follow original), `1` (Enable auto-renewal), `2` (Disable auto-renewal) 
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Status of auto-renewal
Values: `0` (Follow original), `1` (Enable auto-renewal), `2` (Disable auto-renewal) 
 * @method string getType() Obtain VPNGW type: `IPSEC`, `SSL`
 * @method void setType(string $Type) Set VPNGW type: `IPSEC`, `SSL`
 */
class SetVpnGatewaysRenewFlagRequest extends AbstractModel
{
    /**
     * @var array VPN gateway IDs
     */
    public $VpnGatewayIds;

    /**
     * @var integer Status of auto-renewal
Values: `0` (Follow original), `1` (Enable auto-renewal), `2` (Disable auto-renewal) 
     */
    public $AutoRenewFlag;

    /**
     * @var string VPNGW type: `IPSEC`, `SSL`
     */
    public $Type;

    /**
     * @param array $VpnGatewayIds VPN gateway IDs
     * @param integer $AutoRenewFlag Status of auto-renewal
Values: `0` (Follow original), `1` (Enable auto-renewal), `2` (Disable auto-renewal) 
     * @param string $Type VPNGW type: `IPSEC`, `SSL`
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
        if (array_key_exists("VpnGatewayIds",$param) and $param["VpnGatewayIds"] !== null) {
            $this->VpnGatewayIds = $param["VpnGatewayIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
