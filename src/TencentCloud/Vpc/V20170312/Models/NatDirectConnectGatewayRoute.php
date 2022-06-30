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
 * Query the returned object of a NAT route
 *
 * @method string getDestinationCidrBlock() Obtain The `IPv4` `CIDR` of the subnet.
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set The `IPv4` `CIDR` of the subnet.
 * @method string getGatewayType() Obtain The type of the next-hop gateway. Supported types:
`DIRECTCONNECT`: Direct connect gateway
 * @method void setGatewayType(string $GatewayType) Set The type of the next-hop gateway. Supported types:
`DIRECTCONNECT`: Direct connect gateway
 * @method string getGatewayId() Obtain ID of the next-hop gateway
 * @method void setGatewayId(string $GatewayId) Set ID of the next-hop gateway
 * @method string getCreateTime() Obtain The creation time of the route
 * @method void setCreateTime(string $CreateTime) Set The creation time of the route
 * @method string getUpdateTime() Obtain The update time of the route
 * @method void setUpdateTime(string $UpdateTime) Set The update time of the route
 */
class NatDirectConnectGatewayRoute extends AbstractModel
{
    /**
     * @var string The `IPv4` `CIDR` of the subnet.
     */
    public $DestinationCidrBlock;

    /**
     * @var string The type of the next-hop gateway. Supported types:
`DIRECTCONNECT`: Direct connect gateway
     */
    public $GatewayType;

    /**
     * @var string ID of the next-hop gateway
     */
    public $GatewayId;

    /**
     * @var string The creation time of the route
     */
    public $CreateTime;

    /**
     * @var string The update time of the route
     */
    public $UpdateTime;

    /**
     * @param string $DestinationCidrBlock The `IPv4` `CIDR` of the subnet.
     * @param string $GatewayType The type of the next-hop gateway. Supported types:
`DIRECTCONNECT`: Direct connect gateway
     * @param string $GatewayId ID of the next-hop gateway
     * @param string $CreateTime The creation time of the route
     * @param string $UpdateTime The update time of the route
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
        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
