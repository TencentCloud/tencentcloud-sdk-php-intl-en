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
 * VPC object.
 *
 * @method string getVpcName() Obtain VPC name.
 * @method void setVpcName(string $VpcName) Set VPC name.
 * @method string getVpcId() Obtain VPC instance ID, such as `vpc-azd4dt1c`.
 * @method void setVpcId(string $VpcId) Set VPC instance ID, such as `vpc-azd4dt1c`.
 * @method string getCidrBlock() Obtain IPv4 CIDR block of the VPC.
 * @method void setCidrBlock(string $CidrBlock) Set IPv4 CIDR block of the VPC.
 * @method boolean getIsDefault() Obtain Whether it is the default VPC.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default VPC.
 * @method boolean getEnableMulticast() Obtain Whether to enable multicast.
 * @method void setEnableMulticast(boolean $EnableMulticast) Set Whether to enable multicast.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method array getDnsServerSet() Obtain List of DNS servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDnsServerSet(array $DnsServerSet) Set List of DNS servers.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDomainName() Obtain DHCP domain option value.
 * @method void setDomainName(string $DomainName) Set DHCP domain option value.
 * @method string getDhcpOptionsId() Obtain DHCP option set ID.
 * @method void setDhcpOptionsId(string $DhcpOptionsId) Set DHCP option set ID.
 * @method boolean getEnableDhcp() Obtain Whether to enable DHCP.
 * @method void setEnableDhcp(boolean $EnableDhcp) Set Whether to enable DHCP.
 * @method string getIpv6CidrBlock() Obtain IPv6 CIDR block of the VPC.
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set IPv6 CIDR block of the VPC.
 * @method array getTagSet() Obtain Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAssistantCidrSet() Obtain Secondary CIDR block
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAssistantCidrSet(array $AssistantCidrSet) Set Secondary CIDR block
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method integer getSubnetCount() Obtain Number of included subnets
 * @method void setSubnetCount(integer $SubnetCount) Set Number of included subnets
 * @method integer getInstanceCount() Obtain Number of included instances
 * @method void setInstanceCount(integer $InstanceCount) Set Number of included instances
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string VPC name.
     */
    public $VpcName;

    /**
     * @var string VPC instance ID, such as `vpc-azd4dt1c`.
     */
    public $VpcId;

    /**
     * @var string IPv4 CIDR block of the VPC.
     */
    public $CidrBlock;

    /**
     * @var boolean Whether it is the default VPC.
     */
    public $IsDefault;

    /**
     * @var boolean Whether to enable multicast.
     */
    public $EnableMulticast;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var array List of DNS servers.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DnsServerSet;

    /**
     * @var string DHCP domain option value.
     */
    public $DomainName;

    /**
     * @var string DHCP option set ID.
     */
    public $DhcpOptionsId;

    /**
     * @var boolean Whether to enable DHCP.
     */
    public $EnableDhcp;

    /**
     * @var string IPv6 CIDR block of the VPC.
     */
    public $Ipv6CidrBlock;

    /**
     * @var array Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var array Secondary CIDR block
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AssistantCidrSet;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var integer Number of included subnets
     */
    public $SubnetCount;

    /**
     * @var integer Number of included instances
     */
    public $InstanceCount;

    /**
     * @param string $VpcName VPC name.
     * @param string $VpcId VPC instance ID, such as `vpc-azd4dt1c`.
     * @param string $CidrBlock IPv4 CIDR block of the VPC.
     * @param boolean $IsDefault Whether it is the default VPC.
     * @param boolean $EnableMulticast Whether to enable multicast.
     * @param string $CreatedTime Creation time.
     * @param array $DnsServerSet List of DNS servers.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DomainName DHCP domain option value.
     * @param string $DhcpOptionsId DHCP option set ID.
     * @param boolean $EnableDhcp Whether to enable DHCP.
     * @param string $Ipv6CidrBlock IPv6 CIDR block of the VPC.
     * @param array $TagSet Tag key-value pair
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AssistantCidrSet Secondary CIDR block
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region
     * @param string $Description Description
     * @param string $RegionName Region name
     * @param integer $SubnetCount Number of included subnets
     * @param integer $InstanceCount Number of included instances
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DnsServerSet",$param) and $param["DnsServerSet"] !== null) {
            $this->DnsServerSet = $param["DnsServerSet"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DhcpOptionsId",$param) and $param["DhcpOptionsId"] !== null) {
            $this->DhcpOptionsId = $param["DhcpOptionsId"];
        }

        if (array_key_exists("EnableDhcp",$param) and $param["EnableDhcp"] !== null) {
            $this->EnableDhcp = $param["EnableDhcp"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AssistantCidrSet",$param) and $param["AssistantCidrSet"] !== null) {
            $this->AssistantCidrSet = [];
            foreach ($param["AssistantCidrSet"] as $key => $value){
                $obj = new AssistantCidr();
                $obj->deserialize($value);
                array_push($this->AssistantCidrSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("SubnetCount",$param) and $param["SubnetCount"] !== null) {
            $this->SubnetCount = $param["SubnetCount"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
