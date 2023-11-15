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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a vulnerability
 *
 * @method string getPort() Obtain Port
 * @method void setPort(string $Port) Set Port
 * @method integer getNoHandleCount() Obtain Affected assets
 * @method void setNoHandleCount(integer $NoHandleCount) Set Affected assets
 * @method string getLevel() Obtain Risk level
 * @method void setLevel(string $Level) Set Risk level
 * @method string getComponent() Obtain Components
 * @method void setComponent(string $Component) Set Components
 * @method string getRecentTime() Obtain Last detected 
 * @method void setRecentTime(string $RecentTime) Set Last detected 
 * @method string getFirstTime() Obtain First detected
 * @method void setFirstTime(string $FirstTime) Set First detected
 * @method integer getAffectAssetCount() Obtain Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method string getId() Obtain Unique ID of the asset
 * @method void setId(string $Id) Set Unique ID of the asset
 * @method string getFrom() Obtain Asset sub-category
 * @method void setFrom(string $From) Set Asset sub-category
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
 * @method string getPayload() Obtain Pay load
 * @method void setPayload(string $Payload) Set Pay load
 * @method string getAppName() Obtain Affected components
 * @method void setAppName(string $AppName) Set Affected components
 * @method string getReferences() Obtain Reference information of the vulnerability
 * @method void setReferences(string $References) Set Reference information of the vulnerability
 * @method string getAppVersion() Obtain Affected version
 * @method void setAppVersion(string $AppVersion) Set Affected version
 * @method string getVULURL() Obtain Vulnerability URL
 * @method void setVULURL(string $VULURL) Set Vulnerability URL
 * @method string getNick() Obtain User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNick(string $Nick) Set User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain User `appid`
 * @method void setAppId(string $AppId) Set User `appid`
 * @method string getUin() Obtain User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getFix() Obtain Fix suggestion
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setFix(string $Fix) Set Fix suggestion
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getEMGCVulType() Obtain Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
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
     * @var string Risk level
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
     * @var integer Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
     */
    public $AffectAssetCount;

    /**
     * @var string Unique ID of the asset
     */
    public $Id;

    /**
     * @var string Asset sub-category
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
     * @var string Pay load
     */
    public $Payload;

    /**
     * @var string Affected components
     */
    public $AppName;

    /**
     * @var string Reference information of the vulnerability
     */
    public $References;

    /**
     * @var string Affected version
     */
    public $AppVersion;

    /**
     * @var string Vulnerability URL
     */
    public $VULURL;

    /**
     * @var string User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Nick;

    /**
     * @var string User `appid`
     */
    public $AppId;

    /**
     * @var string User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Fix suggestion
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Fix;

    /**
     * @var integer Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $EMGCVulType;

    /**
     * @param string $Port Port
     * @param integer $NoHandleCount Affected assets
     * @param string $Level Risk level
     * @param string $Component Components
     * @param string $RecentTime Last detected 
     * @param string $FirstTime First detected
     * @param integer $AffectAssetCount Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
     * @param string $Id Unique ID of the asset
     * @param string $From Asset sub-category
     * @param string $Index Frontend index
     * @param string $VULType Vulnerability type
     * @param string $VULName Vulnerability name
     * @param string $CVE CVE number
     * @param string $Describe Description
     * @param string $Payload Pay load
     * @param string $AppName Affected components
     * @param string $References Reference information of the vulnerability
     * @param string $AppVersion Affected version
     * @param string $VULURL Vulnerability URL
     * @param string $Nick User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $AppId User `appid`
     * @param string $Uin User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Fix Fix suggestion
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $EMGCVulType Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
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
