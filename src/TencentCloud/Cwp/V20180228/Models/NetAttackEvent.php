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
 * Network attack event
 *
 * @method integer getId() Obtain Log ID
 * @method void setId(integer $Id) Set Log ID
 * @method string getUuid() Obtain Client ID
 * @method void setUuid(string $Uuid) Set Client ID
 * @method integer getDstPort() Obtain Target port
 * @method void setDstPort(integer $DstPort) Set Target port
 * @method string getSrcIP() Obtain Source IP
 * @method void setSrcIP(string $SrcIP) Set Source IP
 * @method string getLocation() Obtain Source location
 * @method void setLocation(string $Location) Set Source location
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getMergeTime() Obtain Attack time
 * @method void setMergeTime(string $MergeTime) Set Attack time
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain Attack Status: 0: Attack Attempt 1: Confirmed Attack (Successful Attack).
 * @method void setType(integer $Type) Set Attack Status: 0: Attack Attempt 1: Confirmed Attack (Successful Attack).
 * @method integer getStatus() Obtain Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
 * @method void setStatus(integer $Status) Set Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
 * @method integer getVulSupportDefense() Obtain Whether vulnerabilities support defense. 0: No 1: Yes
 * @method void setVulSupportDefense(integer $VulSupportDefense) Set Whether vulnerabilities support defense. 0: No 1: Yes
 * @method integer getVulDefenceStatus() Obtain Whether to enable vulnerability defense: 0 - No, 1 - Yes
 * @method void setVulDefenceStatus(integer $VulDefenceStatus) Set Whether to enable vulnerability defense: 0 - No, 1 - Yes
 * @method integer getPayVersion() Obtain Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
 * @method void setPayVersion(integer $PayVersion) Set Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
 * @method string getQuuid() Obtain cvm uuid
 * @method void setQuuid(string $Quuid) Set cvm uuid
 * @method integer getCount() Obtain Attacks
 * @method void setCount(integer $Count) Set Attacks
 * @method boolean getNew() Obtain Whether to add new hosts today
 * @method void setNew(boolean $New) Set Whether to add new hosts today
 */
class NetAttackEvent extends AbstractModel
{
    /**
     * @var integer Log ID
     */
    public $Id;

    /**
     * @var string Client ID
     */
    public $Uuid;

    /**
     * @var integer Target port
     */
    public $DstPort;

    /**
     * @var string Source IP
     */
    public $SrcIP;

    /**
     * @var string Source location
     */
    public $Location;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Attack time
     */
    public $MergeTime;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var integer Attack Status: 0: Attack Attempt 1: Confirmed Attack (Successful Attack).
     */
    public $Type;

    /**
     * @var integer Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
     */
    public $Status;

    /**
     * @var integer Whether vulnerabilities support defense. 0: No 1: Yes
     */
    public $VulSupportDefense;

    /**
     * @var integer Whether to enable vulnerability defense: 0 - No, 1 - Yes
     */
    public $VulDefenceStatus;

    /**
     * @var integer Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
     */
    public $PayVersion;

    /**
     * @var string cvm uuid
     */
    public $Quuid;

    /**
     * @var integer Attacks
     */
    public $Count;

    /**
     * @var boolean Whether to add new hosts today
     */
    public $New;

    /**
     * @param integer $Id Log ID
     * @param string $Uuid Client ID
     * @param integer $DstPort Target port
     * @param string $SrcIP Source IP
     * @param string $Location Source location
     * @param integer $VulId Vulnerability ID
     * @param string $VulName Vulnerability name
     * @param string $MergeTime Attack time
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Type Attack Status: 0: Attack Attempt 1: Confirmed Attack (Successful Attack).
     * @param integer $Status Processing Status: 0 Pending, 1 Processed, 2 Allowlisted, 3 Ignored, 4 Deleted, 5: Defense Enabled.
     * @param integer $VulSupportDefense Whether vulnerabilities support defense. 0: No 1: Yes
     * @param integer $VulDefenceStatus Whether to enable vulnerability defense: 0 - No, 1 - Yes
     * @param integer $PayVersion Machine payment edition. 0: Basic Edition; 1: Professional Edition; 2: Premium Edition; 3: General Discount Edition
     * @param string $Quuid cvm uuid
     * @param integer $Count Attacks
     * @param boolean $New Whether to add new hosts today
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VulSupportDefense",$param) and $param["VulSupportDefense"] !== null) {
            $this->VulSupportDefense = $param["VulSupportDefense"];
        }

        if (array_key_exists("VulDefenceStatus",$param) and $param["VulDefenceStatus"] !== null) {
            $this->VulDefenceStatus = $param["VulDefenceStatus"];
        }

        if (array_key_exists("PayVersion",$param) and $param["PayVersion"] !== null) {
            $this->PayVersion = $param["PayVersion"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("New",$param) and $param["New"] !== null) {
            $this->New = $param["New"];
        }
    }
}
