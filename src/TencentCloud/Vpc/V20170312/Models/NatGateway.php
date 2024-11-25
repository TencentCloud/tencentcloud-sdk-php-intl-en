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
 * NAT gateway object.
 *
 * @method string getNatGatewayId() Obtain NAT gateway ID.
 * @method void setNatGatewayId(string $NatGatewayId) Set NAT gateway ID.
 * @method string getNatGatewayName() Obtain NAT gateway name.
 * @method void setNatGatewayName(string $NatGatewayName) Set NAT gateway name.
 * @method string getCreatedTime() Obtain NAT gateway creation time.
 * @method void setCreatedTime(string $CreatedTime) Set NAT gateway creation time.
 * @method string getState() Obtain The status of the NAT gateway.
 `PENDING`: Being created, `DELETING`: Being deleted, `AVAILABLE`: Running, `UPDATING`: Being upgraded,
`FAILED`: Failed.
 * @method void setState(string $State) Set The status of the NAT gateway.
 `PENDING`: Being created, `DELETING`: Being deleted, `AVAILABLE`: Running, `UPDATING`: Being upgraded,
`FAILED`: Failed.
 * @method integer getInternetMaxBandwidthOut() Obtain The maximum outbound bandwidth of the gateway. Unit: Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set The maximum outbound bandwidth of the gateway. Unit: Mbps.
 * @method integer getMaxConcurrentConnection() Obtain The concurrent connections cap of the gateway.
 * @method void setMaxConcurrentConnection(integer $MaxConcurrentConnection) Set The concurrent connections cap of the gateway.
 * @method array getPublicIpAddressSet() Obtain The public IP object array of the bound NAT gateway.
 * @method void setPublicIpAddressSet(array $PublicIpAddressSet) Set The public IP object array of the bound NAT gateway.
 * @method string getNetworkState() Obtain The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Service suspended due to account overdue.
 * @method void setNetworkState(string $NetworkState) Set The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Service suspended due to account overdue.
 * @method array getDestinationIpPortTranslationNatRuleSet() Obtain The port forwarding rules of the NAT gateway.
 * @method void setDestinationIpPortTranslationNatRuleSet(array $DestinationIpPortTranslationNatRuleSet) Set The port forwarding rules of the NAT gateway.
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getZone() Obtain The availability zone in which the NAT gateway is located.
 * @method void setZone(string $Zone) Set The availability zone in which the NAT gateway is located.
 * @method array getDirectConnectGatewayIds() Obtain ID of the direct connect gateway bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDirectConnectGatewayIds(array $DirectConnectGatewayIds) Set ID of the direct connect gateway bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTagSet() Obtain Tag key-value pairs.
 * @method void setTagSet(array $TagSet) Set Tag key-value pairs.
 * @method array getSecurityGroupSet() Obtain The list of the security groups bound to the NAT Gateway
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecurityGroupSet(array $SecurityGroupSet) Set The list of the security groups bound to the NAT Gateway
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getSourceIpTranslationNatRuleSet() Obtain SNAT forwarding rule of the NAT gateway.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSourceIpTranslationNatRuleSet(array $SourceIpTranslationNatRuleSet) Set SNAT forwarding rule of the NAT gateway.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getIsExclusive() Obtain Whether the NAT gateway is dedicated.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsExclusive(boolean $IsExclusive) Set Whether the NAT gateway is dedicated.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getExclusiveGatewayBandwidth() Obtain Bandwidth of the gateway cluster where the dedicated NAT Gateway resides. Unit: Mbps. This field does not exist when the `IsExclusive` field is set to `false`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExclusiveGatewayBandwidth(integer $ExclusiveGatewayBandwidth) Set Bandwidth of the gateway cluster where the dedicated NAT Gateway resides. Unit: Mbps. This field does not exist when the `IsExclusive` field is set to `false`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRestrictState() Obtain Whether the NAT gateway is blocked. Values: `NORMAL`, `RESTRICTED`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestrictState(string $RestrictState) Set Whether the NAT gateway is blocked. Values: `NORMAL`, `RESTRICTED`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNatProductVersion() Obtain NAT gateway major version. `1`: Classic, `2`: Standard
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNatProductVersion(integer $NatProductVersion) Set NAT gateway major version. `1`: Classic, `2`: Standard
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSmartScheduleMode() Obtain 
 * @method void setSmartScheduleMode(boolean $SmartScheduleMode) Set 
 */
class NatGateway extends AbstractModel
{
    /**
     * @var string NAT gateway ID.
     */
    public $NatGatewayId;

    /**
     * @var string NAT gateway name.
     */
    public $NatGatewayName;

    /**
     * @var string NAT gateway creation time.
     */
    public $CreatedTime;

    /**
     * @var string The status of the NAT gateway.
 `PENDING`: Being created, `DELETING`: Being deleted, `AVAILABLE`: Running, `UPDATING`: Being upgraded,
`FAILED`: Failed.
     */
    public $State;

    /**
     * @var integer The maximum outbound bandwidth of the gateway. Unit: Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer The concurrent connections cap of the gateway.
     */
    public $MaxConcurrentConnection;

    /**
     * @var array The public IP object array of the bound NAT gateway.
     */
    public $PublicIpAddressSet;

    /**
     * @var string The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Service suspended due to account overdue.
     */
    public $NetworkState;

    /**
     * @var array The port forwarding rules of the NAT gateway.
     */
    public $DestinationIpPortTranslationNatRuleSet;

    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string The availability zone in which the NAT gateway is located.
     */
    public $Zone;

