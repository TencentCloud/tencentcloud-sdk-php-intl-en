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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host list
 *
 * @method string getMachineName() Obtain <p>Host name.</p>
 * @method void setMachineName(string $MachineName) Set <p>Host name.</p>
 * @method string getMachineOs() Obtain <p>Host operating system.</p>
 * @method void setMachineOs(string $MachineOs) Set <p>Host operating system.</p>
 * @method string getMachineStatus() Obtain <p>Host status. <li>OFFLINE: Offline</li> <li>ONLINE: Online</li> <li>SHUTDOWN: Shut down</li> <li>UNINSTALLED: Unprotected</li></p>
 * @method void setMachineStatus(string $MachineStatus) Set <p>Host status. <li>OFFLINE: Offline</li> <li>ONLINE: Online</li> <li>SHUTDOWN: Shut down</li> <li>UNINSTALLED: Unprotected</li></p>
 * @method string getAgentStatus() Obtain <p>ONLINE: Protected; OFFLINE: Offline; UNINSTALLED: Not installed</p>
 * @method void setAgentStatus(string $AgentStatus) Set <p>ONLINE: Protected; OFFLINE: Offline; UNINSTALLED: Not installed</p>
 * @method string getInstanceStatus() Obtain <p>RUNNING: Running; STOPED: Shut down; EXPIRED: Pending reclamation</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>RUNNING: Running; STOPED: Shut down; EXPIRED: Pending reclamation</p>
 * @method string getUuid() Obtain <p>CWP Uuid. Returns an empty string if the client is offline long-term.</p>
 * @method void setUuid(string $Uuid) Set <p>CWP Uuid. Returns an empty string if the client is offline long-term.</p>
 * @method string getQuuid() Obtain <p>Unique Uuid of a CVM or BM machine.</p>
 * @method void setQuuid(string $Quuid) Set <p>Unique Uuid of a CVM or BM machine.</p>
 * @method integer getVulNum() Obtain <p>Number of vulnerabilities.</p>
 * @method void setVulNum(integer $VulNum) Set <p>Number of vulnerabilities.</p>
 * @method string getMachineIp() Obtain <p>Host IP.</p>
 * @method void setMachineIp(string $MachineIp) Set <p>Host IP.</p>
 * @method boolean getIsProVersion() Obtain <p>Whether the host is Pro Edition.</p><li>true: Yes</li><li>false: No</li>
 * @method void setIsProVersion(boolean $IsProVersion) Set <p>Whether the host is Pro Edition.</p><li>true: Yes</li><li>false: No</li>
 * @method string getMachineWanIp() Obtain <p>Host public IP.</p>
 * @method void setMachineWanIp(string $MachineWanIp) Set <p>Host public IP.</p>
 * @method string getPayMode() Obtain <p>Host status.</p><li>POSTPAY: Postpaid (pay-as-you-go)</li><li>PREPAY: Prepaid (monthly or yearly subscription)</li>
 * @method void setPayMode(string $PayMode) Set <p>Host status.</p><li>POSTPAY: Postpaid (pay-as-you-go)</li><li>PREPAY: Prepaid (monthly or yearly subscription)</li>
 * @method integer getMalwareNum() Obtain <p>Number of trojans.</p>
 * @method void setMalwareNum(integer $MalwareNum) Set <p>Number of trojans.</p>
 * @method array getTag() Obtain <p>Tag information</p>
 * @method void setTag(array $Tag) Set <p>Tag information</p>
 * @method integer getBaselineNum() Obtain <p>Number of baseline risks.</p>
 * @method void setBaselineNum(integer $BaselineNum) Set <p>Number of baseline risks.</p>
 * @method integer getCyberAttackNum() Obtain <p>Number of network risks.</p>
 * @method void setCyberAttackNum(integer $CyberAttackNum) Set <p>Number of network risks.</p>
 * @method string getSecurityStatus() Obtain <p>Risk status.</p><li>SAFE: Safe</li><li>RISK: Risk</li><li>UNKNOWN: Unknown</li>
 * @method void setSecurityStatus(string $SecurityStatus) Set <p>Risk status.</p><li>SAFE: Safe</li><li>RISK: Risk</li><li>UNKNOWN: Unknown</li>
 * @method integer getInvasionNum() Obtain <p>Number of intrusion events</p>
 * @method void setInvasionNum(integer $InvasionNum) Set <p>Number of intrusion events</p>
 * @method RegionInfo getRegionInfo() Obtain <p>Region information</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set <p>Region information</p>
 * @method string getInstanceState() Obtain <p>Instance status. TERMINATED_PRO_VERSION: terminated.</p>
 * @method void setInstanceState(string $InstanceState) Set <p>Instance status. TERMINATED_PRO_VERSION: terminated.</p>
 * @method integer getLicenseStatus() Obtain <p>Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized</p>
 * @method void setLicenseStatus(integer $LicenseStatus) Set <p>Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized</p>
 * @method integer getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID</p>
 * @method integer getHasAssetScan() Obtain <p>Whether the asset scanning API is available. 0: No; 1: Yes</p>
 * @method void setHasAssetScan(integer $HasAssetScan) Set <p>Whether the asset scanning API is available. 0: No; 1: Yes</p>
 * @method string getMachineType() Obtain <p>Machine zone type. CVM: Cloud Virtual Machine; BM: Blackstone; ECM: Edge Computing Machine; LH: Lighthouse; Other: Hybrid cloud zone</p>
 * @method void setMachineType(string $MachineType) Set <p>Machine zone type. CVM: Cloud Virtual Machine; BM: Blackstone; ECM: Edge Computing Machine; LH: Lighthouse; Other: Hybrid cloud zone</p>
 * @method string getKernelVersion() Obtain <p>Kernel version</p>
 * @method void setKernelVersion(string $KernelVersion) Set <p>Kernel version</p>
 * @method string getProtectType() Obtain <p>Protection edition: BASIC_VERSION: Basic Edition; PRO_VERSION: Pro Edition; Flagship: Ultimate Edition; GENERAL_DISCOUNT: Lighthouse Edition</p>
 * @method void setProtectType(string $ProtectType) Set <p>Protection edition: BASIC_VERSION: Basic Edition; PRO_VERSION: Pro Edition; Flagship: Ultimate Edition; GENERAL_DISCOUNT: Lighthouse Edition</p>
 * @method array getCloudTags() Obtain <p>Cloud tag information</p>
 * @method void setCloudTags(array $CloudTags) Set <p>Cloud tag information</p>
 * @method integer getIsAddedOnTheFifteen() Obtain <p>Whether the host was added within the last 15 days. 0: No; 1: Yes</p>
 * @method void setIsAddedOnTheFifteen(integer $IsAddedOnTheFifteen) Set <p>Whether the host was added within the last 15 days. 0: No; 1: Yes</p>
 * @method string getIpList() Obtain <p>Host IP list</p>
 * @method void setIpList(string $IpList) Set <p>Host IP list</p>
 * @method string getVpcId() Obtain <p>Network</p>
 * @method void setVpcId(string $VpcId) Set <p>Network</p>
 * @method MachineExtraInfo getMachineExtraInfo() Obtain <p>Additional information</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set <p>Additional information</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getRemark() Obtain <p>Remarks</p>
 * @method void setRemark(string $Remark) Set <p>Remarks</p>
 * @method string getAgentVersion() Obtain <p>CWP agent version</p>
 * @method void setAgentVersion(string $AgentVersion) Set <p>CWP agent version</p>
 * @method integer getAppId() Obtain <p>APPID of the machine</p>
 * @method void setAppId(integer $AppId) Set <p>APPID of the machine</p>
 * @method string getCSIPProtectType() Obtain <p>CSC paid edition</p>
 * @method void setCSIPProtectType(string $CSIPProtectType) Set <p>CSC paid edition</p>
 */
