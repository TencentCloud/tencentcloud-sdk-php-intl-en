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
 * Dedicated tunnel information list.
 *
 * @method string getDirectConnectTunnelId() Obtain Dedicated tunnel ID.
 * @method void setDirectConnectTunnelId(string $DirectConnectTunnelId) Set Dedicated tunnel ID.
 * @method string getDirectConnectId() Obtain Connection ID.
 * @method void setDirectConnectId(string $DirectConnectId) Set Connection ID.
 * @method string getState() Obtain Dedicated tunnel status.
AVAILABLE: Ready or connected.
PENDING: Applying.
ALLOCATING: Configuring.
ALLOCATED: Configured.
ALTERING: Modifying.
DELETING: Deleting.
DELETED: Deleted.
COMFIRMING: To be accepted.
REJECTED: Rejected.
 * @method void setState(string $State) Set Dedicated tunnel status.
AVAILABLE: Ready or connected.
PENDING: Applying.
ALLOCATING: Configuring.
ALLOCATED: Configured.
ALTERING: Modifying.
DELETING: Deleting.
DELETED: Deleted.
COMFIRMING: To be accepted.
REJECTED: Rejected.
 * @method string getDirectConnectOwnerAccount() Obtain Connection owner, i.e., developer account ID.
 * @method void setDirectConnectOwnerAccount(string $DirectConnectOwnerAccount) Set Connection owner, i.e., developer account ID.
 * @method string getOwnerAccount() Obtain Dedicated tunnel owner, i.e., developer account ID.
 * @method void setOwnerAccount(string $OwnerAccount) Set Dedicated tunnel owner, i.e., developer account ID.
 * @method string getNetworkType() Obtain Network type. Valid values: VPC, BMVPC, CCN.
 VPC: Virtual Private Cloud; BMVPC: BM VPC; CCN: Cloud Connect Network.
 * @method void setNetworkType(string $NetworkType) Set Network type. Valid values: VPC, BMVPC, CCN.
 VPC: Virtual Private Cloud; BMVPC: BM VPC; CCN: Cloud Connect Network.
 * @method string getNetworkRegion() Obtain Network of the VPC region, such as `ap-guangzhou`.
 * @method void setNetworkRegion(string $NetworkRegion) Set Network of the VPC region, such as `ap-guangzhou`.
 * @method string getVpcId() Obtain Unified VPC ID or BMVPC ID.
 * @method void setVpcId(string $VpcId) Set Unified VPC ID or BMVPC ID.
 * @method string getDirectConnectGatewayId() Obtain Direct connect gateway ID.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set Direct connect gateway ID.
 * @method string getRouteType() Obtain BGP: BGP routing; STATIC: Static routing. Default value: BGP routing.
 * @method void setRouteType(string $RouteType) Set BGP: BGP routing; STATIC: Static routing. Default value: BGP routing.
 * @method BgpPeer getBgpPeer() Obtain User-side BGP, including Asn and AuthKey.
 * @method void setBgpPeer(BgpPeer $BgpPeer) Set User-side BGP, including Asn and AuthKey.
 * @method array getRouteFilterPrefixes() Obtain User-side IP range.
 * @method void setRouteFilterPrefixes(array $RouteFilterPrefixes) Set User-side IP range.
 * @method integer getVlan() Obtain VLAN of a dedicated tunnel.
 * @method void setVlan(integer $Vlan) Set VLAN of a dedicated tunnel.
 * @method string getTencentAddress() Obtain TencentAddress: Tencent-side IP address.
 * @method void setTencentAddress(string $TencentAddress) Set TencentAddress: Tencent-side IP address.
 * @method string getCustomerAddress() Obtain CustomerAddress: User-side IP address.
 * @method void setCustomerAddress(string $CustomerAddress) Set CustomerAddress: User-side IP address.
 * @method string getDirectConnectTunnelName() Obtain Dedicated tunnel name.
 * @method void setDirectConnectTunnelName(string $DirectConnectTunnelName) Set Dedicated tunnel name.
 * @method string getCreatedTime() Obtain Creation time of a dedicated tunnel.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of a dedicated tunnel.
 * @method integer getBandwidth() Obtain Bandwidth value of a dedicated tunnel.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth value of a dedicated tunnel.
 * @method array getTagSet() Obtain Tag value of a dedicated tunnel.
 * @method void setTagSet(array $TagSet) Set Tag value of a dedicated tunnel.
 * @method string getNetDetectId() Obtain Associated custom network probe ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNetDetectId(string $NetDetectId) Set Associated custom network probe ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableBGPCommunity() Obtain BGP community switch
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnableBGPCommunity(boolean $EnableBGPCommunity) Set BGP community switch
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNatType() Obtain Whether it is a NAT tunnel
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNatType(integer $NatType) Set Whether it is a NAT tunnel
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVpcRegion() Obtain VPC region abbreviation, such as `gz`, `cd`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcRegion(string $VpcRegion) Set VPC region abbreviation, such as `gz`, `cd`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBfdEnable() Obtain Whether to enable BFD
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBfdEnable(integer $BfdEnable) Set Whether to enable BFD
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAccessPointType() Obtain Access point type of a dedicated tunnel.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccessPointType(string $AccessPointType) Set Access point type of a dedicated tunnel.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDirectConnectGatewayName() Obtain Direct connect gateway name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) Set Direct connect gateway name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVpcName() Obtain VPC name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTencentBackupAddress() Obtain Backup IP address on the Tencent side.
 * @method void setTencentBackupAddress(string $TencentBackupAddress) Set Backup IP address on the Tencent side.
 * @method boolean getSignLaw() Obtain Whether the connection associated with the dedicated tunnel has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setSignLaw(boolean $SignLaw) Set Whether the connection associated with the dedicated tunnel has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getCloudAttachId() Obtain Cloud Attached Connection Service ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCloudAttachId(string $CloudAttachId) Set Cloud Attached Connection Service ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class DirectConnectTunnel extends AbstractModel
{
    /**
     * @var string Dedicated tunnel ID.
     */
    public $DirectConnectTunnelId;

    /**
     * @var string Connection ID.
     */
    public $DirectConnectId;

    /**
     * @var string Dedicated tunnel status.
AVAILABLE: Ready or connected.
PENDING: Applying.
ALLOCATING: Configuring.
ALLOCATED: Configured.
ALTERING: Modifying.
DELETING: Deleting.
DELETED: Deleted.
COMFIRMING: To be accepted.
REJECTED: Rejected.
     */
    public $State;

    /**
     * @var string Connection owner, i.e., developer account ID.
     */
    public $DirectConnectOwnerAccount;

    /**
     * @var string Dedicated tunnel owner, i.e., developer account ID.
     */
    public $OwnerAccount;

    /**
     * @var string Network type. Valid values: VPC, BMVPC, CCN.
 VPC: Virtual Private Cloud; BMVPC: BM VPC; CCN: Cloud Connect Network.
     */
    public $NetworkType;

    /**
     * @var string Network of the VPC region, such as `ap-guangzhou`.
     */
    public $NetworkRegion;

    /**
     * @var string Unified VPC ID or BMVPC ID.
     */
    public $VpcId;

    /**
     * @var string Direct connect gateway ID.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string BGP: BGP routing; STATIC: Static routing. Default value: BGP routing.
     */
    public $RouteType;

    /**
     * @var BgpPeer User-side BGP, including Asn and AuthKey.
     */
    public $BgpPeer;

    /**
     * @var array User-side IP range.
     */
    public $RouteFilterPrefixes;

    /**
     * @var integer VLAN of a dedicated tunnel.
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
     * @var string Dedicated tunnel name.
     */
    public $DirectConnectTunnelName;

    /**
     * @var string Creation time of a dedicated tunnel.
     */
    public $CreatedTime;

    /**
     * @var integer Bandwidth value of a dedicated tunnel.
     */
    public $Bandwidth;

    /**
     * @var array Tag value of a dedicated tunnel.
     */
    public $TagSet;

    /**
     * @var string Associated custom network probe ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NetDetectId;

    /**
     * @var boolean BGP community switch
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnableBGPCommunity;

    /**
     * @var integer Whether it is a NAT tunnel
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NatType;

    /**
     * @var string VPC region abbreviation, such as `gz`, `cd`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcRegion;

    /**
     * @var integer Whether to enable BFD
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BfdEnable;

    /**
     * @var string Access point type of a dedicated tunnel.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccessPointType;

    /**
     * @var string Direct connect gateway name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DirectConnectGatewayName;

    /**
     * @var string VPC name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @var string Backup IP address on the Tencent side.
     */
    public $TencentBackupAddress;

    /**
     * @var boolean Whether the connection associated with the dedicated tunnel has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $SignLaw;

    /**
     * @var string Cloud Attached Connection Service ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CloudAttachId;

    /**
     * @param string $DirectConnectTunnelId Dedicated tunnel ID.
     * @param string $DirectConnectId Connection ID.
     * @param string $State Dedicated tunnel status.
AVAILABLE: Ready or connected.
PENDING: Applying.
ALLOCATING: Configuring.
ALLOCATED: Configured.
ALTERING: Modifying.
DELETING: Deleting.
DELETED: Deleted.
COMFIRMING: To be accepted.
REJECTED: Rejected.
     * @param string $DirectConnectOwnerAccount Connection owner, i.e., developer account ID.
     * @param string $OwnerAccount Dedicated tunnel owner, i.e., developer account ID.
     * @param string $NetworkType Network type. Valid values: VPC, BMVPC, CCN.
 VPC: Virtual Private Cloud; BMVPC: BM VPC; CCN: Cloud Connect Network.
     * @param string $NetworkRegion Network of the VPC region, such as `ap-guangzhou`.
     * @param string $VpcId Unified VPC ID or BMVPC ID.
     * @param string $DirectConnectGatewayId Direct connect gateway ID.
     * @param string $RouteType BGP: BGP routing; STATIC: Static routing. Default value: BGP routing.
     * @param BgpPeer $BgpPeer User-side BGP, including Asn and AuthKey.
     * @param array $RouteFilterPrefixes User-side IP range.
     * @param integer $Vlan VLAN of a dedicated tunnel.
     * @param string $TencentAddress TencentAddress: Tencent-side IP address.
     * @param string $CustomerAddress CustomerAddress: User-side IP address.
     * @param string $DirectConnectTunnelName Dedicated tunnel name.
     * @param string $CreatedTime Creation time of a dedicated tunnel.
     * @param integer $Bandwidth Bandwidth value of a dedicated tunnel.
     * @param array $TagSet Tag value of a dedicated tunnel.
     * @param string $NetDetectId Associated custom network probe ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableBGPCommunity BGP community switch
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NatType Whether it is a NAT tunnel
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VpcRegion VPC region abbreviation, such as `gz`, `cd`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $BfdEnable Whether to enable BFD
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AccessPointType Access point type of a dedicated tunnel.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DirectConnectGatewayName Direct connect gateway name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VpcName VPC name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TencentBackupAddress Backup IP address on the Tencent side.
     * @param boolean $SignLaw Whether the connection associated with the dedicated tunnel has the service agreement signed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $CloudAttachId Cloud Attached Connection Service ID
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("DirectConnectTunnelId",$param) and $param["DirectConnectTunnelId"] !== null) {
            $this->DirectConnectTunnelId = $param["DirectConnectTunnelId"];
        }

        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DirectConnectOwnerAccount",$param) and $param["DirectConnectOwnerAccount"] !== null) {
            $this->DirectConnectOwnerAccount = $param["DirectConnectOwnerAccount"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
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

        if (array_key_exists("DirectConnectTunnelName",$param) and $param["DirectConnectTunnelName"] !== null) {
            $this->DirectConnectTunnelName = $param["DirectConnectTunnelName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("NetDetectId",$param) and $param["NetDetectId"] !== null) {
            $this->NetDetectId = $param["NetDetectId"];
        }

        if (array_key_exists("EnableBGPCommunity",$param) and $param["EnableBGPCommunity"] !== null) {
            $this->EnableBGPCommunity = $param["EnableBGPCommunity"];
        }

        if (array_key_exists("NatType",$param) and $param["NatType"] !== null) {
            $this->NatType = $param["NatType"];
        }

        if (array_key_exists("VpcRegion",$param) and $param["VpcRegion"] !== null) {
            $this->VpcRegion = $param["VpcRegion"];
        }

        if (array_key_exists("BfdEnable",$param) and $param["BfdEnable"] !== null) {
            $this->BfdEnable = $param["BfdEnable"];
        }

        if (array_key_exists("AccessPointType",$param) and $param["AccessPointType"] !== null) {
            $this->AccessPointType = $param["AccessPointType"];
        }

        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            $this->DirectConnectGatewayName = $param["DirectConnectGatewayName"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("TencentBackupAddress",$param) and $param["TencentBackupAddress"] !== null) {
            $this->TencentBackupAddress = $param["TencentBackupAddress"];
        }

        if (array_key_exists("SignLaw",$param) and $param["SignLaw"] !== null) {
            $this->SignLaw = $param["SignLaw"];
        }

        if (array_key_exists("CloudAttachId",$param) and $param["CloudAttachId"] !== null) {
            $this->CloudAttachId = $param["CloudAttachId"];
        }
    }
}
