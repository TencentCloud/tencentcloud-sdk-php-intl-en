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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the API bound to the application
 *
 * @method string getApiAppName() Obtain Application name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAppName(string $ApiAppName) Set Application name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiAppId() Obtain Application ID
 * @method void setApiAppId(string $ApiAppId) Set Application ID
 * @method string getApiId() Obtain API ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiId(string $ApiId) Set API ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiName() Obtain API name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiName(string $ApiName) Set API name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceId() Obtain Service ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(string $ServiceId) Set Service ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAuthorizedTime() Obtain Binding authorization time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthorizedTime(string $AuthorizedTime) Set Binding authorization time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiRegion() Obtain API region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiRegion(string $ApiRegion) Set API region
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEnvironmentName() Obtain Authorized binding environment
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentName(string $EnvironmentName) Set Authorized binding environment
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiAppApiInfo extends AbstractModel
{
    /**
     * @var string Application name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAppName;

    /**
     * @var string Application ID
     */
    public $ApiAppId;

    /**
     * @var string API ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiId;

    /**
     * @var string API name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiName;

    /**
     * @var string Service ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @var string Binding authorization time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthorizedTime;

    /**
     * @var string API region
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiRegion;

    /**
     * @var string Authorized binding environment
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentName;

    /**
     * @param string $ApiAppName Application name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiAppId Application ID
     * @param string $ApiId API ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiName API name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceId Service ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AuthorizedTime Binding authorization time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiRegion API region
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EnvironmentName Authorized binding environment
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApiAppName",$param) and $param["ApiAppName"] !== null) {
            $this->ApiAppName = $param["ApiAppName"];
        }

        if (array_key_exists("ApiAppId",$param) and $param["ApiAppId"] !== null) {
            $this->ApiAppId = $param["ApiAppId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("AuthorizedTime",$param) and $param["AuthorizedTime"] !== null) {
            $this->AuthorizedTime = $param["AuthorizedTime"];
        }

        if (array_key_exists("ApiRegion",$param) and $param["ApiRegion"] !== null) {
            $this->ApiRegion = $param["ApiRegion"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }
    }
}
