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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance information type
 *
 * @method integer getComputeNodeNum() Obtain <p>Number of compute nodes</p>
 * @method void setComputeNodeNum(integer $ComputeNodeNum) Set <p>Number of compute nodes</p>
 * @method string getZone() Obtain <p>Region</p>
 * @method void setZone(string $Zone) Set <p>Region</p>
 * @method string getCreateVersion() Obtain 
 * @method void setCreateVersion(string $CreateVersion) Set 
 * @method array getInitParams() Obtain 
 * @method void setInitParams(array $InitParams) Set 
 * @method string getStatus() Obtain <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
 * @method void setStatus(string $Status) Set <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method integer getStorageNodeNum() Obtain <p>Number of storage nodes</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) Set <p>Number of storage nodes</p>
 * @method array getResourceTags() Obtain 
 * @method void setResourceTags(array $ResourceTags) Set 
 * @method string getInstanceName() Obtain 
 * @method void setInstanceName(string $InstanceName) Set 
 * @method integer getCpu() Obtain <p>cpu cores of the computing node</p>
 * @method void setCpu(integer $Cpu) Set <p>cpu cores of the computing node</p>
 * @method string getVpcId() Obtain <p>Character type vpcid</p>
 * @method void setVpcId(string $VpcId) Set <p>Character type vpcid</p>
 * @method integer getMem() Obtain <p>Computing node mem, in GB</p>
 * @method void setMem(integer $Mem) Set <p>Computing node mem, in GB</p>
 * @method string getVip() Obtain <p>Subnet IP</p>
 * @method void setVip(string $Vip) Set <p>Subnet IP</p>
 * @method string getSubnetId() Obtain <p>Character type subnetid</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Character type subnetid</p>
 * @method integer getVport() Obtain <p>Subnet port</p>
 * @method void setVport(integer $Vport) Set <p>Subnet port</p>
 * @method integer getDisk() Obtain <p>Node disk capacity (unit: GB)</p>
 * @method void setDisk(integer $Disk) Set <p>Node disk capacity (unit: GB)</p>
 * @method string getCreateTime() Obtain <p>Instance Creation Time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Instance Creation Time</p>
 * @method string getRegion() Obtain <p>Region of the instance</p>
 * @method void setRegion(string $Region) Set <p>Region of the instance</p>
 * @method string getStatusDesc() Obtain <p>Status description in Chinese of the instance</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description in Chinese of the instance</p>
 * @method integer getMCCpu() Obtain 
 * @method void setMCCpu(integer $MCCpu) Set 
 * @method integer getMCMem() Obtain 
 * @method void setMCMem(integer $MCMem) Set 
 * @method integer getComputerNodeCpu() Obtain 
 * @method void setComputerNodeCpu(integer $ComputerNodeCpu) Set 
 * @method integer getComputerNodeMem() Obtain 
 * @method void setComputerNodeMem(integer $ComputerNodeMem) Set 
 * @method integer getStorageNodeCpu() Obtain 
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) Set 
 * @method integer getStorageNodeMem() Obtain 
 * @method void setStorageNodeMem(integer $StorageNodeMem) Set 
 * @method integer getMCNum() Obtain 
 * @method void setMCNum(integer $MCNum) Set 
 * @method integer getRenewFlag() Obtain 
 * @method void setRenewFlag(integer $RenewFlag) Set 
 * @method string getPayMode() Obtain <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
 * @method string getAccountTag() Obtain 
 * @method void setAccountTag(string $AccountTag) Set 
 * @method string getInstanceType() Obtain 
 * @method void setInstanceType(string $InstanceType) Set 
 * @method string getStorageType() Obtain 
 * @method void setStorageType(string $StorageType) Set 
 * @method string getDestroyedAt() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method void setDestroyedAt(string $DestroyedAt) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method string getExpireAt() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method void setExpireAt(string $ExpireAt) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method string getIsolatedAt() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method void setIsolatedAt(string $IsolatedAt) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method string getIsolatedFrom() Obtain <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method void setIsolatedFrom(string $IsolatedFrom) Set <p>&quot;0000-00-00 00:00:00&quot;</p>
 * @method integer getReplications() Obtain <p>1</p>
 * @method void setReplications(integer $Replications) Set <p>1</p>
 * @method integer getFullReplications() Obtain <p>Number of replicas</p>
 * @method void setFullReplications(integer $FullReplications) Set <p>Number of replicas</p>
 * @method integer getAppId() Obtain 
 * @method void setAppId(integer $AppId) Set 
 * @method string getSubAccountUin() Obtain 
 * @method void setSubAccountUin(string $SubAccountUin) Set 
 * @method string getUin() Obtain 
 * @method void setUin(string $Uin) Set 
 * @method array getZones() Obtain 
 * @method void setZones(array $Zones) Set 
 * @method array getNodes() Obtain 
 * @method void setNodes(array $Nodes) Set 
 * @method integer getBinlogStatus() Obtain <p>Whether binlog is on</p>
 * @method void setBinlogStatus(integer $BinlogStatus) Set <p>Whether binlog is on</p>
 * @method integer getCdcNodeCpu() Obtain <p>Number of cdc node cores</p>
 * @method void setCdcNodeCpu(integer $CdcNodeCpu) Set <p>Number of cdc node cores</p>
 * @method integer getCdcNodeMem() Obtain <p>cdc node memory size</p>
 * @method void setCdcNodeMem(integer $CdcNodeMem) Set <p>cdc node memory size</p>
 * @method integer getCdcNodeNum() Obtain <p>Number of cdc nodes</p>
 * @method void setCdcNodeNum(integer $CdcNodeNum) Set <p>Number of cdc nodes</p>
 * @method integer getAZMode() Obtain 
 * @method void setAZMode(integer $AZMode) Set 
 * @method integer getStandbyFlag() Obtain 
 * @method void setStandbyFlag(integer $StandbyFlag) Set 
 * @method integer getStandbySecondaryNum() Obtain 
 * @method void setStandbySecondaryNum(integer $StandbySecondaryNum) Set 
 * @method integer getColumnarNodeCpu() Obtain <p>cpu cores of the columnar node</p>
 * @method void setColumnarNodeCpu(integer $ColumnarNodeCpu) Set <p>cpu cores of the columnar node</p>
 * @method integer getColumnarNodeMem() Obtain <p>Columnar node memory size</p>
 * @method void setColumnarNodeMem(integer $ColumnarNodeMem) Set <p>Columnar node memory size</p>
 * @method integer getColumnarNodeNum() Obtain <p>Number of columnar nodes</p>
 * @method void setColumnarNodeNum(integer $ColumnarNodeNum) Set <p>Number of columnar nodes</p>
 * @method integer getColumnarNodeDisk() Obtain <p>Columnar node disk capacity (unit: GB)</p>
 * @method void setColumnarNodeDisk(integer $ColumnarNodeDisk) Set <p>Columnar node disk capacity (unit: GB)</p>
 * @method string getColumnarNodeStorageType() Obtain <p>Columnar node disk type</p>
 * @method void setColumnarNodeStorageType(string $ColumnarNodeStorageType) Set <p>Columnar node disk type</p>
 * @method integer getInstanceCategory() Obtain <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
 * @method void setInstanceCategory(integer $InstanceCategory) Set <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
 * @method string getExclusiveClusterId() Obtain <p>dbdc-xxxxx</p>
 * @method void setExclusiveClusterId(string $ExclusiveClusterId) Set <p>dbdc-xxxxx</p>
 * @method string getSQLMode() Obtain <p>Compatible mode</p>
 * @method void setSQLMode(string $SQLMode) Set <p>Compatible mode</p>
 * @method string getInstanceMode() Obtain <p>Instance mode</p>
 * @method void setInstanceMode(string $InstanceMode) Set <p>Instance mode</p>
 * @method string getClusterId() Obtain <p>Instance delivery platform</p>
 * @method void setClusterId(string $ClusterId) Set <p>Instance delivery platform</p>
 * @method AutoScalingConfig getAutoScaleConfig() Obtain <p>Auto-scaling configuration</p>
 * @method void setAutoScaleConfig(AutoScalingConfig $AutoScaleConfig) Set <p>Auto-scaling configuration</p>
 * @method string getAnalysisMode() Obtain <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) Set <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
 * @method array getAnalysisRelationInfos() Obtain <p>Analysis engine relationship information</p>
 * @method void setAnalysisRelationInfos(array $AnalysisRelationInfos) Set <p>Analysis engine relationship information</p>
 * @method AnalysisInstanceInfo getAnalysisInstanceInfo() Obtain <p>Analysis engine instance information</p>
 * @method void setAnalysisInstanceInfo(AnalysisInstanceInfo $AnalysisInstanceInfo) Set <p>Analysis engine instance information</p>
 * @method array getAutoScaleConfigs() Obtain 
 * @method void setAutoScaleConfigs(array $AutoScaleConfigs) Set 
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer <p>Number of compute nodes</p>
     * @deprecated
     */
    public $ComputeNodeNum;

    /**
     * @var string <p>Region</p>
     */
    public $Zone;

    /**
     * @var string 
     */
    public $CreateVersion;

    /**
     * @var array 
     */
    public $InitParams;

    /**
     * @var string <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
     */
    public $Status;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Number of storage nodes</p>
     */
    public $StorageNodeNum;

    /**
     * @var array 
     */
    public $ResourceTags;

    /**
     * @var string 
     */
    public $InstanceName;

    /**
     * @var integer <p>cpu cores of the computing node</p>
     * @deprecated
     */
    public $Cpu;

    /**
     * @var string <p>Character type vpcid</p>
     */
    public $VpcId;

    /**
     * @var integer <p>Computing node mem, in GB</p>
     * @deprecated
     */
    public $Mem;

    /**
     * @var string <p>Subnet IP</p>
     */
    public $Vip;

    /**
     * @var string <p>Character type subnetid</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Subnet port</p>
     */
    public $Vport;

    /**
     * @var integer <p>Node disk capacity (unit: GB)</p>
     */
    public $Disk;

    /**
     * @var string <p>Instance Creation Time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Region of the instance</p>
     */
    public $Region;

    /**
     * @var string <p>Status description in Chinese of the instance</p>
     */
    public $StatusDesc;

    /**
     * @var integer 
     * @deprecated
     */
    public $MCCpu;

    /**
     * @var integer 
     * @deprecated
     */
    public $MCMem;

    /**
     * @var integer 
     * @deprecated
     */
    public $ComputerNodeCpu;

    /**
     * @var integer 
     * @deprecated
     */
    public $ComputerNodeMem;

    /**
     * @var integer 
     */
    public $StorageNodeCpu;

    /**
     * @var integer 
     */
    public $StorageNodeMem;

    /**
     * @var integer 
     * @deprecated
     */
    public $MCNum;

    /**
     * @var integer 
     */
    public $RenewFlag;

    /**
     * @var string <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
     */
    public $PayMode;

    /**
     * @var string 
     */
    public $AccountTag;

    /**
     * @var string 
     */
    public $InstanceType;

    /**
     * @var string 
     */
    public $StorageType;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
     */
    public $DestroyedAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
     */
    public $ExpireAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
     */
    public $IsolatedAt;

    /**
     * @var string <p>&quot;0000-00-00 00:00:00&quot;</p>
     */
    public $IsolatedFrom;

    /**
     * @var integer <p>1</p>
     */
    public $Replications;

    /**
     * @var integer <p>Number of replicas</p>
     */
    public $FullReplications;

    /**
     * @var integer 
     */
    public $AppId;

    /**
     * @var string 
     */
    public $SubAccountUin;

    /**
     * @var string 
     */
    public $Uin;

    /**
     * @var array 
     */
    public $Zones;

    /**
     * @var array 
     */
    public $Nodes;

    /**
     * @var integer <p>Whether binlog is on</p>
     */
    public $BinlogStatus;

    /**
     * @var integer <p>Number of cdc node cores</p>
     * @deprecated
     */
    public $CdcNodeCpu;

    /**
     * @var integer <p>cdc node memory size</p>
     * @deprecated
     */
    public $CdcNodeMem;

    /**
     * @var integer <p>Number of cdc nodes</p>
     * @deprecated
     */
    public $CdcNodeNum;

    /**
     * @var integer 
     */
    public $AZMode;

    /**
     * @var integer 
     */
    public $StandbyFlag;

    /**
     * @var integer 
     */
    public $StandbySecondaryNum;

    /**
     * @var integer <p>cpu cores of the columnar node</p>
     */
    public $ColumnarNodeCpu;

    /**
     * @var integer <p>Columnar node memory size</p>
     */
    public $ColumnarNodeMem;

    /**
     * @var integer <p>Number of columnar nodes</p>
     */
    public $ColumnarNodeNum;

    /**
     * @var integer <p>Columnar node disk capacity (unit: GB)</p>
     */
    public $ColumnarNodeDisk;

    /**
     * @var string <p>Columnar node disk type</p>
     */
    public $ColumnarNodeStorageType;

    /**
     * @var integer <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
     */
    public $InstanceCategory;

    /**
     * @var string <p>dbdc-xxxxx</p>
     */
    public $ExclusiveClusterId;

    /**
     * @var string <p>Compatible mode</p>
     */
    public $SQLMode;

    /**
     * @var string <p>Instance mode</p>
     */
    public $InstanceMode;

    /**
     * @var string <p>Instance delivery platform</p>
     * @deprecated
     */
    public $ClusterId;

    /**
     * @var AutoScalingConfig <p>Auto-scaling configuration</p>
     */
    public $AutoScaleConfig;

    /**
     * @var string <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var array <p>Analysis engine relationship information</p>
     */
    public $AnalysisRelationInfos;

    /**
     * @var AnalysisInstanceInfo <p>Analysis engine instance information</p>
     */
    public $AnalysisInstanceInfo;

    /**
     * @var array 
     */
    public $AutoScaleConfigs;

    /**
     * @param integer $ComputeNodeNum <p>Number of compute nodes</p>
     * @param string $Zone <p>Region</p>
     * @param string $CreateVersion 
     * @param array $InitParams 
     * @param string $Status <p>Instance status: creating, created, initializing, running, modifying, isolating, isolated, destroying, destroyed</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param integer $StorageNodeNum <p>Number of storage nodes</p>
     * @param array $ResourceTags 
     * @param string $InstanceName 
     * @param integer $Cpu <p>cpu cores of the computing node</p>
     * @param string $VpcId <p>Character type vpcid</p>
     * @param integer $Mem <p>Computing node mem, in GB</p>
     * @param string $Vip <p>Subnet IP</p>
     * @param string $SubnetId <p>Character type subnetid</p>
     * @param integer $Vport <p>Subnet port</p>
     * @param integer $Disk <p>Node disk capacity (unit: GB)</p>
     * @param string $CreateTime <p>Instance Creation Time</p>
     * @param string $Region <p>Region of the instance</p>
     * @param string $StatusDesc <p>Status description in Chinese of the instance</p>
     * @param integer $MCCpu 
     * @param integer $MCMem 
     * @param integer $ComputerNodeCpu 
     * @param integer $ComputerNodeMem 
     * @param integer $StorageNodeCpu 
     * @param integer $StorageNodeMem 
     * @param integer $MCNum 
     * @param integer $RenewFlag 
     * @param string $PayMode <p>Payment mode, 0 pay-as-you-go; 1 annual/monthly subscription</p>
     * @param string $AccountTag 
     * @param string $InstanceType 
     * @param string $StorageType 
     * @param string $DestroyedAt <p>&quot;0000-00-00 00:00:00&quot;</p>
     * @param string $ExpireAt <p>&quot;0000-00-00 00:00:00&quot;</p>
     * @param string $IsolatedAt <p>&quot;0000-00-00 00:00:00&quot;</p>
     * @param string $IsolatedFrom <p>&quot;0000-00-00 00:00:00&quot;</p>
     * @param integer $Replications <p>1</p>
     * @param integer $FullReplications <p>Number of replicas</p>
     * @param integer $AppId 
     * @param string $SubAccountUin 
     * @param string $Uin 
     * @param array $Zones 
     * @param array $Nodes 
     * @param integer $BinlogStatus <p>Whether binlog is on</p>
     * @param integer $CdcNodeCpu <p>Number of cdc node cores</p>
     * @param integer $CdcNodeMem <p>cdc node memory size</p>
     * @param integer $CdcNodeNum <p>Number of cdc nodes</p>
     * @param integer $AZMode 
     * @param integer $StandbyFlag 
     * @param integer $StandbySecondaryNum 
     * @param integer $ColumnarNodeCpu <p>cpu cores of the columnar node</p>
     * @param integer $ColumnarNodeMem <p>Columnar node memory size</p>
     * @param integer $ColumnarNodeNum <p>Number of columnar nodes</p>
     * @param integer $ColumnarNodeDisk <p>Columnar node disk capacity (unit: GB)</p>
     * @param string $ColumnarNodeStorageType <p>Columnar node disk type</p>
     * @param integer $InstanceCategory <p>Exclusive flags, 1: Primary instance (dedicated), 2: Primary instance, 3: Disaster recovery instance, 4: Disaster recovery instance (dedicated)</p>
     * @param string $ExclusiveClusterId <p>dbdc-xxxxx</p>
     * @param string $SQLMode <p>Compatible mode</p>
     * @param string $InstanceMode <p>Instance mode</p>
     * @param string $ClusterId <p>Instance delivery platform</p>
     * @param AutoScalingConfig $AutoScaleConfig <p>Auto-scaling configuration</p>
     * @param string $AnalysisMode <p>Analytical engine mode</p><p>Enumeration value:</p><ul><li>libra: LibraDB analytical engine mode</li></ul>
     * @param array $AnalysisRelationInfos <p>Analysis engine relationship information</p>
     * @param AnalysisInstanceInfo $AnalysisInstanceInfo <p>Analysis engine instance information</p>
     * @param array $AutoScaleConfigs 
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
        if (array_key_exists("ComputeNodeNum",$param) and $param["ComputeNodeNum"] !== null) {
            $this->ComputeNodeNum = $param["ComputeNodeNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CreateVersion",$param) and $param["CreateVersion"] !== null) {
            $this->CreateVersion = $param["CreateVersion"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("MCCpu",$param) and $param["MCCpu"] !== null) {
            $this->MCCpu = $param["MCCpu"];
        }

        if (array_key_exists("MCMem",$param) and $param["MCMem"] !== null) {
            $this->MCMem = $param["MCMem"];
        }

        if (array_key_exists("ComputerNodeCpu",$param) and $param["ComputerNodeCpu"] !== null) {
            $this->ComputerNodeCpu = $param["ComputerNodeCpu"];
        }

        if (array_key_exists("ComputerNodeMem",$param) and $param["ComputerNodeMem"] !== null) {
            $this->ComputerNodeMem = $param["ComputerNodeMem"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("MCNum",$param) and $param["MCNum"] !== null) {
            $this->MCNum = $param["MCNum"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AccountTag",$param) and $param["AccountTag"] !== null) {
            $this->AccountTag = $param["AccountTag"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("DestroyedAt",$param) and $param["DestroyedAt"] !== null) {
            $this->DestroyedAt = $param["DestroyedAt"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
        }

        if (array_key_exists("IsolatedFrom",$param) and $param["IsolatedFrom"] !== null) {
            $this->IsolatedFrom = $param["IsolatedFrom"];
        }

        if (array_key_exists("Replications",$param) and $param["Replications"] !== null) {
            $this->Replications = $param["Replications"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new InstanceNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("BinlogStatus",$param) and $param["BinlogStatus"] !== null) {
            $this->BinlogStatus = $param["BinlogStatus"];
        }

        if (array_key_exists("CdcNodeCpu",$param) and $param["CdcNodeCpu"] !== null) {
            $this->CdcNodeCpu = $param["CdcNodeCpu"];
        }

        if (array_key_exists("CdcNodeMem",$param) and $param["CdcNodeMem"] !== null) {
            $this->CdcNodeMem = $param["CdcNodeMem"];
        }

        if (array_key_exists("CdcNodeNum",$param) and $param["CdcNodeNum"] !== null) {
            $this->CdcNodeNum = $param["CdcNodeNum"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("StandbyFlag",$param) and $param["StandbyFlag"] !== null) {
            $this->StandbyFlag = $param["StandbyFlag"];
        }

        if (array_key_exists("StandbySecondaryNum",$param) and $param["StandbySecondaryNum"] !== null) {
            $this->StandbySecondaryNum = $param["StandbySecondaryNum"];
        }

        if (array_key_exists("ColumnarNodeCpu",$param) and $param["ColumnarNodeCpu"] !== null) {
            $this->ColumnarNodeCpu = $param["ColumnarNodeCpu"];
        }

        if (array_key_exists("ColumnarNodeMem",$param) and $param["ColumnarNodeMem"] !== null) {
            $this->ColumnarNodeMem = $param["ColumnarNodeMem"];
        }

        if (array_key_exists("ColumnarNodeNum",$param) and $param["ColumnarNodeNum"] !== null) {
            $this->ColumnarNodeNum = $param["ColumnarNodeNum"];
        }

        if (array_key_exists("ColumnarNodeDisk",$param) and $param["ColumnarNodeDisk"] !== null) {
            $this->ColumnarNodeDisk = $param["ColumnarNodeDisk"];
        }

        if (array_key_exists("ColumnarNodeStorageType",$param) and $param["ColumnarNodeStorageType"] !== null) {
            $this->ColumnarNodeStorageType = $param["ColumnarNodeStorageType"];
        }

        if (array_key_exists("InstanceCategory",$param) and $param["InstanceCategory"] !== null) {
            $this->InstanceCategory = $param["InstanceCategory"];
        }

        if (array_key_exists("ExclusiveClusterId",$param) and $param["ExclusiveClusterId"] !== null) {
            $this->ExclusiveClusterId = $param["ExclusiveClusterId"];
        }

        if (array_key_exists("SQLMode",$param) and $param["SQLMode"] !== null) {
            $this->SQLMode = $param["SQLMode"];
        }

        if (array_key_exists("InstanceMode",$param) and $param["InstanceMode"] !== null) {
            $this->InstanceMode = $param["InstanceMode"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AutoScaleConfig",$param) and $param["AutoScaleConfig"] !== null) {
            $this->AutoScaleConfig = new AutoScalingConfig();
            $this->AutoScaleConfig->deserialize($param["AutoScaleConfig"]);
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("AnalysisRelationInfos",$param) and $param["AnalysisRelationInfos"] !== null) {
            $this->AnalysisRelationInfos = [];
            foreach ($param["AnalysisRelationInfos"] as $key => $value){
                $obj = new AnalysisRelationInfo();
                $obj->deserialize($value);
                array_push($this->AnalysisRelationInfos, $obj);
            }
        }

        if (array_key_exists("AnalysisInstanceInfo",$param) and $param["AnalysisInstanceInfo"] !== null) {
            $this->AnalysisInstanceInfo = new AnalysisInstanceInfo();
            $this->AnalysisInstanceInfo->deserialize($param["AnalysisInstanceInfo"]);
        }

        if (array_key_exists("AutoScaleConfigs",$param) and $param["AutoScaleConfigs"] !== null) {
            $this->AutoScaleConfigs = [];
            foreach ($param["AutoScaleConfigs"] as $key => $value){
                $obj = new AutoScalingConfig();
                $obj->deserialize($value);
                array_push($this->AutoScaleConfigs, $obj);
            }
        }
    }
}
