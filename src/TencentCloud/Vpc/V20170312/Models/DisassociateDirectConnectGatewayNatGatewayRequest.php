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
 * DisassociateDirectConnectGatewayNatGateway request structure.
 *
 * @method string getVpcId() Obtain The direct connect gateway ID.
 * @method void setVpcId(string $VpcId) Set The direct connect gateway ID.
 * @method string getNatGatewayId() Obtain The NAT Gateway ID.
 * @method void setNatGatewayId(string $NatGatewayId) Set The NAT Gateway ID.
 * @method string getDirectConnectGatewayId() Obtain The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
 */
class DisassociateDirectConnectGatewayNatGatewayRequest extends AbstractModel
{
    /**
     * @var string The direct connect gateway ID.
     */
    public $VpcId;

    /**
     * @var string The NAT Gateway ID.
     */
    public $NatGatewayId;

    /**
     * @var string The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
     */
    public $DirectConnectGatewayId;

    /**
     * @param string $VpcId The direct connect gateway ID.
     * @param string $NatGatewayId The NAT Gateway ID.
     * @param string $DirectConnectGatewayId The ID of the VPC instance, which can be obtained from the `VpcId` field in response of the `DescribeVpcs` API.
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

        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }
    }
}
