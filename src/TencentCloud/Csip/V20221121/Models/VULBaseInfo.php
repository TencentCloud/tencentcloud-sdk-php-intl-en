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
 * Emergency vulnerability basic data.
 *
 * @method string getLevel() Obtain Risk level.
High - high risk, middle - medium risk, low - low risk, info - Note.
 * @method void setLevel(string $Level) Set Risk level.
High - high risk, middle - medium risk, low - low risk, info - Note.
 * @method string getComponent() Obtain Component.
 * @method void setComponent(string $Component) Set Component.
 * @method string getPublishTime() Obtain Release date.
 * @method void setPublishTime(string $PublishTime) Set Release date.
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method integer getAffectAssetCount() Obtain Number of Affected Assets
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Number of Affected Assets
 * @method string getRiskId() Obtain Risk ID
 * @method void setRiskId(string $RiskId) Set Risk ID
 * @method string getVULType() Obtain Vulnerability type.
 * @method void setVULType(string $VULType) Set Vulnerability type.
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getCVE() Obtain cve
 * @method void setCVE(string $CVE) Set cve
 * @method string getDescribe() Obtain Description
 * @method void setDescribe(string $Describe) Set Description
 * @method string getPayload() Obtain Vulnerability Payload
 * @method void setPayload(string $Payload) Set Vulnerability Payload
 * @method string getAppName() Obtain Vulnerability impact component.
 * @method void setAppName(string $AppName) Set Vulnerability impact component.
 * @method string getReferences() Obtain Technology reference.
 * @method void setReferences(string $References) Set Technology reference.
 * @method string getAppVersion() Obtain Vulnerability impact version.
 * @method void setAppVersion(string $AppVersion) Set Vulnerability impact version.
 * @method string getVULURL() Obtain Risks.
 * @method void setVULURL(string $VULURL) Set Risks.
 * @method string getNick() Obtain User Nickname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNick(string $Nick) Set User Nickname
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain User appid.
 * @method void setAppId(string $AppId) Set User appid.
 * @method string getUin() Obtain User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFix() Obtain Fixing suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFix(string $Fix) Set Fixing suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEMGCVulType() Obtain Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCVSS() Obtain CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVSS(float $CVSS) Set CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackHeat() Obtain Attack intensity.
0/1/2/3 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackHeat(integer $AttackHeat) Set Attack intensity.
0/1/2/3 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanStatus() Obtain Detection status 0 unscanned 1 scan in progress 2 scan complete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanStatus(integer $ScanStatus) Set Detection status 0 unscanned 1 scan in progress 2 scan complete.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSuggest() Obtain 1/0 whether compulsory.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSuggest(integer $IsSuggest) Set 1/0 whether compulsory.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVulTag() Obtain Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulTag(array $VulTag) Set Tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSupportProduct() Obtain Support products: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix" (comma-separated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportProduct(string $SupportProduct) Set Support products: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix" (comma-separated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Vulnerability detection task id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Vulnerability detection task id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIndex() Obtain Primary key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndex(string $Index) Set Primary key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPcmgrID() Obtain Vulnerability id old version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPcmgrID(string $PcmgrID) Set Vulnerability id old version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTvdID() Obtain Vulnerability id new version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTvdID(string $TvdID) Set Vulnerability id new version.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VULBaseInfo extends AbstractModel
{
    /**
     * @var string Risk level.
High - high risk, middle - medium risk, low - low risk, info - Note.
     */
    public $Level;

    /**
     * @var string Component.
     */
    public $Component;

    /**
     * @var string Release date.
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
     * @var string Description
     */
    public $Describe;

    /**
     * @var string Vulnerability Payload
     */
    public $Payload;

    /**
     * @var string Vulnerability impact component.
     */
    public $AppName;

    /**
     * @var string Technology reference.
     */
    public $References;

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
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nick;

    /**
     * @var string User appid.
     */
    public $AppId;

    /**
     * @var string User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Fixing suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fix;

    /**
     * @var integer Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EMGCVulType;

    /**
     * @var float CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVSS;

    /**
     * @var integer Attack intensity.
0/1/2/3 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackHeat;

    /**
     * @var integer Detection status 0 unscanned 1 scan in progress 2 scan complete.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanStatus;

    /**
     * @var integer 1/0 whether compulsory.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSuggest;

    /**
     * @var array Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulTag;

    /**
     * @var string Support products: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix" (comma-separated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportProduct;

    /**
     * @var string Vulnerability detection task id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Primary key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Index;

    /**
     * @var string Vulnerability id old version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PcmgrID;

    /**
     * @var string Vulnerability id new version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TvdID;

    /**
     * @param string $Level Risk level.
High - high risk, middle - medium risk, low - low risk, info - Note.
     * @param string $Component Component.
     * @param string $PublishTime Release date.
     * @param string $LastScanTime Last scan time
     * @param integer $AffectAssetCount Number of Affected Assets
     * @param string $RiskId Risk ID
     * @param string $VULType Vulnerability type.
     * @param string $VULName Vulnerability name
     * @param string $CVE cve
     * @param string $Describe Description
     * @param string $Payload Vulnerability Payload
     * @param string $AppName Vulnerability impact component.
     * @param string $References Technology reference.
     * @param string $AppVersion Vulnerability impact version.
     * @param string $VULURL Risks.
     * @param string $Nick User Nickname
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppId User appid.
     * @param string $Uin User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Fix Fixing suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EMGCVulType Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CVSS CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackHeat Attack intensity.
0/1/2/3 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanStatus Detection status 0 unscanned 1 scan in progress 2 scan complete.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSuggest 1/0 whether compulsory.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VulTag Tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SupportProduct Support products: "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix" (comma-separated).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Vulnerability detection task id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Index Primary key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PcmgrID Vulnerability id old version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TvdID Vulnerability id new version.
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