    /**
     * @var array ID of the direct connect gateway bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DirectConnectGatewayIds;

    /**
     * @var string Subnet ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var array Tag key-value pairs.
     */
    public $TagSet;

    /**
     * @var array The list of the security groups bound to the NAT Gateway
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecurityGroupSet;

    /**
     * @var array SNAT forwarding rule of the NAT gateway.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SourceIpTranslationNatRuleSet;

    /**
     * @var boolean Whether the NAT gateway is dedicated.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsExclusive;

    /**
     * @var integer Bandwidth of the gateway cluster where the dedicated NAT Gateway resides. Unit: Mbps. This field does not exist when the `IsExclusive` field is set to `false`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExclusiveGatewayBandwidth;

    /**
     * @var string Whether the NAT gateway is blocked. Values: `NORMAL`, `RESTRICTED`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestrictState;

    /**
     * @var integer NAT gateway major version. `1`: Classic, `2`: Standard
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NatProductVersion;

    /**
     * @var boolean 
     */
    public $SmartScheduleMode;

    /**
     * @param string $NatGatewayId NAT gateway ID.
     * @param string $NatGatewayName NAT gateway name.
     * @param string $CreatedTime NAT gateway creation time.
     * @param string $State The status of the NAT gateway.
 `PENDING`: Being created, `DELETING`: Being deleted, `AVAILABLE`: Running, `UPDATING`: Being upgraded,
`FAILED`: Failed.
     * @param integer $InternetMaxBandwidthOut The maximum outbound bandwidth of the gateway. Unit: Mbps.
     * @param integer $MaxConcurrentConnection The concurrent connections cap of the gateway.
     * @param array $PublicIpAddressSet The public IP object array of the bound NAT gateway.
     * @param string $NetworkState The NAT gateway status. `AVAILABLE`: Operating, `UNAVAILABLE`: Unavailable, `INSUFFICIENT`: Service suspended due to account overdue.
     * @param array $DestinationIpPortTranslationNatRuleSet The port forwarding rules of the NAT gateway.
     * @param string $VpcId VPC instance ID.
     * @param string $Zone The availability zone in which the NAT gateway is located.
     * @param array $DirectConnectGatewayIds ID of the direct connect gateway bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $TagSet Tag key-value pairs.
     * @param array $SecurityGroupSet The list of the security groups bound to the NAT Gateway
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $SourceIpTranslationNatRuleSet SNAT forwarding rule of the NAT gateway.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $IsExclusive Whether the NAT gateway is dedicated.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ExclusiveGatewayBandwidth Bandwidth of the gateway cluster where the dedicated NAT Gateway resides. Unit: Mbps. This field does not exist when the `IsExclusive` field is set to `false`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RestrictState Whether the NAT gateway is blocked. Values: `NORMAL`, `RESTRICTED`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NatProductVersion NAT gateway major version. `1`: Classic, `2`: Standard
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SmartScheduleMode 
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

        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MaxConcurrentConnection",$param) and $param["MaxConcurrentConnection"] !== null) {
            $this->MaxConcurrentConnection = $param["MaxConcurrentConnection"];
        }

        if (array_key_exists("PublicIpAddressSet",$param) and $param["PublicIpAddressSet"] !== null) {
            $this->PublicIpAddressSet = [];
            foreach ($param["PublicIpAddressSet"] as $key => $value){
                $obj = new NatGatewayAddress();
                $obj->deserialize($value);
                array_push($this->PublicIpAddressSet, $obj);
            }
        }

        if (array_key_exists("NetworkState",$param) and $param["NetworkState"] !== null) {
            $this->NetworkState = $param["NetworkState"];
        }

        if (array_key_exists("DestinationIpPortTranslationNatRuleSet",$param) and $param["DestinationIpPortTranslationNatRuleSet"] !== null) {
            $this->DestinationIpPortTranslationNatRuleSet = [];
            foreach ($param["DestinationIpPortTranslationNatRuleSet"] as $key => $value){
                $obj = new DestinationIpPortTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->DestinationIpPortTranslationNatRuleSet, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DirectConnectGatewayIds",$param) and $param["DirectConnectGatewayIds"] !== null) {
            $this->DirectConnectGatewayIds = $param["DirectConnectGatewayIds"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("SecurityGroupSet",$param) and $param["SecurityGroupSet"] !== null) {
            $this->SecurityGroupSet = $param["SecurityGroupSet"];
        }

        if (array_key_exists("SourceIpTranslationNatRuleSet",$param) and $param["SourceIpTranslationNatRuleSet"] !== null) {
            $this->SourceIpTranslationNatRuleSet = [];
            foreach ($param["SourceIpTranslationNatRuleSet"] as $key => $value){
                $obj = new SourceIpTranslationNatRule();
                $obj->deserialize($value);
                array_push($this->SourceIpTranslationNatRuleSet, $obj);
            }
        }

        if (array_key_exists("IsExclusive",$param) and $param["IsExclusive"] !== null) {
            $this->IsExclusive = $param["IsExclusive"];
        }

        if (array_key_exists("ExclusiveGatewayBandwidth",$param) and $param["ExclusiveGatewayBandwidth"] !== null) {
            $this->ExclusiveGatewayBandwidth = $param["ExclusiveGatewayBandwidth"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("NatProductVersion",$param) and $param["NatProductVersion"] !== null) {
            $this->NatProductVersion = $param["NatProductVersion"];
        }

        if (array_key_exists("SmartScheduleMode",$param) and $param["SmartScheduleMode"] !== null) {
            $this->SmartScheduleMode = $param["SmartScheduleMode"];
        }
    }
}
