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
 * CreateApplication request structure.
 *
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getLogo() Obtain Logo address
 * @method void setLogo(string $Logo) Set Logo address
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getAndroidAppKey() Obtain Android package name
 * @method void setAndroidAppKey(string $AndroidAppKey) Set Android package name
 * @method string getIosAppKey() Obtain iOS bundleId
 * @method void setIosAppKey(string $IosAppKey) Set iOS bundleId
 * @method string getIntro() Obtain Introduction
 * @method void setIntro(string $Intro) Set Introduction
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getAndroidAppURL() Obtain Android App download address
 * @method void setAndroidAppURL(string $AndroidAppURL) Set Android App download address
 * @method string getIosAppURL() Obtain iOS App download address
 * @method void setIosAppURL(string $IosAppURL) Set iOS App download address
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 * @method integer getApplicationType() Obtain Application type. 1: Test; 2: Formal
 * @method void setApplicationType(integer $ApplicationType) Set Application type. 1: Test; 2: Formal
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Logo address
     */
    public $Logo;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Android package name
     */
    public $AndroidAppKey;

    /**
     * @var string iOS bundleId
     */
    public $IosAppKey;

    /**
     * @var string Introduction
     */
    public $Intro;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Android App download address
     */
    public $AndroidAppURL;

    /**
     * @var string iOS App download address
     */
    public $IosAppURL;

    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @var integer Application type. 1: Test; 2: Formal
     */
    public $ApplicationType;

    /**
     * @param string $ApplicationName Application name
     * @param string $Logo Logo address
     * @param string $PlatformId Platform ID
     * @param string $AndroidAppKey Android package name
     * @param string $IosAppKey iOS bundleId
     * @param string $Intro Introduction
     * @param string $Remark Remarks
     * @param string $AndroidAppURL Android App download address
     * @param string $IosAppURL iOS App download address
     * @param string $TeamId Team ID
     * @param integer $ApplicationType Application type. 1: Test; 2: Formal
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
        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("AndroidAppKey",$param) and $param["AndroidAppKey"] !== null) {
            $this->AndroidAppKey = $param["AndroidAppKey"];
        }

        if (array_key_exists("IosAppKey",$param) and $param["IosAppKey"] !== null) {
            $this->IosAppKey = $param["IosAppKey"];
        }

        if (array_key_exists("Intro",$param) and $param["Intro"] !== null) {
            $this->Intro = $param["Intro"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AndroidAppURL",$param) and $param["AndroidAppURL"] !== null) {
            $this->AndroidAppURL = $param["AndroidAppURL"];
        }

        if (array_key_exists("IosAppURL",$param) and $param["IosAppURL"] !== null) {
            $this->IosAppURL = $param["IosAppURL"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }
    }
}