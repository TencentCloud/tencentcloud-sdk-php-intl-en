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
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getCveId() Obtain CVE ID
 * @method void setCveId(string $CveId) Set CVE ID
 * @method integer getId() Obtain Vulnerability Event ID
 * @method void setId(integer $Id) Set Vulnerability Event ID
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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourcePort(array $SourcePort) Set Attack source port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Event Creation Time
 * @method void setCreateTime(string $CreateTime) Set Event Creation Time
 * @method string getMergeTime() Obtain Update Event Time
 * @method void setMergeTime(string $MergeTime) Set Update Event Time
 * @method integer getCount() Obtain Number of Occurrences
 * @method void setCount(integer $Count) Set Number of Occurrences
 * @method integer getStatus() Obtain Status. 0: Pending; 1: Defended; 2: Processed; 3: Ignored; 4: Deleted
 * @method void setStatus(integer $Status) Set Status. 0: Pending; 1: Defended; 2: Processed; 3: Ignored; 4: Deleted
 * @method string getMachineStatus() Obtain ONLINE OFFLINE
 * @method void setMachineStatus(string $MachineStatus) Set ONLINE OFFLINE
 * @method string getDescription() Obtain Vulnerability Description Information
 * @method void setDescription(string $Description) Set Vulnerability Description Information
 * @method string getFix() Obtain Fixing suggestion
 * @method void setFix(string $Fix) Set Fixing suggestion
 * @method string getNetworkPayload() Obtain Attack Payload
 * @method void setNetworkPayload(string $NetworkPayload) Set Attack Payload
 * @method integer getPid() Obtain Associated Process PID
 * @method void setPid(integer $Pid) Set Associated Process PID
 * @method string getMainClass() Obtain Associated Process Main Class Name
 * @method void setMainClass(string $MainClass) Set Associated Process Main Class Name
 * @method string getStackTrace() Obtain Stack Information (Unique for RASP)
 * @method void setStackTrace(string $StackTrace) Set Stack Information (Unique for RASP)
 * @method string getEventDetail() Obtain Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
 * @method void setEventDetail(string $EventDetail) Set Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
 * @method string getExceptionPstree() Obtain Host Compromise Event Process Tree (JSON format, unique to WeDetect)
 * @method void setExceptionPstree(string $ExceptionPstree) Set Host Compromise Event Process Tree (JSON format, unique to WeDetect)
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulDefenceEventDetail extends AbstractModel
{
    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string CVE ID
     */
    public $CveId;

    /**
     * @var integer Vulnerability Event ID
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
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string ONLINE OFFLINE
     */
    public $MachineStatus;

    /**
     * @var string Vulnerability Description Information
     */
    public $Description;

    /**
     * @var string Fixing suggestion
     */
    public $Fix;

    /**
     * @var string Attack Payload
     */
    public $NetworkPayload;

    /**
     * @var integer Associated Process PID
     */
    public $Pid;

    /**
     * @var string Associated Process Main Class Name
     */
    public $MainClass;

    /**
     * @var string Stack Information (Unique for RASP)
     */
    public $StackTrace;

    /**
     * @var string Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
     */
    public $EventDetail;

    /**
     * @var string Host Compromise Event Process Tree (JSON format, unique to WeDetect)
     */
    public $ExceptionPstree;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $VulName Vulnerability name
     * @param string $CveId CVE ID
     * @param integer $Id Vulnerability Event ID
     * @param string $Quuid Host QUUID
     * @param string $Alias Host name
     * @param string $PrivateIp Private IP address
     * @param string $PublicIp Public IP address
     * @param integer $EventType 0: Attack Attempt (WeDetect); 1: Successful Attack Attempt (WeDetect); 2: RASP Defense Event
     * @param string $SourceIp Attack source IP address
     * @param string $City City of the attack source IP address
     * @param array $SourcePort Attack source port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Event Creation Time
     * @param string $MergeTime Update Event Time
     * @param integer $Count Number of Occurrences
     * @param integer $Status Status. 0: Pending; 1: Defended; 2: Processed; 3: Ignored; 4: Deleted
     * @param string $MachineStatus ONLINE OFFLINE
     * @param string $Description Vulnerability Description Information
     * @param string $Fix Fixing suggestion
     * @param string $NetworkPayload Attack Payload
     * @param integer $Pid Associated Process PID
     * @param string $MainClass Associated Process Main Class Name
     * @param string $StackTrace Stack Information (Unique for RASP)
     * @param string $EventDetail Vulnerability ID-Related Event Details (JSON array format, unique to RASP)
     * @param string $ExceptionPstree Host Compromise Event Process Tree (JSON format, unique to WeDetect)
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

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("NetworkPayload",$param) and $param["NetworkPayload"] !== null) {
            $this->NetworkPayload = $param["NetworkPayload"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("StackTrace",$param) and $param["StackTrace"] !== null) {
            $this->StackTrace = $param["StackTrace"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = $param["EventDetail"];
        }

        if (array_key_exists("ExceptionPstree",$param) and $param["ExceptionPstree"] !== null) {
            $this->ExceptionPstree = $param["ExceptionPstree"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
