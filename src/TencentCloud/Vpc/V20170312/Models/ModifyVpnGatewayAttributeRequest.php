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
 * ModifyVpnGatewayAttribute request structure.
 *
 * @method string getVpnGatewayId() Obtain The ID of the VPN gateway instance.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set The ID of the VPN gateway instance.
 * @method string getVpnGatewayName() Obtain The VPN gateway name. The maximum length is 60 bytes.
 * @method void setVpnGatewayName(string $VpnGatewayName) Set The VPN gateway name. The maximum length is 60 bytes.
 * @method string getInstanceChargeType() Obtain VPN gateway billing mode. Currently, only the conversion of prepaid (monthly subscription) to postpaid (that is, pay-as-you-go) is supported. That is, the parameters only supports POSTPAID_BY_HOUR.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set VPN gateway billing mode. Currently, only the conversion of prepaid (monthly subscription) to postpaid (that is, pay-as-you-go) is supported. That is, the parameters only supports POSTPAID_BY_HOUR.
 */
class ModifyVpnGatewayAttributeRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPN gateway instance.
     */
    public $VpnGatewayId;

    /**
     * @var string The VPN gateway name. The maximum length is 60 bytes.
     */
    public $VpnGatewayName;

    /**
     * @var string VPN gateway billing mode. Currently, only the conversion of prepaid (monthly subscription) to postpaid (that is, pay-as-you-go) is supported. That is, the parameters only supports POSTPAID_BY_HOUR.
     */
    public $InstanceChargeType;

    /**
     * @param string $VpnGatewayId The ID of the VPN gateway instance.
     * @param string $VpnGatewayName The VPN gateway name. The maximum length is 60 bytes.
     * @param string $InstanceChargeType VPN gateway billing mode. Currently, only the conversion of prepaid (monthly subscription) to postpaid (that is, pay-as-you-go) is supported. That is, the parameters only supports POSTPAID_BY_HOUR.
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }
    }
}
