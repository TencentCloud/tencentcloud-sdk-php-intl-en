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
 * Routing policy object
 *
 * @method string getDestinationCidrBlock() Obtain Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
 * @method string getGatewayType() Obtain Type of the next hop. Valid values:
`CVM`: public gateway CVM;
`VPN`: VPN gateway;
`DIRECTCONNECT`: direct connect gateway;
`PEERCONNECTION`: peering connection;
`HAVIP`: HAVIP;
`NAT`: NAT Gateway; 
`NORMAL_CVM`: normal CVM;
`EIP`: public IP address of the CVM;
`LOCAL_GATEWAY`: local gateway.
 * @method void setGatewayType(string $GatewayType) Set Type of the next hop. Valid values:
`CVM`: public gateway CVM;
`VPN`: VPN gateway;
`DIRECTCONNECT`: direct connect gateway;
`PEERCONNECTION`: peering connection;
`HAVIP`: HAVIP;
`NAT`: NAT Gateway; 
`NORMAL_CVM`: normal CVM;
`EIP`: public IP address of the CVM;
`LOCAL_GATEWAY`: local gateway.
 * @method string getGatewayId() Obtain Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address. 
Note: If `GatewayType` is set to `NORMAL_CVM`, `GatewayId` should be the private IP of the instance.
 * @method void setGatewayId(string $GatewayId) Set Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address. 
Note: If `GatewayType` is set to `NORMAL_CVM`, `GatewayId` should be the private IP of the instance.
 * @method integer getRouteId() Obtain Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend using the unique ID `RouteItemId` for the routing policy.
This field is required when you want to delete a routing policy.
 * @method void setRouteId(integer $RouteId) Set Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend using the unique ID `RouteItemId` for the routing policy.
This field is required when you want to delete a routing policy.
 * @method string getRouteDescription() Obtain The description of the routing policy.
 * @method void setRouteDescription(string $RouteDescription) Set The description of the routing policy.
 * @method boolean getEnabled() Obtain Whether it is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether it is enabled
 * @method string getRouteType() Obtain The route type. Currently, the following types are supported:
USER: User route;
NETD: Network probe route. When creating a network probe route, the system delivers by default. It cannot be edited or deleted;
CCN: CCN route. The system delivers by default. It cannot be edited or deleted.
Users can only add and operate USER-type routes.
 * @method void setRouteType(string $RouteType) Set The route type. Currently, the following types are supported:
USER: User route;
NETD: Network probe route. When creating a network probe route, the system delivers by default. It cannot be edited or deleted;
CCN: CCN route. The system delivers by default. It cannot be edited or deleted.
Users can only add and operate USER-type routes.
 * @method string getRouteTableId() Obtain Route table instance ID, such as rtb-azd4dt1c.
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID, such as rtb-azd4dt1c.
 * @method string getDestinationIpv6CidrBlock() Obtain Destination IPv6 IP range, which cannot be included in VPC IP range, such as 2402:4e00:1000:810b::/64.
 * @method void setDestinationIpv6CidrBlock(string $DestinationIpv6CidrBlock) Set Destination IPv6 IP range, which cannot be included in VPC IP range, such as 2402:4e00:1000:810b::/64.
 * @method string getRouteItemId() Obtain Unique routing policy ID.
 * @method void setRouteItemId(string $RouteItemId) Set Unique routing policy ID.
 * @method boolean getPublishedToVbc() Obtain Whether the routing policy is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublishedToVbc(boolean $PublishedToVbc) Set Whether the routing policy is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time of the routing policy
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of the routing policy
 */
class Route extends AbstractModel
{
    /**
     * @var string Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
     */
    public $DestinationCidrBlock;

    /**
     * @var string Type of the next hop. Valid values:
`CVM`: public gateway CVM;
`VPN`: VPN gateway;
`DIRECTCONNECT`: direct connect gateway;
`PEERCONNECTION`: peering connection;
`HAVIP`: HAVIP;
`NAT`: NAT Gateway; 
`NORMAL_CVM`: normal CVM;
`EIP`: public IP address of the CVM;
`LOCAL_GATEWAY`: local gateway.
     */
    public $GatewayType;

