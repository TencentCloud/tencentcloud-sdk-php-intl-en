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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a server asset
 *
 * @method string getAssetId() Obtain Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetId(string $AssetId) Set Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetName() Obtain Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetName(string $AssetName) Set Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetType() Obtain Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetType(string $AssetType) Set Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getCWPStatus() Obtain Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCWPStatus(integer $CWPStatus) Set Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAssetCreateTime() Obtain Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetCreateTime(string $AssetCreateTime) Set Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPublicIp() Obtain Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getPrivateIp() Obtain Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain 
 * @method void setVpcId(string $VpcId) Set 
 * @method string getVpcName() Obtain VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain App ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set App ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getNickName() Obtain User name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNickName(string $NickName) Set User name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAvailableArea() Obtain Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAvailableArea(string $AvailableArea) Set Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsCore() Obtain Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsCore(integer $IsCore) Set Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getSubnetName() Obtain Subnet name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setSubnetName(string $SubnetName) Set Subnet name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInstanceUuid() Obtain UUID of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInstanceUuid(string $InstanceUuid) Set UUID of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInstanceQUuid() Obtain QUuid of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInstanceQUuid(string $InstanceQUuid) Set QUuid of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOsName() Obtain OS name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOsName(string $OsName) Set OS name
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPartitionCount() Obtain Number of partitions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPartitionCount(integer $PartitionCount) Set Number of partitions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getCPUInfo() Obtain CPU information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCPUInfo(string $CPUInfo) Set CPU information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getCPUSize() Obtain CPU size
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCPUSize(integer $CPUSize) Set CPU size
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getCPULoad() Obtain CPU load
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCPULoad(string $CPULoad) Set CPU load
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMemorySize() Obtain Memory size
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMemorySize(string $MemorySize) Set Memory size
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMemoryLoad() Obtain Memory load
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMemoryLoad(string $MemoryLoad) Set Memory load
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getDiskSize() Obtain Disk size.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDiskSize(string $DiskSize) Set Disk size.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getDiskLoad() Obtain Disk load
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDiskLoad(string $DiskLoad) Set Disk load
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAccountCount() Obtain Number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAccountCount(string $AccountCount) Set Number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getProcessCount() Obtain Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setProcessCount(string $ProcessCount) Set Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAppCount() Obtain Number of applications
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppCount(string $AppCount) Set Number of applications
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPortCount() Obtain Number of listened ports.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPortCount(integer $PortCount) Set Number of listened ports.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAttack() Obtain Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAttack(integer $Attack) Set Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getAccess() Obtain Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAccess(integer $Access) Set Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIntercept() Obtain Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIntercept(integer $Intercept) Set Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInBandwidth() Obtain Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInBandwidth(string $InBandwidth) Set Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOutBandwidth() Obtain OutInbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutBandwidth(string $OutBandwidth) Set OutInbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getInFlow() Obtain Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInFlow(string $InFlow) Set Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOutFlow() Obtain Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOutFlow(string $OutFlow) Set Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getLastScanTime() Obtain Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getNetWorkOut() Obtain Proactive malicious outgoing requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNetWorkOut(integer $NetWorkOut) Set Proactive malicious outgoing requests
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getPortRisk() Obtain Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setPortRisk(integer $PortRisk) Set Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getVulnerabilityRisk() Obtain Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVulnerabilityRisk(integer $VulnerabilityRisk) Set Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getConfigurationRisk() Obtain Configuraiton risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setConfigurationRisk(integer $ConfigurationRisk) Set Configuraiton risks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getScanTask() Obtain Number of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setScanTask(integer $ScanTask) Set Number of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tags
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getMemberId() Obtain Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setMemberId(string $MemberId) Set Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getOs() Obtain Full name of the operating system
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOs(string $Os) Set Full name of the operating system
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getRiskExposure() Obtain Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRiskExposure(integer $RiskExposure) Set Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getBASAgentStatus() Obtain BAS toolkit status. `0`: Not installed; `1`: Installed; `2`: Offline.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setBASAgentStatus(integer $BASAgentStatus) Set BAS toolkit status. `0`: Not installed; `1`: Installed; `2`: Offline.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsNewAsset() Obtain `1`: New asset; `0`: Not a new asset
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsNewAsset(integer $IsNewAsset) Set `1`: New asset; `0`: Not a new asset
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class CVMAssetVO extends AbstractModel
{
    /**
     * @var string Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetId;

    /**
     * @var string Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetName;

    /**
     * @var string Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetType;

    /**
     * @var string Region
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CWPStatus;

    /**
     * @var string Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetCreateTime;

    /**
     * @var string Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PublicIp;

    /**
     * @var string Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PrivateIp;

    /**
     * @var string 
     */
    public $VpcId;

    /**
     * @var string VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @var integer App ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string User name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NickName;

    /**
     * @var string Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AvailableArea;

    /**
     * @var integer Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsCore;

    /**
     * @var string Subnet ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Subnet name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $SubnetName;

    /**
     * @var string UUID of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InstanceUuid;

    /**
     * @var string QUuid of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InstanceQUuid;

    /**
     * @var string OS name
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OsName;

    /**
     * @var integer Number of partitions
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PartitionCount;

    /**
     * @var string CPU information
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CPUInfo;

    /**
     * @var integer CPU size
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CPUSize;

    /**
     * @var string CPU load
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CPULoad;

    /**
     * @var string Memory size
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MemorySize;

    /**
     * @var string Memory load
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MemoryLoad;

    /**
     * @var string Disk size.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DiskSize;

    /**
     * @var string Disk load
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DiskLoad;

    /**
     * @var string Number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AccountCount;

    /**
     * @var string Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ProcessCount;

    /**
     * @var string Number of applications
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppCount;

    /**
     * @var integer Number of listened ports.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PortCount;

    /**
     * @var integer Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Attack;

    /**
     * @var integer Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Access;

    /**
     * @var integer Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Intercept;

    /**
     * @var string Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InBandwidth;

    /**
     * @var string OutInbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OutBandwidth;

    /**
     * @var string Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InFlow;

    /**
     * @var string Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OutFlow;

    /**
     * @var string Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $LastScanTime;

    /**
     * @var integer Proactive malicious outgoing requests
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NetWorkOut;

    /**
     * @var integer Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $PortRisk;

    /**
     * @var integer Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VulnerabilityRisk;

    /**
     * @var integer Configuraiton risks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ConfigurationRisk;

    /**
     * @var integer Number of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ScanTask;

    /**
     * @var array Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $MemberId;

    /**
     * @var string Full name of the operating system
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Os;

    /**
     * @var integer Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RiskExposure;

    /**
     * @var integer BAS toolkit status. `0`: Not installed; `1`: Installed; `2`: Offline.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $BASAgentStatus;

    /**
     * @var integer `1`: New asset; `0`: Not a new asset
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsNewAsset;

    /**
     * @param string $AssetId Asset ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetName Asset name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetType Asset type
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $CWPStatus Protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AssetCreateTime Asset creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PublicIp Public IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $PrivateIp Private IP
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VpcId 
     * @param string $VpcName VPC name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $AppId App ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $NickName User name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AvailableArea Availability zone
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsCore Whether it's a critical asset
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $SubnetName Subnet name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InstanceUuid UUID of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InstanceQUuid QUuid of the instance
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OsName OS name
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $PartitionCount Number of partitions
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $CPUInfo CPU information
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $CPUSize CPU size
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $CPULoad CPU load
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $MemorySize Memory size
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $MemoryLoad Memory load
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $DiskSize Disk size.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $DiskLoad Disk load
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AccountCount Number of accounts
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ProcessCount Number of processes
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AppCount Number of applications
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $PortCount Number of listened ports.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Attack Number of network attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Access Number of network access requests
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Intercept Number of blocked attacks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InBandwidth Inbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OutBandwidth OutInbound peak bandwidth
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $InFlow Total inbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $OutFlow Total outbound traffic
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $LastScanTime Last scan time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $NetWorkOut Proactive malicious outgoing requests
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $PortRisk Port risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $VulnerabilityRisk Vulnerabilities
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ConfigurationRisk Configuraiton risks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ScanTask Number of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $Tag Tags
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $MemberId Member ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Os Full name of the operating system
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $RiskExposure Risk exposure
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $BASAgentStatus BAS toolkit status. `0`: Not installed; `1`: Installed; `2`: Offline.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsNewAsset `1`: New asset; `0`: Not a new asset
Note: This field may return·null, indicating that no valid values can be obtained.
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
    }
}
