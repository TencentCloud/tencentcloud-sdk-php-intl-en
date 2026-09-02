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
 * Full Alarm List Data from Alarm Center
 *
 * @method string getID() Obtain Alarm ID
 * @method void setID(string $ID) Set Alarm ID
 * @method string getName() Obtain Alarm name
 * @method void setName(string $Name) Set Alarm name
 * @method string getSource() Obtain Alarm source
CFW: Cloud firewall
WAF: Web application firewall
CWP: Host Security
CSIP: Cloud Security Center
 * @method void setSource(string $Source) Set Alarm source
CFW: Cloud firewall
WAF: Web application firewall
CWP: Host Security
CSIP: Cloud Security Center
 * @method integer getLevel() Obtain Alarm level
1: Prompt
2: Low-risk
3: Medium risk
4: High risk
5: Critical
 * @method void setLevel(integer $Level) Set Alarm level
1: Prompt
2: Low-risk
3: Medium risk
4: High risk
5: Critical
 * @method RoleInfo getAttacker() Obtain Attacker
 * @method void setAttacker(RoleInfo $Attacker) Set Attacker
 * @method RoleInfo getVictim() Obtain Victim.
 * @method void setVictim(RoleInfo $Victim) Set Victim.
 * @method string getEvidenceData() Obtain Evidence data (for example, attack content, base64 encoded)
 * @method void setEvidenceData(string $EvidenceData) Set Evidence data (for example, attack content, base64 encoded)
 * @method string getEvidenceLocation() Obtain Evidence location (such as protocol port)
 * @method void setEvidenceLocation(string $EvidenceLocation) Set Evidence location (such as protocol port)
 * @method string getEvidencePath() Obtain Evidence Path
 * @method void setEvidencePath(string $EvidencePath) Set Evidence Path
 * @method string getCreateTime() Obtain First alarm time
 * @method void setCreateTime(string $CreateTime) Set First alarm time
 * @method string getUpdateTime() Obtain Latest Alarm Time
 * @method void setUpdateTime(string $UpdateTime) Set Latest Alarm Time
 * @method integer getCount() Obtain Alarm count
 * @method void setCount(integer $Count) Set Alarm count
 * @method string getUrgentSuggestion() Obtain Emergency Mitigation Suggestions
 * @method void setUrgentSuggestion(string $UrgentSuggestion) Set Emergency Mitigation Suggestions
 * @method string getRemediationSuggestion() Obtain Radical Treatment Suggestion
 * @method void setRemediationSuggestion(string $RemediationSuggestion) Set Radical Treatment Suggestion
 * @method integer getStatus() Obtain Processing status
0: Unprocessed; 1: Ignored; 2: Processed.
 * @method void setStatus(integer $Status) Set Processing status
0: Unprocessed; 1: Ignored; 2: Processed.
 * @method string getProcessType() Obtain Alarm Handling Type
 * @method void setProcessType(string $ProcessType) Set Alarm Handling Type
 * @method string getType() Obtain Major Category of Alarm
 * @method void setType(string $Type) Set Major Category of Alarm
 * @method string getSubType() Obtain Alarm Subcategory
 * @method void setSubType(string $SubType) Set Alarm Subcategory
 * @method AlertExtraInfo getExtraInfo() Obtain Dropdown Field
 * @method void setExtraInfo(AlertExtraInfo $ExtraInfo) Set Dropdown Field
 * @method string getKey() Obtain Aggregate Fields
 * @method void setKey(string $Key) Set Aggregate Fields
 * @method string getDate() Obtain Alarm Date
 * @method void setDate(string $Date) Set Alarm Date
 * @method string getAppID() Obtain appid
 * @method void setAppID(string $AppID) Set appid
 * @method string getNickName() Obtain Account name
 * @method void setNickName(string $NickName) Set Account name
 * @method string getUin() Obtain Account ID
 * @method void setUin(string $Uin) Set Account ID
 * @method integer getAction() Obtain Action
 * @method void setAction(integer $Action) Set Action
 * @method string getRiskInvestigation() Obtain Risk detection
 * @method void setRiskInvestigation(string $RiskInvestigation) Set Risk detection
 * @method string getRiskTreatment() Obtain Risk handling
 * @method void setRiskTreatment(string $RiskTreatment) Set Risk handling
 * @method string getLogType() Obtain Log type
 * @method void setLogType(string $LogType) Set Log type
 * @method string getLogSearch() Obtain Statement retrieval
 * @method void setLogSearch(string $LogSearch) Set Statement retrieval
 */
class AlertInfo extends AbstractModel
{
    /**
     * @var string Alarm ID
     */
    public $ID;

    /**
     * @var string Alarm name
     */
    public $Name;

    /**
     * @var string Alarm source
CFW: Cloud firewall
WAF: Web application firewall
CWP: Host Security
CSIP: Cloud Security Center
     */
    public $Source;

    /**
     * @var integer Alarm level
1: Prompt
2: Low-risk
3: Medium risk
4: High risk
5: Critical
     */
    public $Level;

    /**
     * @var RoleInfo Attacker
     */
    public $Attacker;

    /**
     * @var RoleInfo Victim.
     */
    public $Victim;

