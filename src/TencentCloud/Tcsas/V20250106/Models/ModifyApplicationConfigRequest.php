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
 * ModifyApplicationConfig request structure.
 *
 * @method string getApplicationId() Obtain Superapp ID
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method integer getId() Obtain Superapp configuration ID
 * @method void setId(integer $Id) Set Superapp configuration ID
 * @method string getAppKey() Obtain Package name: corresponds to packageName on Android and bundleId on iOS
 * @method void setAppKey(string $AppKey) Set Package name: corresponds to packageName on Android and bundleId on iOS
 * @method string getAppURL() Obtain Superapp URL
 * @method void setAppURL(string $AppURL) Set Superapp URL
 */
class ModifyApplicationConfigRequest extends AbstractModel
{
    /**
     * @var string Superapp ID
     */
    public $ApplicationId;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var integer Superapp configuration ID
     */
    public $Id;

    /**
     * @var string Package name: corresponds to packageName on Android and bundleId on iOS
     */
    public $AppKey;

    /**
     * @var string Superapp URL
     */
    public $AppURL;

    /**
     * @param string $ApplicationId Superapp ID
     * @param string $PlatformId Platform ID
     * @param integer $Id Superapp configuration ID
     * @param string $AppKey Package name: corresponds to packageName on Android and bundleId on iOS
     * @param string $AppURL Superapp URL
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("AppURL",$param) and $param["AppURL"] !== null) {
            $this->AppURL = $param["AppURL"];
        }
    }
}
