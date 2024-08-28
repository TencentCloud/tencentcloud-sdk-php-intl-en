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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host list
 *
 * @method string getMachineName() Obtain Host name.
 * @method void setMachineName(string $MachineName) Set Host name.
 * @method string getMachineOs() Obtain Host System.
 * @method void setMachineOs(string $MachineOs) Set Host System.
 * @method string getMachineStatus() Obtain Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
 * @method void setMachineStatus(string $MachineStatus) Set Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
 * @method string getUuid() Obtain Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
 * @method void setUuid(string $Uuid) Set Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
 * @method string getQuuid() Obtain CVM or BM Machine Unique UUID.
 * @method void setQuuid(string $Quuid) Set CVM or BM Machine Unique UUID.
 * @method integer getVulNum() Obtain Number of vulnerabilities
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities
 * @method string getMachineIp() Obtain Host IP.
 * @method void setMachineIp(string $MachineIp) Set Host IP.
 * @method boolean getIsProVersion() Obtain Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
 * @method string getMachineWanIp() Obtain Public IP address of a host
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address of a host
 * @method string getPayMode() Obtain Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode  </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
 * @method void setPayMode(string $PayMode) Set Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode  </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
 * @method integer getMalwareNum() Obtain Number of Trojans
 * @method void setMalwareNum(integer $MalwareNum) Set Number of Trojans
 * @method array getTag() Obtain Tag information
 * @method void setTag(array $Tag) Set Tag information
 * @method integer getBaselineNum() Obtain Number of baseline risks
 * @method void setBaselineNum(integer $BaselineNum) Set Number of baseline risks
 * @method integer getCyberAttackNum() Obtain Number of network risks
 * @method void setCyberAttackNum(integer $CyberAttackNum) Set Number of network risks
 * @method string getSecurityStatus() Obtain Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
 * @method void setSecurityStatus(string $SecurityStatus) Set Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
 * @method integer getInvasionNum() Obtain Number of intrusion events
 * @method void setInvasionNum(integer $InvasionNum) Set Number of intrusion events
 * @method RegionInfo getRegionInfo() Obtain Region information
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Region information
 * @method string getInstanceState() Obtain Instance status: TERMINATED_PRO_VERSION - terminated
 * @method void setInstanceState(string $InstanceState) Set Instance status: TERMINATED_PRO_VERSION - terminated
 * @method integer getLicenseStatus() Obtain Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized
 * @method void setLicenseStatus(integer $LicenseStatus) Set Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getHasAssetScan() Obtain Whether there is an available asset scanning API: 0 - no; 1 - yes
 * @method void setHasAssetScan(integer $HasAssetScan) Set Whether there is an available asset scanning API: 0 - no; 1 - yes
 * @method string getMachineType() Obtain Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
 * @method void setMachineType(string $MachineType) Set Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
 * @method string getKernelVersion() Obtain Kernel version
 * @method void setKernelVersion(string $KernelVersion) Set Kernel version
 * @method string getProtectType() Obtain Protection version: BASIC_VERSION - Basic Edition; PRO_VERSION - Professional Edition; Flagship - Ultimate Edition; GENERAL_DISCOUNT - Inclusive Edition
 * @method void setProtectType(string $ProtectType) Set Protection version: BASIC_VERSION - Basic Edition; PRO_VERSION - Professional Edition; Flagship - Ultimate Edition; GENERAL_DISCOUNT - Inclusive Edition
 * @method array getCloudTags() Obtain Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudTags(array $CloudTags) Set Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAddedOnTheFifteen() Obtain Whether a host added within the last 15 days: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAddedOnTheFifteen(integer $IsAddedOnTheFifteen) Set Whether a host added within the last 15 days: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIpList() Obtain Host IP List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpList(string $IpList) Set Host IP List
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain Network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set Network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Machine extends AbstractModel
{
    /**
     * @var string Host name.
     */
    public $MachineName;

    /**
     * @var string Host System.
     */
    public $MachineOs;

    /**
     * @var string Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
     */
    public $MachineStatus;

    /**
     * @var string Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
     */
    public $Uuid;

    /**
     * @var string CVM or BM Machine Unique UUID.
     */
    public $Quuid;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulNum;

    /**
     * @var string Host IP.
     */
    public $MachineIp;

    /**
     * @var boolean Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
     */
    public $IsProVersion;

    /**
     * @var string Public IP address of a host
     */
    public $MachineWanIp;

    /**
     * @var string Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode  </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
     */
    public $PayMode;

    /**
     * @var integer Number of Trojans
     */
    public $MalwareNum;

    /**
     * @var array Tag information
     */
    public $Tag;

    /**
     * @var integer Number of baseline risks
     */
    public $BaselineNum;

    /**
     * @var integer Number of network risks
     */
    public $CyberAttackNum;

    /**
     * @var string Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
     */
    public $SecurityStatus;

    /**
     * @var integer Number of intrusion events
     */
    public $InvasionNum;

    /**
     * @var RegionInfo Region information
     */
    public $RegionInfo;

    /**
     * @var string Instance status: TERMINATED_PRO_VERSION - terminated
     */
    public $InstanceState;

    /**
     * @var integer Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized
     */
    public $LicenseStatus;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Whether there is an available asset scanning API: 0 - no; 1 - yes
     */
    public $HasAssetScan;

    /**
     * @var string Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
     */
    public $MachineType;

    /**
     * @var string Kernel version
     */
    public $KernelVersion;

    /**
     * @var string Protection version: BASIC_VERSION - Basic Edition; PRO_VERSION - Professional Edition; Flagship - Ultimate Edition; GENERAL_DISCOUNT - Inclusive Edition
     */
    public $ProtectType;

    /**
     * @var array Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudTags;

    /**
     * @var integer Whether a host added within the last 15 days: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAddedOnTheFifteen;

    /**
     * @var string Host IP List
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpList;

    /**
     * @var string Network
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param string $MachineName Host name.
     * @param string $MachineOs Host System.
     * @param string $MachineStatus Host status
<li>OFFLINE: Offline</li>
<li>ONLINE: Online</li>
<li>SHUTDOWN: Shut down</li>
<li>UNINSTALLED: Unprotected</li>
     * @param string $Uuid Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
     * @param string $Quuid CVM or BM Machine Unique UUID.
     * @param integer $VulNum Number of vulnerabilities
     * @param string $MachineIp Host IP.
     * @param boolean $IsProVersion Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
     * @param string $MachineWanIp Public IP address of a host
     * @param string $PayMode Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode  </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
     * @param integer $MalwareNum Number of Trojans
     * @param array $Tag Tag information
     * @param integer $BaselineNum Number of baseline risks
     * @param integer $CyberAttackNum Number of network risks
     * @param string $SecurityStatus Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
     * @param integer $InvasionNum Number of intrusion events
     * @param RegionInfo $RegionInfo Region information
     * @param string $InstanceState Instance status: TERMINATED_PRO_VERSION - terminated
     * @param integer $LicenseStatus Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized
     * @param integer $ProjectId Project ID
     * @param integer $HasAssetScan Whether there is an available asset scanning API: 0 - no; 1 - yes
     * @param string $MachineType Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
     * @param string $KernelVersion Kernel version
     * @param string $ProtectType Protection version: BASIC_VERSION - Basic Edition; PRO_VERSION - Professional Edition; Flagship - Ultimate Edition; GENERAL_DISCOUNT - Inclusive Edition
     * @param array $CloudTags Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAddedOnTheFifteen Whether a host added within the last 15 days: 0: no; 1: yes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IpList Host IP List
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId Network
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
     * @param string $Remark Remarks
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("BaselineNum",$param) and $param["BaselineNum"] !== null) {
            $this->BaselineNum = $param["BaselineNum"];
        }

        if (array_key_exists("CyberAttackNum",$param) and $param["CyberAttackNum"] !== null) {
            $this->CyberAttackNum = $param["CyberAttackNum"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }

        if (array_key_exists("InvasionNum",$param) and $param["InvasionNum"] !== null) {
            $this->InvasionNum = $param["InvasionNum"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("HasAssetScan",$param) and $param["HasAssetScan"] !== null) {
            $this->HasAssetScan = $param["HasAssetScan"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("IsAddedOnTheFifteen",$param) and $param["IsAddedOnTheFifteen"] !== null) {
            $this->IsAddedOnTheFifteen = $param["IsAddedOnTheFifteen"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
