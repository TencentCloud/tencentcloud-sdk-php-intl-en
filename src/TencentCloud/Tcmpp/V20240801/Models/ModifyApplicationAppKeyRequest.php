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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplicationAppKey request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getAndroidAppKey() Obtain Android package name
 * @method void setAndroidAppKey(string $AndroidAppKey) Set Android package name
 * @method string getIOSAppKey() Obtain iOS package name
 * @method void setIOSAppKey(string $IOSAppKey) Set iOS package name
 */
class ModifyApplicationAppKeyRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Android package name
     */
    public $AndroidAppKey;

    /**
     * @var string iOS package name
     */
    public $IOSAppKey;

    /**
     * @param string $ApplicationId Application ID
     * @param string $PlatformId Platform ID
     * @param string $AndroidAppKey Android package name
     * @param string $IOSAppKey iOS package name
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

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("AndroidAppKey",$param) and $param["AndroidAppKey"] !== null) {
            $this->AndroidAppKey = $param["AndroidAppKey"];
        }

        if (array_key_exists("IOSAppKey",$param) and $param["IOSAppKey"] !== null) {
            $this->IOSAppKey = $param["IOSAppKey"];
        }
    }
}
