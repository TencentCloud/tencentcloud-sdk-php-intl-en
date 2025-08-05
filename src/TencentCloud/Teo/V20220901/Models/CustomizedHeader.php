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
 * @method string getKey() Obtain Specifies the custom header Key.
 * @method void setKey(string $Key) Set Specifies the custom header Key.
 * @method string getValue() Obtain Set custom headers Value.
 * @method void setValue(string $Value) Set Set custom headers Value.
 */
class CustomizedHeader extends AbstractModel
{
    /**
     * @var string Specifies the custom header Key.
     */
    public $Key;

    /**
     * @var string Set custom headers Value.
     */
    public $Value;

    /**
     * @param string $Key Specifies the custom header Key.
     * @param string $Value Set custom headers Value.
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
