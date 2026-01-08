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
 * Application details
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method integer getAppIdentityId() Obtain Product ID.
 * @method void setAppIdentityId(integer $AppIdentityId) Set Product ID.
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getLogo() Obtain Specifies the application icon.
 * @method void setLogo(string $Logo) Set Specifies the application icon.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getAndroidAppKey() Obtain Android package name
 * @method void setAndroidAppKey(string $AndroidAppKey) Set Android package name
 * @method string getIosAppKey() Obtain iOS bundleId
 * @method void setIosAppKey(string $IosAppKey) Set iOS bundleId
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateUser() Obtain Specifies the updater.
 * @method void setUpdateUser(string $UpdateUser) Set Specifies the updater.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getIntro() Obtain Describes the application description.
 * @method void setIntro(string $Intro) Set Describes the application description.
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method integer getSensitiveApiCount() Obtain Number of sensitive apis.
 * @method void setSensitiveApiCount(integer $SensitiveApiCount) Set Number of sensitive apis.
 * @method integer getApplicationType() Obtain Application type. 1: Test; 2: Formal
 * @method void setApplicationType(integer $ApplicationType) Set Application type. 1: Test; 2: Formal
 * @method string getScheme() Obtain Specifies the application Scheme.
 * @method void setScheme(string $Scheme) Set Specifies the application Scheme.
 */
class DescribeApplicationResp extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var integer Product ID.
     */
    public $AppIdentityId;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Specifies the application icon.
     */
    public $Logo;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Android package name
     */
    public $AndroidAppKey;

    /**
     * @var string iOS bundleId
     */
    public $IosAppKey;

    /**
     * @var string Creator
     */
    public $CreateUser;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Specifies the updater.
     */
    public $UpdateUser;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Describes the application description.
     */
    public $Intro;

    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var integer Number of sensitive apis.
     */
    public $SensitiveApiCount;

    /**
     * @var integer Application type. 1: Test; 2: Formal
     */
    public $ApplicationType;

    /**
     * @var string Specifies the application Scheme.
     */
    public $Scheme;

    /**
     * @param string $ApplicationId Application ID
     * @param integer $AppIdentityId Product ID.
     * @param string $ApplicationName Application name
     * @param string $Logo Specifies the application icon.
     * @param string $Remark Remarks
     * @param string $AndroidAppKey Android package name
     * @param string $IosAppKey iOS bundleId
     * @param string $CreateUser Creator
     * @param string $CreateTime Creation time
     * @param string $UpdateUser Specifies the updater.
     * @param string $UpdateTime Update time
     * @param string $Intro Describes the application description.
     * @param string $TeamId Team ID
     * @param string $TeamName Team name
     * @param integer $SensitiveApiCount Number of sensitive apis.
     * @param integer $ApplicationType Application type. 1: Test; 2: Formal
     * @param string $Scheme Specifies the application Scheme.
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

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }
    }
}
