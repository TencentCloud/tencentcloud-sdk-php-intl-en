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
 * DeleteNatGatewaySourceIpTranslationNatRule request structure.
 *
 * @method string getNatGatewayId() Obtain The ID of the NAT Gateway, such as `nat-df45454`
 * @method void setNatGatewayId(string $NatGatewayId) Set The ID of the NAT Gateway, such as `nat-df45454`
 * @method array getNatGatewaySnatIds() Obtain The list of SNAT rule IDs of a NAT Gateway, such as `snat-df43254`
 * @method void setNatGatewaySnatIds(array $NatGatewaySnatIds) Set The list of SNAT rule IDs of a NAT Gateway, such as `snat-df43254`
 */
class DeleteNatGatewaySourceIpTranslationNatRuleRequest extends AbstractModel
{
    /**
     * @var string The ID of the NAT Gateway, such as `nat-df45454`
     */
    public $NatGatewayId;

    /**
     * @var array The list of SNAT rule IDs of a NAT Gateway, such as `snat-df43254`
     */
    public $NatGatewaySnatIds;

    /**
     * @param string $NatGatewayId The ID of the NAT Gateway, such as `nat-df45454`
     * @param array $NatGatewaySnatIds The list of SNAT rule IDs of a NAT Gateway, such as `snat-df43254`
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
        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("NatGatewaySnatIds",$param) and $param["NatGatewaySnatIds"] !== null) {
            $this->NatGatewaySnatIds = $param["NatGatewaySnatIds"];
        }
    }
}
