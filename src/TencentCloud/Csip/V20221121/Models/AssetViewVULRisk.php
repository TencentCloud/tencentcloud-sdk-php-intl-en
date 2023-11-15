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
 * @method string getAffectAsset() Obtain Affected assets
 * @method void setAffectAsset(string $AffectAsset) Set Affected assets
 * @method string getLevel() Obtain Risk level
 * @method void setLevel(string $Level) Set Risk level
 * @method string getInstanceType() Obtain Asset type
 * @method void setInstanceType(string $InstanceType) Set Asset type
 * @method string getComponent() Obtain Components
 * @method void setComponent(string $Component) Set Components
 * @method string getService() Obtain Service
 * @method void setService(string $Service) Set Service
 * @method string getRecentTime() Obtain Last detected 
 * @method void setRecentTime(string $RecentTime) Set Last detected 
 * @method string getFirstTime() Obtain First detected
 * @method void setFirstTime(string $FirstTime) Set First detected
 * @method integer getStatus() Obtain Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method void setStatus(integer $Status) Set Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
 * @method string getId() Obtain Unique ID of the asset
 * @method void setId(string $Id) Set Unique ID of the asset
 * @method string getIndex() Obtain Frontend index
 * @method void setIndex(string $Index) Set Frontend index
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getAppId() Obtain User `appid`
 * @method void setAppId(string $AppId) Set User `appid`
 * @method string getNick() Obtain User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNick(string $Nick) Set User name.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVULType() Obtain Vulnerability type
 * @method void setVULType(string $VULType) Set Vulnerability type
 * @method string getPort() Obtain Port
 * @method void setPort(string $Port) Set Port
 * @method string getDescribe() Obtain Description
 * @method void setDescribe(string $Describe) Set Description
 * @method string getAppName() Obtain Components affected by the vulnerability 
 * @method void setAppName(string $AppName) Set Components affected by the vulnerability 
 * @method string getReferences() Obtain Reference information about the vulnerability
 * @method void setReferences(string $References) Set Reference information about the vulnerability
 * @method string getAppVersion() Obtain Version
 * @method void setAppVersion(string $AppVersion) Set Version
 * @method string getVULURL() Obtain Vulnerability URL
 * @method void setVULURL(string $VULURL) Set Vulnerability URL
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getCVE() Obtain CVE number
 * @method void setCVE(string $CVE) Set CVE number
 * @method string getFix() Obtain Fix suggestion
 * @method void setFix(string $Fix) Set Fix suggestion
 * @method string getPOCId() Obtain POC ID
 * @method void setPOCId(string $POCId) Set POC ID
 * @method string getFrom() Obtain Source of the task
 * @method void setFrom(string $From) Set Source of the task
 * @method integer getCWPVersion() Obtain CWPP edition
 * @method void setCWPVersion(integer $CWPVersion) Set CWPP edition
 * @method boolean getIsSupportRepair() Obtain Whether it can be fixed 
 * @method void setIsSupportRepair(boolean $IsSupportRepair) Set Whether it can be fixed 
 * @method boolean getIsSupportDetect() Obtain Whether it can be detected
 * @method void setIsSupportDetect(boolean $IsSupportDetect) Set Whether it can be detected
 * @method string getInstanceUUID() Obtain Instance UUID
 * @method void setInstanceUUID(string $InstanceUUID) Set Instance UUID
 * @method string getPayload() Obtain Pay load
 * @method void setPayload(string $Payload) Set Pay load
 * @method integer getEMGCVulType() Obtain Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setEMGCVulType(integer $EMGCVulType) Set Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class AssetViewVULRisk extends AbstractModel
{
    /**
     * @var string Affected assets
     */
    public $AffectAsset;

    /**
     * @var string Risk level
     */
    public $Level;

    /**
     * @var string Asset type
     */
    public $InstanceType;

    /**
     * @var string Components
     */
    public $Component;

    /**
     * @var string Service
     */
    public $Service;

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
    public $Status;

    /**
     * @var string Unique ID of the asset
     */
    public $Id;

    /**
     * @var string Frontend index
     */
    public $Index;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string User `appid`
     */
    public $AppId;

    /**
     * @var string User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Nick;

    /**
     * @var string User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Vulnerability type
     */
    public $VULType;

    /**
     * @var string Port
     */
    public $Port;

    /**
     * @var string Description
     */
    public $Describe;

    /**
     * @var string Components affected by the vulnerability 
     */
    public $AppName;

    /**
     * @var string Reference information about the vulnerability
     */
    public $References;

    /**
     * @var string Version
     */
    public $AppVersion;

    /**
     * @var string Vulnerability URL
     */
    public $VULURL;

    /**
     * @var string Vulnerability name
     */
    public $VULName;

    /**
     * @var string CVE number
     */
    public $CVE;

    /**
     * @var string Fix suggestion
     */
    public $Fix;

    /**
     * @var string POC ID
     */
    public $POCId;

    /**
     * @var string Source of the task
     */
    public $From;

    /**
     * @var integer CWPP edition
     */
    public $CWPVersion;

    /**
     * @var boolean Whether it can be fixed 
     */
    public $IsSupportRepair;

    /**
     * @var boolean Whether it can be detected
     */
    public $IsSupportDetect;

    /**
     * @var string Instance UUID
     */
    public $InstanceUUID;

    /**
     * @var string Pay load
     */
    public $Payload;

    /**
     * @var integer Whether it's an emergency vulnerability. Values: `1` (emergency vulnerability); `0` (non-emergency vulnerability
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $EMGCVulType;

    /**
     * @param string $AffectAsset Affected assets
     * @param string $Level Risk level
     * @param string $InstanceType Asset type
     * @param string $Component Components
     * @param string $Service Service
     * @param string $RecentTime Last detected 
     * @param string $FirstTime First detected
     * @param integer $Status Status of the risk. `0`: Not handled, `1`: Handled; `2`: Ignored
     * @param string $Id Unique ID of the asset
     * @param string $Index Frontend index
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $AppId User `appid`
     * @param string $Nick User name.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Uin User `uin`
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $VULType Vulnerability type
     * @param string $Port Port
     * @param string $Describe Description
     * @param string $AppName Components affected by the vulnerability 
     * @param string $References Reference information about the vulnerability
     * @param string $AppVersion Version
     * @param string $VULURL Vulnerability URL
     * @param string $VULName Vulnerability name
     * @param string $CVE CVE number
     * @param string $Fix Fix suggestion
     * @param string $POCId POC ID
     * @param string $From Source of the task
     * @param integer $CWPVersion CWPP edition
     * @param boolean $IsSupportRepair Whether it can be fixed 
     * @param boolean $IsSupportDetect Whether it can be detected
     * @param string $InstanceUUID Instance UUID
     * @param string $Payload Pay load
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

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
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

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
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

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
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

        if (array_key_exists("IsSupportRepair",$param) and $param["IsSupportRepair"] !== null) {
            $this->IsSupportRepair = $param["IsSupportRepair"];
        }

        if (array_key_exists("IsSupportDetect",$param) and $param["IsSupportDetect"] !== null) {
            $this->IsSupportDetect = $param["IsSupportDetect"];
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
    }
}
