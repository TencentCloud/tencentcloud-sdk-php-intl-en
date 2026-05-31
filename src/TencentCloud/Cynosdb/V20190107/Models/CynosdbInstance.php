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
 * Instance information
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
 * @method string getStatus() Obtain <p>Instance status</p>
 * @method void setStatus(string $Status) Set <p>Instance status</p>
 * @method string getStatusDesc() Obtain <p>Instance status description in Chinese</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Instance status description in Chinese</p>
 * @method string getDbMode() Obtain <p>Instance form, whether it is a serverless instance</p>
 * @method void setDbMode(string $DbMode) Set <p>Instance form, whether it is a serverless instance</p>
 * @method string getDbType() Obtain <p>Database type</p>
 * @method void setDbType(string $DbType) Set <p>Database type</p>
 * @method string getDbVersion() Obtain <p>Database version.</p>
 * @method void setDbVersion(string $DbVersion) Set <p>Database version.</p>
 * @method integer getCpu() Obtain <p>Cpu, unit: core</p>
 * @method void setCpu(integer $Cpu) Set <p>Cpu, unit: core</p>
 * @method integer getMemory() Obtain <p>Memory, unit: GB</p>
 * @method void setMemory(integer $Memory) Set <p>Memory, unit: GB</p>
 * @method integer getStorage() Obtain <p>Stored amount, unit: GB</p>
 * @method void setStorage(integer $Storage) Set <p>Stored amount, unit: GB</p>
 * @method string getInstanceType() Obtain <p>Instance type</p><p>Enumeration value:</p><ul><li>rw: Read-write instance</li><li>ro: Read-only instance</li></ul>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance type</p><p>Enumeration value:</p><ul><li>rw: Read-write instance</li><li>ro: Read-only instance</li></ul>
 * @method string getInstanceRole() Obtain <p>Current instance role</p>
 * @method void setInstanceRole(string $InstanceRole) Set <p>Current instance role</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getVpcId() Obtain <p>VPC network ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC network ID</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method string getVip() Obtain <p>Instance private IP address</p>
 * @method void setVip(string $Vip) Set <p>Instance private IP address</p>
 * @method integer getVport() Obtain <p>Instance Intranet Port</p>
 * @method void setVport(integer $Vport) Set <p>Instance Intranet Port</p>
 * @method integer getPayMode() Obtain <p>Payment mode</p>
 * @method void setPayMode(integer $PayMode) Set <p>Payment mode</p>
 * @method string getPeriodEndTime() Obtain <p>Instance expiration time</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) Set <p>Instance expiration time</p>
 * @method string getDestroyDeadlineText() Obtain <p>Termination phase</p>
 * @method void setDestroyDeadlineText(string $DestroyDeadlineText) Set <p>Termination phase</p>
 * @method string getIsolateTime() Obtain <p>Isolation time</p>
 * @method void setIsolateTime(string $IsolateTime) Set <p>Isolation time</p>
 * @method integer getNetType() Obtain <p>Network type</p>
 * @method void setNetType(integer $NetType) Set <p>Network type</p>
 * @method string getWanDomain() Obtain <p>Public network domain name</p>
 * @method void setWanDomain(string $WanDomain) Set <p>Public network domain name</p>
 * @method string getWanIP() Obtain <p>Public network IP</p>
 * @method void setWanIP(string $WanIP) Set <p>Public network IP</p>
 * @method integer getWanPort() Obtain <p>Public network port</p>
 * @method void setWanPort(integer $WanPort) Set <p>Public network port</p>
 * @method string getWanStatus() Obtain <p>Public network status</p>
 * @method void setWanStatus(string $WanStatus) Set <p>Public network status</p>
 * @method string getDestroyTime() Obtain <p>Instance destruction time</p>
 * @method void setDestroyTime(string $DestroyTime) Set <p>Instance destruction time</p>
 * @method string getCynosVersion() Obtain <p>Cynos kernel version</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>Cynos kernel version</p>
 * @method string getProcessingTask() Obtain <p>Currently processing task</p>
 * @method void setProcessingTask(string $ProcessingTask) Set <p>Currently processing task</p>
 * @method integer getRenewFlag() Obtain <p>Renewal flag</p>
 * @method void setRenewFlag(integer $RenewFlag) Set <p>Renewal flag</p>
 * @method float getMinCpu() Obtain <p>serverless instance cpu minimum</p>
 * @method void setMinCpu(float $MinCpu) Set <p>serverless instance cpu minimum</p>
 * @method float getMaxCpu() Obtain <p>cpu cap of the serverless instance</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>cpu cap of the serverless instance</p>
 * @method string getServerlessStatus() Obtain <p>serverless instance status, available values:<br>resume<br>pause</p>
 * @method void setServerlessStatus(string $ServerlessStatus) Set <p>serverless instance status, available values:<br>resume<br>pause</p>
 * @method string getStorageId() Obtain <p>Prepayment storage Id</p>
 * @method void setStorageId(string $StorageId) Set <p>Prepayment storage Id</p>
 * @method integer getStoragePayMode() Obtain <p>Storage billing type</p>
 * @method void setStoragePayMode(integer $StoragePayMode) Set <p>Storage billing type</p>
 * @method string getPhysicalZone() Obtain <p>Physical zone</p>
 * @method void setPhysicalZone(string $PhysicalZone) Set <p>Physical zone</p>
 * @method string getBusinessType() Obtain <p>Business type</p>
 * @method void setBusinessType(string $BusinessType) Set <p>Business type</p>
 * @method array getTasks() Obtain <p>Task</p>
 * @method void setTasks(array $Tasks) Set <p>Task</p>
 * @method string getIsFreeze() Obtain <p>Whether to freeze</p>
 * @method void setIsFreeze(string $IsFreeze) Set <p>Whether to freeze</p>
 * @method array getResourceTags() Obtain <p>Resource tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceTags(array $ResourceTags) Set <p>Resource tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMasterZone() Obtain <p>Primary AZ</p>
 * @method void setMasterZone(string $MasterZone) Set <p>Primary AZ</p>
 * @method array getSlaveZones() Obtain <p>Standby availability zone</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveZones(array $SlaveZones) Set <p>Standby availability zone</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceNetInfo() Obtain <p>Instance network info</p>
 * @method void setInstanceNetInfo(array $InstanceNetInfo) Set <p>Instance network info</p>
 * @method array getResourcePackages() Obtain <p>Instance bind resource package info (only return compute resource package, packageType=CCU)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourcePackages(array $ResourcePackages) Set <p>Instance bind resource package info (only return compute resource package, packageType=CCU)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceIndexMode() Obtain <p>Instance index form, available values [mixedRowColumn (hybrid row-column storage), onlyRowIndex (row storage only)]</p>
 * @method void setInstanceIndexMode(string $InstanceIndexMode) Set <p>Instance index form, available values [mixedRowColumn (hybrid row-column storage), onlyRowIndex (row storage only)]</p>
 * @method InstanceAbility getInstanceAbility() Obtain <p>Supported capabilities of the current instance</p>
 * @method void setInstanceAbility(InstanceAbility $InstanceAbility) Set <p>Supported capabilities of the current instance</p>
 * @method string getDeviceType() Obtain <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
 * @method string getInstanceStorageType() Obtain <p>Instance storage type</p>
 * @method void setInstanceStorageType(string $InstanceStorageType) Set <p>Instance storage type</p>
 * @method string getCynosVersionTag() Obtain <p>Unknown field</p>
 * @method void setCynosVersionTag(string $CynosVersionTag) Set <p>Unknown field</p>
 * @method array getNodeList() Obtain <p>libradb node information</p>
 * @method void setNodeList(array $NodeList) Set <p>libradb node information</p>
 * @method string getGdnId() Obtain <p>Unique ID of the global database</p>
 * @method void setGdnId(string $GdnId) Set <p>Unique ID of the global database</p>
 */
