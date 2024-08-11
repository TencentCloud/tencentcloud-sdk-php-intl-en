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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application details
 *
 * @method string getApplicationID() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationID(string $ApplicationID) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppIdentityID() Obtain Product ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppIdentityID(integer $AppIdentityID) Set Product ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain The application name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set The application name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationEnglishName() Obtain English name of the application (this field is not used yet)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationEnglishName(string $ApplicationEnglishName) Set English name of the application (this field is not used yet)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogo() Obtain Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogo(string $Logo) Set Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAndroidAppKey() Obtain Android package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAndroidAppKey(string $AndroidAppKey) Set Android package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIosAppKey() Obtain iOS bundleId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIosAppKey(string $IosAppKey) Set iOS bundleId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateUser() Obtain Updated by
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateUser(string $UpdateUser) Set Updated by
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBindMNPCount() Obtain Number of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindMNPCount(integer $BindMNPCount) Set Number of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBindMNPList() Obtain Information of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindMNPList(array $BindMNPList) Set Information of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIntro() Obtain Application description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntro(string $Intro) Set Application description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAndroidAppUrl() Obtain Android App download address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAndroidAppUrl(string $AndroidAppUrl) Set Android App download address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIosAppUrl() Obtain iOS App download address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIosAppUrl(string $IosAppUrl) Set iOS App download address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSensitiveApiCount() Obtain Quantity of sensitive APIs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSensitiveApiCount(integer $SensitiveApiCount) Set Quantity of sensitive APIs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApplicationType() Obtain Application type. 1: Test; 2: Formal
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationType(integer $ApplicationType) Set Application type. 1: Test; 2: Formal
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ApplicationDetail extends AbstractModel
{
    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationID;

    /**
     * @var integer Product ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppIdentityID;

    /**
     * @var string The application name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string English name of the application (this field is not used yet)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationEnglishName;

    /**
     * @var string Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Logo;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Android package name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AndroidAppKey;

    /**
     * @var string iOS bundleId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IosAppKey;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Updated by
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateUser;

    /**
     * @var string Update date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Number of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindMNPCount;

    /**
     * @var array Information of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindMNPList;

    /**
     * @var string Application description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Intro;

    /**
     * @var string Android App download address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AndroidAppUrl;

    /**
     * @var string iOS App download address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IosAppUrl;

    /**
     * @var string Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamId;

    /**
     * @var string Team name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @var integer Quantity of sensitive APIs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SensitiveApiCount;

    /**
     * @var integer Application type. 1: Test; 2: Formal
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationType;

    /**
     * @param string $ApplicationID Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppIdentityID Product ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName The application name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationEnglishName English name of the application (this field is not used yet)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Logo Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AndroidAppKey Android package name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IosAppKey iOS bundleId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateUser Updated by
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BindMNPCount Number of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BindMNPList Information of bound mini programs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Intro Application description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AndroidAppUrl Android App download address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IosAppUrl iOS App download address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SensitiveApiCount Quantity of sensitive APIs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ApplicationType Application type. 1: Test; 2: Formal
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
        if (array_key_exists("ApplicationID",$param) and $param["ApplicationID"] !== null) {
            $this->ApplicationID = $param["ApplicationID"];
        }

        if (array_key_exists("AppIdentityID",$param) and $param["AppIdentityID"] !== null) {
            $this->AppIdentityID = $param["AppIdentityID"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationEnglishName",$param) and $param["ApplicationEnglishName"] !== null) {
            $this->ApplicationEnglishName = $param["ApplicationEnglishName"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AndroidAppKey",$param) and $param["AndroidAppKey"] !== null) {
            $this->AndroidAppKey = $param["AndroidAppKey"];
        }

        if (array_key_exists("IosAppKey",$param) and $param["IosAppKey"] !== null) {
            $this->IosAppKey = $param["IosAppKey"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BindMNPCount",$param) and $param["BindMNPCount"] !== null) {
            $this->BindMNPCount = $param["BindMNPCount"];
        }

        if (array_key_exists("BindMNPList",$param) and $param["BindMNPList"] !== null) {
            $this->BindMNPList = [];
            foreach ($param["BindMNPList"] as $key => $value){
                $obj = new ApplicationMNPRelInfoResp();
                $obj->deserialize($value);
                array_push($this->BindMNPList, $obj);
            }
        }

        if (array_key_exists("Intro",$param) and $param["Intro"] !== null) {
            $this->Intro = $param["Intro"];
        }

        if (array_key_exists("AndroidAppUrl",$param) and $param["AndroidAppUrl"] !== null) {
            $this->AndroidAppUrl = $param["AndroidAppUrl"];
        }

        if (array_key_exists("IosAppUrl",$param) and $param["IosAppUrl"] !== null) {
            $this->IosAppUrl = $param["IosAppUrl"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("SensitiveApiCount",$param) and $param["SensitiveApiCount"] !== null) {
            $this->SensitiveApiCount = $param["SensitiveApiCount"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }
    }
}
