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
 * Host Asset Information

Enumerate host protection status. left is a constant, right side displays.
0: not installed.
Basic edition protection.
2: inclusive edition protection.
3: protection by pro edition.
4: flagship protection.
5: offline.
6: shut down.
 *
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method string getAssetName() Obtain Asset name.
 * @method void setAssetName(string $AssetName) Set Asset name.
 * @method string getAssetType() Obtain Asset type.
 * @method void setAssetType(string $AssetType) Set Asset type.
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method integer getCWPStatus() Obtain Protection status
 * @method void setCWPStatus(integer $CWPStatus) Set Protection status
 * @method string getAssetCreateTime() Obtain Asset creation time.
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset creation time.
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getPrivateIp() Obtain Private IP.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP.
 * @method string getVpcId() Obtain vpc id
 * @method void setVpcId(string $VpcId) Set vpc id
 * @method string getVpcName() Obtain VPC Name
 * @method void setVpcName(string $VpcName) Set VPC Name
 * @method integer getAppId() Obtain App ID information
 * @method void setAppId(integer $AppId) Set App ID information
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getNickName() Obtain Nickname.
 * @method void setNickName(string $NickName) Set Nickname.
 * @method string getAvailableArea() Obtain Availability zone
 * @method void setAvailableArea(string $AvailableArea) Set Availability zone
 * @method integer getIsCore() Obtain Core or Not
 * @method void setIsCore(integer $IsCore) Set Core or Not
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getSubnetName() Obtain Subnet Name
 * @method void setSubnetName(string $SubnetName) Set Subnet Name
 * @method string getInstanceUuid() Obtain CWP Agent UUID.
 * @method void setInstanceUuid(string $InstanceUuid) Set CWP Agent UUID.
 * @method string getInstanceQUuid() Obtain CVM host UUID.
 * @method void setInstanceQUuid(string $InstanceQUuid) Set CVM host UUID.
 * @method string getOsName() Obtain OS Name
 * @method void setOsName(string $OsName) Set OS Name
 * @method integer getPartitionCount() Obtain Partition
 * @method void setPartitionCount(integer $PartitionCount) Set Partition
 * @method string getCPUInfo() Obtain CPU Information
 * @method void setCPUInfo(string $CPUInfo) Set CPU Information
 * @method integer getCPUSize() Obtain CPU Size
 * @method void setCPUSize(integer $CPUSize) Set CPU Size
 * @method string getCPULoad() Obtain CPU Load
 * @method void setCPULoad(string $CPULoad) Set CPU Load
 * @method string getMemorySize() Obtain Memory size.
 * @method void setMemorySize(string $MemorySize) Set Memory size.
 * @method string getMemoryLoad() Obtain Memory Load
 * @method void setMemoryLoad(string $MemoryLoad) Set Memory Load
 * @method string getDiskSize() Obtain Hard disk size.
 * @method void setDiskSize(string $DiskSize) Set Hard disk size.
 * @method string getDiskLoad() Obtain Hard Disk Load
 * @method void setDiskLoad(string $DiskLoad) Set Hard Disk Load
 * @method string getAccountCount() Obtain Number of Accounts
 * @method void setAccountCount(string $AccountCount) Set Number of Accounts
 * @method string getProcessCount() Obtain Number of Processes
 * @method void setProcessCount(string $ProcessCount) Set Number of Processes
 * @method string getAppCount() Obtain Software application.
 * @method void setAppCount(string $AppCount) Set Software application.
 * @method integer getPortCount() Obtain Listening port
 * @method void setPortCount(integer $PortCount) Set Listening port
 * @method integer getAttack() Obtain Network attack.
 * @method void setAttack(integer $Attack) Set Network attack.
 * @method integer getAccess() Obtain Network access.
 * @method void setAccess(integer $Access) Set Network access.
 * @method integer getIntercept() Obtain Network Interception
 * @method void setIntercept(integer $Intercept) Set Network Interception
 * @method string getInBandwidth() Obtain Inbound peak bandwidth.
 * @method void setInBandwidth(string $InBandwidth) Set Inbound peak bandwidth.
 * @method string getOutBandwidth() Obtain Outbound peak bandwidth.
 * @method void setOutBandwidth(string $OutBandwidth) Set Outbound peak bandwidth.
 * @method string getInFlow() Obtain Total inbound traffic.
 * @method void setInFlow(string $InFlow) Set Total inbound traffic.
 * @method string getOutFlow() Obtain Outbound cumulative traffic.
 * @method void setOutFlow(string $OutFlow) Set Outbound cumulative traffic.
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getNetWorkOut() Obtain Malicious outgoing request.
 * @method void setNetWorkOut(integer $NetWorkOut) Set Malicious outgoing request.
 * @method integer getPortRisk() Obtain Port risk.
 * @method void setPortRisk(integer $PortRisk) Set Port risk.
 * @method integer getVulnerabilityRisk() Obtain Vulnerability risk.
 * @method void setVulnerabilityRisk(integer $VulnerabilityRisk) Set Vulnerability risk.
 * @method integer getConfigurationRisk() Obtain Configuration risk.
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuration risk.
 * @method integer getScanTask() Obtain Scan Task Count
 * @method void setScanTask(integer $ScanTask) Set Scan Task Count
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 * @method string getMemberId() Obtain memberId
 * @method void setMemberId(string $MemberId) Set memberId
 * @method string getOs() Obtain Full OS Name
 * @method void setOs(string $Os) Set Full OS Name
 * @method integer getRiskExposure() Obtain Risk service exposure.
 * @method void setRiskExposure(integer $RiskExposure) Set Risk service exposure.
 * @method integer getBASAgentStatus() Obtain Simulated Attack Tool Status. 0 indicates not installed. 1 indicates installed. 2 indicates offline.
 * @method void setBASAgentStatus(integer $BASAgentStatus) Set Simulated Attack Tool Status. 0 indicates not installed. 1 indicates installed. 2 indicates offline.
 * @method integer getIsNewAsset() Obtain 1-New Asset; 0-Not a New Asset
 * @method void setIsNewAsset(integer $IsNewAsset) Set 1-New Asset; 0-Not a New Asset
 * @method integer getCVMAgentStatus() Obtain 0: not installed; 1: install; 2: installing.
 * @method void setCVMAgentStatus(integer $CVMAgentStatus) Set 0: not installed; 1: install; 2: installing.
 * @method integer getCVMStatus() Obtain 1: enable 0: not enabled.
 * @method void setCVMStatus(integer $CVMStatus) Set 1: enable 0: not enabled.
 * @method integer getDefenseModel() Obtain 1: client installed 0: not installed 2: Agentless.
 * @method void setDefenseModel(integer $DefenseModel) Set 1: client installed 0: not installed 2: Agentless.
 * @method integer getTatStatus() Obtain 1: installed 0: not installed.
 * @method void setTatStatus(integer $TatStatus) Set 1: installed 0: not installed.
 * @method array getCpuTrend() Obtain cpu trend chart.
 * @method void setCpuTrend(array $CpuTrend) Set cpu trend chart.
 * @method array getMemoryTrend() Obtain Memory trend chart.
 * @method void setMemoryTrend(array $MemoryTrend) Set Memory trend chart.
 * @method integer getAgentStatus() Obtain 1: agent online 0: agent offline 2: host offline.
 * @method void setAgentStatus(integer $AgentStatus) Set 1: agent online 0: agent offline 2: host offline.
 * @method integer getCloseDefenseCount() Obtain Number of shutdowns this month.
 * @method void setCloseDefenseCount(integer $CloseDefenseCount) Set Number of shutdowns this month.
 * @method string getInstanceState() Obtain Running state.
 * @method void setInstanceState(string $InstanceState) Set Running state.
 * @method array getSecurityGroupIds() Obtain Security group data.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group data.
 * @method integer getAgentMemRss() Obtain Physical memory occupied KB.
 * @method void setAgentMemRss(integer $AgentMemRss) Set Physical memory occupied KB.
 * @method float getAgentCpuPer() Obtain CPU utilization percentage.
 * @method void setAgentCpuPer(float $AgentCpuPer) Set CPU utilization percentage.
 * @method integer getRealAppid() Obtain Actual appid belonging to cvm.
 * @method void setRealAppid(integer $RealAppid) Set Actual appid belonging to cvm.
 * @method integer getCloudType() Obtain Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
 * @method void setCloudType(integer $CloudType) Set Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
 * @method integer getProtectStatus() Obtain Host protection status enumeration.
