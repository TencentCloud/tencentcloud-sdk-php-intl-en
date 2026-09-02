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
 * @method integer getNoHandleCount() Obtain Affect assets
 * @method void setNoHandleCount(integer $NoHandleCount) Set Affect assets
 * @method string getLevel() Obtain Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
 * @method void setLevel(string $Level) Set Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
 * @method string getComponent() Obtain Component
 * @method void setComponent(string $Component) Set Component
 * @method string getRecentTime() Obtain Latest Recognition Time
 * @method void setRecentTime(string $RecentTime) Set Latest Recognition Time
 * @method string getFirstTime() Obtain First Recognition Time
 * @method void setFirstTime(string $FirstTime) Set First Recognition Time
 * @method integer getAffectAssetCount() Obtain Number of Affected Assets
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Number of Affected Assets
 * @method string getId() Obtain Risk ID
 * @method void setId(string $Id) Set Risk ID
 * @method string getFrom() Obtain Scan Source. See API Return Enumeration Type for details.
 * @method void setFrom(string $From) Set Scan Source. See API Return Enumeration Type for details.
 * @method string getIndex() Obtain Front-end Index
 * @method void setIndex(string $Index) Set Front-end Index
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
 * @method string getAppName() Obtain Vulnerability Impact Component
 * @method void setAppName(string $AppName) Set Vulnerability Impact Component
 * @method string getReferences() Obtain Technical reference
 * @method void setReferences(string $References) Set Technical reference
 * @method string getAppVersion() Obtain Affected versions
 * @method void setAppVersion(string $AppVersion) Set Affected versions
 * @method string getVULURL() Obtain Risk Points
 * @method void setVULURL(string $VULURL) Set Risk Points
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
 */
class VULViewVULRisk extends AbstractModel
{
    /**
     * @var string Port.
     */
    public $Port;

    /**
     * @var integer Affect assets
     */
    public $NoHandleCount;

    /**
     * @var string Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
     */
    public $Level;

    /**
     * @var string Component
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
    public $Id;

    /**
     * @var string Scan Source. See API Return Enumeration Type for details.
     */
    public $From;

    /**
     * @var string Front-end Index
     */
    public $Index;

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
     * @var string Vulnerability Impact Component
     */
    public $AppName;

    /**
     * @var string Technical reference
     */
    public $References;

    /**
     * @var string Affected versions
     */
    public $AppVersion;

    /**
     * @var string Risk Points
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
     * @param string $Port Port.
     * @param integer $NoHandleCount Affect assets
     * @param string $Level Risk level. low: low risk, high: high risk, middle: medium risk, info: notification, extreme: critical.
     * @param string $Component Component
     * @param string $RecentTime Latest Recognition Time
     * @param string $FirstTime First Recognition Time
     * @param integer $AffectAssetCount Number of Affected Assets
     * @param string $Id Risk ID
     * @param string $From Scan Source. See API Return Enumeration Type for details.
     * @param string $Index Front-end Index
     * @param string $VULType Vulnerability type
     * @param string $VULName Vulnerability name
     * @param string $CVE cve
     * @param string $Describe Description
     * @param string $Payload Vulnerability Payload
     * @param string $AppName Vulnerability Impact Component
     * @param string $References Technical reference
     * @param string $AppVersion Affected versions
     * @param string $VULURL Risk Points
     * @param string $Nick User Nickname
     * @param string $AppId User appid.
     * @param string $Uin User UIN
     * @param string $Fix Fixing suggestion
     * @param integer $EMGCVulType Emergency Vulnerability Type. 1-Emergency Vulnerability; 0-Non-emergency Vulnerability.
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
    }
}
