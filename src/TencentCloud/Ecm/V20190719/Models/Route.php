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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Routing policy
 *
 * @method string getDestinationCidrBlock() Obtain Destination IPv4 IP range
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set Destination IPv4 IP range
 * @method string getGatewayType() Obtain Next hop type
NORMAL_CVM: general CVM;
 * @method void setGatewayType(string $GatewayType) Set Next hop type
NORMAL_CVM: general CVM;
 * @method string getGatewayId() Obtain Next hop address
You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address
When `GatewayType` is `EIP`, the value of `GatewayId` will be fixed at `0`
 * @method void setGatewayId(string $GatewayId) Set Next hop address
You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address
When `GatewayType` is `EIP`, the value of `GatewayId` will be fixed at `0`
 * @method string getRouteItemId() Obtain Unique routing policy ID
 * @method void setRouteItemId(string $RouteItemId) Set Unique routing policy ID
 * @method string getRouteDescription() Obtain Routing policy description
 * @method void setRouteDescription(string $RouteDescription) Set Routing policy description
 * @method boolean getEnabled() Obtain Whether to enable
 * @method void setEnabled(boolean $Enabled) Set Whether to enable
 * @method string getRouteType() Obtain Route type. Valid values:
USER: user route;
NETD: network probe route, which will be delivered by the system by default when you create a network probe instance and cannot be edited or deleted;
CCN: CCN route, which will be delivered by the system by default and cannot be edited or deleted.
You can only add and manipulate routes of `USER` type.
 * @method void setRouteType(string $RouteType) Set Route type. Valid values:
USER: user route;
NETD: network probe route, which will be delivered by the system by default when you create a network probe instance and cannot be edited or deleted;
CCN: CCN route, which will be delivered by the system by default and cannot be edited or deleted.
You can only add and manipulate routes of `USER` type.
 * @method integer getRouteId() Obtain Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend you use the unique ID `RouteItemId` for the routing policy
 * @method void setRouteId(integer $RouteId) Set Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend you use the unique ID `RouteItemId` for the routing policy
 */
class Route extends AbstractModel
{
    /**
     * @var string Destination IPv4 IP range
     */
    public $DestinationCidrBlock;

    /**
     * @var string Next hop type
NORMAL_CVM: general CVM;
     */
    public $GatewayType;

    /**
     * @var string Next hop address
You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address
When `GatewayType` is `EIP`, the value of `GatewayId` will be fixed at `0`
     */
    public $GatewayId;

    /**
     * @var string Unique routing policy ID
     */
    public $RouteItemId;

    /**
     * @var string Routing policy description
     */
    public $RouteDescription;

    /**
     * @var boolean Whether to enable
     */
    public $Enabled;

    /**
     * @var string Route type. Valid values:
USER: user route;
NETD: network probe route, which will be delivered by the system by default when you create a network probe instance and cannot be edited or deleted;
CCN: CCN route, which will be delivered by the system by default and cannot be edited or deleted.
You can only add and manipulate routes of `USER` type.
     */
    public $RouteType;

    /**
     * @var integer Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend you use the unique ID `RouteItemId` for the routing policy
     */
    public $RouteId;

    /**
     * @param string $DestinationCidrBlock Destination IPv4 IP range
     * @param string $GatewayType Next hop type
NORMAL_CVM: general CVM;
     * @param string $GatewayId Next hop address
You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address
When `GatewayType` is `EIP`, the value of `GatewayId` will be fixed at `0`
     * @param string $RouteItemId Unique routing policy ID
     * @param string $RouteDescription Routing policy description
     * @param boolean $Enabled Whether to enable
     * @param string $RouteType Route type. Valid values:
USER: user route;
NETD: network probe route, which will be delivered by the system by default when you create a network probe instance and cannot be edited or deleted;
CCN: CCN route, which will be delivered by the system by default and cannot be edited or deleted.
You can only add and manipulate routes of `USER` type.
     * @param integer $RouteId Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend you use the unique ID `RouteItemId` for the routing policy
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

        if (array_key_exists("RouteItemId",$param) and $param["RouteItemId"] !== null) {
            $this->RouteItemId = $param["RouteItemId"];
        }

        if (array_key_exists("RouteDescription",$param) and $param["RouteDescription"] !== null) {
            $this->RouteDescription = $param["RouteDescription"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }
    }
}
