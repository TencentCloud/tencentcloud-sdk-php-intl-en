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
 * Vulnerability Risk Objects from Vulnerability's Perspective
 *
 * @method string getPort() Obtain Port.
 * @method void setPort(string $Port) Set Port.
 * @method integer getNoHandleCount() Obtain Impact assets.
 * @method void setNoHandleCount(integer $NoHandleCount) Set Impact assets.
 * @method string getLevel() Obtain Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - critical.
 * @method void setLevel(string $Level) Set Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - critical.
 * @method string getComponent() Obtain Component.
 * @method void setComponent(string $Component) Set Component.
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getAffectAssetCount() Obtain Number of Affected Assets
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Number of Affected Assets
 * @method string getRiskId() Obtain Risk ID
 * @method void setRiskId(string $RiskId) Set Risk ID
 * @method string getFrom() Obtain Scan Source. See API Return Enumeration Type for details.
 * @method void setFrom(string $From) Set Scan Source. See API Return Enumeration Type for details.
 * @method string getIndex() Obtain Front-end Index
 * @method void setIndex(string $Index) Set Front-end Index
 * @method string getVULType() Obtain Vulnerability type.
 * @method void setVULType(string $VULType) Set Vulnerability type.
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getCVE() Obtain cve
 * @method void setCVE(string $CVE) Set cve
 * @method string getPayload() Obtain Vulnerability Payload
 * @method void setPayload(string $Payload) Set Vulnerability Payload
 * @method string getAppName() Obtain Vulnerability impact component.
 * @method void setAppName(string $AppName) Set Vulnerability impact component.
 * @method string getAppVersion() Obtain Vulnerability impact version.
 * @method void setAppVersion(string $AppVersion) Set Vulnerability impact version.
 * @method string getVULURL() Obtain Risks.
 * @method void setVULURL(string $VULURL) Set Risks.
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method integer getEMGCVulType() Obtain Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method float getCVSS() Obtain CVSS score
 * @method void setCVSS(float $CVSS) Set CVSS score
 * @method string getPCMGRId() Obtain PCMGRId
 * @method void setPCMGRId(string $PCMGRId) Set PCMGRId
 * @method array getVulTag() Obtain Vulnerability tag. during searching, emergency mandatory parameter VulTag=SuggestRepair/EMGCVul.
 * @method void setVulTag(array $VulTag) Set Vulnerability tag. during searching, emergency mandatory parameter VulTag=SuggestRepair/EMGCVul.
 * @method string getDisclosureTime() Obtain Vulnerability disclosure time.
 * @method void setDisclosureTime(string $DisclosureTime) Set Vulnerability disclosure time.
 * @method integer getAttackHeat() Obtain Attack intensity.
 * @method void setAttackHeat(integer $AttackHeat) Set Attack intensity.
 * @method integer getIsSuggest() Obtain Whether a mandatory vulnerability: 1 - yes; 0 - no.
 * @method void setIsSuggest(integer $IsSuggest) Set Whether a mandatory vulnerability: 1 - yes; 0 - no.
 * @method string getHandleTaskId() Obtain Disposal task id.
 * @method void setHandleTaskId(string $HandleTaskId) Set Disposal task id.
 * @method string getEngineSource() Obtain Engine source.
 * @method void setEngineSource(string $EngineSource) Set Engine source.
 * @method string getVulRiskId() Obtain New vulnerability risk id.
 * @method void setVulRiskId(string $VulRiskId) Set New vulnerability risk id.
 * @method string getTvdID() Obtain New version vulnerability id.
 * @method void setTvdID(string $TvdID) Set New version vulnerability id.
 * @method integer getIsOneClick() Obtain Is it possible to perform a one-click physical examination. valid values: 1-yes, 0-not allowed.
 * @method void setIsOneClick(integer $IsOneClick) Set Is it possible to perform a one-click physical examination. valid values: 1-yes, 0-not allowed.
 */
