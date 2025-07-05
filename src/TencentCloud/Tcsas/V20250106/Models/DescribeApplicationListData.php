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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application information
 *
 * @method string getApplicationId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppIdentityId() Obtain App ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppIdentityId(integer $AppIdentityId) Set App ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogo() Obtain Icon
 * @method void setLogo(string $Logo) Set Icon
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getAndroidAppKey() Obtain Android app package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAndroidAppKey(string $AndroidAppKey) Set Android app package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIosAppKey() Obtain iOS App bundleId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIosAppKey(string $IosAppKey) Set iOS App bundleId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateUser() Obtain Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateUser(string $UpdateUser) Set Updater
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIntro() Obtain Introduction
 * @method void setIntro(string $Intro) Set Introduction
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSensitiveApiCount() Obtain Number of sensitive APIs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSensitiveApiCount(integer $SensitiveApiCount) Set Number of sensitive APIs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApplicationType() Obtain Application type. 1: Test; 2: Formal
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationType(integer $ApplicationType) Set Application type. 1: Test; 2: Formal
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeApplicationListData extends AbstractModel
{
    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var integer App ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppIdentityId;

    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Icon
     */
    public $Logo;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Android app package name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AndroidAppKey;

    /**
     * @var string iOS App bundleId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IosAppKey;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Updater
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateUser;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Introduction
     */
    public $Intro;

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
     * @var integer Number of sensitive APIs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SensitiveApiCount;

    /**
     * @var integer Application type. 1: Test; 2: Formal
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationType;

    /**
     * @param string $ApplicationId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppIdentityId App ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Logo Icon
     * @param string $Remark Remarks
     * @param string $AndroidAppKey Android app package name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IosAppKey iOS App bundleId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateUser Updater
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Intro Introduction
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SensitiveApiCount Number of sensitive APIs
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AppIdentityId",$param) and $param["AppIdentityId"] !== null) {
            $this->AppIdentityId = $param["AppIdentityId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
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

        if (array_key_exists("Intro",$param) and $param["Intro"] !== null) {
            $this->Intro = $param["Intro"];
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