0: not installed.
Basic edition protection.
2: inclusive edition protection.
3: protection by pro edition.
4: ultimate edition protection.
5: offline.
6: shutdown.
 * @method void setProtectStatus(integer $ProtectStatus) Set Host protection status enumeration.
0: not installed.
Basic edition protection.
2: inclusive edition protection.
3: protection by pro edition.
4: ultimate edition protection.
5: offline.
6: shutdown.
 * @method string getOfflineTime() Obtain Last offline time.
 * @method void setOfflineTime(string $OfflineTime) Set Last offline time.
 */
class CVMAssetVO extends AbstractModel
{
    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var string Asset name.
     */
    public $AssetName;

    /**
     * @var string Asset type.
     */
    public $AssetType;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var integer Protection status
     */
    public $CWPStatus;

    /**
     * @var string Asset creation time.
     */
    public $AssetCreateTime;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string Private IP.
     */
    public $PrivateIp;

    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string VPC Name
     */
    public $VpcName;

    /**
     * @var integer App ID information
     */
    public $AppId;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Nickname.
     */
    public $NickName;

    /**
     * @var string Availability zone
     */
    public $AvailableArea;

    /**
     * @var integer Core or Not
     */
    public $IsCore;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Subnet Name
     */
    public $SubnetName;

    /**
     * @var string CWP Agent UUID.
     */
    public $InstanceUuid;

