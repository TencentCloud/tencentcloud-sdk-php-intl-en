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
 * ModifyApplication request structure.
 *
 * @method string getApplicationId() Obtain Superapp ID.
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID.
 * @method string getApplicationName() Obtain Superapp name.
 * @method void setApplicationName(string $ApplicationName) Set Superapp name.
 * @method string getIntro() Obtain Superapp introduction.
 * @method void setIntro(string $Intro) Set Superapp introduction.
 * @method string getLogo() Obtain Superapp icon.
 * @method void setLogo(string $Logo) Set Superapp icon.
 * @method string getPlatformId() Obtain Platform ID.
 * @method void setPlatformId(string $PlatformId) Set Platform ID.
 * @method string getAndroidAppKey() Obtain Android app package name.
 * @method void setAndroidAppKey(string $AndroidAppKey) Set Android app package name.
 * @method string getIosAppKey() Obtain iOS app bundle ID.
 * @method void setIosAppKey(string $IosAppKey) Set iOS app bundle ID.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getScheme() Obtain Scheme.
 * @method void setScheme(string $Scheme) Set Scheme.
 */
class ModifyApplicationRequest extends AbstractModel
{
    /**
     * @var string Superapp ID.
     */
    public $ApplicationId;

    /**
     * @var string Superapp name.
     */
    public $ApplicationName;

    /**
     * @var string Superapp introduction.
     */
    public $Intro;

    /**
     * @var string Superapp icon.
     */
    public $Logo;

    /**
     * @var string Platform ID.
     */
    public $PlatformId;

    /**
     * @var string Android app package name.
     * @deprecated
     */
    public $AndroidAppKey;

    /**
     * @var string iOS app bundle ID.
     * @deprecated
     */
    public $IosAppKey;

    /**
     * @var string Remarks.
     * @deprecated
     */
    public $Remark;

    /**
     * @var string Scheme.
     */
    public $Scheme;

    /**
     * @param string $ApplicationId Superapp ID.
     * @param string $ApplicationName Superapp name.
     * @param string $Intro Superapp introduction.
     * @param string $Logo Superapp icon.
     * @param string $PlatformId Platform ID.
     * @param string $AndroidAppKey Android app package name.
     * @param string $IosAppKey iOS app bundle ID.
     * @param string $Remark Remarks.
     * @param string $Scheme Scheme.
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

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Intro",$param) and $param["Intro"] !== null) {
            $this->Intro = $param["Intro"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }
    }
}
