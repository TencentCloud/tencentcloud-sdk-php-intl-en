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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host list
 *
 * @method string getAgentStatus() Obtain <p>Agent status</p>
 * @method void setAgentStatus(string $AgentStatus) Set <p>Agent status</p>
 * @method string getAgentVersion() Obtain <p>Agent version</p>
 * @method void setAgentVersion(string $AgentVersion) Set <p>Agent version</p>
 * @method integer getAppId() Obtain <p>Account AppId</p>
 * @method void setAppId(integer $AppId) Set <p>Account AppId</p>
 * @method string getAssetTypeName() Obtain <p>Asset type name</p>
 * @method void setAssetTypeName(string $AssetTypeName) Set <p>Asset type name</p>
 * @method integer getBootTime() Obtain <p>System boot time (Unix timestamp).</p>
 * @method void setBootTime(integer $BootTime) Set <p>System boot time (Unix timestamp).</p>
 * @method integer getBuyTime() Obtain <p>Purchase time (Unix timestamp).</p>
 * @method void setBuyTime(integer $BuyTime) Set <p>Purchase time (Unix timestamp).</p>
 * @method string getCloudFromEnum() Obtain <p>Cloud service provider</p>
 * @method void setCloudFromEnum(string $CloudFromEnum) Set <p>Cloud service provider</p>
 * @method array getCloudTags() Obtain <p>Cloud tag list</p>
 * @method void setCloudTags(array $CloudTags) Set <p>Cloud tag list</p>
 * @method string getCoreVersion() Obtain <p>Kernel version</p>
 * @method void setCoreVersion(string $CoreVersion) Set <p>Kernel version</p>
 * @method string getCpu() Obtain <p>CPU info</p>
 * @method void setCpu(string $Cpu) Set <p>CPU info</p>
 * @method string getCpuLoad() Obtain <p>CPU load</p>
 * @method void setCpuLoad(string $CpuLoad) Set <p>CPU load</p>
 * @method integer getCpuSize() Obtain <p>CPU cores.</p>
 * @method void setCpuSize(integer $CpuSize) Set <p>CPU cores.</p>
 * @method string getDeviceVersion() Obtain <p>Device model</p>
 * @method void setDeviceVersion(string $DeviceVersion) Set <p>Device model</p>
 * @method array getDisks() Obtain <p>Disk partition information</p>
 * @method void setDisks(array $Disks) Set <p>Disk partition information</p>
 * @method integer getEndTime() Obtain <p>Expiration time (Unix timestamp).</p>
 * @method void setEndTime(integer $EndTime) Set <p>Expiration time (Unix timestamp).</p>
 * @method string getExposedStatus() Obtain <p>Exposure status</p>
 * @method void setExposedStatus(string $ExposedStatus) Set <p>Exposure status</p>
 * @method integer getInstallTime() Obtain <p>Installation time (Unix timestamp).</p>
 * @method void setInstallTime(integer $InstallTime) Set <p>Installation time (Unix timestamp).</p>
 * @method string getInstanceID() Obtain <p>Instance ID.</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Instance ID.</p>
 * @method string getInstanceStatus() Obtain <p>Instance status</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Instance status</p>
 * @method string getKernelVersion() Obtain <p>Kernel version</p>
 * @method void setKernelVersion(string $KernelVersion) Set <p>Kernel version</p>
 * @method integer getLatestLiveTime() Obtain <p>Last online time (Unix timestamp).</p>
 * @method void setLatestLiveTime(integer $LatestLiveTime) Set <p>Last online time (Unix timestamp).</p>
 * @method integer getLatestOfflineTime() Obtain <p>Last offline time (Unix timestamp).</p>
 * @method void setLatestOfflineTime(integer $LatestOfflineTime) Set <p>Last offline time (Unix timestamp).</p>
 * @method string getMachineIp() Obtain <p>Private IP address.</p>
 * @method void setMachineIp(string $MachineIp) Set <p>Private IP address.</p>
 * @method string getMachineName() Obtain <p>Host name.</p>
 * @method void setMachineName(string $MachineName) Set <p>Host name.</p>
 * @method string getMachineOs() Obtain <p>Operating system (cloud collection)</p>
 * @method void setMachineOs(string $MachineOs) Set <p>Operating system (cloud collection)</p>
 * @method string getMachineStatus() Obtain <p>Host status</p>
 * @method void setMachineStatus(string $MachineStatus) Set <p>Host status</p>
 * @method string getMachineWanIp() Obtain <p>Public IP address.</p>
 * @method void setMachineWanIp(string $MachineWanIp) Set <p>Public IP address.</p>
 * @method integer getMemSize() Obtain <p>Memory size (MB)</p>
 * @method void setMemSize(integer $MemSize) Set <p>Memory size (MB)</p>
 * @method string getMemoryLoad() Obtain <p>Memory usage rate</p>
 * @method void setMemoryLoad(string $MemoryLoad) Set <p>Memory usage rate</p>
 * @method array getNetCards() Obtain <p>ENI information.</p>
 * @method void setNetCards(array $NetCards) Set <p>ENI information.</p>
 * @method string getOsByAgent() Obtain <p>Operating system (client collection)</p>
 * @method void setOsByAgent(string $OsByAgent) Set <p>Operating system (client collection)</p>
 * @method string getPayMode() Obtain <p>Payment mode</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode</p>
 * @method integer getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
 * @method integer getProtectDays() Obtain <p>Days protected</p>
 * @method void setProtectDays(integer $ProtectDays) Set <p>Days protected</p>
 * @method string getProtectType() Obtain <p>Protection type</p>
 * @method void setProtectType(string $ProtectType) Set <p>Protection type</p>
 * @method string getQuuid() Obtain <p>Host unique identifier</p>
 * @method void setQuuid(string $Quuid) Set <p>Host unique identifier</p>
 * @method RegionInfo getRegionInfo() Obtain <p>Region information.</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set <p>Region information.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getSerialNumber() Obtain <p>Serial number</p>
 * @method void setSerialNumber(string $SerialNumber) Set <p>Serial number</p>
 * @method array getTagItems() Obtain <p>Asset tag list</p>
 * @method void setTagItems(array $TagItems) Set <p>Asset tag list</p>
 * @method AssetTagModifyAssetItem getTagModifyInfo() Obtain <p>Tag change information</p>
 * @method void setTagModifyInfo(AssetTagModifyAssetItem $TagModifyInfo) Set <p>Tag change information</p>
 * @method string getUuid() Obtain <p>Agent unique ID</p>
 * @method void setUuid(string $Uuid) Set <p>Agent unique ID</p>
 * @method string getVpcCidrBlock() Obtain <p>VPC CIDR</p>
 * @method void setVpcCidrBlock(string $VpcCidrBlock) Set <p>VPC CIDR</p>
 * @method string getVpcId() Obtain <p>VPC ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID</p>
 * @method string getVpcName() Obtain <p>VPC name.</p>
 * @method void setVpcName(string $VpcName) Set <p>VPC name.</p>
 * @method string getNodeType() Obtain <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
 * @method void setNodeType(string $NodeType) Set <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
 * @method string getContainerDefendStatus() Obtain <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
 * @method void setContainerDefendStatus(string $ContainerDefendStatus) Set <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
 * @method string getClusterCaMd5() Obtain <p>Cluster visa md5</p>
 * @method void setClusterCaMd5(string $ClusterCaMd5) Set <p>Cluster visa md5</p>
 * @method ContainerEnvInfo getContainerEnvInfo() Obtain <p>Container environment info</p>
 * @method void setContainerEnvInfo(ContainerEnvInfo $ContainerEnvInfo) Set <p>Container environment info</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 */