    /**
     * @var string CVM host UUID.
     */
    public $InstanceQUuid;

    /**
     * @var string OS Name
     */
    public $OsName;

    /**
     * @var integer Partition
     */
    public $PartitionCount;

    /**
     * @var string CPU Information
     */
    public $CPUInfo;

    /**
     * @var integer CPU Size
     */
    public $CPUSize;

    /**
     * @var string CPU Load
     */
    public $CPULoad;

    /**
     * @var string Memory size.
     */
    public $MemorySize;

    /**
     * @var string Memory Load
     */
    public $MemoryLoad;

    /**
     * @var string Hard disk size.
     */
    public $DiskSize;

    /**
     * @var string Hard Disk Load
     */
    public $DiskLoad;

    /**
     * @var string Number of Accounts
     */
    public $AccountCount;

    /**
     * @var string Number of Processes
     */
    public $ProcessCount;

    /**
     * @var string Software application.
     */
    public $AppCount;

    /**
     * @var integer Listening port
     */
    public $PortCount;

    /**
     * @var integer Network attack.
     */
    public $Attack;

    /**
     * @var integer Network access.
     */
    public $Access;

    /**
     * @var integer Network Interception
     */
    public $Intercept;

    /**
     * @var string Inbound peak bandwidth.
     */
    public $InBandwidth;

    /**
     * @var string Outbound peak bandwidth.
     */
    public $OutBandwidth;

    /**
     * @var string Total inbound traffic.
     */
    public $InFlow;

    /**
     * @var string Outbound cumulative traffic.
     */
    public $OutFlow;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer Malicious outgoing request.
     */
    public $NetWorkOut;

    /**
     * @var integer Port risk.
     */
    public $PortRisk;

    /**
     * @var integer Vulnerability risk.
     */
    public $VulnerabilityRisk;

    /**
     * @var integer Configuration risk.
     */
    public $ConfigurationRisk;

    /**
     * @var integer Scan Task Count
     */
    public $ScanTask;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @var string memberId
     */
    public $MemberId;

    /**
     * @var string Full OS Name
     */
    public $Os;

    /**
     * @var integer Risk service exposure.
     */
    public $RiskExposure;

    /**
     * @var integer Simulated Attack Tool Status. 0 indicates not installed. 1 indicates installed. 2 indicates offline.
     */
    public $BASAgentStatus;

    /**
     * @var integer 1-New Asset; 0-Not a New Asset
     */
    public $IsNewAsset;

    /**
     * @var integer 0: not installed; 1: install; 2: installing.
     */
    public $CVMAgentStatus;

    /**
     * @var integer 1: enable 0: not enabled.
     */
    public $CVMStatus;

    /**
     * @var integer 1: client installed 0: not installed 2: Agentless.
     */
    public $DefenseModel;

    /**
     * @var integer 1: installed 0: not installed.
     */
    public $TatStatus;

    /**
     * @var array cpu trend chart.
     */
    public $CpuTrend;

    /**
     * @var array Memory trend chart.
     */
    public $MemoryTrend;

    /**
     * @var integer 1: agent online 0: agent offline 2: host offline.
     */
    public $AgentStatus;

    /**
     * @var integer Number of shutdowns this month.
     */
    public $CloseDefenseCount;

    /**
     * @var string Running state.
     */
    public $InstanceState;

    /**
     * @var array Security group data.
     */
    public $SecurityGroupIds;

    /**
     * @var integer Physical memory occupied KB.
     */
    public $AgentMemRss;

