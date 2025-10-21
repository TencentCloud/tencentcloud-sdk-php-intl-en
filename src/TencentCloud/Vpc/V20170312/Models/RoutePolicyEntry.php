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
 * Route reception policy entry.
 *
 * @method string getRoutePolicyEntryId() Obtain Specifies the unique ID of the IPv4 routing strategy entry.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRoutePolicyEntryId(string $RoutePolicyEntryId) Set Specifies the unique ID of the IPv4 routing strategy entry.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCidrBlock() Obtain Destination ip range.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCidrBlock(string $CidrBlock) Set Destination ip range.
Note: This field may return null, indicating that no valid value was found.
 * @method string getDescription() Obtain Describes the routing strategy rule.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDescription(string $Description) Set Describes the routing strategy rule.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRouteType() Obtain Routing Type

Specifies the USER-customized data type.
NETD: specifies the route for network detection.
CCN: CCN route.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRouteType(string $RouteType) Set Routing Type

Specifies the USER-customized data type.
NETD: specifies the route for network detection.
CCN: CCN route.
Note: This field may return null, indicating that no valid value was found.
 * @method string getGatewayType() Obtain Next hop type. types currently supported:.
CVM: cloud virtual machine with public network gateway type.
VPN: vpn gateway.
DIRECTCONNECT: direct connect gateway.
PEERCONNECTION: peering connection.
HAVIP: high availability virtual ip.
NAT: specifies the nat gateway. 
EIP: specifies the public ip address of the cloud virtual machine.
LOCAL_GATEWAY: specifies the local gateway.
PVGW: pvgw gateway.
Note: This field may return null, indicating that no valid value was found.
 * @method void setGatewayType(string $GatewayType) Set Next hop type. types currently supported:.
CVM: cloud virtual machine with public network gateway type.
VPN: vpn gateway.
DIRECTCONNECT: direct connect gateway.
PEERCONNECTION: peering connection.
HAVIP: high availability virtual ip.
NAT: specifies the nat gateway. 
EIP: specifies the public ip address of the cloud virtual machine.
LOCAL_GATEWAY: specifies the local gateway.
PVGW: pvgw gateway.
Note: This field may return null, indicating that no valid value was found.
 * @method string getGatewayId() Obtain Gateway unique ID.
Note: This field may return null, indicating that no valid value was found.
 * @method void setGatewayId(string $GatewayId) Set Gateway unique ID.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getPriority() Obtain Priority. a smaller value indicates a higher priority.
Note: This field may return null, indicating that no valid value was found.
 * @method void setPriority(integer $Priority) Set Priority. a smaller value indicates a higher priority.
Note: This field may return null, indicating that no valid value was found.
 * @method string getAction() Obtain Action.
DROP: drop.
DISABLE: receive and disable.
ACCEPT: receive and enable.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAction(string $Action) Set Action.
DROP: drop.
DISABLE: receive and disable.
ACCEPT: receive and enable.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCreatedTime() Obtain Creation time.

Note: This field may return null, indicating that no valid value was found.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.

Note: This field may return null, indicating that no valid value was found.
 * @method string getRegion() Obtain Specifies the region.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRegion(string $Region) Set Specifies the region.
Note: This field may return null, indicating that no valid value was found.
 */
class RoutePolicyEntry extends AbstractModel
{
    /**
     * @var string Specifies the unique ID of the IPv4 routing strategy entry.
Note: This field may return null, indicating that no valid value was found.
     */
    public $RoutePolicyEntryId;

    /**
     * @var string Destination ip range.
Note: This field may return null, indicating that no valid value was found.
     */
    public $CidrBlock;

    /**
     * @var string Describes the routing strategy rule.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Description;

    /**
     * @var string Routing Type

Specifies the USER-customized data type.
NETD: specifies the route for network detection.
CCN: CCN route.
Note: This field may return null, indicating that no valid value was found.
     */
    public $RouteType;

    /**
     * @var string Next hop type. types currently supported:.
CVM: cloud virtual machine with public network gateway type.
VPN: vpn gateway.
DIRECTCONNECT: direct connect gateway.
PEERCONNECTION: peering connection.
HAVIP: high availability virtual ip.
NAT: specifies the nat gateway. 
EIP: specifies the public ip address of the cloud virtual machine.
LOCAL_GATEWAY: specifies the local gateway.
PVGW: pvgw gateway.
Note: This field may return null, indicating that no valid value was found.
     */
    public $GatewayType;

    /**
     * @var string Gateway unique ID.
Note: This field may return null, indicating that no valid value was found.
     */
    public $GatewayId;

    /**
     * @var integer Priority. a smaller value indicates a higher priority.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Priority;

    /**
     * @var string Action.
DROP: drop.
DISABLE: receive and disable.
ACCEPT: receive and enable.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Action;

    /**
     * @var string Creation time.

Note: This field may return null, indicating that no valid value was found.
     */
    public $CreatedTime;

    /**
     * @var string Specifies the region.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Region;

    /**
     * @param string $RoutePolicyEntryId Specifies the unique ID of the IPv4 routing strategy entry.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CidrBlock Destination ip range.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Description Describes the routing strategy rule.
Note: This field may return null, indicating that no valid value was found.
     * @param string $RouteType Routing Type

Specifies the USER-customized data type.
NETD: specifies the route for network detection.
CCN: CCN route.
Note: This field may return null, indicating that no valid value was found.
     * @param string $GatewayType Next hop type. types currently supported:.
CVM: cloud virtual machine with public network gateway type.
VPN: vpn gateway.
DIRECTCONNECT: direct connect gateway.
PEERCONNECTION: peering connection.
HAVIP: high availability virtual ip.
NAT: specifies the nat gateway. 
EIP: specifies the public ip address of the cloud virtual machine.
LOCAL_GATEWAY: specifies the local gateway.
PVGW: pvgw gateway.
Note: This field may return null, indicating that no valid value was found.
     * @param string $GatewayId Gateway unique ID.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Priority Priority. a smaller value indicates a higher priority.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Action Action.
DROP: drop.
DISABLE: receive and disable.
ACCEPT: receive and enable.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CreatedTime Creation time.

Note: This field may return null, indicating that no valid value was found.
     * @param string $Region Specifies the region.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("RoutePolicyEntryId",$param) and $param["RoutePolicyEntryId"] !== null) {
            $this->RoutePolicyEntryId = $param["RoutePolicyEntryId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
