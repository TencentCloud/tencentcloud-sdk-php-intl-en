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
 * @method string getKey() Obtain Custom header Key.
 * @method void setKey(string $Key) Set Custom header Key.
 * @method string getValue() Obtain Value of the custom header.
 * @method void setValue(string $Value) Set Value of the custom header.
 */
class CustomizedHeader extends AbstractModel
{
    /**
     * @var string Custom header Key.
     */
    public $Key;

    /**
     * @var string Value of the custom header.
     */
    public $Value;

    /**
     * @param string $Key Custom header Key.
     * @param string $Value Value of the custom header.
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
