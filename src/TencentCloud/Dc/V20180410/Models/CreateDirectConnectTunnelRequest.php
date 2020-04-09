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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDirectConnectTunnel request structure.
 *
 * @method string getDirectConnectId() Obtain Direct Connect ID, such as `dc-kd7d06of`.
 * @method void setDirectConnectId(string $DirectConnectId) Set Direct Connect ID, such as `dc-kd7d06of`.
 * @method string getDirectConnectTunnelName() Obtain Dedicated tunnel name.
 * @method void setDirectConnectTunnelName(string $DirectConnectTunnelName) Set Dedicated tunnel name.
 * @method string getDirectConnectOwnerAccount() Obtain Connection owner, who is the current customer by default.
The developer account ID should be entered for shared connections.
 * @method void setDirectConnectOwnerAccount(string $DirectConnectOwnerAccount) Set Connection owner, who is the current customer by default.
The developer account ID should be entered for shared connections.
 * @method string getNetworkType() Obtain Network type. Valid values: VPC, BMVPC, CCN. Default value: VPC.
VPC: Virtual Private Cloud.
BMVPC: BM VPC.
CCN: Cloud Connect Network.
 * @method void setNetworkType(string $NetworkType) Set Network type. Valid values: VPC, BMVPC, CCN. Default value: VPC.
VPC: Virtual Private Cloud.
BMVPC: BM VPC.
CCN: Cloud Connect Network.
 * @method string getNetworkRegion() Obtain Network region.
 * @method void setNetworkRegion(string $NetworkRegion) Set Network region.
 * @method string getVpcId() Obtain Unified VPC ID or BMVPC ID.
 * @method void setVpcId(string $VpcId) Set Unified VPC ID or BMVPC ID.
 * @method string getDirectConnectGatewayId() Obtain Direct connect gateway ID, such as `dcg-d545ddf`.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set Direct connect gateway ID, such as `dcg-d545ddf`.
 * @method integer getBandwidth() Obtain Direct Connect bandwidth in Mbps.
Default value: connection bandwidth value.
 * @method void setBandwidth(integer $Bandwidth) Set Direct Connect bandwidth in Mbps.
Default value: connection bandwidth value.
 * @method string getRouteType() Obtain BGP: BGP routing.
STATIC: Static routing.
Default value: BGP routing.
 * @method void setRouteType(string $RouteType) Set BGP: BGP routing.
STATIC: Static routing.
Default value: BGP routing.
 * @method BgpPeer getBgpPeer() Obtain BgpPeer, which is BGP information on the user side and includes Asn and AuthKey.
 * @method void setBgpPeer(BgpPeer $BgpPeer) Set BgpPeer, which is BGP information on the user side and includes Asn and AuthKey.
 * @method array getRouteFilterPrefixes() Obtain Static routing, i.e., IP range of the user's IDC.
 * @method void setRouteFilterPrefixes(array $RouteFilterPrefixes) Set Static routing, i.e., IP range of the user's IDC.
 * @method integer getVlan() Obtain VLAN. Value range: 0-3,000.
0: sub-interface not enabled.
Default value: Non-zero.
 * @method void setVlan(integer $Vlan) Set VLAN. Value range: 0-3,000.
0: sub-interface not enabled.
Default value: Non-zero.
 * @method string getTencentAddress() Obtain TencentAddress: Tencent-side IP address.
 * @method void setTencentAddress(string $TencentAddress) Set TencentAddress: Tencent-side IP address.
 * @method string getCustomerAddress() Obtain CustomerAddress: User-side IP address.
 * @method void setCustomerAddress(string $CustomerAddress) Set CustomerAddress: User-side IP address.
 */
class CreateDirectConnectTunnelRequest extends AbstractModel
{
    /**
     * @var string Direct Connect ID, such as `dc-kd7d06of`.
     */
    public $DirectConnectId;

    /**
     * @var string Dedicated tunnel name.
     */
    public $DirectConnectTunnelName;

    /**
     * @var string Connection owner, who is the current customer by default.
The developer account ID should be entered for shared connections.
     */
    public $DirectConnectOwnerAccount;