class MachineDetail extends AbstractModel
{
    /**
     * @var string <p>Agent status</p>
     */
    public $AgentStatus;

    /**
     * @var string <p>Agent version</p>
     */
    public $AgentVersion;

    /**
     * @var integer <p>Account AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>Asset type name</p>
     */
    public $AssetTypeName;

    /**
     * @var integer <p>System boot time (Unix timestamp).</p>
     */
    public $BootTime;

    /**
     * @var integer <p>Purchase time (Unix timestamp).</p>
     */
    public $BuyTime;

    /**
     * @var string <p>Cloud service provider</p>
     */
    public $CloudFromEnum;

    /**
     * @var array <p>Cloud tag list</p>
     */
    public $CloudTags;

    /**
     * @var string <p>Kernel version</p>
     */
    public $CoreVersion;

    /**
     * @var string <p>CPU info</p>
     */
    public $Cpu;

    /**
     * @var string <p>CPU load</p>
     */
    public $CpuLoad;

    /**
     * @var integer <p>CPU cores.</p>
     */
    public $CpuSize;

    /**
     * @var string <p>Device model</p>
     */
    public $DeviceVersion;

    /**
     * @var array <p>Disk partition information</p>
     */
    public $Disks;

    /**
     * @var integer <p>Expiration time (Unix timestamp).</p>
     */
    public $EndTime;

