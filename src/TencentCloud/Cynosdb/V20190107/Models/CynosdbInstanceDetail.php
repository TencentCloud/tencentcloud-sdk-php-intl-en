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
 * Instance details
 *
 * @method string getUin() Obtain <p>User Uin</p>
 * @method void setUin(string $Uin) Set <p>User Uin</p>
 * @method integer getAppId() Obtain <p>User AppId</p>
 * @method void setAppId(integer $AppId) Set <p>User AppId</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method integer getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
 * @method string getRegion() Obtain <p>Region</p>
 * @method void setRegion(string $Region) Set <p>Region</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getStatus() Obtain <p>Instance status<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: Recovering<br>offlining: Offline<br>offlined: Offline</p>
 * @method void setStatus(string $Status) Set <p>Instance status<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: Recovering<br>offlining: Offline<br>offlined: Offline</p>
 * @method string getStatusDesc() Obtain <p>Status description in Chinese of the instance</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description in Chinese of the instance</p>
 * @method string getServerlessStatus() Obtain <p>Status of the serverless instance. Possible value:<br>resume<br>pause</p>
 * @method void setServerlessStatus(string $ServerlessStatus) Set <p>Status of the serverless instance. Possible value:<br>resume<br>pause</p>
 * @method string getDbType() Obtain <p>Database type.</p>
 * @method void setDbType(string $DbType) Set <p>Database type.</p>
 * @method string getDbVersion() Obtain <p>Database version</p>
 * @method void setDbVersion(string $DbVersion) Set <p>Database version</p>
 * @method integer getCpu() Obtain <p>Cpu, unit: cores</p>
 * @method void setCpu(integer $Cpu) Set <p>Cpu, unit: cores</p>
 * @method integer getMemory() Obtain <p>Memory, unit: GB</p>
 * @method void setMemory(integer $Memory) Set <p>Memory, unit: GB</p>
 * @method integer getStorage() Obtain <p>Stored amount, unit: GB</p>
 * @method void setStorage(integer $Storage) Set <p>Stored amount, unit: GB</p>
 * @method string getInstanceType() Obtain <p>Instance type</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance type</p>
 * @method string getInstanceRole() Obtain <p>Current instance role</p>
 * @method void setInstanceRole(string $InstanceRole) Set <p>Current instance role</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method integer getPayMode() Obtain <p>Payment mode</p>
 * @method void setPayMode(integer $PayMode) Set <p>Payment mode</p>
 * @method string getPeriodEndTime() Obtain <p>Instance expiration time</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) Set <p>Instance expiration time</p>
 * @method integer getNetType() Obtain <p>Network type.</p>
 * @method void setNetType(integer $NetType) Set <p>Network type.</p>
 * @method string getVpcId() Obtain <p>VPC network ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC network ID</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getVip() Obtain <p>Instance private IP address</p>
 * @method void setVip(string $Vip) Set <p>Instance private IP address</p>
 * @method integer getVport() Obtain <p>Instance Intranet Port</p>
 * @method void setVport(integer $Vport) Set <p>Instance Intranet Port</p>
 * @method string getWanDomain() Obtain <p>Instance public network domain name</p>
 * @method void setWanDomain(string $WanDomain) Set <p>Instance public network domain name</p>
 * @method string getCharset() Obtain <p>Character set</p>
 * @method void setCharset(string $Charset) Set <p>Character set</p>
 * @method string getCynosVersion() Obtain <p>Cynos kernel version</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>Cynos kernel version</p>
 * @method integer getRenewFlag() Obtain <p>Renewal flag</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag</p>
 * @method float getMinCpu() Obtain <p>serverless instance cpu minimum</p>
 * @method void setMinCpu(float $MinCpu) Set <p>serverless instance cpu minimum</p>
 * @method float getMaxCpu() Obtain <p>cpu cap of the serverless instance</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>cpu cap of the serverless instance</p>
 * @method string getDbMode() Obtain <p>Db type:<li>NORMAL</li><li>SERVERLESS</li></p>
 * @method void setDbMode(string $DbMode) Set <p>Db type:<li>NORMAL</li><li>SERVERLESS</li></p>
 * @method string getMasterZone() Obtain <p>Cluster read/write instance Availability Zone</p>
 * @method void setMasterZone(string $MasterZone) Set <p>Cluster read/write instance Availability Zone</p>
 */
