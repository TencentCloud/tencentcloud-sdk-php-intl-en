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
 * @method string getVpcId() 获取The `ID` of a `VPC` instance, such as `vpc-12345678`.
 * @method void setVpcId(string $VpcId) 设置The `ID` of a `VPC` instance, such as `vpc-12345678`.
 * @method string getSubnetId() 获取The ID of a subnet instance, such as subnet-12345678.
 * @method void setSubnetId(string $SubnetId) 设置The ID of a subnet instance, such as subnet-12345678.
 * @method string getNetDetectName() 获取The name of a network detection instance. The maximum length is 60 characters.
 * @method void setNetDetectName(string $NetDetectName) 设置The name of a network detection instance. The maximum length is 60 characters.
 * @method array getDetectDestinationIp() 获取The array of detection destination IPv4 addresses, which contains at most two IP addresses.
 * @method void setDetectDestinationIp(array $DetectDestinationIp) 设置The array of detection destination IPv4 addresses, which contains at most two IP addresses.
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
 * @method string getNetDetectDescription() 获取Network detection description.
 * @method void setNetDetectDescription(string $NetDetectDescription) 设置Network detection description.
 */

/**
 *CreateNetDetect request structure.
 */
class CreateNetDetectRequest extends AbstractModel
{
    /**
     * @var string The `ID` of a `VPC` instance, such as `vpc-12345678`.
     */
    public $VpcId;

    /**
     * @var string The ID of a subnet instance, such as subnet-12345678.
     */
    public $SubnetId;

    /**
     * @var string The name of a network detection instance. The maximum length is 60 characters.
     */
    public $NetDetectName;

    /**
     * @var array The array of detection destination IPv4 addresses, which contains at most two IP addresses.
     */
    public $DetectDestinationIp;

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
     * @var string Network detection description.
     */
    public $NetDetectDescription;
    /**
     * @param string $VpcId The `ID` of a `VPC` instance, such as `vpc-12345678`.
     * @param string $SubnetId The ID of a subnet instance, such as subnet-12345678.
     * @param string $NetDetectName The name of a network detection instance. The maximum length is 60 characters.
     * @param array $DetectDestinationIp The array of detection destination IPv4 addresses, which contains at most two IP addresses.
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
     * @param string $NetDetectDescription Network detection description.
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetDetectName",$param) and $param["NetDetectName"] !== null) {
            $this->NetDetectName = $param["NetDetectName"];
        }

        if (array_key_exists("DetectDestinationIp",$param) and $param["DetectDestinationIp"] !== null) {
            $this->DetectDestinationIp = $param["DetectDestinationIp"];
        }

        if (array_key_exists("NextHopType",$param) and $param["NextHopType"] !== null) {
            $this->NextHopType = $param["NextHopType"];
        }

        if (array_key_exists("NextHopDestination",$param) and $param["NextHopDestination"] !== null) {
            $this->NextHopDestination = $param["NextHopDestination"];
        }

        if (array_key_exists("NetDetectDescription",$param) and $param["NetDetectDescription"] !== null) {
            $this->NetDetectDescription = $param["NetDetectDescription"];
        }
    }
}