    /**
     * @var float CPU utilization percentage.
     */
    public $AgentCpuPer;

    /**
     * @var integer Actual appid belonging to cvm.
     */
    public $RealAppid;

    /**
     * @var integer Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
     */
    public $CloudType;

    /**
     * @var integer Host protection status enumeration.
0: not installed.
Basic edition protection.
2: inclusive edition protection.
3: protection by pro edition.
4: ultimate edition protection.
5: offline.
6: shutdown.
     */
    public $ProtectStatus;

    /**
     * @var string Last offline time.
     */
    public $OfflineTime;

    /**
     * @param string $AssetId Asset ID
     * @param string $AssetName Asset name.
     * @param string $AssetType Asset type.
     * @param string $Region Region.
     * @param integer $CWPStatus Protection status
     * @param string $AssetCreateTime Asset creation time.
     * @param string $PublicIp Public IP address
     * @param string $PrivateIp Private IP.
     * @param string $VpcId vpc id
     * @param string $VpcName VPC Name
     * @param integer $AppId App ID information
     * @param string $Uin User UIN
     * @param string $NickName Nickname.
     * @param string $AvailableArea Availability zone
     * @param integer $IsCore Core or Not
     * @param string $SubnetId Subnet ID
     * @param string $SubnetName Subnet Name
     * @param string $InstanceUuid CWP Agent UUID.
     * @param string $InstanceQUuid CVM host UUID.
     * @param string $OsName OS Name
     * @param integer $PartitionCount Partition
     * @param string $CPUInfo CPU Information
     * @param integer $CPUSize CPU Size
     * @param string $CPULoad CPU Load
     * @param string $MemorySize Memory size.
     * @param string $MemoryLoad Memory Load
     * @param string $DiskSize Hard disk size.
     * @param string $DiskLoad Hard Disk Load
     * @param string $AccountCount Number of Accounts
     * @param string $ProcessCount Number of Processes
     * @param string $AppCount Software application.
     * @param integer $PortCount Listening port
     * @param integer $Attack Network attack.
     * @param integer $Access Network access.
     * @param integer $Intercept Network Interception
     * @param string $InBandwidth Inbound peak bandwidth.
     * @param string $OutBandwidth Outbound peak bandwidth.
     * @param string $InFlow Total inbound traffic.
     * @param string $OutFlow Outbound cumulative traffic.
     * @param string $LastScanTime Last scan time
     * @param integer $NetWorkOut Malicious outgoing request.
     * @param integer $PortRisk Port risk.
     * @param integer $VulnerabilityRisk Vulnerability risk.
     * @param integer $ConfigurationRisk Configuration risk.
     * @param integer $ScanTask Scan Task Count
     * @param array $Tag Tag.
     * @param string $MemberId memberId
     * @param string $Os Full OS Name
     * @param integer $RiskExposure Risk service exposure.
     * @param integer $BASAgentStatus Simulated Attack Tool Status. 0 indicates not installed. 1 indicates installed. 2 indicates offline.
     * @param integer $IsNewAsset 1-New Asset; 0-Not a New Asset
     * @param integer $CVMAgentStatus 0: not installed; 1: install; 2: installing.
     * @param integer $CVMStatus 1: enable 0: not enabled.
     * @param integer $DefenseModel 1: client installed 0: not installed 2: Agentless.
     * @param integer $TatStatus 1: installed 0: not installed.
     * @param array $CpuTrend cpu trend chart.
     * @param array $MemoryTrend Memory trend chart.
     * @param integer $AgentStatus 1: agent online 0: agent offline 2: host offline.
     * @param integer $CloseDefenseCount Number of shutdowns this month.
     * @param string $InstanceState Running state.
     * @param array $SecurityGroupIds Security group data.
     * @param integer $AgentMemRss Physical memory occupied KB.
     * @param float $AgentCpuPer CPU utilization percentage.
     * @param integer $RealAppid Actual appid belonging to cvm.
     * @param integer $CloudType Cloud asset type: 0: tencent cloud, 1: aws, 2: azure.
     * @param integer $ProtectStatus Host protection status enumeration.
0: not installed.
Basic edition protection.
2: inclusive edition protection.
3: protection by pro edition.
4: ultimate edition protection.
5: offline.
6: shutdown.
     * @param string $OfflineTime Last offline time.
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CWPStatus",$param) and $param["CWPStatus"] !== null) {
            $this->CWPStatus = $param["CWPStatus"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("AvailableArea",$param) and $param["AvailableArea"] !== null) {
            $this->AvailableArea = $param["AvailableArea"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("InstanceUuid",$param) and $param["InstanceUuid"] !== null) {
            $this->InstanceUuid = $param["InstanceUuid"];
        }

        if (array_key_exists("InstanceQUuid",$param) and $param["InstanceQUuid"] !== null) {
            $this->InstanceQUuid = $param["InstanceQUuid"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("CPUInfo",$param) and $param["CPUInfo"] !== null) {
            $this->CPUInfo = $param["CPUInfo"];
        }

        if (array_key_exists("CPUSize",$param) and $param["CPUSize"] !== null) {
            $this->CPUSize = $param["CPUSize"];
        }

        if (array_key_exists("CPULoad",$param) and $param["CPULoad"] !== null) {
            $this->CPULoad = $param["CPULoad"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("MemoryLoad",$param) and $param["MemoryLoad"] !== null) {
            $this->MemoryLoad = $param["MemoryLoad"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = $param["DiskLoad"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("ProcessCount",$param) and $param["ProcessCount"] !== null) {
            $this->ProcessCount = $param["ProcessCount"];
        }

        if (array_key_exists("AppCount",$param) and $param["AppCount"] !== null) {
            $this->AppCount = $param["AppCount"];
        }

        if (array_key_exists("PortCount",$param) and $param["PortCount"] !== null) {
            $this->PortCount = $param["PortCount"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("Intercept",$param) and $param["Intercept"] !== null) {
            $this->Intercept = $param["Intercept"];
        }

        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = $param["InBandwidth"];
        }

        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = $param["OutBandwidth"];
        }

        if (array_key_exists("InFlow",$param) and $param["InFlow"] !== null) {
            $this->InFlow = $param["InFlow"];
        }

        if (array_key_exists("OutFlow",$param) and $param["OutFlow"] !== null) {
            $this->OutFlow = $param["OutFlow"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("NetWorkOut",$param) and $param["NetWorkOut"] !== null) {
            $this->NetWorkOut = $param["NetWorkOut"];
        }

        if (array_key_exists("PortRisk",$param) and $param["PortRisk"] !== null) {
            $this->PortRisk = $param["PortRisk"];
        }

        if (array_key_exists("VulnerabilityRisk",$param) and $param["VulnerabilityRisk"] !== null) {
            $this->VulnerabilityRisk = $param["VulnerabilityRisk"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("RiskExposure",$param) and $param["RiskExposure"] !== null) {
            $this->RiskExposure = $param["RiskExposure"];
        }

        if (array_key_exists("BASAgentStatus",$param) and $param["BASAgentStatus"] !== null) {
            $this->BASAgentStatus = $param["BASAgentStatus"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("CVMAgentStatus",$param) and $param["CVMAgentStatus"] !== null) {
            $this->CVMAgentStatus = $param["CVMAgentStatus"];
        }

        if (array_key_exists("CVMStatus",$param) and $param["CVMStatus"] !== null) {
            $this->CVMStatus = $param["CVMStatus"];
        }

        if (array_key_exists("DefenseModel",$param) and $param["DefenseModel"] !== null) {
            $this->DefenseModel = $param["DefenseModel"];
        }

        if (array_key_exists("TatStatus",$param) and $param["TatStatus"] !== null) {
            $this->TatStatus = $param["TatStatus"];
        }

        if (array_key_exists("CpuTrend",$param) and $param["CpuTrend"] !== null) {
            $this->CpuTrend = [];
            foreach ($param["CpuTrend"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->CpuTrend, $obj);
            }
        }

        if (array_key_exists("MemoryTrend",$param) and $param["MemoryTrend"] !== null) {
            $this->MemoryTrend = [];
            foreach ($param["MemoryTrend"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->MemoryTrend, $obj);
            }
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("CloseDefenseCount",$param) and $param["CloseDefenseCount"] !== null) {
            $this->CloseDefenseCount = $param["CloseDefenseCount"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AgentMemRss",$param) and $param["AgentMemRss"] !== null) {
            $this->AgentMemRss = $param["AgentMemRss"];
        }

        if (array_key_exists("AgentCpuPer",$param) and $param["AgentCpuPer"] !== null) {
            $this->AgentCpuPer = $param["AgentCpuPer"];
        }

        if (array_key_exists("RealAppid",$param) and $param["RealAppid"] !== null) {
            $this->RealAppid = $param["RealAppid"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }
    }
}
