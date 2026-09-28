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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP Cookie information
 *
 * @method string getKey() Obtain Key of the Cookie, 1-64 characters, supporting letters, digits, and underscores.
 * @method void setKey(string $Key) Set Key of the Cookie, 1-64 characters, supporting letters, digits, and underscores.
 * @method string getValue() Obtain Cookie value, 1–128 characters in length, supporting printable characters.
 * @method void setValue(string $Value) Set Cookie value, 1–128 characters in length, supporting printable characters.
 */
class HTTPCookieInfo extends AbstractModel
{
    /**
     * @var string Key of the Cookie, 1-64 characters, supporting letters, digits, and underscores.
     */
    public $Key;

    /**
     * @var string Cookie value, 1–128 characters in length, supporting printable characters.
     */
    public $Value;

    /**
     * @param string $Key Key of the Cookie, 1-64 characters, supporting letters, digits, and underscores.
     * @param string $Value Cookie value, 1–128 characters in length, supporting printable characters.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
