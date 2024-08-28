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
 * Abnormal Process Event
 *
 * @method integer getEventId() Obtain Event ID
 * @method void setEventId(integer $EventId) Set Event ID
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostIp() Obtain Host IP
 * @method void setHostIp(string $HostIp) Set Host IP
 * @method string getWanIp() Obtain Public IP address
 * @method void setWanIp(string $WanIp) Set Public IP address
 * @method integer getProcessId() Obtain Process ID
 * @method void setProcessId(integer $ProcessId) Set Process ID
 * @method string getFilePath() Obtain File path
 * @method void setFilePath(string $FilePath) Set File path
 * @method string getCmdLine() Obtain Executed commands
 * @method void setCmdLine(string $CmdLine) Set Executed commands
 * @method string getStartTime() Obtain Process startup time
 * @method void setStartTime(string $StartTime) Set Process startup time
 * @method string getDetectTime() Obtain Last detection time
 * @method void setDetectTime(string $DetectTime) Set Last detection time
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method array getCheckPlatform() Obtain Trojan detection platform [1: Cloud search engine |2:TAV | 3: Binary Ai | 4: Abnormal behavior | 5: threat intelligence]
 * @method void setCheckPlatform(array $CheckPlatform) Set Trojan detection platform [1: Cloud search engine |2:TAV | 3: Binary Ai | 4: Abnormal behavior | 5: threat intelligence]
 * @method array getVirusTags() Obtain Virus tag
 * @method void setVirusTags(array $VirusTags) Set Virus tag
 * @method string getThreatDesc() Obtain Threat description
 * @method void setThreatDesc(string $ThreatDesc) Set Threat description
 * @method string getSuggestSolution() Obtain Recommended solution
 * @method void setSuggestSolution(string $SuggestSolution) Set Recommended solution
 * @method string getReferenceLink() Obtain Reference link
 * @method void setReferenceLink(string $ReferenceLink) Set Reference link
 * @method integer getHandleStatus() Obtain Processing Status [0 Pending; 1 Processed; 2 Scanning; 3 Scanned; 4 Exited; 5 Ignore]
 * @method void setHandleStatus(integer $HandleStatus) Set Processing Status [0 Pending; 1 Processed; 2 Scanning; 3 Scanned; 4 Exited; 5 Ignore]
 * @method integer getOnlineStatus() Obtain Host Online Status
 * @method void setOnlineStatus(integer $OnlineStatus) Set Host Online Status
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 */
class RiskProcessEvent extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $EventId;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host IP
     */
    public $HostIp;

    /**
     * @var string Public IP address
     */
    public $WanIp;

    /**
     * @var integer Process ID
     */
    public $ProcessId;

    /**
     * @var string File path
     */
    public $FilePath;

    /**
     * @var string Executed commands
     */
    public $CmdLine;

    /**
     * @var string Process startup time
     */
    public $StartTime;

    /**
     * @var string Last detection time
     */
    public $DetectTime;

    /**
     * @var string Virus name
     */
    public $VirusName;

    /**
     * @var array Trojan detection platform [1: Cloud search engine |2:TAV | 3: Binary Ai | 4: Abnormal behavior | 5: threat intelligence]
     */
    public $CheckPlatform;

    /**
     * @var array Virus tag
     */
    public $VirusTags;

    /**
     * @var string Threat description
     */
    public $ThreatDesc;

    /**
     * @var string Recommended solution
     */
    public $SuggestSolution;

    /**
     * @var string Reference link
     */
    public $ReferenceLink;

    /**
     * @var integer Processing Status [0 Pending; 1 Processed; 2 Scanning; 3 Scanned; 4 Exited; 5 Ignore]
     */
    public $HandleStatus;

    /**
     * @var integer Host Online Status
     */
    public $OnlineStatus;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @param integer $EventId Event ID
     * @param string $HostName Host name
     * @param string $HostIp Host IP
     * @param string $WanIp Public IP address
     * @param integer $ProcessId Process ID
     * @param string $FilePath File path
     * @param string $CmdLine Executed commands
     * @param string $StartTime Process startup time
     * @param string $DetectTime Last detection time
     * @param string $VirusName Virus name
     * @param array $CheckPlatform Trojan detection platform [1: Cloud search engine |2:TAV | 3: Binary Ai | 4: Abnormal behavior | 5: threat intelligence]
     * @param array $VirusTags Virus tag
     * @param string $ThreatDesc Threat description
     * @param string $SuggestSolution Recommended solution
     * @param string $ReferenceLink Reference link
     * @param integer $HandleStatus Processing Status [0 Pending; 1 Processed; 2 Scanning; 3 Scanned; 4 Exited; 5 Ignore]
     * @param integer $OnlineStatus Host Online Status
     * @param MachineExtraInfo $MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host UUID
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }

        if (array_key_exists("VirusTags",$param) and $param["VirusTags"] !== null) {
            $this->VirusTags = $param["VirusTags"];
        }

        if (array_key_exists("ThreatDesc",$param) and $param["ThreatDesc"] !== null) {
            $this->ThreatDesc = $param["ThreatDesc"];
        }

        if (array_key_exists("SuggestSolution",$param) and $param["SuggestSolution"] !== null) {
            $this->SuggestSolution = $param["SuggestSolution"];
        }

        if (array_key_exists("ReferenceLink",$param) and $param["ReferenceLink"] !== null) {
            $this->ReferenceLink = $param["ReferenceLink"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
