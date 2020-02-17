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
 * @method string getDestinationCidrBlock() Obtain Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
 * @method string getGatewayType() Obtain The type of the next hop. Currently supported types include:
CVM: Public gateway-type CVM;
VPN: VPN gateway;
DIRECTCONNECT: Direct connect gateway;
PEERCONNECTION: Peering connection;
SSLVPN: sslvpn gateway;
NAT: NAT gateway; 
NORMAL_CVM: Normal CVM;
EIP: The public IP of the CVM;
CCN: Cloud Connect Network.
 * @method void setGatewayType(string $GatewayType) Set The type of the next hop. Currently supported types include:
CVM: Public gateway-type CVM;
VPN: VPN gateway;
DIRECTCONNECT: Direct connect gateway;
PEERCONNECTION: Peering connection;
SSLVPN: sslvpn gateway;
NAT: NAT gateway; 
NORMAL_CVM: Normal CVM;
EIP: The public IP of the CVM;
CCN: Cloud Connect Network.
 * @method string getGatewayId() Obtain Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address.
Important note: When the GatewayType is EIP, the GatewayId has a fixed value `0`
 * @method void setGatewayId(string $GatewayId) Set Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address.
Important note: When the GatewayType is EIP, the GatewayId has a fixed value `0`
 * @method integer getRouteId() Obtain The ID of the routing policy.
 * @method void setRouteId(integer $RouteId) Set The ID of the routing policy.
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
 */

/**
 *Routing policy object
 */
class Route extends AbstractModel
{
    /**
     * @var string Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
     */
    public $DestinationCidrBlock;

    /**
     * @var string The type of the next hop. Currently supported types include:
CVM: Public gateway-type CVM;
VPN: VPN gateway;
DIRECTCONNECT: Direct connect gateway;
PEERCONNECTION: Peering connection;
SSLVPN: sslvpn gateway;
NAT: NAT gateway; 
NORMAL_CVM: Normal CVM;
EIP: The public IP of the CVM;
CCN: Cloud Connect Network.
     */
    public $GatewayType;

    /**
     * @var string Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address.
Important note: When the GatewayType is EIP, the GatewayId has a fixed value `0`
     */
    public $GatewayId;

    /**
     * @var integer The ID of the routing policy.
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
     * @param string $DestinationCidrBlock Destination IP range, such as 112.20.51.0/24. Values cannot be in the VPC IP range.
     * @param string $GatewayType The type of the next hop. Currently supported types include:
CVM: Public gateway-type CVM;
VPN: VPN gateway;
DIRECTCONNECT: Direct connect gateway;
PEERCONNECTION: Peering connection;
SSLVPN: sslvpn gateway;
NAT: NAT gateway; 
NORMAL_CVM: Normal CVM;
EIP: The public IP of the CVM;
CCN: Cloud Connect Network.
     * @param string $GatewayId Next hop address. You simply need to specify the gateway ID of a different next hop type, and the system will automatically match the next hop address.
Important note: When the GatewayType is EIP, the GatewayId has a fixed value `0`
     * @param integer $RouteId The ID of the routing policy.
     * @param string $RouteDescription The description of the routing policy.
     * @param boolean $Enabled Whether it is enabled
     * @param string $RouteType The route type. Currently, the following types are supported:
USER: User route;
NETD: Network probe route. When creating a network probe route, the system delivers by default. It cannot be edited or deleted;
CCN: CCN route. The system delivers by default. It cannot be edited or deleted.
Users can only add and operate USER-type routes.
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
    }
}
