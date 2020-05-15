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
 * InquiryPriceRenewVpnGateway request structure.
 *
 * @method string getVpnGatewayId() Obtain The ID of the VPN gateway instance.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set The ID of the VPN gateway instance.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Specifies the purchased validity period, whether to enable auto-renewal. This parameter is required for monthly-subscription instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Specifies the purchased validity period, whether to enable auto-renewal. This parameter is required for monthly-subscription instances.
 */
class InquiryPriceRenewVpnGatewayRequest extends AbstractModel
{
    /**
     * @var string The ID of the VPN gateway instance.
     */
    public $VpnGatewayId;

    /**
     * @var InstanceChargePrepaid Specifies the purchased validity period, whether to enable auto-renewal. This parameter is required for monthly-subscription instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @param string $VpnGatewayId The ID of the VPN gateway instance.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Specifies the purchased validity period, whether to enable auto-renewal. This parameter is required for monthly-subscription instances.
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

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }
    }
}
