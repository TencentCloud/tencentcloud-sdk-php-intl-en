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
 * Application configuration info
 *
 * @method integer getApplicationType() Obtain Superapp configuration type: 1 Non-production, 2 Production
 * @method void setApplicationType(integer $ApplicationType) Set Superapp configuration type: 1 Non-production, 2 Production
 * @method string getAppKey() Obtain Superapp package name
 * @method void setAppKey(string $AppKey) Set Superapp package name
 * @method string getAppURL() Obtain Superapp URL
 * @method void setAppURL(string $AppURL) Set Superapp URL
 * @method integer getId() Obtain Superapp configuration ID
 * @method void setId(integer $Id) Set Superapp configuration ID
 */
class ApplicationConfigInfo extends AbstractModel
{
    /**
     * @var integer Superapp configuration type: 1 Non-production, 2 Production
     */
    public $ApplicationType;

    /**
     * @var string Superapp package name
     */
    public $AppKey;

    /**
     * @var string Superapp URL
     */
    public $AppURL;

    /**
     * @var integer Superapp configuration ID
     */
    public $Id;

    /**
     * @param integer $ApplicationType Superapp configuration type: 1 Non-production, 2 Production
     * @param string $AppKey Superapp package name
     * @param string $AppURL Superapp URL
     * @param integer $Id Superapp configuration ID
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
        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("AppURL",$param) and $param["AppURL"] !== null) {
            $this->AppURL = $param["AppURL"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
