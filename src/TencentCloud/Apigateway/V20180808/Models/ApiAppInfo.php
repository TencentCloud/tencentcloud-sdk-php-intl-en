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
 * Application information
 *
 * @method string getApiAppName() Obtain Application name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAppName(string $ApiAppName) Set Application name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiAppId() Obtain Application ID
 * @method void setApiAppId(string $ApiAppId) Set Application ID
 * @method string getApiAppSecret() Obtain Application SECRET
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAppSecret(string $ApiAppSecret) Set Application SECRET
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiAppDesc() Obtain Application description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAppDesc(string $ApiAppDesc) Set Application description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiAppKey() Obtain Application KEY
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAppKey(string $ApiAppKey) Set Application KEY
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ApiAppInfo extends AbstractModel
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
     * @var string Application SECRET
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAppSecret;

    /**
     * @var string Application description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAppDesc;

    /**
     * @var string Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var string Application KEY
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAppKey;

    /**
     * @param string $ApiAppName Application name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiAppId Application ID
     * @param string $ApiAppSecret Application SECRET
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiAppDesc Application description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiAppKey Application KEY
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

        if (array_key_exists("ApiAppSecret",$param) and $param["ApiAppSecret"] !== null) {
            $this->ApiAppSecret = $param["ApiAppSecret"];
        }

        if (array_key_exists("ApiAppDesc",$param) and $param["ApiAppDesc"] !== null) {
            $this->ApiAppDesc = $param["ApiAppDesc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ApiAppKey",$param) and $param["ApiAppKey"] !== null) {
            $this->ApiAppKey = $param["ApiAppKey"];
        }
    }
}
