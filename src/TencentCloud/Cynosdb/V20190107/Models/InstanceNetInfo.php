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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance network information
 *
 * @method string getInstanceGroupType() Obtain Network type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceGroupType(string $InstanceGroupType) Set Network type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceGroupId() Obtain Instance group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Instance group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNetType() Obtain Network type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetType(integer $NetType) Set Network type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain VPC IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set VPC IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain VPC port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set VPC port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanDomain() Obtain Public network domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanDomain(string $WanDomain) Set Public network domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanIP() Obtain 
 * @method void setWanIP(string $WanIP) Set 
 * @method integer getWanPort() Obtain Public network port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanPort(integer $WanPort) Set Public network port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanStatus() Obtain Public network status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanStatus(string $WanStatus) Set Public network status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceNetInfo extends AbstractModel
{
    /**
     * @var string Network type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceGroupType;

    /**
     * @var string Instance group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceGroupId;

    /**
     * @var string VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var integer Network type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetType;

    /**
     * @var string VPC IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer VPC port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var string Public network domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanDomain;

    /**
     * @var string 
     */
    public $WanIP;

    /**
     * @var integer Public network port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanPort;

    /**
     * @var string Public network status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanStatus;

    /**
     * @param string $InstanceGroupType Network type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceGroupId Instance group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NetType Network type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip VPC IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Vport VPC port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanDomain Public network domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanIP 
     * @param integer $WanPort Public network port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanStatus Public network status
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
        if (array_key_exists("InstanceGroupType",$param) and $param["InstanceGroupType"] !== null) {
            $this->InstanceGroupType = $param["InstanceGroupType"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }
    }
}
