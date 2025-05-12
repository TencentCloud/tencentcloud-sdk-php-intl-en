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
 * @method string getInstanceGroupType() Obtain Network type.
 * @method void setInstanceGroupType(string $InstanceGroupType) Set Network type.
 * @method string getInstanceGroupId() Obtain Instance group ID
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Instance group ID
 * @method string getVpcId() Obtain Specifies the virtual private cloud ID.
 * @method void setVpcId(string $VpcId) Set Specifies the virtual private cloud ID.
 * @method string getSubnetId() Obtain Specifies the subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Specifies the subnet ID.
 * @method integer getNetType() Obtain Network type. valid values: 0 (basic network), 1 (vpc network), 2 (blackstone network).
 * @method void setNetType(integer $NetType) Set Network type. valid values: 0 (basic network), 1 (vpc network), 2 (blackstone network).
 * @method string getVip() Obtain VPC IP.
 * @method void setVip(string $Vip) Set VPC IP.
 * @method integer getVport() Obtain VPC port.
 * @method void setVport(integer $Vport) Set VPC port.
 * @method string getWanDomain() Obtain Specifies the public network domain name.
 * @method void setWanDomain(string $WanDomain) Set Specifies the public network domain name.
 * @method string getWanIP() Obtain Public IP address
 * @method void setWanIP(string $WanIP) Set Public IP address
 * @method integer getWanPort() Obtain Public network port.
 * @method void setWanPort(integer $WanPort) Set Public network port.
 * @method string getWanStatus() Obtain Public network enabled status.
 * @method void setWanStatus(string $WanStatus) Set Public network enabled status.
 */
class InstanceNetInfo extends AbstractModel
{
    /**
     * @var string Network type.
     */
    public $InstanceGroupType;

    /**
     * @var string Instance group ID
     */
    public $InstanceGroupId;

    /**
     * @var string Specifies the virtual private cloud ID.
     */
    public $VpcId;

    /**
     * @var string Specifies the subnet ID.
     */
    public $SubnetId;

    /**
     * @var integer Network type. valid values: 0 (basic network), 1 (vpc network), 2 (blackstone network).
     */
    public $NetType;

    /**
     * @var string VPC IP.
     */
    public $Vip;

    /**
     * @var integer VPC port.
     */
    public $Vport;

    /**
     * @var string Specifies the public network domain name.
     */
    public $WanDomain;

    /**
     * @var string Public IP address
     */
    public $WanIP;

    /**
     * @var integer Public network port.
     */
    public $WanPort;

    /**
     * @var string Public network enabled status.
     */
    public $WanStatus;

    /**
     * @param string $InstanceGroupType Network type.
     * @param string $InstanceGroupId Instance group ID
     * @param string $VpcId Specifies the virtual private cloud ID.
     * @param string $SubnetId Specifies the subnet ID.
     * @param integer $NetType Network type. valid values: 0 (basic network), 1 (vpc network), 2 (blackstone network).
     * @param string $Vip VPC IP.
     * @param integer $Vport VPC port.
     * @param string $WanDomain Specifies the public network domain name.
     * @param string $WanIP Public IP address
     * @param integer $WanPort Public network port.
     * @param string $WanStatus Public network enabled status.
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