class CynosdbInstance extends AbstractModel
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
     * @var string <p>Instance status</p>
     */
    public $Status;

    /**
     * @var string <p>Instance status description in Chinese</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>Instance form, whether it is a serverless instance</p>
     */
    public $DbMode;

    /**
     * @var string <p>Database type</p>
     */
    public $DbType;

    /**
     * @var string <p>Database version.</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>Cpu, unit: core</p>
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
     * @var string <p>Instance type</p><p>Enumeration value:</p><ul><li>rw: Read-write instance</li><li>ro: Read-only instance</li></ul>
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
     * @var integer <p>Payment mode</p>
     */
    public $PayMode;

    /**
     * @var string <p>Instance expiration time</p>
     */
    public $PeriodEndTime;

    /**
     * @var string <p>Termination phase</p>
     */
    public $DestroyDeadlineText;

    /**
     * @var string <p>Isolation time</p>
     */
    public $IsolateTime;

    /**
     * @var integer <p>Network type</p>
     */
    public $NetType;

    /**
     * @var string <p>Public network domain name</p>
     */
    public $WanDomain;

    /**
     * @var string <p>Public network IP</p>
     */
    public $WanIP;

    /**
     * @var integer <p>Public network port</p>
     */
    public $WanPort;

    /**
     * @var string <p>Public network status</p>
     */
    public $WanStatus;

    /**
     * @var string <p>Instance destruction time</p>
     */
    public $DestroyTime;

    /**
     * @var string <p>Cynos kernel version</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>Currently processing task</p>
     */
    public $ProcessingTask;

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
     * @var string <p>serverless instance status, available values:<br>resume<br>pause</p>
     */
    public $ServerlessStatus;

    /**
     * @var string <p>Prepayment storage Id</p>
     */
    public $StorageId;

    /**
     * @var integer <p>Storage billing type</p>
     */
    public $StoragePayMode;

    /**
     * @var string <p>Physical zone</p>
     */
    public $PhysicalZone;

    /**
     * @var string <p>Business type</p>
     */
    public $BusinessType;

    /**
     * @var array <p>Task</p>
     */
    public $Tasks;

    /**
     * @var string <p>Whether to freeze</p>
     */
    public $IsFreeze;

    /**
     * @var array <p>Resource tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceTags;

    /**
     * @var string <p>Primary AZ</p>
     */
    public $MasterZone;

    /**
     * @var array <p>Standby availability zone</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveZones;

    /**
     * @var array <p>Instance network info</p>
     */
    public $InstanceNetInfo;

    /**
     * @var array <p>Instance bind resource package info (only return compute resource package, packageType=CCU)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourcePackages;

    /**
     * @var string <p>Instance index form, available values [mixedRowColumn (hybrid row-column storage), onlyRowIndex (row storage only)]</p>
     */
    public $InstanceIndexMode;

    /**
     * @var InstanceAbility <p>Supported capabilities of the current instance</p>
     */
    public $InstanceAbility;

    /**
     * @var string <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
     */
    public $DeviceType;

    /**
     * @var string <p>Instance storage type</p>
     */
    public $InstanceStorageType;

    /**
     * @var string <p>Unknown field</p>
     */
    public $CynosVersionTag;

    /**
     * @var array <p>libradb node information</p>
     */
    public $NodeList;

    /**
     * @var string <p>Unique ID of the global database</p>
     */
    public $GdnId;

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
     * @param string $Status <p>Instance status</p>
     * @param string $StatusDesc <p>Instance status description in Chinese</p>
     * @param string $DbMode <p>Instance form, whether it is a serverless instance</p>
     * @param string $DbType <p>Database type</p>
     * @param string $DbVersion <p>Database version.</p>
     * @param integer $Cpu <p>Cpu, unit: core</p>
     * @param integer $Memory <p>Memory, unit: GB</p>
     * @param integer $Storage <p>Stored amount, unit: GB</p>
     * @param string $InstanceType <p>Instance type</p><p>Enumeration value:</p><ul><li>rw: Read-write instance</li><li>ro: Read-only instance</li></ul>
     * @param string $InstanceRole <p>Current instance role</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $VpcId <p>VPC network ID</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param string $Vip <p>Instance private IP address</p>
     * @param integer $Vport <p>Instance Intranet Port</p>
     * @param integer $PayMode <p>Payment mode</p>
     * @param string $PeriodEndTime <p>Instance expiration time</p>
     * @param string $DestroyDeadlineText <p>Termination phase</p>
     * @param string $IsolateTime <p>Isolation time</p>
     * @param integer $NetType <p>Network type</p>
     * @param string $WanDomain <p>Public network domain name</p>
     * @param string $WanIP <p>Public network IP</p>
     * @param integer $WanPort <p>Public network port</p>
     * @param string $WanStatus <p>Public network status</p>
     * @param string $DestroyTime <p>Instance destruction time</p>
     * @param string $CynosVersion <p>Cynos kernel version</p>
     * @param string $ProcessingTask <p>Currently processing task</p>
     * @param integer $RenewFlag <p>Renewal flag</p>
     * @param float $MinCpu <p>serverless instance cpu minimum</p>
     * @param float $MaxCpu <p>cpu cap of the serverless instance</p>
     * @param string $ServerlessStatus <p>serverless instance status, available values:<br>resume<br>pause</p>
     * @param string $StorageId <p>Prepayment storage Id</p>
     * @param integer $StoragePayMode <p>Storage billing type</p>
     * @param string $PhysicalZone <p>Physical zone</p>
     * @param string $BusinessType <p>Business type</p>
     * @param array $Tasks <p>Task</p>
     * @param string $IsFreeze <p>Whether to freeze</p>
     * @param array $ResourceTags <p>Resource tag</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MasterZone <p>Primary AZ</p>
     * @param array $SlaveZones <p>Standby availability zone</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceNetInfo <p>Instance network info</p>
     * @param array $ResourcePackages <p>Instance bind resource package info (only return compute resource package, packageType=CCU)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceIndexMode <p>Instance index form, available values [mixedRowColumn (hybrid row-column storage), onlyRowIndex (row storage only)]</p>
     * @param InstanceAbility $InstanceAbility <p>Supported capabilities of the current instance</p>
     * @param string $DeviceType <p>Instance Machine Type</p><ol><li>common, universal type.</li><li>exclusive, dedicated.</li></ol>
     * @param string $InstanceStorageType <p>Instance storage type</p>
     * @param string $CynosVersionTag <p>Unknown field</p>
     * @param array $NodeList <p>libradb node information</p>
     * @param string $GdnId <p>Unique ID of the global database</p>
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

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("DestroyDeadlineText",$param) and $param["DestroyDeadlineText"] !== null) {
            $this->DestroyDeadlineText = $param["DestroyDeadlineText"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
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

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("ProcessingTask",$param) and $param["ProcessingTask"] !== null) {
            $this->ProcessingTask = $param["ProcessingTask"];
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

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("InstanceNetInfo",$param) and $param["InstanceNetInfo"] !== null) {
            $this->InstanceNetInfo = [];
            foreach ($param["InstanceNetInfo"] as $key => $value){
                $obj = new InstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->InstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("ResourcePackages",$param) and $param["ResourcePackages"] !== null) {
            $this->ResourcePackages = [];
            foreach ($param["ResourcePackages"] as $key => $value){
                $obj = new ResourcePackage();
                $obj->deserialize($value);
                array_push($this->ResourcePackages, $obj);
            }
        }

        if (array_key_exists("InstanceIndexMode",$param) and $param["InstanceIndexMode"] !== null) {
            $this->InstanceIndexMode = $param["InstanceIndexMode"];
        }

        if (array_key_exists("InstanceAbility",$param) and $param["InstanceAbility"] !== null) {
            $this->InstanceAbility = new InstanceAbility();
            $this->InstanceAbility->deserialize($param["InstanceAbility"]);
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }

        if (array_key_exists("CynosVersionTag",$param) and $param["CynosVersionTag"] !== null) {
            $this->CynosVersionTag = $param["CynosVersionTag"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }
    }
}
