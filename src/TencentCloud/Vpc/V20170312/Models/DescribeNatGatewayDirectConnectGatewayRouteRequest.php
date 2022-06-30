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
 * DescribeNatGatewayDirectConnectGatewayRoute request structure.
 *
 * @method string getNatGatewayId() Obtain Unique ID of the NAT gateway
 * @method void setNatGatewayId(string $NatGatewayId) Set Unique ID of the NAT gateway
 * @method string getVpcId() Obtain Unique ID of VPC
 * @method void setVpcId(string $VpcId) Set Unique ID of VPC
 * @method integer getLimit() Obtain Valid range: 0-200
 * @method void setLimit(integer $Limit) Set Valid range: 0-200
 * @method integer getOffset() Obtain Greater than 0
 * @method void setOffset(integer $Offset) Set Greater than 0
 */
class DescribeNatGatewayDirectConnectGatewayRouteRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the NAT gateway
     */
    public $NatGatewayId;

    /**
     * @var string Unique ID of VPC
     */
    public $VpcId;

    /**
     * @var integer Valid range: 0-200
     */
    public $Limit;

    /**
     * @var integer Greater than 0
     */
    public $Offset;

    /**
     * @param string $NatGatewayId Unique ID of the NAT gateway
     * @param string $VpcId Unique ID of VPC
     * @param integer $Limit Valid range: 0-200
     * @param integer $Offset Greater than 0
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