class Machine extends AbstractModel
{
    /**
     * @var string <p>Host name.</p>
     */
    public $MachineName;

    /**
     * @var string <p>Host operating system.</p>
     */
    public $MachineOs;

    /**
     * @var string <p>Host status. <li>OFFLINE: Offline</li> <li>ONLINE: Online</li> <li>SHUTDOWN: Shut down</li> <li>UNINSTALLED: Unprotected</li></p>
     */
    public $MachineStatus;

    /**
     * @var string <p>ONLINE: Protected; OFFLINE: Offline; UNINSTALLED: Not installed</p>
     */
    public $AgentStatus;

    /**
     * @var string <p>RUNNING: Running; STOPED: Shut down; EXPIRED: Pending reclamation</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>CWP Uuid. Returns an empty string if the client is offline long-term.</p>
     */
    public $Uuid;

    /**
     * @var string <p>Unique Uuid of a CVM or BM machine.</p>
     */
    public $Quuid;

    /**
     * @var integer <p>Number of vulnerabilities.</p>
     */
    public $VulNum;

    /**
     * @var string <p>Host IP.</p>
     */
    public $MachineIp;

    /**
     * @var boolean <p>Whether the host is Pro Edition.</p><li>true: Yes</li><li>false: No</li>
     */
    public $IsProVersion;

