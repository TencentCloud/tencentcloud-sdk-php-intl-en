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
 * @method string getAgentStatus() Obtain <p>Agent status. Valid values: ONLINE: online; OFFLINE: offline; UNINSTALL: not installed</p>
 * @method void setAgentStatus(string $AgentStatus) Set <p>Agent status. Valid values: ONLINE: online; OFFLINE: offline; UNINSTALL: not installed</p>
 * @method string getAgentVersion() Obtain <p>Agent version</p>
 * @method void setAgentVersion(string $AgentVersion) Set <p>Agent version</p>
 * @method integer getAppId() Obtain <p>Account AppId</p>
 * @method void setAppId(integer $AppId) Set <p>Account AppId</p>
 * @method string getCloudFromEnum() Obtain <p>Cloud service provider</p>
 * @method void setCloudFromEnum(string $CloudFromEnum) Set <p>Cloud service provider</p>
 * @method array getCloudTags() Obtain <p>Cloud tag list</p>
 * @method void setCloudTags(array $CloudTags) Set <p>Cloud tag list</p>
 * @method string getCsipProtectType() Obtain <p>CSIP protection type. Value: BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition</p>
 * @method void setCsipProtectType(string $CsipProtectType) Set <p>CSIP protection type. Value: BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition</p>
 * @method string getExposedStatus() Obtain <p>Exposure status</p>
 * @method void setExposedStatus(string $ExposedStatus) Set <p>Exposure status</p>
 * @method string getInstanceID() Obtain <p>Instance ID.</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Instance ID.</p>
 * @method string getInstanceStatus() Obtain <p>Instance status. Value: RUNNING-running, STOPPED-shut down, EXPIRED-pending recycling</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Instance status. Value: RUNNING-running, STOPPED-shut down, EXPIRED-pending recycling</p>
 * @method array getIpList() Obtain <p>Network Card IP List</p>
 * @method void setIpList(array $IpList) Set <p>Network Card IP List</p>
 * @method boolean getIsNew() Obtain <p>Whether it is a new host (added within 15 days)</p>
 * @method void setIsNew(boolean $IsNew) Set <p>Whether it is a new host (added within 15 days)</p>
 * @method string getKernelVersion() Obtain <p>Kernel version</p>
 * @method void setKernelVersion(string $KernelVersion) Set <p>Kernel version</p>
 * @method integer getLatestOfflineTime() Obtain <p>Last offline time (Unix timestamp).</p>
 * @method void setLatestOfflineTime(integer $LatestOfflineTime) Set <p>Last offline time (Unix timestamp).</p>
 * @method string getMachineIp() Obtain <p>Private IP address.</p>
 * @method void setMachineIp(string $MachineIp) Set <p>Private IP address.</p>
 * @method string getMachineName() Obtain <p>Host name.</p>
 * @method void setMachineName(string $MachineName) Set <p>Host name.</p>
 * @method string getMachineOs() Obtain <p>Operating system.</p>
 * @method void setMachineOs(string $MachineOs) Set <p>Operating system.</p>
 * @method string getMachineWanIp() Obtain <p>Public IP address.</p>
 * @method void setMachineWanIp(string $MachineWanIp) Set <p>Public IP address.</p>
 * @method string getPayMode() Obtain <p>Payment mode. Valid values: PREPAID: prepaid; POSTPAID: postpaid</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode. Valid values: PREPAID: prepaid; POSTPAID: postpaid</p>
 * @method integer getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
 * @method string getProtectType() Obtain <p>Protection type. Value: NONE: no protection; BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition; PRO_LH: lightweight edition</p>
 * @method void setProtectType(string $ProtectType) Set <p>Protection type. Value: NONE: no protection; BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition; PRO_LH: lightweight edition</p>
 * @method string getQuuid() Obtain <p>Host unique identifier</p>
 * @method void setQuuid(string $Quuid) Set <p>Host unique identifier</p>
 * @method RegionInfo getRegionInfo() Obtain <p>Region information.</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set <p>Region information.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method array getTagItems() Obtain <p>Asset tag list</p>
 * @method void setTagItems(array $TagItems) Set <p>Asset tag list</p>
 * @method AssetTagModifyAssetItem getTagModifyInfo() Obtain <p>Tag change information</p>
 * @method void setTagModifyInfo(AssetTagModifyAssetItem $TagModifyInfo) Set <p>Tag change information</p>
 * @method string getTatStatus() Obtain <p>TAT status. Valid values: ONLINE: online; OFFLINE: offline</p>
 * @method void setTatStatus(string $TatStatus) Set <p>TAT status. Valid values: ONLINE: online; OFFLINE: offline</p>
 * @method string getUuid() Obtain <p>Agent unique ID</p>
 * @method void setUuid(string $Uuid) Set <p>Agent unique ID</p>
 * @method string getVpcId() Obtain <p>VPC ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID</p>
 * @method string getNodeType() Obtain <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
 * @method void setNodeType(string $NodeType) Set <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
 * @method string getContainerDefendStatus() Obtain <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
 * @method void setContainerDefendStatus(string $ContainerDefendStatus) Set <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
 * @method integer getContainerCount() Obtain <p>Container count</p>
 * @method void setContainerCount(integer $ContainerCount) Set <p>Container count</p>
 * @method integer getCpuCoreCount() Obtain <p>Number of cores.</p>
 * @method void setCpuCoreCount(integer $CpuCoreCount) Set <p>Number of cores.</p>
 * @method boolean getMigrationRequired() Obtain <p>Whether migration is supported</p>
 * @method void setMigrationRequired(boolean $MigrationRequired) Set <p>Whether migration is supported</p>
 * @method boolean getIsSupportXSPM() Obtain <p>Whether exposed surface scan is supported</p>
 * @method void setIsSupportXSPM(boolean $IsSupportXSPM) Set <p>Whether exposed surface scan is supported</p>
 * @method boolean getCanUnbind() Obtain <p>Whether it can be unbound</p>
 * @method void setCanUnbind(boolean $CanUnbind) Set <p>Whether it can be unbound</p>
 */