class VULViewVULRiskData extends AbstractModel
{
    /**
     * @var string Port.
     */
    public $Port;

    /**
     * @var integer Impact assets.
     */
    public $NoHandleCount;

    /**
     * @var string Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - critical.
     */
    public $Level;

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
     * @var integer Number of Affected Assets
     */
    public $AffectAssetCount;

    /**
     * @var string Risk ID
     */
    public $RiskId;

    /**
     * @var string Scan Source. See API Return Enumeration Type for details.
     */
    public $From;

    /**
     * @var string Front-end Index
     */
    public $Index;

    /**
     * @var string Vulnerability type.
     */
    public $VULType;

    /**
     * @var string Vulnerability name
     */
    public $VULName;

    /**
     * @var string cve
     */
    public $CVE;

    /**
     * @var string Vulnerability Payload
     */
    public $Payload;

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
     * @var string User Nickname
     */
    public $Nick;

    /**
     * @var string User appid.
     */
    public $AppId;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var integer Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     */
    public $EMGCVulType;

    /**
     * @var float CVSS score
     */
    public $CVSS;

    /**
     * @var string PCMGRId
     */
    public $PCMGRId;

    /**
     * @var array Vulnerability tag. during searching, emergency mandatory parameter VulTag=SuggestRepair/EMGCVul.
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
     * @var integer Whether a mandatory vulnerability: 1 - yes; 0 - no.
     */
    public $IsSuggest;

    /**
     * @var string Disposal task id.
     */
    public $HandleTaskId;

    /**
     * @var string Engine source.
     */
    public $EngineSource;

    /**
     * @var string New vulnerability risk id.
     */
    public $VulRiskId;

    /**
     * @var string New version vulnerability id.
     */
    public $TvdID;

    /**
     * @var integer Is it possible to perform a one-click physical examination. valid values: 1-yes, 0-not allowed.
     */
    public $IsOneClick;

    /**
     * @param string $Port Port.
     * @param integer $NoHandleCount Impact assets.
     * @param string $Level Risk level: low - low risk, high - high risk, middle - medium risk, info - note, extreme - critical.
     * @param string $Component Component.
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $AffectAssetCount Number of Affected Assets
     * @param string $RiskId Risk ID
     * @param string $From Scan Source. See API Return Enumeration Type for details.
     * @param string $Index Front-end Index
     * @param string $VULType Vulnerability type.
     * @param string $VULName Vulnerability name
     * @param string $CVE cve
     * @param string $Payload Vulnerability Payload
     * @param string $AppName Vulnerability impact component.
     * @param string $AppVersion Vulnerability impact version.
     * @param string $VULURL Risks.
     * @param string $Nick User Nickname
     * @param string $AppId User appid.
     * @param string $Uin User UIN
     * @param integer $EMGCVulType Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     * @param float $CVSS CVSS score
     * @param string $PCMGRId PCMGRId
     * @param array $VulTag Vulnerability tag. during searching, emergency mandatory parameter VulTag=SuggestRepair/EMGCVul.
     * @param string $DisclosureTime Vulnerability disclosure time.
     * @param integer $AttackHeat Attack intensity.
     * @param integer $IsSuggest Whether a mandatory vulnerability: 1 - yes; 0 - no.
     * @param string $HandleTaskId Disposal task id.
     * @param string $EngineSource Engine source.
     * @param string $VulRiskId New vulnerability risk id.
     * @param string $TvdID New version vulnerability id.
     * @param integer $IsOneClick Is it possible to perform a one-click physical examination. valid values: 1-yes, 0-not allowed.
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("NoHandleCount",$param) and $param["NoHandleCount"] !== null) {
            $this->NoHandleCount = $param["NoHandleCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
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

        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
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

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("PCMGRId",$param) and $param["PCMGRId"] !== null) {
            $this->PCMGRId = $param["PCMGRId"];
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
    }
}
