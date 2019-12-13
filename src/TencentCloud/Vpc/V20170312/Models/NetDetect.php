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
 * @method string getVpcId() 获取The ID of a VPC instance, such as `vpc-12345678`.
 * @method void setVpcId(string $VpcId) 设置The ID of a VPC instance, such as `vpc-12345678`.
 * @method string getVpcName() 获取The name of a VPC instance.
 * @method void setVpcName(string $VpcName) 设置The name of a VPC instance.
 * @method string getSubnetId() 获取The ID of a subnet instance, such as subnet-12345678.
 * @method void setSubnetId(string $SubnetId) 设置The ID of a subnet instance, such as subnet-12345678.
 * @method string getSubnetName() 获取The name of a subnet instance.
 * @method void setSubnetName(string $SubnetName) 设置The name of a subnet instance.
 * @method string getNetDetectId() 获取The ID of a network detection instance, such as netd-12345678.
 * @method void setNetDetectId(string $NetDetectId) 设置The ID of a network detection instance, such as netd-12345678.
 * @method string getNetDetectName() 获取The name of a network detection instance. The maximum length is 60 characters.
 * @method void setNetDetectName(string $NetDetectName) 设置The name of a network detection instance. The maximum length is 60 characters.
 * @method array getDetectDestinationIp() 获取The array of detection destination IPv4 addresses, which contains at most two IP addresses.
 * @method void setDetectDestinationIp(array $DetectDestinationIp) 设置The array of detection destination IPv4 addresses, which contains at most two IP addresses.
 * @method array getDetectSourceIp() 获取The array of detection source IPv4 addresses automatically allocated by the system. The length is 2.
 * @method void setDetectSourceIp(array $DetectSourceIp) 设置The array of detection source IPv4 addresses automatically allocated by the system. The length is 2.
 * @method string getNextHopType() 获取The type of the next hop. Currently supported types are:
VPN: VPN gateway;
DIRECTCONNECT: direct connect gateway;
PEERCONNECTION: peering connection;
NAT: NAT gateway;
NORMAL_CVM: normal CVM.
 * @method void setNextHopType(string $NextHopType) 设置The type of the next hop. Currently supported types are:
VPN: VPN gateway;
DIRECTCONNECT: direct connect gateway;
PEERCONNECTION: peering connection;
NAT: NAT gateway;
NORMAL_CVM: normal CVM.
 * @method string getNextHopDestination() 获取The next-hop destination gateway. The value is related to NextHopType.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
If NextHopType is set to DIRECTCONNECT, the value of this parameter is the direct connect gateway ID, such as dcg-12345678.
If NextHopType is set to PEERCONNECTION, the value of this parameter is the peering connection ID, such as pcx-12345678.
If NextHopType is set to NAT, the value of this parameter is the NAT gateway ID, such as nat-12345678.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
 * @method void setNextHopDestination(string $NextHopDestination) 设置The next-hop destination gateway. The value is related to NextHopType.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
If NextHopType is set to DIRECTCONNECT, the value of this parameter is the direct connect gateway ID, such as dcg-12345678.
If NextHopType is set to PEERCONNECTION, the value of this parameter is the peering connection ID, such as pcx-12345678.
If NextHopType is set to NAT, the value of this parameter is the NAT gateway ID, such as nat-12345678.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
 * @method string getNextHopName() 获取The name of the next-hop gateway.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNextHopName(string $NextHopName) 设置The name of the next-hop gateway.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNetDetectDescription() 获取Network detection description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetDetectDescription(string $NetDetectDescription) 设置Network detection description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() 获取The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) 设置The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *The network detection object.
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
     * @var string The type of the next hop. Currently supported types are:
VPN: VPN gateway;
DIRECTCONNECT: direct connect gateway;
PEERCONNECTION: peering connection;
NAT: NAT gateway;
NORMAL_CVM: normal CVM.
     */
    public $NextHopType;

    /**
     * @var string The next-hop destination gateway. The value is related to NextHopType.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
If NextHopType is set to DIRECTCONNECT, the value of this parameter is the direct connect gateway ID, such as dcg-12345678.
If NextHopType is set to PEERCONNECTION, the value of this parameter is the peering connection ID, such as pcx-12345678.
If NextHopType is set to NAT, the value of this parameter is the NAT gateway ID, such as nat-12345678.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
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
     * @param string $NextHopType The type of the next hop. Currently supported types are:
VPN: VPN gateway;
DIRECTCONNECT: direct connect gateway;
PEERCONNECTION: peering connection;
NAT: NAT gateway;
NORMAL_CVM: normal CVM.
     * @param string $NextHopDestination The next-hop destination gateway. The value is related to NextHopType.
If NextHopType is set to VPN, the value of this parameter is the VPN gateway ID, such as vpngw-12345678.
If NextHopType is set to DIRECTCONNECT, the value of this parameter is the direct connect gateway ID, such as dcg-12345678.
If NextHopType is set to PEERCONNECTION, the value of this parameter is the peering connection ID, such as pcx-12345678.
If NextHopType is set to NAT, the value of this parameter is the NAT gateway ID, such as nat-12345678.
If NextHopType is set to NORMAL_CVM, the value of this parameter is the IPv4 address of the CVM, such as 10.0.0.12.
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
     * 内部实现，用户禁止调用
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