    /**
     * @var string Evidence data (for example, attack content, base64 encoded)
     */
    public $EvidenceData;

    /**
     * @var string Evidence location (such as protocol port)
     */
    public $EvidenceLocation;

    /**
     * @var string Evidence Path
     */
    public $EvidencePath;

    /**
     * @var string First alarm time
     */
    public $CreateTime;

    /**
     * @var string Latest Alarm Time
     */
    public $UpdateTime;

    /**
     * @var integer Alarm count
     */
    public $Count;

    /**
     * @var string Emergency Mitigation Suggestions
     */
    public $UrgentSuggestion;

    /**
     * @var string Radical Treatment Suggestion
     */
    public $RemediationSuggestion;

    /**
     * @var integer Processing status
0: Unprocessed; 1: Ignored; 2: Processed.
     */
    public $Status;

    /**
     * @var string Alarm Handling Type
     */
    public $ProcessType;

    /**
     * @var string Major Category of Alarm
     */
    public $Type;

    /**
     * @var string Alarm Subcategory
     */
    public $SubType;

    /**
     * @var AlertExtraInfo Dropdown Field
     */
    public $ExtraInfo;

    /**
     * @var string Aggregate Fields
     */
    public $Key;

    /**
     * @var string Alarm Date
     */
    public $Date;

    /**
     * @var string appid
     */
    public $AppID;

    /**
     * @var string Account name
     */
    public $NickName;

    /**
     * @var string Account ID
     */
    public $Uin;

    /**
     * @var integer Action
     */
    public $Action;

    /**
     * @var string Risk detection
     */
    public $RiskInvestigation;

    /**
     * @var string Risk handling
     */
    public $RiskTreatment;

    /**
     * @var string Log type
     */
    public $LogType;

    /**
     * @var string Statement retrieval
     */
    public $LogSearch;

    /**
     * @param string $ID Alarm ID
     * @param string $Name Alarm name
     * @param string $Source Alarm source
CFW: Cloud firewall
WAF: Web application firewall
CWP: Host Security
CSIP: Cloud Security Center
     * @param integer $Level Alarm level
1: Prompt
2: Low-risk
3: Medium risk
4: High risk
5: Critical
     * @param RoleInfo $Attacker Attacker
     * @param RoleInfo $Victim Victim.
     * @param string $EvidenceData Evidence data (for example, attack content, base64 encoded)
     * @param string $EvidenceLocation Evidence location (such as protocol port)
     * @param string $EvidencePath Evidence Path
     * @param string $CreateTime First alarm time
     * @param string $UpdateTime Latest Alarm Time
     * @param integer $Count Alarm count
     * @param string $UrgentSuggestion Emergency Mitigation Suggestions
     * @param string $RemediationSuggestion Radical Treatment Suggestion
     * @param integer $Status Processing status
0: Unprocessed; 1: Ignored; 2: Processed.
     * @param string $ProcessType Alarm Handling Type
     * @param string $Type Major Category of Alarm
     * @param string $SubType Alarm Subcategory
     * @param AlertExtraInfo $ExtraInfo Dropdown Field
     * @param string $Key Aggregate Fields
     * @param string $Date Alarm Date
     * @param string $AppID appid
     * @param string $NickName Account name
     * @param string $Uin Account ID
     * @param integer $Action Action
     * @param string $RiskInvestigation Risk detection
     * @param string $RiskTreatment Risk handling
     * @param string $LogType Log type
     * @param string $LogSearch Statement retrieval
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Attacker",$param) and $param["Attacker"] !== null) {
            $this->Attacker = new RoleInfo();
            $this->Attacker->deserialize($param["Attacker"]);
        }

        if (array_key_exists("Victim",$param) and $param["Victim"] !== null) {
            $this->Victim = new RoleInfo();
            $this->Victim->deserialize($param["Victim"]);
        }

        if (array_key_exists("EvidenceData",$param) and $param["EvidenceData"] !== null) {
            $this->EvidenceData = $param["EvidenceData"];
        }

        if (array_key_exists("EvidenceLocation",$param) and $param["EvidenceLocation"] !== null) {
            $this->EvidenceLocation = $param["EvidenceLocation"];
        }

        if (array_key_exists("EvidencePath",$param) and $param["EvidencePath"] !== null) {
            $this->EvidencePath = $param["EvidencePath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("UrgentSuggestion",$param) and $param["UrgentSuggestion"] !== null) {
            $this->UrgentSuggestion = $param["UrgentSuggestion"];
        }

        if (array_key_exists("RemediationSuggestion",$param) and $param["RemediationSuggestion"] !== null) {
            $this->RemediationSuggestion = $param["RemediationSuggestion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new AlertExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RiskInvestigation",$param) and $param["RiskInvestigation"] !== null) {
            $this->RiskInvestigation = $param["RiskInvestigation"];
        }

        if (array_key_exists("RiskTreatment",$param) and $param["RiskTreatment"] !== null) {
            $this->RiskTreatment = $param["RiskTreatment"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogSearch",$param) and $param["LogSearch"] !== null) {
            $this->LogSearch = $param["LogSearch"];
        }
    }
}
