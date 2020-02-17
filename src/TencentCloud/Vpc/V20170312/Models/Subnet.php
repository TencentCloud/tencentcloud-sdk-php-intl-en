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
 * @method string getVpcId() Obtain The `ID` of the `VPC` instance.
 * @method void setVpcId(string $VpcId) Set The `ID` of the `VPC` instance.
 * @method string getSubnetId() Obtain Subnet instance `ID`, such as `subnet-bthucmmy`.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance `ID`, such as `subnet-bthucmmy`.
 * @method string getSubnetName() Obtain Subnet name.
 * @method void setSubnetName(string $SubnetName) Set Subnet name.
 * @method string getCidrBlock() Obtain The `IPv4` `CIDR` of the subnet.
 * @method void setCidrBlock(string $CidrBlock) Set The `IPv4` `CIDR` of the subnet.
 * @method boolean getIsDefault() Obtain Whether it is the default subnet.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default subnet.
 * @method boolean getEnableBroadcast() Obtain Whether to enable broadcast.
 * @method void setEnableBroadcast(boolean $EnableBroadcast) Set Whether to enable broadcast.
 * @method string getZone() Obtain Availability Zone.
 * @method void setZone(string $Zone) Set Availability Zone.
 * @method string getRouteTableId() Obtain The route table instance ID, such as `rtb-l2h8d7c2`.
 * @method void setRouteTableId(string $RouteTableId) Set The route table instance ID, such as `rtb-l2h8d7c2`.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method integer getAvailableIpAddressCount() Obtain The number of available `IP`s.
 * @method void setAvailableIpAddressCount(integer $AvailableIpAddressCount) Set The number of available `IP`s.
 * @method string getIpv6CidrBlock() Obtain The `IPv6` `CIDR` of the subnet.
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set The `IPv6` `CIDR` of the subnet.
 * @method string getNetworkAclId() Obtain The associated `ACL`ID
 * @method void setNetworkAclId(string $NetworkAclId) Set The associated `ACL`ID
 * @method boolean getIsRemoteVpcSnat() Obtain Whether it is a `SNAT` address pool subnet.
 * @method void setIsRemoteVpcSnat(boolean $IsRemoteVpcSnat) Set Whether it is a `SNAT` address pool subnet.
 */

/**
 *Subnet object
 */
class Subnet extends AbstractModel
{
    /**
     * @var string The `ID` of the `VPC` instance.
     */
    public $VpcId;

    /**
     * @var string Subnet instance `ID`, such as `subnet-bthucmmy`.
     */
    public $SubnetId;

    /**
     * @var string Subnet name.
     */
    public $SubnetName;

    /**
     * @var string The `IPv4` `CIDR` of the subnet.
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
     * @var string Availability Zone.
     */
    public $Zone;

    /**
     * @var string The route table instance ID, such as `rtb-l2h8d7c2`.
     */
    public $RouteTableId;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var integer The number of available `IP`s.
     */
    public $AvailableIpAddressCount;

    /**
     * @var string The `IPv6` `CIDR` of the subnet.
     */
    public $Ipv6CidrBlock;

    /**
     * @var string The associated `ACL`ID
     */
    public $NetworkAclId;

    /**
     * @var boolean Whether it is a `SNAT` address pool subnet.
     */
    public $IsRemoteVpcSnat;
    /**
     * @param string $VpcId The `ID` of the `VPC` instance.
     * @param string $SubnetId Subnet instance `ID`, such as `subnet-bthucmmy`.
     * @param string $SubnetName Subnet name.
     * @param string $CidrBlock The `IPv4` `CIDR` of the subnet.
     * @param boolean $IsDefault Whether it is the default subnet.
     * @param boolean $EnableBroadcast Whether to enable broadcast.
     * @param string $Zone Availability Zone.
     * @param string $RouteTableId The route table instance ID, such as `rtb-l2h8d7c2`.
     * @param string $CreatedTime Creation Time.
     * @param integer $AvailableIpAddressCount The number of available `IP`s.
     * @param string $Ipv6CidrBlock The `IPv6` `CIDR` of the subnet.
     * @param string $NetworkAclId The associated `ACL`ID
     * @param boolean $IsRemoteVpcSnat Whether it is a `SNAT` address pool subnet.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
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
    }
}
