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
 * Subnet object
 *
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getSubnetId() Obtain Subnet instance ID, such as `subnet-bthucmmy`.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID, such as `subnet-bthucmmy`.
 * @method string getSubnetName() Obtain Subnet name.
 * @method void setSubnetName(string $SubnetName) Set Subnet name.
 * @method string getCidrBlock() Obtain IPv4 CIDR block of the subnet.
 * @method void setCidrBlock(string $CidrBlock) Set IPv4 CIDR block of the subnet.
 * @method boolean getIsDefault() Obtain Whether it is the default subnet.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default subnet.
 * @method boolean getEnableBroadcast() Obtain Whether to enable broadcast.
 * @method void setEnableBroadcast(boolean $EnableBroadcast) Set Whether to enable broadcast.
 * @method string getRouteTableId() Obtain Route table instance ID, such as `rtb-l2h8d7c2`.
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID, such as `rtb-l2h8d7c2`.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method integer getAvailableIpAddressCount() Obtain Number of available IPs.
 * @method void setAvailableIpAddressCount(integer $AvailableIpAddressCount) Set Number of available IPs.
 * @method string getIpv6CidrBlock() Obtain IPv6 CIDR block of the subnet.
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set IPv6 CIDR block of the subnet.
 * @method string getNetworkAclId() Obtain Associated ACLID
 * @method void setNetworkAclId(string $NetworkAclId) Set Associated ACLID
 * @method boolean getIsRemoteVpcSnat() Obtain Whether it is an SNAT address pool subnet.
 * @method void setIsRemoteVpcSnat(boolean $IsRemoteVpcSnat) Set Whether it is an SNAT address pool subnet.
 * @method array getTagSet() Obtain Tag key-value pairs.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Tag key-value pairs.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Region
 * @method void setZone(string $Zone) Set Region
 * @method string getZoneName() Obtain AZ name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZoneName(string $ZoneName) Set AZ name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceCount() Obtain Number of instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVpcCidrBlock() Obtain IPv4 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcCidrBlock(string $VpcCidrBlock) Set IPv4 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVpcIpv6CidrBlock() Obtain IPv6 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcIpv6CidrBlock(string $VpcIpv6CidrBlock) Set IPv6 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Subnet extends AbstractModel
{
    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string Subnet instance ID, such as `subnet-bthucmmy`.
     */
    public $SubnetId;

    /**
     * @var string Subnet name.
     */
    public $SubnetName;

    /**
     * @var string IPv4 CIDR block of the subnet.
     */
    public $CidrBlock;

    /**
     * @var boolean Whether it is the default subnet.
     */
    public $IsDefault;

    /**
     * @var boolean Whether to enable broadcast.
     */
    public $EnableBroadcast;

    /**
     * @var string Route table instance ID, such as `rtb-l2h8d7c2`.
     */
    public $RouteTableId;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var integer Number of available IPs.
     */
    public $AvailableIpAddressCount;

    /**
     * @var string IPv6 CIDR block of the subnet.
     */
    public $Ipv6CidrBlock;

    /**
     * @var string Associated ACLID
     */
    public $NetworkAclId;

    /**
     * @var boolean Whether it is an SNAT address pool subnet.
     */
    public $IsRemoteVpcSnat;

    /**
     * @var array Tag key-value pairs.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var string Region
     */
    public $Zone;

    /**
     * @var string AZ name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneName;

    /**
     * @var integer Number of instances
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceCount;

    /**
     * @var string IPv4 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcCidrBlock;

    /**
     * @var string IPv6 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcIpv6CidrBlock;

    /**
     * @var string Region
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @param string $VpcId VPC instance ID.
     * @param string $SubnetId Subnet instance ID, such as `subnet-bthucmmy`.
     * @param string $SubnetName Subnet name.
     * @param string $CidrBlock IPv4 CIDR block of the subnet.
     * @param boolean $IsDefault Whether it is the default subnet.
     * @param boolean $EnableBroadcast Whether to enable broadcast.
     * @param string $RouteTableId Route table instance ID, such as `rtb-l2h8d7c2`.
     * @param string $CreatedTime Creation time.
     * @param integer $AvailableIpAddressCount Number of available IPs.
     * @param string $Ipv6CidrBlock IPv6 CIDR block of the subnet.
     * @param string $NetworkAclId Associated ACLID
     * @param boolean $IsRemoteVpcSnat Whether it is an SNAT address pool subnet.
     * @param array $TagSet Tag key-value pairs.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Region
     * @param string $ZoneName AZ name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceCount Number of instances
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VpcCidrBlock IPv4 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VpcIpv6CidrBlock IPv6 CIDR block of the VPC.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EnableBroadcast",$param) and $param["EnableBroadcast"] !== null) {
            $this->EnableBroadcast = $param["EnableBroadcast"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AvailableIpAddressCount",$param) and $param["AvailableIpAddressCount"] !== null) {
            $this->AvailableIpAddressCount = $param["AvailableIpAddressCount"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("IsRemoteVpcSnat",$param) and $param["IsRemoteVpcSnat"] !== null) {
            $this->IsRemoteVpcSnat = $param["IsRemoteVpcSnat"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("VpcIpv6CidrBlock",$param) and $param["VpcIpv6CidrBlock"] !== null) {
            $this->VpcIpv6CidrBlock = $param["VpcIpv6CidrBlock"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