    /**
     * @var string <p>Host public IP.</p>
     */
    public $MachineWanIp;

    /**
     * @var string <p>Host status.</p><li>POSTPAY: Postpaid (pay-as-you-go)</li><li>PREPAY: Prepaid (monthly or yearly subscription)</li>
     */
    public $PayMode;

    /**
     * @var integer <p>Number of trojans.</p>
     */
    public $MalwareNum;

    /**
     * @var array <p>Tag information</p>
     */
    public $Tag;

    /**
     * @var integer <p>Number of baseline risks.</p>
     */
    public $BaselineNum;

    /**
     * @var integer <p>Number of network risks.</p>
     */
    public $CyberAttackNum;

    /**
     * @var string <p>Risk status.</p><li>SAFE: Safe</li><li>RISK: Risk</li><li>UNKNOWN: Unknown</li>
     */
    public $SecurityStatus;

    /**
     * @var integer <p>Number of intrusion events</p>
     */
    public $InvasionNum;

    /**
     * @var RegionInfo <p>Region information</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>Instance status. TERMINATED_PRO_VERSION: terminated.</p>
     */
    public $InstanceState;

    /**
     * @var integer <p>Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized</p>
     */
    public $LicenseStatus;

    /**
     * @var integer <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Whether the asset scanning API is available. 0: No; 1: Yes</p>
     */
    public $HasAssetScan;

    /**
     * @var string <p>Machine zone type. CVM: Cloud Virtual Machine; BM: Blackstone; ECM: Edge Computing Machine; LH: Lighthouse; Other: Hybrid cloud zone</p>
     */
    public $MachineType;

    /**
     * @var string <p>Kernel version</p>
     */
    public $KernelVersion;

    /**
     * @var string <p>Protection edition: BASIC_VERSION: Basic Edition; PRO_VERSION: Pro Edition; Flagship: Ultimate Edition; GENERAL_DISCOUNT: Lighthouse Edition</p>
     */
    public $ProtectType;

    /**
     * @var array <p>Cloud tag information</p>
     */
    public $CloudTags;

    /**
     * @var integer <p>Whether the host was added within the last 15 days. 0: No; 1: Yes</p>
     */
    public $IsAddedOnTheFifteen;

    /**
     * @var string <p>Host IP list</p>
     */
    public $IpList;

    /**
     * @var string <p>Network</p>
     */
    public $VpcId;

    /**
     * @var MachineExtraInfo <p>Additional information</p>
     */
    public $MachineExtraInfo;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Remarks</p>
     */
    public $Remark;

