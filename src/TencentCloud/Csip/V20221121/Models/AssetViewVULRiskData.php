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
 * Vulnerability Risk Objects from Asset's Perspective
 *
 * @method string getAffectAsset() Obtain Impact assets.
 * @method void setAffectAsset(string $AffectAsset) Set Impact assets.
 * @method string getLevel() Obtain Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - serious.
 * @method void setLevel(string $Level) Set Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - serious.
 * @method string getInstanceType() Obtain Asset type.
 * @method void setInstanceType(string $InstanceType) Set Asset type.
 * @method string getComponent() Obtain Component.
 * @method void setComponent(string $Component) Set Component.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getStatus() Obtain Status, 0 unprocessed, 1 tagged, 2 ignored, 3 processed, 4 under disposal, 5 detecting, 6 partially processed.
 * @method void setStatus(integer $Status) Set Status, 0 unprocessed, 1 tagged, 2 ignored, 3 processed, 4 under disposal, 5 detecting, 6 partially processed.
 * @method string getRiskId() Obtain Risk ID
 * @method void setRiskId(string $RiskId) Set Risk ID
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getVULType() Obtain Vulnerability type.
 * @method void setVULType(string $VULType) Set Vulnerability type.
 * @method string getPort() Obtain Port.
 * @method void setPort(string $Port) Set Port.
 * @method string getAppName() Obtain Vulnerability impact component.
 * @method void setAppName(string $AppName) Set Vulnerability impact component.
 * @method string getAppVersion() Obtain Vulnerability impact version.
 * @method void setAppVersion(string $AppVersion) Set Vulnerability impact version.
 * @method string getVULURL() Obtain Risks.
 * @method void setVULURL(string $VULURL) Set Risks.
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getCVE() Obtain cve
 * @method void setCVE(string $CVE) Set cve
 * @method string getPOCId() Obtain pocid
 * @method void setPOCId(string $POCId) Set pocid
 * @method string getFrom() Obtain Scan Source
 * @method void setFrom(string $From) Set Scan Source
 * @method integer getCWPVersion() Obtain Host version.
 * @method void setCWPVersion(integer $CWPVersion) Set Host version.
 * @method string getInstanceUUID() Obtain Instance UUID
 * @method void setInstanceUUID(string $InstanceUUID) Set Instance UUID
 * @method string getPayload() Obtain Payload
 * @method void setPayload(string $Payload) Set Payload
 * @method integer getEMGCVulType() Obtain Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method float getCVSS() Obtain CVSS score
 * @method void setCVSS(float $CVSS) Set CVSS score
 * @method string getIndex() Obtain Frontend index id.
 * @method void setIndex(string $Index) Set Frontend index id.
 * @method string getPCMGRId() Obtain pcmgrId
 * @method void setPCMGRId(string $PCMGRId) Set pcmgrId
 * @method string getLogId() Obtain Report ID
 * @method void setLogId(string $LogId) Set Report ID
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method array getVulTag() Obtain Vulnerability Tag.
 * @method void setVulTag(array $VulTag) Set Vulnerability Tag.
 * @method string getDisclosureTime() Obtain Vulnerability disclosure time.
 * @method void setDisclosureTime(string $DisclosureTime) Set Vulnerability disclosure time.
 * @method integer getAttackHeat() Obtain Attack intensity.
 * @method void setAttackHeat(integer $AttackHeat) Set Attack intensity.
 * @method integer getIsSuggest() Obtain Whether the vulnerability is mandatory. 1 for yes, 0 for no.
 * @method void setIsSuggest(integer $IsSuggest) Set Whether the vulnerability is mandatory. 1 for yes, 0 for no.
 * @method string getHandleTaskId() Obtain Disposal task ID.
 * @method void setHandleTaskId(string $HandleTaskId) Set Disposal task ID.
 * @method string getEngineSource() Obtain Engine source.
 * @method void setEngineSource(string $EngineSource) Set Engine source.
 * @method string getVulRiskId() Obtain New vulnerability risk id (same as RiskId in the network-wide vulnerabilities table).
 * @method void setVulRiskId(string $VulRiskId) Set New vulnerability risk id (same as RiskId in the network-wide vulnerabilities table).
 * @method string getTvdID() Obtain New version vulnerability id.
 * @method void setTvdID(string $TvdID) Set New version vulnerability id.
 * @method integer getIsOneClick() Obtain Is it possible to perform a one-click physical examination, 1 - yes, 0 - not allowed.
 * @method void setIsOneClick(integer $IsOneClick) Set Is it possible to perform a one-click physical examination, 1 - yes, 0 - not allowed.
 * @method integer getIsPOC() Obtain Whether to perform a POC scan. valid values: 0 (not a POC), 1 (POC).
 * @method void setIsPOC(integer $IsPOC) Set Whether to perform a POC scan. valid values: 0 (not a POC), 1 (POC).
 */
