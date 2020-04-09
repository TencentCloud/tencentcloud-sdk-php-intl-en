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
 * Virtual Private Cloud (VPC) object.
 *
 * @method string getVpcName() Obtain `VPC` name.
 * @method void setVpcName(string $VpcName) Set `VPC` name.
 * @method string getVpcId() Obtain `VPC` instance `ID`, such as `vpc-azd4dt1c`.
 * @method void setVpcId(string $VpcId) Set `VPC` instance `ID`, such as `vpc-azd4dt1c`.
 * @method string getCidrBlock() Obtain The `IPv4` `CIDR` of the `VPC`.
 * @method void setCidrBlock(string $CidrBlock) Set The `IPv4` `CIDR` of the `VPC`.
 * @method boolean getIsDefault() Obtain Whether it is the default `VPC`.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default `VPC`.
 * @method boolean getEnableMulticast() Obtain Whether multicast is enabled.
 * @method void setEnableMulticast(boolean $EnableMulticast) Set Whether multicast is enabled.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method array getDnsServerSet() Obtain `DNS` list.
 * @method void setDnsServerSet(array $DnsServerSet) Set `DNS` list.
 * @method string getDomainName() Obtain DHCP domain name option value.
 * @method void setDomainName(string $DomainName) Set DHCP domain name option value.
 * @method string getDhcpOptionsId() Obtain `DHCP` option set `ID`.
 * @method void setDhcpOptionsId(string $DhcpOptionsId) Set `DHCP` option set `ID`.
 * @method boolean getEnableDhcp() Obtain Whether `DHCP` is enabled.
 * @method void setEnableDhcp(boolean $EnableDhcp) Set Whether `DHCP` is enabled.
 * @method string getIpv6CidrBlock() Obtain The `IPv6` `CIDR` of the `VPC`.
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) Set The `IPv6` `CIDR` of the `VPC`.
 * @method array getTagSet() Obtain Tag key-value pair
 * @method void setTagSet(array $TagSet) Set Tag key-value pair
 * @method array getAssistantCidrSet() Obtain The secondary CIDR block.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssistantCidrSet(array $AssistantCidrSet) Set The secondary CIDR block.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Vpc extends AbstractModel
{
    /**
     * @var string `VPC` name.
     */
    public $VpcName;

    /**
     * @var string `VPC` instance `ID`, such as `vpc-azd4dt1c`.
     */
    public $VpcId;

    /**
     * @var string The `IPv4` `CIDR` of the `VPC`.
     */
    public $CidrBlock;

    /**
     * @var boolean Whether it is the default `VPC`.
     */
    public $IsDefault;

    /**
     * @var boolean Whether multicast is enabled.
     */
    public $EnableMulticast;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var array `DNS` list.
     */
    public $DnsServerSet;

    /**
     * @var string DHCP domain name option value.
     */
    public $DomainName;

    /**
     * @var string `DHCP` option set `ID`.
     */
    public $DhcpOptionsId;

    /**
     * @var boolean Whether `DHCP` is enabled.
     */
    public $EnableDhcp;

    /**
     * @var string The `IPv6` `CIDR` of the `VPC`.
     */
    public $Ipv6CidrBlock;

    /**
     * @var array Tag key-value pair
     */
    public $TagSet;

    /**
     * @var array The secondary CIDR block.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssistantCidrSet;

    /**
     * @param string $VpcName `VPC` name.
     * @param string $VpcId `VPC` instance `ID`, such as `vpc-azd4dt1c`.
     * @param string $CidrBlock The `IPv4` `CIDR` of the `VPC`.
     * @param boolean $IsDefault Whether it is the default `VPC`.
     * @param boolean $EnableMulticast Whether multicast is enabled.
     * @param string $CreatedTime Creation Time.
     * @param array $DnsServerSet `DNS` list.
     * @param string $DomainName DHCP domain name option value.
     * @param string $DhcpOptionsId `DHCP` option set `ID`.
     * @param boolean $EnableDhcp Whether `DHCP` is enabled.
     * @param string $Ipv6CidrBlock The `IPv6` `CIDR` of the `VPC`.
     * @param array $TagSet Tag key-value pair
     * @param array $AssistantCidrSet The secondary CIDR block.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