    /**
     * @var string Network type. Valid values: VPC, BMVPC, CCN. Default value: VPC.
VPC: Virtual Private Cloud.
BMVPC: BM VPC.
CCN: Cloud Connect Network.
     */
    public $NetworkType;

    /**
     * @var string Network region.
     */
    public $NetworkRegion;

    /**
     * @var string Unified VPC ID or BMVPC ID.
     */
    public $VpcId;

    /**
     * @var string Direct connect gateway ID, such as `dcg-d545ddf`.
     */
    public $DirectConnectGatewayId;

    /**
     * @var integer Direct Connect bandwidth in Mbps.
Default value: connection bandwidth value.
     */
    public $Bandwidth;

    /**
     * @var string BGP: BGP routing.
STATIC: Static routing.
Default value: BGP routing.
     */
    public $RouteType;

    /**
     * @var BgpPeer BgpPeer, which is BGP information on the user side and includes Asn and AuthKey.
     */
    public $BgpPeer;

    /**
     * @var array Static routing, i.e., IP range of the user's IDC.
     */
    public $RouteFilterPrefixes;

    /**
     * @var integer VLAN. Value range: 0-3,000.
0: sub-interface not enabled.
Default value: Non-zero.
     */
    public $Vlan;

    /**
     * @var string TencentAddress: Tencent-side IP address.
     */
    public $TencentAddress;

    /**
     * @var string CustomerAddress: User-side IP address.
     */
    public $CustomerAddress;

    /**
     * @param string $DirectConnectId Direct Connect ID, such as `dc-kd7d06of`.
     * @param string $DirectConnectTunnelName Dedicated tunnel name.
     * @param string $DirectConnectOwnerAccount Connection owner, who is the current customer by default.
The developer account ID should be entered for shared connections.
     * @param string $NetworkType Network type. Valid values: VPC, BMVPC, CCN. Default value: VPC.
VPC: Virtual Private Cloud.
BMVPC: BM VPC.
CCN: Cloud Connect Network.
     * @param string $NetworkRegion Network region.
     * @param string $VpcId Unified VPC ID or BMVPC ID.
     * @param string $DirectConnectGatewayId Direct connect gateway ID, such as `dcg-d545ddf`.
     * @param integer $Bandwidth Direct Connect bandwidth in Mbps.
Default value: connection bandwidth value.
     * @param string $RouteType BGP: BGP routing.
STATIC: Static routing.
Default value: BGP routing.
     * @param BgpPeer $BgpPeer BgpPeer, which is BGP information on the user side and includes Asn and AuthKey.
     * @param array $RouteFilterPrefixes Static routing, i.e., IP range of the user's IDC.
     * @param integer $Vlan VLAN. Value range: 0-3,000.
0: sub-interface not enabled.
Default value: Non-zero.
     * @param string $TencentAddress TencentAddress: Tencent-side IP address.
     * @param string $CustomerAddress CustomerAddress: User-side IP address.
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
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("DirectConnectTunnelName",$param) and $param["DirectConnectTunnelName"] !== null) {
            $this->DirectConnectTunnelName = $param["DirectConnectTunnelName"];
        }

        if (array_key_exists("DirectConnectOwnerAccount",$param) and $param["DirectConnectOwnerAccount"] !== null) {
            $this->DirectConnectOwnerAccount = $param["DirectConnectOwnerAccount"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkRegion",$param) and $param["NetworkRegion"] !== null) {
            $this->NetworkRegion = $param["NetworkRegion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("BgpPeer",$param) and $param["BgpPeer"] !== null) {
            $this->BgpPeer = new BgpPeer();
            $this->BgpPeer->deserialize($param["BgpPeer"]);
        }

        if (array_key_exists("RouteFilterPrefixes",$param) and $param["RouteFilterPrefixes"] !== null) {
            $this->RouteFilterPrefixes = [];
            foreach ($param["RouteFilterPrefixes"] as $key => $value){
                $obj = new RouteFilterPrefix();
                $obj->deserialize($value);
                array_push($this->RouteFilterPrefixes, $obj);
            }
        }

        if (array_key_exists("Vlan",$param) and $param["Vlan"] !== null) {
            $this->Vlan = $param["Vlan"];
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }
    }
}
