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
 * ModifyApplicationAppUrl request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getAndroidAppURL() Obtain Android address
 * @method void setAndroidAppURL(string $AndroidAppURL) Set Android address
 * @method string getIOSAppURL() Obtain iOS address
 * @method void setIOSAppURL(string $IOSAppURL) Set iOS address
 */
class ModifyApplicationAppUrlRequest extends AbstractModel
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
     * @var string Android address
     */
    public $AndroidAppURL;

    /**
     * @var string iOS address
     */
    public $IOSAppURL;

    /**
     * @param string $ApplicationId Application ID
     * @param string $PlatformId Platform ID
     * @param string $AndroidAppURL Android address
     * @param string $IOSAppURL iOS address
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

        if (array_key_exists("AndroidAppURL",$param) and $param["AndroidAppURL"] !== null) {
            $this->AndroidAppURL = $param["AndroidAppURL"];
        }

        if (array_key_exists("IOSAppURL",$param) and $param["IOSAppURL"] !== null) {
            $this->IOSAppURL = $param["IOSAppURL"];
        }
    }
}