class AssetViewVULRiskData extends AbstractModel
{
    /**
     * @var string Impact assets.
     */
    public $AffectAsset;

    /**
     * @var string Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - serious.
     */
    public $Level;

    /**
     * @var string Asset type.
     */
    public $InstanceType;

    /**
     * @var string Component.
     */
    public $Component;

    /**
     * @var string Latest Recognition Time
     */
    public $RecentTime;

    /**
     * @var string First Recognition Time
     */
    public $FirstTime;

    /**
     * @var integer Status, 0 unprocessed, 1 tagged, 2 ignored, 3 processed, 4 under disposal, 5 detecting, 6 partially processed.
     */
    public $Status;

    /**
     * @var string Risk ID
     */
    public $RiskId;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string User appid.
     */
    public $AppId;

    /**
     * @var string User Nickname
     */
    public $Nick;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Vulnerability type.
     */
    public $VULType;

    /**
     * @var string Port.
     */
    public $Port;

    /**
     * @var string Vulnerability impact component.
     */
    public $AppName;

    /**
     * @var string Vulnerability impact version.
     */
    public $AppVersion;

    /**
     * @var string Risks.
     */
    public $VULURL;

    /**
     * @var string Vulnerability name
     */
    public $VULName;

    /**
     * @var string cve
     */
    public $CVE;

    /**
     * @var string pocid
     */
    public $POCId;

    /**
     * @var string Scan Source
     */
    public $From;

    /**
     * @var integer Host version.
     */
    public $CWPVersion;

    /**
     * @var string Instance UUID
     */
    public $InstanceUUID;

    /**
     * @var string Payload
     */
    public $Payload;

    /**
     * @var integer Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     */
    public $EMGCVulType;

    /**
     * @var float CVSS score
     */
    public $CVSS;

    /**
     * @var string Frontend index id.
     */
    public $Index;

    /**
     * @var string pcmgrId
     */
    public $PCMGRId;

    /**
     * @var string Report ID
     */
    public $LogId;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var array Vulnerability Tag.
     */
    public $VulTag;

    /**
     * @var string Vulnerability disclosure time.
     */
    public $DisclosureTime;

    /**
     * @var integer Attack intensity.
     */
    public $AttackHeat;

    /**
     * @var integer Whether the vulnerability is mandatory. 1 for yes, 0 for no.
     */
    public $IsSuggest;

    /**
     * @var string Disposal task ID.
     */
    public $HandleTaskId;

    /**
     * @var string Engine source.
     */
    public $EngineSource;

    /**
     * @var string New vulnerability risk id (same as RiskId in the network-wide vulnerabilities table).
     */
    public $VulRiskId;

    /**
     * @var string New version vulnerability id.
     */
    public $TvdID;

    /**
     * @var integer Is it possible to perform a one-click physical examination, 1 - yes, 0 - not allowed.
     */
    public $IsOneClick;