    /**
     * @var string Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address. 
Note: If `GatewayType` is set to `NORMAL_CVM`, `GatewayId` should be the private IP of the instance.
     */
    public $GatewayId;

    /**
     * @var integer Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend using the unique ID `RouteItemId` for the routing policy.
This field is required when you want to delete a routing policy.
     */
    public $RouteId;

    /**
     * @var string The description of the routing policy.
     */
    public $RouteDescription;

    /**
     * @var boolean Whether it is enabled
     */
    public $Enabled;

    /**
     * @var string The route type. Currently, the following types are supported:
USER: User route;
NETD: Network probe route. When creating a network probe route, the system delivers by default. It cannot be edited or deleted;
CCN: CCN route. The system delivers by default. It cannot be edited or deleted.
Users can only add and operate USER-type routes.
     */
    public $RouteType;

    /**
     * @var string Route table instance ID, such as rtb-azd4dt1c.
     */
    public $RouteTableId;

    /**
     * @var string Destination IPv6 IP range, which cannot be included in VPC IP range, such as 2402:4e00:1000:810b::/64.
     */
    public $DestinationIpv6CidrBlock;

    /**
     * @var string Unique routing policy ID.
     */
    public $RouteItemId;

    /**
     * @var boolean Whether the routing policy is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublishedToVbc;

    /**
     * @var string Creation time of the routing policy
     */
    public $CreatedTime;

    /**
     * @param string $DestinationCidrBlock Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
     * @param string $GatewayType Type of the next hop. Valid values:
`CVM`: public gateway CVM;
`VPN`: VPN gateway;
`DIRECTCONNECT`: direct connect gateway;
`PEERCONNECTION`: peering connection;
`HAVIP`: HAVIP;
`NAT`: NAT Gateway; 
`NORMAL_CVM`: normal CVM;
`EIP`: public IP address of the CVM;
`LOCAL_GATEWAY`: local gateway.
     * @param string $GatewayId Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address. 
Note: If `GatewayType` is set to `NORMAL_CVM`, `GatewayId` should be the private IP of the instance.
     * @param integer $RouteId Routing policy ID. The IPv4 routing policy will have a meaningful value, while the IPv6 routing policy is always 0. We recommend using the unique ID `RouteItemId` for the routing policy.
This field is required when you want to delete a routing policy.
     * @param string $RouteDescription The description of the routing policy.
     * @param boolean $Enabled Whether it is enabled
     * @param string $RouteType The route type. Currently, the following types are supported:
USER: User route;
NETD: Network probe route. When creating a network probe route, the system delivers by default. It cannot be edited or deleted;
CCN: CCN route. The system delivers by default. It cannot be edited or deleted.
Users can only add and operate USER-type routes.
     * @param string $RouteTableId Route table instance ID, such as rtb-azd4dt1c.
     * @param string $DestinationIpv6CidrBlock Destination IPv6 IP range, which cannot be included in VPC IP range, such as 2402:4e00:1000:810b::/64.
     * @param string $RouteItemId Unique routing policy ID.
     * @param boolean $PublishedToVbc Whether the routing policy is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time of the routing policy
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

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
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

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("DestinationIpv6CidrBlock",$param) and $param["DestinationIpv6CidrBlock"] !== null) {
            $this->DestinationIpv6CidrBlock = $param["DestinationIpv6CidrBlock"];
        }

        if (array_key_exists("RouteItemId",$param) and $param["RouteItemId"] !== null) {
            $this->RouteItemId = $param["RouteItemId"];
        }

        if (array_key_exists("PublishedToVbc",$param) and $param["PublishedToVbc"] !== null) {
            $this->PublishedToVbc = $param["PublishedToVbc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
