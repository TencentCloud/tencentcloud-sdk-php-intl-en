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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object of cluster route
 *
 * @method string getRouteTableName() Obtain Route table name.
 * @method void setRouteTableName(string $RouteTableName) Set Route table name.
 * @method string getDestinationCidrBlock() Obtain Destination CIDR.
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set Destination CIDR.
 * @method string getGatewayIp() Obtain Next hop address.
 * @method void setGatewayIp(string $GatewayIp) Set Next hop address.
 */
class RouteInfo extends AbstractModel
{
    /**
     * @var string Route table name.
     */
    public $RouteTableName;

    /**
     * @var string Destination CIDR.
     */
    public $DestinationCidrBlock;

    /**
     * @var string Next hop address.
     */
    public $GatewayIp;

    /**
     * @param string $RouteTableName Route table name.
     * @param string $DestinationCidrBlock Destination CIDR.
     * @param string $GatewayIp Next hop address.
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
        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("GatewayIp",$param) and $param["GatewayIp"] !== null) {
            $this->GatewayIp = $param["GatewayIp"];
        }
    }
}