class Machine extends AbstractModel
{
    /**
     * @var string <p>Agent status. Valid values: ONLINE: online; OFFLINE: offline; UNINSTALL: not installed</p>
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
     * @var string <p>Cloud service provider</p>
     */
    public $CloudFromEnum;

    /**
     * @var array <p>Cloud tag list</p>
     */
    public $CloudTags;

    /**
     * @var string <p>CSIP protection type. Value: BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition</p>
     */
    public $CsipProtectType;

    /**
     * @var string <p>Exposure status</p>
     */
    public $ExposedStatus;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Instance status. Value: RUNNING-running, STOPPED-shut down, EXPIRED-pending recycling</p>
     */
    public $InstanceStatus;

    /**
     * @var array <p>Network Card IP List</p>
     */
    public $IpList;

    /**
     * @var boolean <p>Whether it is a new host (added within 15 days)</p>
     */
    public $IsNew;

    /**
     * @var string <p>Kernel version</p>
     */
    public $KernelVersion;

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
     * @var string <p>Operating system.</p>
     */
    public $MachineOs;

    /**
     * @var string <p>Public IP address.</p>
     */
    public $MachineWanIp;

    /**
     * @var string <p>Payment mode. Valid values: PREPAID: prepaid; POSTPAID: postpaid</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Protection type. Value: NONE: no protection; BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition; PRO_LH: lightweight edition</p>
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
     * @var array <p>Asset tag list</p>
     */
    public $TagItems;

    /**
     * @var AssetTagModifyAssetItem <p>Tag change information</p>
     */
    public $TagModifyInfo;

    /**
     * @var string <p>TAT status. Valid values: ONLINE: online; OFFLINE: offline</p>
     */
    public $TatStatus;

    /**
     * @var string <p>Agent unique ID</p>
     */
    public $Uuid;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
     */
    public $NodeType;

    /**
     * @var string <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
     */
    public $ContainerDefendStatus;

    /**
     * @var integer <p>Container count</p>
     */
    public $ContainerCount;

    /**
     * @var integer <p>Number of cores.</p>
     */
    public $CpuCoreCount;

    /**
     * @var boolean <p>Whether migration is supported</p>
     */
    public $MigrationRequired;

    /**
     * @var boolean <p>Whether exposed surface scan is supported</p>
     */
    public $IsSupportXSPM;

    /**
     * @var boolean <p>Whether it can be unbound</p>
     */
    public $CanUnbind;

