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
 * Superapp information.
 *
 * @method string getApplicationId() Obtain Superapp ID.
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID.
 * @method integer getAppIdentityId() Obtain Superapp identity ID.
 * @method void setAppIdentityId(integer $AppIdentityId) Set Superapp identity ID.
 * @method string getApplicationName() Obtain Superapp name.
 * @method void setApplicationName(string $ApplicationName) Set Superapp name.
 * @method string getLogo() Obtain Superapp icon.
 * @method void setLogo(string $Logo) Set Superapp icon.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getAndroidAppKey() Obtain Android superapp package name. 
 * @method void setAndroidAppKey(string $AndroidAppKey) Set Android superapp package name. 
 * @method string getIosAppKey() Obtain iOS superapp bundle ID. 
 * @method void setIosAppKey(string $IosAppKey) Set iOS superapp bundle ID. 
 * @method string getCreateUser() Obtain Creator.
 * @method void setCreateUser(string $CreateUser) Set Creator.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateUser() Obtain Last modifier.
 * @method void setUpdateUser(string $UpdateUser) Set Last modifier.
 * @method string getUpdateTime() Obtain Last modified time. 
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time. 
 * @method string getIntro() Obtain Superapp introduction.
 * @method void setIntro(string $Intro) Set Superapp introduction.
 * @method string getTeamId() Obtain Team ID.
 * @method void setTeamId(string $TeamId) Set Team ID.
 * @method string getTeamName() Obtain Team name.
 * @method void setTeamName(string $TeamName) Set Team name.
 * @method integer getSensitiveApiCount() Obtain Number of sensitive APIs.
 * @method void setSensitiveApiCount(integer $SensitiveApiCount) Set Number of sensitive APIs.
 * @method integer getApplicationType() Obtain Superapp type. Valid values: 1: Test; 2: Production.
 * @method void setApplicationType(integer $ApplicationType) Set Superapp type. Valid values: 1: Test; 2: Production.
 */
class DescribeApplicationListData extends AbstractModel
{
    /**
     * @var string Superapp ID.
     */
    public $ApplicationId;

    /**
     * @var integer Superapp identity ID.
     */
    public $AppIdentityId;

    /**
     * @var string Superapp name.
     */
    public $ApplicationName;

    /**
     * @var string Superapp icon.
     */
    public $Logo;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string Android superapp package name. 
     */
    public $AndroidAppKey;

    /**
     * @var string iOS superapp bundle ID. 
     */
    public $IosAppKey;

    /**
     * @var string Creator.
     */
    public $CreateUser;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Last modifier.
     */
    public $UpdateUser;

    /**
     * @var string Last modified time. 
     */
    public $UpdateTime;

    /**
     * @var string Superapp introduction.
     */
    public $Intro;

    /**
     * @var string Team ID.
     */
    public $TeamId;

    /**
     * @var string Team name.
     */
    public $TeamName;

    /**
     * @var integer Number of sensitive APIs.
     */
    public $SensitiveApiCount;

    /**
     * @var integer Superapp type. Valid values: 1: Test; 2: Production.
     */
    public $ApplicationType;

    /**
     * @param string $ApplicationId Superapp ID.
     * @param integer $AppIdentityId Superapp identity ID.
     * @param string $ApplicationName Superapp name.
     * @param string $Logo Superapp icon.
     * @param string $Remark Remarks.
     * @param string $AndroidAppKey Android superapp package name. 
     * @param string $IosAppKey iOS superapp bundle ID. 
     * @param string $CreateUser Creator.
     * @param string $CreateTime Creation time.
     * @param string $UpdateUser Last modifier.
     * @param string $UpdateTime Last modified time. 
     * @param string $Intro Superapp introduction.
     * @param string $TeamId Team ID.
     * @param string $TeamName Team name.
     * @param integer $SensitiveApiCount Number of sensitive APIs.
     * @param integer $ApplicationType Superapp type. Valid values: 1: Test; 2: Production.
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