class CynosdbInstanceDetail extends AbstractModel
{
    /**
     * @var string <p>User Uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>User AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Region</p>
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Instance status<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: Recovering<br>offlining: Offline<br>offlined: Offline</p>
     */
    public $Status;

    /**
     * @var string <p>Status description in Chinese of the instance</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>Status of the serverless instance. Possible value:<br>resume<br>pause</p>
     */
    public $ServerlessStatus;

    /**
     * @var string <p>Database type.</p>
     */
    public $DbType;

    /**
     * @var string <p>Database version</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>Cpu, unit: cores</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Memory, unit: GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>Stored amount, unit: GB</p>
     */
    public $Storage;

    /**
     * @var string <p>Instance type</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Current instance role</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Payment mode</p>
     */
    public $PayMode;

    /**
     * @var string <p>Instance expiration time</p>
     */
    public $PeriodEndTime;

    /**
     * @var integer <p>Network type.</p>
     */
    public $NetType;

    /**
     * @var string <p>VPC network ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Instance private IP address</p>
     */
    public $Vip;

    /**
     * @var integer <p>Instance Intranet Port</p>
     */
    public $Vport;

    /**
     * @var string <p>Instance public network domain name</p>
     */
    public $WanDomain;

    /**
     * @var string <p>Character set</p>
     */
    public $Charset;

    /**
     * @var string <p>Cynos kernel version</p>
     */
    public $CynosVersion;

    /**
     * @var integer <p>Renewal flag</p>
     */
    public $RenewFlag;

    /**
     * @var float <p>serverless instance cpu minimum</p>
     */
    public $MinCpu;

    /**
     * @var float <p>cpu cap of the serverless instance</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>Db type:<li>NORMAL</li><li>SERVERLESS</li></p>
     */
    public $DbMode;

    /**
     * @var string <p>Cluster read/write instance Availability Zone</p>
     */
    public $MasterZone;

    /**
     * @param string $Uin <p>User Uin</p>
     * @param integer $AppId <p>User AppId</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param integer $ProjectId <p>Project ID</p>
     * @param string $Region <p>Region</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $Status <p>Instance status<br>creating: Creating<br>running: Running<br>isolating: Isolation<br>isolated: Isolated<br>activating: Recovering<br>offlining: Offline<br>offlined: Offline</p>
     * @param string $StatusDesc <p>Status description in Chinese of the instance</p>
     * @param string $ServerlessStatus <p>Status of the serverless instance. Possible value:<br>resume<br>pause</p>
     * @param string $DbType <p>Database type.</p>
     * @param string $DbVersion <p>Database version</p>
     * @param integer $Cpu <p>Cpu, unit: cores</p>
     * @param integer $Memory <p>Memory, unit: GB</p>
     * @param integer $Storage <p>Stored amount, unit: GB</p>
     * @param string $InstanceType <p>Instance type</p>
     * @param string $InstanceRole <p>Current instance role</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param integer $PayMode <p>Payment mode</p>
     * @param string $PeriodEndTime <p>Instance expiration time</p>
     * @param integer $NetType <p>Network type.</p>
     * @param string $VpcId <p>VPC network ID</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $Vip <p>Instance private IP address</p>
     * @param integer $Vport <p>Instance Intranet Port</p>
     * @param string $WanDomain <p>Instance public network domain name</p>
     * @param string $Charset <p>Character set</p>
     * @param string $CynosVersion <p>Cynos kernel version</p>
     * @param integer $RenewFlag <p>Renewal flag</p>
     * @param float $MinCpu <p>serverless instance cpu minimum</p>
     * @param float $MaxCpu <p>cpu cap of the serverless instance</p>
     * @param string $DbMode <p>Db type:<li>NORMAL</li><li>SERVERLESS</li></p>
     * @param string $MasterZone <p>Cluster read/write instance Availability Zone</p>
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
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

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }
    }
}