    /**
     * @var string <p>Exposure status</p>
     */
    public $ExposedStatus;

    /**
     * @var integer <p>Installation time (Unix timestamp).</p>
     */
    public $InstallTime;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Instance status</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Kernel version</p>
     */
    public $KernelVersion;

    /**
     * @var integer <p>Last online time (Unix timestamp).</p>
     */
    public $LatestLiveTime;

    /**
     * @var integer <p>Last offline time (Unix timestamp).</p>
     */
    public $LatestOfflineTime;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $MachineIp;

    /**
     * @var string <p>Host name.</p>
     */
    public $MachineName;

    /**
     * @var string <p>Operating system (cloud collection)</p>
     */
    public $MachineOs;

    /**
     * @var string <p>Host status</p>
     */
    public $MachineStatus;

    /**
     * @var string <p>Public IP address.</p>
     */
    public $MachineWanIp;

    /**
     * @var integer <p>Memory size (MB)</p>
     */
    public $MemSize;

    /**
     * @var string <p>Memory usage rate</p>
     */
    public $MemoryLoad;

    /**
     * @var array <p>ENI information.</p>
     */
    public $NetCards;

    /**
     * @var string <p>Operating system (client collection)</p>
     */
    public $OsByAgent;

    /**
     * @var string <p>Payment mode</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Days protected</p>
     */
    public $ProtectDays;

    /**
     * @var string <p>Protection type</p>
     */
    public $ProtectType;

    /**
     * @var string <p>Host unique identifier</p>
     */
    public $Quuid;

    /**
     * @var RegionInfo <p>Region information.</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Serial number</p>
     */
    public $SerialNumber;

    /**
     * @var array <p>Asset tag list</p>
     */
    public $TagItems;

    /**
     * @var AssetTagModifyAssetItem <p>Tag change information</p>
     */
    public $TagModifyInfo;

    /**
     * @var string <p>Agent unique ID</p>
     */
    public $Uuid;

    /**
     * @var string <p>VPC CIDR</p>
     */
    public $VpcCidrBlock;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>VPC name.</p>
     */
    public $VpcName;

    /**
     * @var string <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
     */
    public $NodeType;

    /**
     * @var string <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
     */
    public $ContainerDefendStatus;

    /**
     * @var string <p>Cluster visa md5</p>
     */
    public $ClusterCaMd5;

