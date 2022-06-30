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
 * RefreshDirectConnectGatewayRouteToNatGateway request structure.
 *
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getNatGatewayId() Obtain The NAT gateway ID.
 * @method void setNatGatewayId(string $NatGatewayId) Set The NAT gateway ID.
 * @method boolean getDryRun() Obtain Whether it is pre-refresh. Valid values: `True` (yes) and `False` (no)
 * @method void setDryRun(boolean $DryRun) Set Whether it is pre-refresh. Valid values: `True` (yes) and `False` (no)
 */
class RefreshDirectConnectGatewayRouteToNatGatewayRequest extends AbstractModel
{
    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string The NAT gateway ID.
     */
    public $NatGatewayId;

    /**
     * @var boolean Whether it is pre-refresh. Valid values: `True` (yes) and `False` (no)
     */
    public $DryRun;

    /**
     * @param string $VpcId VPC ID
     * @param string $NatGatewayId The NAT gateway ID.
     * @param boolean $DryRun Whether it is pre-refresh. Valid values: `True` (yes) and `False` (no)
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
