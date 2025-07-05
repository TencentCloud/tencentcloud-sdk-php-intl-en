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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom header that can be configured for HTTP/HTTPS health check policies under a LoadBalancer.
 *
 * @method string getKey() Obtain Custom header key.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setKey(string $Key) Set Custom header key.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getValue() Obtain Custom header value.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setValue(string $Value) Set Custom header value.
Note: This field may return null, which indicates a failure to obtain a valid value.
 */
class CustomizedHeader extends AbstractModel
{
    /**
     * @var string Custom header key.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $Key;

    /**
     * @var string Custom header value.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $Value;

    /**
     * @param string $Key Custom header key.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $Value Custom header value.
Note: This field may return null, which indicates a failure to obtain a valid value.
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
