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
 * The network detection object.
 *
 * @method string getVpcId() Obtain The ID of a VPC instance, such as `vpc-12345678`.
 * @method void setVpcId(string $VpcId) Set The ID of a VPC instance, such as `vpc-12345678`.
 * @method string getVpcName() Obtain The name of a VPC instance.
 * @method void setVpcName(string $VpcName) Set The name of a VPC instance.
 * @method string getSubnetId() Obtain The ID of a subnet instance, such as subnet-12345678.
 * @method void setSubnetId(string $SubnetId) Set The ID of a subnet instance, such as subnet-12345678.
 * @method string getSubnetName() Obtain The name of a subnet instance.
 * @method void setSubnetName(string $SubnetName) Set The name of a subnet instance.
 * @method string getNetDetectId() Obtain The ID of a network detection instance, such as netd-12345678.
 * @method void setNetDetectId(string $NetDetectId) Set The ID of a network detection instance, such as netd-12345678.
 * @method string getNetDetectName() Obtain The name of a network detection instance. The maximum length is 60 characters.
 * @method void setNetDetectName(string $NetDetectName) Set The name of a network detection instance. The maximum length is 60 characters.
 * @method array getDetectDestinationIp() Obtain The array of detection destination IPv4 addresses, which contains at most two IP addresses.
 * @method void setDetectDestinationIp(array $DetectDestinationIp) Set The array of detection destination IPv4 addresses, which contains at most two IP addresses.
 * @method array getDetectSourceIp() Obtain The array of detection source IPv4 addresses automatically allocated by the system. The length is 2.
 * @method void setDetectSourceIp(array $DetectSourceIp) Set The array of detection source IPv4 addresses automatically allocated by the system. The length is 2.
 * @method string getNextHopType() Obtain Type of the next hop. Currently supported types are:
VPN: VPN gateway;
`DIRECTCONNECT`: Direct connect gateway;
`PEERCONNECTION`: Peering connection;
`NAT`: NAT gateway;
`NORMAL_CVM`: CVM instance;
`CCN`: CCN instance;
`NONEXTHOP`: No next hop.
 * @method void setNextHopType(string $NextHopType) Set Type of the next hop. Currently supported types are:
VPN: VPN gateway;
`DIRECTCONNECT`: Direct connect gateway;
`PEERCONNECTION`: Peering connection;
`NAT`: NAT gateway;
`NORMAL_CVM`: CVM instance;
`CCN`: CCN instance;
`NONEXTHOP`: No next hop.
 * @method string getNextHopDestination() Obtain ID of the next-hop gateway.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
`NextHopType` = `DIRECTCONNECT`: Direct connect gateway ID, such as `dcg-12345678`.
`NextHopType` = `PEERCONNECTION`: Peering connection ID, such as `pcx-12345678`.
`NextHopType` = `NAT`: NAT gateway ID, such as `nat-12345678`.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
`NextHopType` = `CCN`: CCN instance ID, such as `ccn-12345678`.
`NextHopType` = `NONEXTHOP`: No next hop.
 * @method void setNextHopDestination(string $NextHopDestination) Set ID of the next-hop gateway.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
