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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment variables returned in the project list, only keys and values
 *
 * @method string getKey() Obtain <p>Variable name</p>
 * @method void setKey(string $Key) Set <p>Variable name</p>
 * @method string getValue() Obtain <p>Variable value</p>
 * @method void setValue(string $Value) Set <p>Variable value</p>
 */
class ProjectEnvVar extends AbstractModel
{
    /**
     * @var string <p>Variable name</p>
     */
    public $Key;

    /**
     * @var string <p>Variable value</p>
     */
    public $Value;

    /**
     * @param string $Key <p>Variable name</p>
     * @param string $Value <p>Variable value</p>
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
