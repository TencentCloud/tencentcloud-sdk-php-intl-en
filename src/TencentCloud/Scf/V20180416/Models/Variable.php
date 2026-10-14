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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Variable parameters
 *
 * @method string getKey() Obtain Variable name. Cannot be empty.
 * @method void setKey(string $Key) Set Variable name. Cannot be empty.
 * @method string getValue() Obtain Variable value. Cannot be empty.
 * @method void setValue(string $Value) Set Variable value. Cannot be empty.
 */
class Variable extends AbstractModel
{
    /**
     * @var string Variable name. Cannot be empty.
     */
    public $Key;

    /**
     * @var string Variable value. Cannot be empty.
     */
    public $Value;

    /**
     * @param string $Key Variable name. Cannot be empty.
     * @param string $Value Variable value. Cannot be empty.
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