    /**
     * @param string $AgentStatus <p>Agent status. Valid values: ONLINE: online; OFFLINE: offline; UNINSTALL: not installed</p>
     * @param string $AgentVersion <p>Agent version</p>
     * @param integer $AppId <p>Account AppId</p>
     * @param string $CloudFromEnum <p>Cloud service provider</p>
     * @param array $CloudTags <p>Cloud tag list</p>
     * @param string $CsipProtectType <p>CSIP protection type. Value: BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition</p>
     * @param string $ExposedStatus <p>Exposure status</p>
     * @param string $InstanceID <p>Instance ID.</p>
     * @param string $InstanceStatus <p>Instance status. Value: RUNNING-running, STOPPED-shut down, EXPIRED-pending recycling</p>
     * @param array $IpList <p>Network Card IP List</p>
     * @param boolean $IsNew <p>Whether it is a new host (added within 15 days)</p>
     * @param string $KernelVersion <p>Kernel version</p>
     * @param integer $LatestOfflineTime <p>Last offline time (Unix timestamp).</p>
     * @param string $MachineIp <p>Private IP address.</p>
     * @param string $MachineName <p>Host name.</p>
     * @param string $MachineOs <p>Operating system.</p>
     * @param string $MachineWanIp <p>Public IP address.</p>
     * @param string $PayMode <p>Payment mode. Valid values: PREPAID: prepaid; POSTPAID: postpaid</p>
     * @param integer $ProjectId <p>Project ID</p>
     * @param string $ProtectType <p>Protection type. Value: NONE: no protection; BASIC: basic version; PRO: pro edition; ULTIMATE: flagship edition; PRO_LH: lightweight edition</p>
     * @param string $Quuid <p>Host unique identifier</p>
     * @param RegionInfo $RegionInfo <p>Region information.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param array $TagItems <p>Asset tag list</p>
     * @param AssetTagModifyAssetItem $TagModifyInfo <p>Tag change information</p>
     * @param string $TatStatus <p>TAT status. Valid values: ONLINE: online; OFFLINE: offline</p>
     * @param string $Uuid <p>Agent unique ID</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $NodeType <p>Host node type</p><p>Enumeration values:</p><ul><li>NONE: Host node</li><li>CLUSTER: Cluster node</li><li>CONTAINER: Container node</li></ul>
     * @param string $ContainerDefendStatus <p>Container protection status</p><p>Enumeration values:</p><ul><li>Enabled: Enable protection</li><li>Disabled: Disable protection</li><li>Unknown: Unknown</li></ul>
     * @param integer $ContainerCount <p>Container count</p>
     * @param integer $CpuCoreCount <p>Number of cores.</p>
     * @param boolean $MigrationRequired <p>Whether migration is supported</p>
     * @param boolean $IsSupportXSPM <p>Whether exposed surface scan is supported</p>
     * @param boolean $CanUnbind <p>Whether it can be unbound</p>
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

        if (array_key_exists("CloudFromEnum",$param) and $param["CloudFromEnum"] !== null) {
            $this->CloudFromEnum = $param["CloudFromEnum"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("CsipProtectType",$param) and $param["CsipProtectType"] !== null) {
            $this->CsipProtectType = $param["CsipProtectType"];
        }

        if (array_key_exists("ExposedStatus",$param) and $param["ExposedStatus"] !== null) {
            $this->ExposedStatus = $param["ExposedStatus"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
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

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("TatStatus",$param) and $param["TatStatus"] !== null) {
            $this->TatStatus = $param["TatStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ContainerDefendStatus",$param) and $param["ContainerDefendStatus"] !== null) {
            $this->ContainerDefendStatus = $param["ContainerDefendStatus"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("CpuCoreCount",$param) and $param["CpuCoreCount"] !== null) {
            $this->CpuCoreCount = $param["CpuCoreCount"];
        }

        if (array_key_exists("MigrationRequired",$param) and $param["MigrationRequired"] !== null) {
            $this->MigrationRequired = $param["MigrationRequired"];
        }

        if (array_key_exists("IsSupportXSPM",$param) and $param["IsSupportXSPM"] !== null) {
            $this->IsSupportXSPM = $param["IsSupportXSPM"];
        }

        if (array_key_exists("CanUnbind",$param) and $param["CanUnbind"] !== null) {
            $this->CanUnbind = $param["CanUnbind"];
        }
    }
}