    /**
     * @var ContainerEnvInfo <p>Container environment info</p>
     */
    public $ContainerEnvInfo;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @param string $AgentStatus <p>Agent status</p>
     * @param string $AgentVersion <p>Agent version</p>
     * @param integer $AppId <p>Account AppId</p>
     * @param string $AssetTypeName <p>Asset type name</p>
     * @param integer $BootTime <p>System boot time (Unix timestamp).</p>
     * @param integer $BuyTime <p>Purchase time (Unix timestamp).</p>
     * @param string $CloudFromEnum <p>Cloud service provider</p>
     * @param array $CloudTags <p>Cloud tag list</p>
     * @param string $CoreVersion <p>Kernel version</p>
     * @param string $Cpu <p>CPU info</p>
     * @param string $CpuLoad <p>CPU load</p>
     * @param integer $CpuSize <p>CPU cores.</p>
     * @param string $DeviceVersion <p>Device model</p>
     * @param array $Disks <p>Disk partition information</p>
     * @param integer $EndTime <p>Expiration time (Unix timestamp).</p>
     * @param string $ExposedStatus <p>Exposure status</p>
     * @param integer $InstallTime <p>Installation time (Unix timestamp).</p>
     * @param string $InstanceID <p>Instance ID.</p>
     * @param string $InstanceStatus <p>Instance status</p>
     * @param string $KernelVersion <p>Kernel version</p>
     * @param integer $LatestLiveTime <p>Last online time (Unix timestamp).</p>
     * @param integer $LatestOfflineTime <p>Last offline time (Unix timestamp).</p>
     * @param string $MachineIp <p>Private IP address.</p>
     * @param string $MachineName <p>Host name.</p>
     * @param string $MachineOs <p>Operating system (cloud collection)</p>
     * @param string $MachineStatus <p>Host status</p>
     * @param string $MachineWanIp <p>Public IP address.</p>
     * @param integer $MemSize <p>Memory size (MB)</p>
     * @param string $MemoryLoad <p>Memory usage rate</p>
     * @param array $NetCards <p>ENI information.</p>
     * @param string $OsByAgent <p>Operating system (client collection)</p>
     * @param string $PayMode <p>Payment mode</p>
     * @param integer $ProjectId <p>Project ID</p>
     * @param integer $ProtectDays <p>Days protected</p>
     * @param string $ProtectType <p>Protection type</p>
     * @param string $Quuid <p>Host unique identifier</p>
     * @param RegionInfo $RegionInfo <p>Region information.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $SerialNumber <p>Serial number</p>
     * @param array $TagItems <p>Asset tag list</p>
     * @param AssetTagModifyAssetItem $TagModifyInfo <p>Tag change information</p>
     * @param string $Uuid <p>Agent unique ID</p>
     * @param string $VpcCidrBlock <p>VPC CIDR</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $VpcName <p>VPC name.</p>
     * @param string $NodeType <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
     * @param string $ContainerDefendStatus <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
     * @param string $ClusterCaMd5 <p>Cluster visa md5</p>
     * @param ContainerEnvInfo $ContainerEnvInfo <p>Container environment info</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
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
        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("BootTime",$param) and $param["BootTime"] !== null) {
            $this->BootTime = $param["BootTime"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("CloudFromEnum",$param) and $param["CloudFromEnum"] !== null) {
            $this->CloudFromEnum = $param["CloudFromEnum"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("CoreVersion",$param) and $param["CoreVersion"] !== null) {
            $this->CoreVersion = $param["CoreVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("DeviceVersion",$param) and $param["DeviceVersion"] !== null) {
            $this->DeviceVersion = $param["DeviceVersion"];
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = [];
            foreach ($param["Disks"] as $key => $value){
                $obj = new DiskPartitionInfo();
                $obj->deserialize($value);
                array_push($this->Disks, $obj);
            }
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExposedStatus",$param) and $param["ExposedStatus"] !== null) {
            $this->ExposedStatus = $param["ExposedStatus"];
        }

        if (array_key_exists("InstallTime",$param) and $param["InstallTime"] !== null) {
            $this->InstallTime = $param["InstallTime"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("LatestLiveTime",$param) and $param["LatestLiveTime"] !== null) {
            $this->LatestLiveTime = $param["LatestLiveTime"];
        }

        if (array_key_exists("LatestOfflineTime",$param) and $param["LatestOfflineTime"] !== null) {
            $this->LatestOfflineTime = $param["LatestOfflineTime"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemoryLoad",$param) and $param["MemoryLoad"] !== null) {
            $this->MemoryLoad = $param["MemoryLoad"];
        }

        if (array_key_exists("NetCards",$param) and $param["NetCards"] !== null) {
            $this->NetCards = [];
            foreach ($param["NetCards"] as $key => $value){
                $obj = new NetworkCardInfo();
                $obj->deserialize($value);
                array_push($this->NetCards, $obj);
            }
        }

        if (array_key_exists("OsByAgent",$param) and $param["OsByAgent"] !== null) {
            $this->OsByAgent = $param["OsByAgent"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("TagModifyInfo",$param) and $param["TagModifyInfo"] !== null) {
            $this->TagModifyInfo = new AssetTagModifyAssetItem();
            $this->TagModifyInfo->deserialize($param["TagModifyInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ContainerDefendStatus",$param) and $param["ContainerDefendStatus"] !== null) {
            $this->ContainerDefendStatus = $param["ContainerDefendStatus"];
        }

        if (array_key_exists("ClusterCaMd5",$param) and $param["ClusterCaMd5"] !== null) {
            $this->ClusterCaMd5 = $param["ClusterCaMd5"];
        }

        if (array_key_exists("ContainerEnvInfo",$param) and $param["ContainerEnvInfo"] !== null) {
            $this->ContainerEnvInfo = new ContainerEnvInfo();
            $this->ContainerEnvInfo->deserialize($param["ContainerEnvInfo"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
