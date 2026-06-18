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
 * Details of a vulnerability
 *
 * @method string getPort() Obtain Port
 * @method void setPort(string $Port) Set Port
 * @method integer getNoHandleCount() Obtain Affected assets
 * @method void setNoHandleCount(integer $NoHandleCount) Set Affected assets
 * @method string getLevel() Obtain Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
 * @method void setLevel(string $Level) Set Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
 * @method string getComponent() Obtain Components
 * @method void setComponent(string $Component) Set Components
 * @method string getRecentTime() Obtain Last detected 
 * @method void setRecentTime(string $RecentTime) Set Last detected 
 * @method string getFirstTime() Obtain First detected
 * @method void setFirstTime(string $FirstTime) Set First detected
 * @method integer getAffectAssetCount() Obtain Number of Affected Assets
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Number of Affected Assets
 * @method string getId() Obtain Risk ID
 * @method void setId(string $Id) Set Risk ID
 * @method string getFrom() Obtain Scan Source. See API Return Enumeration Type for details.
 * @method void setFrom(string $From) Set Scan Source. See API Return Enumeration Type for details.
 * @method string getIndex() Obtain Frontend index
 * @method void setIndex(string $Index) Set Frontend index
 * @method string getVULType() Obtain Vulnerability type
 * @method void setVULType(string $VULType) Set Vulnerability type
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getCVE() Obtain CVE number
 * @method void setCVE(string $CVE) Set CVE number
 * @method string getDescribe() Obtain Description
 * @method void setDescribe(string $Describe) Set Description
 * @method string getPayload() Obtain Vulnerability Payload
 * @method void setPayload(string $Payload) Set Vulnerability Payload
 * @method string getAppName() Obtain Affected component
 * @method void setAppName(string $AppName) Set Affected component
 * @method string getReferences() Obtain Technology reference
 * @method void setReferences(string $References) Set Technology reference
 * @method string getAppVersion() Obtain Vulnerability Affected Version
 * @method void setAppVersion(string $AppVersion) Set Vulnerability Affected Version
 * @method string getVULURL() Obtain risks
 * @method void setVULURL(string $VULURL) Set risks
 * @method string getNick() Obtain User Nickname
 * @method void setNick(string $Nick) Set User Nickname
 * @method string getAppId() Obtain User `appid`
 * @method void setAppId(string $AppId) Set User `appid`
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
     * @var string Port
     */
    public $Port;

    /**
     * @var integer Affected assets
     */
    public $NoHandleCount;

    /**
     * @var string Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
     */
    public $Level;

    /**
     * @var string Components
     */
    public $Component;

    /**
     * @var string Last detected 
     */
    public $RecentTime;

    /**
     * @var string First detected
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
     * @var string Frontend index
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
     * @var string CVE number
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
     * @var string Affected component
     */
    public $AppName;

    /**
     * @var string Technology reference
     */
    public $References;

    /**
     * @var string Vulnerability Affected Version
     */
    public $AppVersion;

    /**
     * @var string risks
     */
    public $VULURL;

    /**
     * @var string User Nickname
     */
    public $Nick;

    /**
     * @var string User `appid`
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
     * @param string $Port Port
     * @param integer $NoHandleCount Affected assets
     * @param string $Level Risk level, low - low risk, high - high risk, middle - medium risk, info - notification, extreme - critical.
     * @param string $Component Components
     * @param string $RecentTime Last detected 
     * @param string $FirstTime First detected
     * @param integer $AffectAssetCount Number of Affected Assets
     * @param string $Id Risk ID
     * @param string $From Scan Source. See API Return Enumeration Type for details.
     * @param string $Index Frontend index
     * @param string $VULType Vulnerability type
     * @param string $VULName Vulnerability name
     * @param string $CVE CVE number
     * @param string $Describe Description
     * @param string $Payload Vulnerability Payload
     * @param string $AppName Affected component
     * @param string $References Technology reference
     * @param string $AppVersion Vulnerability Affected Version
     * @param string $VULURL risks
     * @param string $Nick User Nickname
     * @param string $AppId User `appid`
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
