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
 * HTTP Header information.
 *
 * @method string getKey() Obtain Key of the HTTP Header. Length: 1–40 characters. Supported character sets: a-z a-z 0-9 - _
Chinese characters are not allowed. No support for Host and Cookie.
 * @method void setKey(string $Key) Set Key of the HTTP Header. Length: 1–40 characters. Supported character sets: a-z a-z 0-9 - _
Chinese characters are not allowed. No support for Host and Cookie.
 * @method array getValues() Obtain Value of the HTTP Header. Length: 1-128 characters. Printable characters supported.
Unsupported. It cannot begin or end with a space, and cannot end with a backslash.
 * @method void setValues(array $Values) Set Value of the HTTP Header. Length: 1-128 characters. Printable characters supported.
Unsupported. It cannot begin or end with a space, and cannot end with a backslash.
 */
class HTTPHeaderInfo extends AbstractModel
{
    /**
     * @var string Key of the HTTP Header. Length: 1–40 characters. Supported character sets: a-z a-z 0-9 - _
Chinese characters are not allowed. No support for Host and Cookie.
     */
    public $Key;

    /**
     * @var array Value of the HTTP Header. Length: 1-128 characters. Printable characters supported.
Unsupported. It cannot begin or end with a space, and cannot end with a backslash.
     */
    public $Values;

    /**
     * @param string $Key Key of the HTTP Header. Length: 1–40 characters. Supported character sets: a-z a-z 0-9 - _
Chinese characters are not allowed. No support for Host and Cookie.
     * @param array $Values Value of the HTTP Header. Length: 1-128 characters. Printable characters supported.
Unsupported. It cannot begin or end with a space, and cannot end with a backslash.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
