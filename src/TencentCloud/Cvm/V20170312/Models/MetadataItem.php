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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom metadata key and value.
 *
 * @method string getKey() Obtain Custom metadata key. it must comply with the regular expression ^[a-zA-Z0-9_-]+$. the length is less than or equal to 128 bytes (case-sensitive).

 * @method void setKey(string $Key) Set Custom metadata key. it must comply with the regular expression ^[a-zA-Z0-9_-]+$. the length is less than or equal to 128 bytes (case-sensitive).

 * @method string getValue() Obtain Specifies a custom metadata value. it supports any data . The size is &le; 256 KB. it is case-sensitive.
 * @method void setValue(string $Value) Set Specifies a custom metadata value. it supports any data . The size is &le; 256 KB. it is case-sensitive.
 */
class MetadataItem extends AbstractModel
{
    /**
     * @var string Custom metadata key. it must comply with the regular expression ^[a-zA-Z0-9_-]+$. the length is less than or equal to 128 bytes (case-sensitive).

     */
    public $Key;

    /**
     * @var string Specifies a custom metadata value. it supports any data . The size is &le; 256 KB. it is case-sensitive.
     */
    public $Value;

    /**
     * @param string $Key Custom metadata key. it must comply with the regular expression ^[a-zA-Z0-9_-]+$. the length is less than or equal to 128 bytes (case-sensitive).

     * @param string $Value Specifies a custom metadata value. it supports any data . The size is &le; 256 KB. it is case-sensitive.
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
