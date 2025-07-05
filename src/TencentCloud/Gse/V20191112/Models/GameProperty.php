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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Game attribute details
 *
 * @method string getKey() Obtain Attribute name. Up to 32 ASCII characters are allowed.
 * @method void setKey(string $Key) Set Attribute name. Up to 32 ASCII characters are allowed.
 * @method string getValue() Obtain Attribute value. Up to 96 ASCII characters are allowed.
 * @method void setValue(string $Value) Set Attribute value. Up to 96 ASCII characters are allowed.
 */
class GameProperty extends AbstractModel
{
    /**
     * @var string Attribute name. Up to 32 ASCII characters are allowed.
     */
    public $Key;

    /**
     * @var string Attribute value. Up to 96 ASCII characters are allowed.
     */
    public $Value;

    /**
     * @param string $Key Attribute name. Up to 32 ASCII characters are allowed.
     * @param string $Value Attribute value. Up to 96 ASCII characters are allowed.
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
