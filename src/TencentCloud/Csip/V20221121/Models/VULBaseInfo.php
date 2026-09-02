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
 * Basic data of urgent vulnerabilities
 *
 * @method string getLevel() Obtain Risk level
high risk / Medium risk / low risk / Notification
 * @method void setLevel(string $Level) Set Risk level
high risk / Medium risk / low risk / Notification
 * @method string getComponent() Obtain Component
 * @method void setComponent(string $Component) Set Component
 * @method string getPublishTime() Obtain Vulnerability release time
 * @method void setPublishTime(string $PublishTime) Set Vulnerability release time
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getAffectAssetCount() Obtain Number of Affected Assets
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Number of Affected Assets
 * @method string getRiskId() Obtain Risk ID
 * @method void setRiskId(string $RiskId) Set Risk ID
 * @method string getVULType() Obtain Vulnerability type
 * @method void setVULType(string $VULType) Set Vulnerability type
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getCVE() Obtain cve
 * @method void setCVE(string $CVE) Set cve
 * @method string getDescribe() Obtain Description
 * @method void setDescribe(string $Describe) Set Description
 * @method string getPayload() Obtain Vulnerability Payload
 * @method void setPayload(string $Payload) Set Vulnerability Payload
 * @method string getAppName() Obtain Vulnerability Impact component
 * @method void setAppName(string $AppName) Set Vulnerability Impact component
 * @method string getReferences() Obtain Technical reference
 * @method void setReferences(string $References) Set Technical reference
 * @method string getAppVersion() Obtain Vulnerability Impact version
 * @method void setAppVersion(string $AppVersion) Set Vulnerability Impact version
 * @method string getVULURL() Obtain Risk point
 * @method void setVULURL(string $VULURL) Set Risk point
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getFix() Obtain Fixing suggestion
 * @method void setFix(string $Fix) Set Fixing suggestion
 * @method integer getEMGCVulType() Obtain Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
 * @method float getCVSS() Obtain CVSS score
 * @method void setCVSS(float $CVSS) Set CVSS score
 * @method integer getAttackHeat() Obtain Attack heat
0/1/2/3 
 * @method void setAttackHeat(integer $AttackHeat) Set Attack heat
0/1/2/3 
 * @method integer getScanStatus() Obtain Detection status. 0: unscanned; 1: scan in progress; 2: scan complete
 * @method void setScanStatus(integer $ScanStatus) Set Detection status. 0: unscanned; 1: scan in progress; 2: scan complete
 * @method integer getIsSuggest() Obtain Whether 1/0 is required
 * @method void setIsSuggest(integer $IsSuggest) Set Whether 1/0 is required
 * @method array getVulTag() Obtain Tag.
 * @method void setVulTag(array $VulTag) Set Tag.
 * @method string getSupportProduct() Obtain Supported products, separate with commas: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
 * @method void setSupportProduct(string $SupportProduct) Set Supported products, separate with commas: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
 * @method string getTaskId() Obtain Vulnerability detection task id
 * @method void setTaskId(string $TaskId) Set Vulnerability detection task id
 * @method string getIndex() Obtain Primary key
 * @method void setIndex(string $Index) Set Primary key
 * @method string getPcmgrID() Obtain Vulnerability id (legacy version)
 * @method void setPcmgrID(string $PcmgrID) Set Vulnerability id (legacy version)
 * @method string getTvdID() Obtain Vulnerability id New version
 * @method void setTvdID(string $TvdID) Set Vulnerability id New version
 */
class VULBaseInfo extends AbstractModel
{
    /**
     * @var string Risk level
high risk / Medium risk / low risk / Notification
     */
    public $Level;

    /**
     * @var string Component
     */
    public $Component;

    /**
     * @var string Vulnerability release time
     */
    public $PublishTime;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var integer Number of Affected Assets
     */
    public $AffectAssetCount;

    /**
     * @var string Risk ID
     */
    public $RiskId;

    /**
     * @var string Vulnerability type
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
     * @var string Description
     */
    public $Describe;

    /**
     * @var string Vulnerability Payload
     */
    public $Payload;

    /**
     * @var string Vulnerability Impact component
     */
    public $AppName;

    /**
     * @var string Technical reference
     */
    public $References;

    /**
     * @var string Vulnerability Impact version
     */
    public $AppVersion;

    /**
     * @var string Risk point
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
     * @var string Fixing suggestion
     */
    public $Fix;

    /**
     * @var integer Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     */
    public $EMGCVulType;

    /**
     * @var float CVSS score
     */
    public $CVSS;

    /**
     * @var integer Attack heat
0/1/2/3 
     */
    public $AttackHeat;

    /**
     * @var integer Detection status. 0: unscanned; 1: scan in progress; 2: scan complete
     */
    public $ScanStatus;

    /**
     * @var integer Whether 1/0 is required
     */
    public $IsSuggest;

    /**
     * @var array Tag.
     */
    public $VulTag;

    /**
     * @var string Supported products, separate with commas: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
     */
    public $SupportProduct;

    /**
     * @var string Vulnerability detection task id
     */
    public $TaskId;

    /**
     * @var string Primary key
     */
    public $Index;

    /**
     * @var string Vulnerability id (legacy version)
     */
    public $PcmgrID;

    /**
     * @var string Vulnerability id New version
     */
    public $TvdID;

    /**
     * @param string $Level Risk level
high risk / Medium risk / low risk / Notification
     * @param string $Component Component
     * @param string $PublishTime Vulnerability release time
     * @param string $LastScanTime Last scan time
     * @param integer $AffectAssetCount Number of Affected Assets
     * @param string $RiskId Risk ID
     * @param string $VULType Vulnerability type
     * @param string $VULName Vulnerability name
     * @param string $CVE cve
     * @param string $Describe Description
     * @param string $Payload Vulnerability Payload
     * @param string $AppName Vulnerability Impact component
     * @param string $References Technical reference
     * @param string $AppVersion Vulnerability Impact version
     * @param string $VULURL Risk point
     * @param string $Nick User Nickname
     * @param string $AppId User appid.
     * @param string $Uin User UIN
     * @param string $Fix Fixing suggestion
     * @param integer $EMGCVulType Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
     * @param float $CVSS CVSS score
     * @param integer $AttackHeat Attack heat
0/1/2/3 
     * @param integer $ScanStatus Detection status. 0: unscanned; 1: scan in progress; 2: scan complete
     * @param integer $IsSuggest Whether 1/0 is required
     * @param array $VulTag Tag.
     * @param string $SupportProduct Supported products, separate with commas: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
     * @param string $TaskId Vulnerability detection task id
     * @param string $Index Primary key
     * @param string $PcmgrID Vulnerability id (legacy version)
     * @param string $TvdID Vulnerability id New version
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
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

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
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

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = $param["AttackHeat"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("VulTag",$param) and $param["VulTag"] !== null) {
            $this->VulTag = $param["VulTag"];
        }

        if (array_key_exists("SupportProduct",$param) and $param["SupportProduct"] !== null) {
            $this->SupportProduct = $param["SupportProduct"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("PcmgrID",$param) and $param["PcmgrID"] !== null) {
            $this->PcmgrID = $param["PcmgrID"];
        }

        if (array_key_exists("TvdID",$param) and $param["TvdID"] !== null) {
            $this->TvdID = $param["TvdID"];
        }
    }
}
