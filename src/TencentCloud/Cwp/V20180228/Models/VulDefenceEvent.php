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
 * Vulnerability details
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getCveId() Obtain CVE ID
 * @method void setCveId(string $CveId) Set CVE ID
 * @method integer getId() Obtain Vulnerability event ID
 * @method void setId(integer $Id) Set Vulnerability event ID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getAlias() Obtain Host name
 * @method void setAlias(string $Alias) Set Host name
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method integer getEventType() Obtain 0: Attack Attempt (WeDetect); 1: Successful Attack Attempt (WeDetect); 2: RASP Defense Event
 * @method void setEventType(integer $EventType) Set 0: Attack Attempt (WeDetect); 1: Successful Attack Attempt (WeDetect); 2: RASP Defense Event
 * @method string getSourceIp() Obtain Attack source IP address
 * @method void setSourceIp(string $SourceIp) Set Attack source IP address
 * @method string getCity() Obtain City of the attack source IP address
 * @method void setCity(string $City) Set City of the attack source IP address
 * @method array getSourcePort() Obtain Attack source port
 * @method void setSourcePort(array $SourcePort) Set Attack source port
 * @method string getCreateTime() Obtain Event Creation Time
 * @method void setCreateTime(string $CreateTime) Set Event Creation Time
 * @method string getMergeTime() Obtain Update Event Time
 * @method void setMergeTime(string $MergeTime) Set Update Event Time
 * @method integer getCount() Obtain Number of Occurrences
 * @method void setCount(integer $Count) Set Number of Occurrences
 * @method integer getStatus() Obtain Status. 0: Pending; 1: Defended; 2: Processed; 3: Ignored; 4: Deleted
 * @method void setStatus(integer $Status) Set Status. 0: Pending; 1: Defended; 2: Processed; 3: Ignored; 4: Deleted
 * @method integer getUpgradeType() Obtain 0: Pro Edition; 1: Ultimate Edition; 2: LH Inclusive Edition (for Lighthouse only); 3: CVM Inclusive Edition (for CVM only).
 * @method void setUpgradeType(integer $UpgradeType) Set 0: Pro Edition; 1: Ultimate Edition; 2: LH Inclusive Edition (for Lighthouse only); 3: CVM Inclusive Edition (for CVM only).
 * @method integer getFixType() Obtain 0: do not support fixing; 1: support fixing.
 * @method void setFixType(integer $FixType) Set 0: do not support fixing; 1: support fixing.
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulDefenceEvent extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string CVE ID
     */
    public $CveId;

    /**
     * @var integer Vulnerability event ID
     */
    public $Id;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host name
     */
    public $Alias;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var integer 0: Attack Attempt (WeDetect); 1: Successful Attack Attempt (WeDetect); 2: RASP Defense Event
     */
    public $EventType;

    /**
     * @var string Attack source IP address
     */
    public $SourceIp;

    /**
     * @var string City of the attack source IP address
     */
    public $City;

    /**
     * @var array Attack source port
     */
    public $SourcePort;

    /**
     * @var string Event Creation Time
     */
    public $CreateTime;

    /**
     * @var string Update Event Time
     */
    public $MergeTime;

    /**
     * @var integer Number of Occurrences
     */
    public $Count;

    /**
     * @var integer Status. 0: Pending; 1: Defended; 2: Processed; 3: Ignored; 4: Deleted
     */
    public $Status;

    /**
     * @var integer 0: Pro Edition; 1: Ultimate Edition; 2: LH Inclusive Edition (for Lighthouse only); 3: CVM Inclusive Edition (for CVM only).
     */
    public $UpgradeType;

    /**
     * @var integer 0: do not support fixing; 1: support fixing.
     */
    public $FixType;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param integer $VulId Vulnerability ID
     * @param string $VulName Vulnerability name
     * @param string $CveId CVE ID
     * @param integer $Id Vulnerability event ID
     * @param string $Quuid Host QUUID
     * @param string $Alias Host name
     * @param string $PrivateIp Private IP address
     * @param string $PublicIp Public IP address
     * @param integer $EventType 0: Attack Attempt (WeDetect); 1: Successful Attack Attempt (WeDetect); 2: RASP Defense Event
     * @param string $SourceIp Attack source IP address
     * @param string $City City of the attack source IP address
     * @param array $SourcePort Attack source port
     * @param string $CreateTime Event Creation Time
     * @param string $MergeTime Update Event Time
     * @param integer $Count Number of Occurrences
     * @param integer $Status Status. 0: Pending; 1: Defended; 2: Processed; 3: Ignored; 4: Deleted
     * @param integer $UpgradeType 0: Pro Edition; 1: Ultimate Edition; 2: LH Inclusive Edition (for Lighthouse only); 3: CVM Inclusive Edition (for CVM only).
     * @param integer $FixType 0: do not support fixing; 1: support fixing.
     * @param string $Uuid Host UUID
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("FixType",$param) and $param["FixType"] !== null) {
            $this->FixType = $param["FixType"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