`NextHopType` = `DIRECTCONNECT`: Direct connect gateway ID, such as `dcg-12345678`.
`NextHopType` = `PEERCONNECTION`: Peering connection ID, such as `pcx-12345678`.
`NextHopType` = `NAT`: NAT gateway ID, such as `nat-12345678`.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
`NextHopType` = `CCN`: CCN instance ID, such as `ccn-12345678`.
`NextHopType` = `NONEXTHOP`: No next hop.
 * @method string getNextHopName() Obtain The name of the next-hop gateway.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNextHopName(string $NextHopName) Set The name of the next-hop gateway.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNetDetectDescription() Obtain Network detection description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetDetectDescription(string $NetDetectDescription) Set Network detection description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetDetect extends AbstractModel
{
    /**
     * @var string The ID of a VPC instance, such as `vpc-12345678`.
     */
    public $VpcId;

    /**
     * @var string The name of a VPC instance.
     */
    public $VpcName;

    /**
     * @var string The ID of a subnet instance, such as subnet-12345678.
     */
    public $SubnetId;

    /**
     * @var string The name of a subnet instance.
     */
    public $SubnetName;

    /**
     * @var string The ID of a network detection instance, such as netd-12345678.
     */
    public $NetDetectId;

    /**
     * @var string The name of a network detection instance. The maximum length is 60 characters.
     */
    public $NetDetectName;

    /**
     * @var array The array of detection destination IPv4 addresses, which contains at most two IP addresses.
     */
    public $DetectDestinationIp;

    /**
     * @var array The array of detection source IPv4 addresses automatically allocated by the system. The length is 2.
     */
    public $DetectSourceIp;

    /**
     * @var string Type of the next hop. Currently supported types are:
VPN: VPN gateway;
`DIRECTCONNECT`: Direct connect gateway;
`PEERCONNECTION`: Peering connection;
`NAT`: NAT gateway;
`NORMAL_CVM`: CVM instance;
`CCN`: CCN instance;
`NONEXTHOP`: No next hop.
     */
    public $NextHopType;

    /**
     * @var string ID of the next-hop gateway.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
`NextHopType` = `DIRECTCONNECT`: Direct connect gateway ID, such as `dcg-12345678`.
`NextHopType` = `PEERCONNECTION`: Peering connection ID, such as `pcx-12345678`.
`NextHopType` = `NAT`: NAT gateway ID, such as `nat-12345678`.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
`NextHopType` = `CCN`: CCN instance ID, such as `ccn-12345678`.
`NextHopType` = `NONEXTHOP`: No next hop.
     */
    public $NextHopDestination;

    /**
     * @var string The name of the next-hop gateway.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NextHopName;

    /**
     * @var string Network detection description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetDetectDescription;

    /**
     * @var string The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $VpcId The ID of a VPC instance, such as `vpc-12345678`.
     * @param string $VpcName The name of a VPC instance.
     * @param string $SubnetId The ID of a subnet instance, such as subnet-12345678.
     * @param string $SubnetName The name of a subnet instance.
     * @param string $NetDetectId The ID of a network detection instance, such as netd-12345678.
     * @param string $NetDetectName The name of a network detection instance. The maximum length is 60 characters.
     * @param array $DetectDestinationIp The array of detection destination IPv4 addresses, which contains at most two IP addresses.
     * @param array $DetectSourceIp The array of detection source IPv4 addresses automatically allocated by the system. The length is 2.
     * @param string $NextHopType Type of the next hop. Currently supported types are:
VPN: VPN gateway;
`DIRECTCONNECT`: Direct connect gateway;
`PEERCONNECTION`: Peering connection;
`NAT`: NAT gateway;
`NORMAL_CVM`: CVM instance;
`CCN`: CCN instance;
`NONEXTHOP`: No next hop.
     * @param string $NextHopDestination ID of the next-hop gateway.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
`NextHopType` = `DIRECTCONNECT`: Direct connect gateway ID, such as `dcg-12345678`.
`NextHopType` = `PEERCONNECTION`: Peering connection ID, such as `pcx-12345678`.
`NextHopType` = `NAT`: NAT gateway ID, such as `nat-12345678`.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
`NextHopType` = `CCN`: CCN instance ID, such as `ccn-12345678`.
`NextHopType` = `NONEXTHOP`: No next hop.
     * @param string $NextHopName The name of the next-hop gateway.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NetDetectDescription Network detection description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("NetDetectId",$param) and $param["NetDetectId"] !== null) {
            $this->NetDetectId = $param["NetDetectId"];
        }

        if (array_key_exists("NetDetectName",$param) and $param["NetDetectName"] !== null) {
            $this->NetDetectName = $param["NetDetectName"];
        }

        if (array_key_exists("DetectDestinationIp",$param) and $param["DetectDestinationIp"] !== null) {
            $this->DetectDestinationIp = $param["DetectDestinationIp"];
        }

        if (array_key_exists("DetectSourceIp",$param) and $param["DetectSourceIp"] !== null) {
            $this->DetectSourceIp = $param["DetectSourceIp"];
        }

        if (array_key_exists("NextHopType",$param) and $param["NextHopType"] !== null) {
            $this->NextHopType = $param["NextHopType"];
        }

        if (array_key_exists("NextHopDestination",$param) and $param["NextHopDestination"] !== null) {
            $this->NextHopDestination = $param["NextHopDestination"];
        }

        if (array_key_exists("NextHopName",$param) and $param["NextHopName"] !== null) {
            $this->NextHopName = $param["NextHopName"];
        }

        if (array_key_exists("NetDetectDescription",$param) and $param["NetDetectDescription"] !== null) {
            $this->NetDetectDescription = $param["NetDetectDescription"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