    /**
     * @var string <p>CWP agent version</p>
     */
    public $AgentVersion;

    /**
     * @var integer <p>APPID of the machine</p>
     */
    public $AppId;

    /**
     * @var string <p>CSC paid edition</p>
     */
    public $CSIPProtectType;

    /**
     * @param string $MachineName <p>Host name.</p>
     * @param string $MachineOs <p>Host operating system.</p>
     * @param string $MachineStatus <p>Host status. <li>OFFLINE: Offline</li> <li>ONLINE: Online</li> <li>SHUTDOWN: Shut down</li> <li>UNINSTALLED: Unprotected</li></p>
     * @param string $AgentStatus <p>ONLINE: Protected; OFFLINE: Offline; UNINSTALLED: Not installed</p>
     * @param string $InstanceStatus <p>RUNNING: Running; STOPED: Shut down; EXPIRED: Pending reclamation</p>
     * @param string $Uuid <p>CWP Uuid. Returns an empty string if the client is offline long-term.</p>
     * @param string $Quuid <p>Unique Uuid of a CVM or BM machine.</p>
     * @param integer $VulNum <p>Number of vulnerabilities.</p>
     * @param string $MachineIp <p>Host IP.</p>
     * @param boolean $IsProVersion <p>Whether the host is Pro Edition.</p><li>true: Yes</li><li>false: No</li>
     * @param string $MachineWanIp <p>Host public IP.</p>
     * @param string $PayMode <p>Host status.</p><li>POSTPAY: Postpaid (pay-as-you-go)</li><li>PREPAY: Prepaid (monthly or yearly subscription)</li>
     * @param integer $MalwareNum <p>Number of trojans.</p>
     * @param array $Tag <p>Tag information</p>
     * @param integer $BaselineNum <p>Number of baseline risks.</p>
     * @param integer $CyberAttackNum <p>Number of network risks.</p>
     * @param string $SecurityStatus <p>Risk status.</p><li>SAFE: Safe</li><li>RISK: Risk</li><li>UNKNOWN: Unknown</li>
     * @param integer $InvasionNum <p>Number of intrusion events</p>
     * @param RegionInfo $RegionInfo <p>Region information</p>
     * @param string $InstanceState <p>Instance status. TERMINATED_PRO_VERSION: terminated.</p>
     * @param integer $LicenseStatus <p>Tamper-proof; authorization status: 1 - authorized; 0 - unauthorized</p>
     * @param integer $ProjectId <p>Project ID</p>
     * @param integer $HasAssetScan <p>Whether the asset scanning API is available. 0: No; 1: Yes</p>
     * @param string $MachineType <p>Machine zone type. CVM: Cloud Virtual Machine; BM: Blackstone; ECM: Edge Computing Machine; LH: Lighthouse; Other: Hybrid cloud zone</p>
     * @param string $KernelVersion <p>Kernel version</p>
     * @param string $ProtectType <p>Protection edition: BASIC_VERSION: Basic Edition; PRO_VERSION: Pro Edition; Flagship: Ultimate Edition; GENERAL_DISCOUNT: Lighthouse Edition</p>
     * @param array $CloudTags <p>Cloud tag information</p>
     * @param integer $IsAddedOnTheFifteen <p>Whether the host was added within the last 15 days. 0: No; 1: Yes</p>
     * @param string $IpList <p>Host IP list</p>
     * @param string $VpcId <p>Network</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>Additional information</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $Remark <p>Remarks</p>
     * @param string $AgentVersion <p>CWP agent version</p>
     * @param integer $AppId <p>APPID of the machine</p>
     * @param string $CSIPProtectType <p>CSC paid edition</p>
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

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
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

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CSIPProtectType",$param) and $param["CSIPProtectType"] !== null) {
            $this->CSIPProtectType = $param["CSIPProtectType"];
        }
    }
}