    /**
     * @var integer Whether to perform a POC scan. valid values: 0 (not a POC), 1 (POC).
     */
    public $IsPOC;

    /**
     * @param string $AffectAsset Impact assets.
     * @param string $Level Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - serious.
     * @param string $InstanceType Asset type.
     * @param string $Component Component.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $Status Status, 0 unprocessed, 1 tagged, 2 ignored, 3 processed, 4 under disposal, 5 detecting, 6 partially processed.
     * @param string $RiskId Risk ID
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $AppId User appid.
     * @param string $Nick User Nickname
     * @param string $Uin User UIN
     * @param string $VULType Vulnerability type.
     * @param string $Port Port.
     * @param string $AppName Vulnerability impact component.
     * @param string $AppVersion Vulnerability impact version.
     * @param string $VULURL Risks.
     * @param string $VULName Vulnerability name
     * @param string $CVE cve
     * @param string $POCId pocid
     * @param string $From Scan Source
     * @param integer $CWPVersion Host version.
     * @param string $InstanceUUID Instance UUID
     * @param string $Payload Payload
     * @param integer $EMGCVulType Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     * @param float $CVSS CVSS score
     * @param string $Index Frontend index id.
     * @param string $PCMGRId pcmgrId
     * @param string $LogId Report ID
     * @param string $TaskId Task ID.
     * @param array $VulTag Vulnerability Tag.
     * @param string $DisclosureTime Vulnerability disclosure time.
     * @param integer $AttackHeat Attack intensity.
     * @param integer $IsSuggest Whether the vulnerability is mandatory. 1 for yes, 0 for no.
     * @param string $HandleTaskId Disposal task ID.
     * @param string $EngineSource Engine source.
     * @param string $VulRiskId New vulnerability risk id (same as RiskId in the network-wide vulnerabilities table).
     * @param string $TvdID New version vulnerability id.
     * @param integer $IsOneClick Is it possible to perform a one-click physical examination, 1 - yes, 0 - not allowed.
     * @param integer $IsPOC Whether to perform a POC scan. valid values: 0 (not a POC), 1 (POC).
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
        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("VULURL",$param) and $param["VULURL"] !== null) {
            $this->VULURL = $param["VULURL"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("POCId",$param) and $param["POCId"] !== null) {
            $this->POCId = $param["POCId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("CWPVersion",$param) and $param["CWPVersion"] !== null) {
            $this->CWPVersion = $param["CWPVersion"];
        }

        if (array_key_exists("InstanceUUID",$param) and $param["InstanceUUID"] !== null) {
            $this->InstanceUUID = $param["InstanceUUID"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("PCMGRId",$param) and $param["PCMGRId"] !== null) {
            $this->PCMGRId = $param["PCMGRId"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VulTag",$param) and $param["VulTag"] !== null) {
            $this->VulTag = $param["VulTag"];
        }

        if (array_key_exists("DisclosureTime",$param) and $param["DisclosureTime"] !== null) {
            $this->DisclosureTime = $param["DisclosureTime"];
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = $param["AttackHeat"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("HandleTaskId",$param) and $param["HandleTaskId"] !== null) {
            $this->HandleTaskId = $param["HandleTaskId"];
        }

        if (array_key_exists("EngineSource",$param) and $param["EngineSource"] !== null) {
            $this->EngineSource = $param["EngineSource"];
        }

        if (array_key_exists("VulRiskId",$param) and $param["VulRiskId"] !== null) {
            $this->VulRiskId = $param["VulRiskId"];
        }

        if (array_key_exists("TvdID",$param) and $param["TvdID"] !== null) {
            $this->TvdID = $param["TvdID"];
        }

        if (array_key_exists("IsOneClick",$param) and $param["IsOneClick"] !== null) {
            $this->IsOneClick = $param["IsOneClick"];
        }

        if (array_key_exists("IsPOC",$param) and $param["IsPOC"] !== null) {
            $this->IsPOC = $param["IsPOC"];
        }
    }
}
