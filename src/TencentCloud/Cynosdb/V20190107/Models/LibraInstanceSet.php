<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * libra instance information
 *
 * @method string getDbMode() Obtain Database schema
 * @method void setDbMode(string $DbMode) Set Database schema
 * @method integer getInstanceCpu() Obtain Number of CPU cores
 * @method void setInstanceCpu(integer $InstanceCpu) Set Number of CPU cores
 * @method string getInstanceDeviceType() Obtain Instance type
 * @method void setInstanceDeviceType(string $InstanceDeviceType) Set Instance type
 * @method string getInstanceGroupId() Obtain Group ID
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Group ID
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getInstanceMemory() Obtain memory
 * @method void setInstanceMemory(integer $InstanceMemory) Set memory
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method integer getInstancePayMode() Obtain Payment mode
 * @method void setInstancePayMode(integer $InstancePayMode) Set Payment mode
 * @method string getInstancePeriodEndTime() Obtain Payment end time
 * @method void setInstancePeriodEndTime(string $InstancePeriodEndTime) Set Payment end time
 * @method string getInstanceRole() Obtain Instance role
 * @method void setInstanceRole(string $InstanceRole) Set Instance role
 * @method string getInstanceStatus() Obtain Instance status
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status
 * @method string getInstanceStatusDesc() Obtain Instance status description
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) Set Instance status description
 * @method string getNetType() Obtain Network type.
 * @method void setNetType(string $NetType) Set Network type.
 * @method string getUniqSubnetId() Obtain Subnet ID
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID
 * @method string getUniqVpcId() Obtain vpcid
 * @method void setUniqVpcId(string $UniqVpcId) Set vpcid
 * @method string getVip() Obtain Virtual IP
 * @method void setVip(string $Vip) Set Virtual IP
 * @method integer getVport() Obtain Virtual port
 * @method void setVport(integer $Vport) Set Virtual port
 * @method string getWanDomain() Obtain Public network region
 * @method void setWanDomain(string $WanDomain) Set Public network region
 * @method string getWanIP() Obtain Public IP address
 * @method void setWanIP(string $WanIP) Set Public IP address
 * @method integer getWanPort() Obtain Public network port
 * @method void setWanPort(integer $WanPort) Set Public network port
 * @method string getWanStatus() Obtain Public network status
 * @method void setWanStatus(string $WanStatus) Set Public network status
 * @method integer getInstanceStorage() Obtain hard disk
 * @method void setInstanceStorage(integer $InstanceStorage) Set hard disk
 * @method string getInstanceStorageType() Obtain Hard disk type.
 * @method void setInstanceStorageType(string $InstanceStorageType) Set Hard disk type.
 */
class LibraInstanceSet extends AbstractModel
{
    /**
     * @var string Database schema
     */
    public $DbMode;

    /**
     * @var integer Number of CPU cores
     */
    public $InstanceCpu;

    /**
     * @var string Instance type
     */
    public $InstanceDeviceType;

    /**
     * @var string Group ID
     */
    public $InstanceGroupId;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer memory
     */
    public $InstanceMemory;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var integer Payment mode
     */
    public $InstancePayMode;

    /**
     * @var string Payment end time
     */
    public $InstancePeriodEndTime;

    /**
     * @var string Instance role
     */
    public $InstanceRole;

    /**
     * @var string Instance status
     */
    public $InstanceStatus;

    /**
     * @var string Instance status description
     */
    public $InstanceStatusDesc;

    /**
     * @var string Network type.
     */
    public $NetType;

    /**
     * @var string Subnet ID
     */
    public $UniqSubnetId;

    /**
     * @var string vpcid
     */
    public $UniqVpcId;

    /**
     * @var string Virtual IP
     */
    public $Vip;

    /**
     * @var integer Virtual port
     */
    public $Vport;

    /**
     * @var string Public network region
     */
    public $WanDomain;

    /**
     * @var string Public IP address
     */
    public $WanIP;

    /**
     * @var integer Public network port
     */
    public $WanPort;

    /**
     * @var string Public network status
     */
    public $WanStatus;

    /**
     * @var integer hard disk
     */
    public $InstanceStorage;

    /**
     * @var string Hard disk type.
     */
    public $InstanceStorageType;

    /**
     * @param string $DbMode Database schema
     * @param integer $InstanceCpu Number of CPU cores
     * @param string $InstanceDeviceType Instance type
     * @param string $InstanceGroupId Group ID
     * @param string $InstanceId Instance ID.
     * @param integer $InstanceMemory memory
     * @param string $InstanceName Instance name.
     * @param integer $InstancePayMode Payment mode
     * @param string $InstancePeriodEndTime Payment end time
     * @param string $InstanceRole Instance role
     * @param string $InstanceStatus Instance status
     * @param string $InstanceStatusDesc Instance status description
     * @param string $NetType Network type.
     * @param string $UniqSubnetId Subnet ID
     * @param string $UniqVpcId vpcid
     * @param string $Vip Virtual IP
     * @param integer $Vport Virtual port
     * @param string $WanDomain Public network region
     * @param string $WanIP Public IP address
     * @param integer $WanPort Public network port
     * @param string $WanStatus Public network status
     * @param integer $InstanceStorage hard disk
     * @param string $InstanceStorageType Hard disk type.
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
        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("InstanceCpu",$param) and $param["InstanceCpu"] !== null) {
            $this->InstanceCpu = $param["InstanceCpu"];
        }

        if (array_key_exists("InstanceDeviceType",$param) and $param["InstanceDeviceType"] !== null) {
            $this->InstanceDeviceType = $param["InstanceDeviceType"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceMemory",$param) and $param["InstanceMemory"] !== null) {
            $this->InstanceMemory = $param["InstanceMemory"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstancePayMode",$param) and $param["InstancePayMode"] !== null) {
            $this->InstancePayMode = $param["InstancePayMode"];
        }

        if (array_key_exists("InstancePeriodEndTime",$param) and $param["InstancePeriodEndTime"] !== null) {
            $this->InstancePeriodEndTime = $param["InstancePeriodEndTime"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
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

        if (array_key_exists("InstanceStorage",$param) and $param["InstanceStorage"] !== null) {
            $this->InstanceStorage = $param["InstanceStorage"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }
    }
}
