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
 * 
 *
 * @method string getInstanceGroupType() Obtain 
 * @method void setInstanceGroupType(string $InstanceGroupType) Set 
 * @method string getInstanceGroupId() Obtain 
 * @method void setInstanceGroupId(string $InstanceGroupId) Set 
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getSubnetId() Obtain 
 * @method void setSubnetId(string $SubnetId) Set 
 * @method integer getNetType() Obtain 
 * @method void setNetType(integer $NetType) Set 
 * @method string getVip() Obtain 
 * @method void setVip(string $Vip) Set 
 * @method integer getVport() Obtain 
 * @method void setVport(integer $Vport) Set 
 * @method string getWanDomain() Obtain 
 * @method void setWanDomain(string $WanDomain) Set 
 * @method string getWanIP() Obtain 
 * @method void setWanIP(string $WanIP) Set 
 * @method integer getWanPort() Obtain 
 * @method void setWanPort(integer $WanPort) Set 
 * @method string getWanStatus() Obtain 
 * @method void setWanStatus(string $WanStatus) Set 
 */
class InstanceNetInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $InstanceGroupType;

    /**
     * @var string 
     */
    public $InstanceGroupId;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string 
     */
    public $SubnetId;

    /**
     * @var integer 
     */
    public $NetType;

    /**
     * @var string 
     */
    public $Vip;

    /**
     * @var integer 
     */
    public $Vport;

    /**
     * @var string 
     */
    public $WanDomain;

    /**
     * @var string 
     */
    public $WanIP;

    /**
     * @var integer 
     */
    public $WanPort;

    /**
     * @var string 
     */
    public $WanStatus;

    /**
     * @param string $InstanceGroupType 
     * @param string $InstanceGroupId 
     * @param string $VpcId 
     * @param string $SubnetId 
     * @param integer $NetType 
     * @param string $Vip 
     * @param integer $Vport 
     * @param string $WanDomain 
     * @param string $WanIP 
     * @param integer $WanPort 
     * @param string $WanStatus 
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
