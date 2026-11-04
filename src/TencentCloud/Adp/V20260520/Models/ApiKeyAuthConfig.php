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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApiKey authentication configuration
 *
 * @method integer getKeyLocation() Obtain Key position. HEADER/QUERY

Enumeration values:
| uint | Description |
| --- | --- |
Header authentication
| 1 | Query authentication |
 * @method void setKeyLocation(integer $KeyLocation) Set Key position. HEADER/QUERY

Enumeration values:
| uint | Description |
| --- | --- |
Header authentication
| 1 | Query authentication |
 * @method string getKeyParamName() Obtain Key parameter name
 * @method void setKeyParamName(string $KeyParamName) Set Key parameter name
 * @method string getKeyParamValue() Obtain Key parameter value
 * @method void setKeyParamValue(string $KeyParamValue) Set Key parameter value
 */
class ApiKeyAuthConfig extends AbstractModel
{
    /**
     * @var integer Key position. HEADER/QUERY

Enumeration values:
| uint | Description |
| --- | --- |
Header authentication
| 1 | Query authentication |
     */
    public $KeyLocation;

    /**
     * @var string Key parameter name
     */
    public $KeyParamName;

    /**
     * @var string Key parameter value
     */
    public $KeyParamValue;

    /**
     * @param integer $KeyLocation Key position. HEADER/QUERY

Enumeration values:
| uint | Description |
| --- | --- |
Header authentication
| 1 | Query authentication |
     * @param string $KeyParamName Key parameter name
     * @param string $KeyParamValue Key parameter value
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
        if (array_key_exists("KeyLocation",$param) and $param["KeyLocation"] !== null) {
            $this->KeyLocation = $param["KeyLocation"];
        }

        if (array_key_exists("KeyParamName",$param) and $param["KeyParamName"] !== null) {
            $this->KeyParamName = $param["KeyParamName"];
        }

        if (array_key_exists("KeyParamValue",$param) and $param["KeyParamValue"] !== null) {
            $this->KeyParamValue = $param["KeyParamValue"];
        }
    }
}
