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
 * ModifyNatGatewayDestinationIpPortTranslationNatRule request structure.
 *
 * @method string getNatGatewayId() Obtain The ID of the NAT gateway, such as `nat-df45454`.
 * @method void setNatGatewayId(string $NatGatewayId) Set The ID of the NAT gateway, such as `nat-df45454`.
 * @method DestinationIpPortTranslationNatRule getSourceNatRule() Obtain The port forwarding rule of the source NAT gateway.
 * @method void setSourceNatRule(DestinationIpPortTranslationNatRule $SourceNatRule) Set The port forwarding rule of the source NAT gateway.
 * @method DestinationIpPortTranslationNatRule getDestinationNatRule() Obtain The port forwarding rule of the destination NAT gateway.
 * @method void setDestinationNatRule(DestinationIpPortTranslationNatRule $DestinationNatRule) Set The port forwarding rule of the destination NAT gateway.
 */
class ModifyNatGatewayDestinationIpPortTranslationNatRuleRequest extends AbstractModel
{
    /**
     * @var string The ID of the NAT gateway, such as `nat-df45454`.
     */
    public $NatGatewayId;

    /**
     * @var DestinationIpPortTranslationNatRule The port forwarding rule of the source NAT gateway.
     */
    public $SourceNatRule;

    /**
     * @var DestinationIpPortTranslationNatRule The port forwarding rule of the destination NAT gateway.
     */
    public $DestinationNatRule;

    /**
     * @param string $NatGatewayId The ID of the NAT gateway, such as `nat-df45454`.
     * @param DestinationIpPortTranslationNatRule $SourceNatRule The port forwarding rule of the source NAT gateway.
     * @param DestinationIpPortTranslationNatRule $DestinationNatRule The port forwarding rule of the destination NAT gateway.
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

        if (array_key_exists("SourceNatRule",$param) and $param["SourceNatRule"] !== null) {
            $this->SourceNatRule = new DestinationIpPortTranslationNatRule();
            $this->SourceNatRule->deserialize($param["SourceNatRule"]);
        }

        if (array_key_exists("DestinationNatRule",$param) and $param["DestinationNatRule"] !== null) {
            $this->DestinationNatRule = new DestinationIpPortTranslationNatRule();
            $this->DestinationNatRule->deserialize($param["DestinationNatRule"]);
        }
    }
}
