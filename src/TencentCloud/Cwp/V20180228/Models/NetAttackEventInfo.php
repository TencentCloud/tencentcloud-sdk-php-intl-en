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
 * Details of Network Attack Events
 *
 * @method integer getStatus() Obtain Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
 * @method void setStatus(integer $Status) Set Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
 * @method string getSrcIP() Obtain Attack source IP address
 * @method void setSrcIP(string $SrcIP) Set Attack source IP address
 * @method string getLocation() Obtain Attack Source
 * @method void setLocation(string $Location) Set Attack Source
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getCVEId() Obtain Vulnerability CVE ID
 * @method void setCVEId(string $CVEId) Set Vulnerability CVE ID
 * @method integer getAttackLevel() Obtain Vulnerability attack level
 * @method void setAttackLevel(integer $AttackLevel) Set Vulnerability attack level
 * @method integer getVulDefenceStatus() Obtain Vulnerability Defense Status: 0 Disabled, 1 Enabled.
 * @method void setVulDefenceStatus(integer $VulDefenceStatus) Set Vulnerability Defense Status: 0 Disabled, 1 Enabled.
 * @method integer getVulSupportDefense() Obtain Whether vulnerabilities support defense. 0: No 1: Yes
 * @method void setVulSupportDefense(integer $VulSupportDefense) Set Whether vulnerabilities support defense. 0: No 1: Yes
 * @method string getSvcPs() Obtain Service Process Base64 
 * @method void setSvcPs(string $SvcPs) Set Service Process Base64 
 * @method string getNetPayload() Obtain Attack packet
 * @method void setNetPayload(string $NetPayload) Set Attack packet
 * @method string getAbnormalAction() Obtain Abnormal behavior
 * @method void setAbnormalAction(string $AbnormalAction) Set Abnormal behavior
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDstPort() Obtain Target port
 * @method void setDstPort(integer $DstPort) Set Target port
 * @method integer getCount() Obtain Attack count
 * @method void setCount(integer $Count) Set Attack count
 * @method integer getPayVersion() Obtain Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
 * @method void setPayVersion(integer $PayVersion) Set Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
 * @method string getQuuid() Obtain cvm uuid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set cvm uuid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMergeTime() Obtain Time of Attack
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMergeTime(string $MergeTime) Set Time of Attack
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain 0: Attack Attempt 1: Successful Attack
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set 0: Attack Attempt 1: Successful Attack
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostOpType() Obtain 0: No Compromised Behavior 1: RCE (command execution) 2: Dnslog 3: Writefile
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostOpType(integer $HostOpType) Set 0: No Compromised Behavior 1: RCE (command execution) 2: Dnslog 3: Writefile
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostOpProcessTree() Obtain Process Tree, needs to be decoded with base64.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostOpProcessTree(string $HostOpProcessTree) Set Process Tree, needs to be decoded with base64.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetAttackEventInfo extends AbstractModel
{
    /**
     * @var integer Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
     */
    public $Status;

    /**
     * @var string Attack source IP address
     */
    public $SrcIP;

    /**
     * @var string Attack Source
     */
    public $Location;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability CVE ID
     */
    public $CVEId;

    /**
     * @var integer Vulnerability attack level
     */
    public $AttackLevel;

    /**
     * @var integer Vulnerability Defense Status: 0 Disabled, 1 Enabled.
     */
    public $VulDefenceStatus;

    /**
     * @var integer Whether vulnerabilities support defense. 0: No 1: Yes
     */
    public $VulSupportDefense;

    /**
     * @var string Service Process Base64 
     */
    public $SvcPs;

    /**
     * @var string Attack packet
     */
    public $NetPayload;

    /**
     * @var string Abnormal behavior
     */
    public $AbnormalAction;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var integer Target port
     */
    public $DstPort;

    /**
     * @var integer Attack count
     */
    public $Count;

    /**
     * @var integer Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
     */
    public $PayVersion;

    /**
     * @var string cvm uuid
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var string Time of Attack
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MergeTime;

    /**
     * @var integer 0: Attack Attempt 1: Successful Attack
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer 0: No Compromised Behavior 1: RCE (command execution) 2: Dnslog 3: Writefile
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostOpType;

    /**
     * @var string Process Tree, needs to be decoded with base64.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostOpProcessTree;

    /**
     * @param integer $Status Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
     * @param string $SrcIP Attack source IP address
     * @param string $Location Attack Source
     * @param string $VulName Vulnerability name
     * @param integer $VulId Vulnerability ID
     * @param string $CVEId Vulnerability CVE ID
     * @param integer $AttackLevel Vulnerability attack level
     * @param integer $VulDefenceStatus Vulnerability Defense Status: 0 Disabled, 1 Enabled.
     * @param integer $VulSupportDefense Whether vulnerabilities support defense. 0: No 1: Yes
     * @param string $SvcPs Service Process Base64 
     * @param string $NetPayload Attack packet
     * @param string $AbnormalAction Abnormal behavior
     * @param string $Uuid Host UUID
     * @param integer $Id Event ID
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DstPort Target port
     * @param integer $Count Attack count
     * @param integer $PayVersion Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
     * @param string $Quuid cvm uuid
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MergeTime Time of Attack
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Type 0: Attack Attempt 1: Successful Attack
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostOpType 0: No Compromised Behavior 1: RCE (command execution) 2: Dnslog 3: Writefile
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostOpProcessTree Process Tree, needs to be decoded with base64.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("CVEId",$param) and $param["CVEId"] !== null) {
            $this->CVEId = $param["CVEId"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("VulDefenceStatus",$param) and $param["VulDefenceStatus"] !== null) {
            $this->VulDefenceStatus = $param["VulDefenceStatus"];
        }

        if (array_key_exists("VulSupportDefense",$param) and $param["VulSupportDefense"] !== null) {
            $this->VulSupportDefense = $param["VulSupportDefense"];
        }

        if (array_key_exists("SvcPs",$param) and $param["SvcPs"] !== null) {
            $this->SvcPs = $param["SvcPs"];
        }

        if (array_key_exists("NetPayload",$param) and $param["NetPayload"] !== null) {
            $this->NetPayload = $param["NetPayload"];
        }

        if (array_key_exists("AbnormalAction",$param) and $param["AbnormalAction"] !== null) {
            $this->AbnormalAction = $param["AbnormalAction"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("PayVersion",$param) and $param["PayVersion"] !== null) {
            $this->PayVersion = $param["PayVersion"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HostOpType",$param) and $param["HostOpType"] !== null) {
            $this->HostOpType = $param["HostOpType"];
        }

        if (array_key_exists("HostOpProcessTree",$param) and $param["HostOpProcessTree"] !== null) {
            $this->HostOpProcessTree = $param["HostOpProcessTree"];
        }
    }
}
