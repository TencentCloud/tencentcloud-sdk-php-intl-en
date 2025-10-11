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
 * @method string getKey() Obtain Custom metadata key, consisting of uppercase letters (A-Z), lowercase letters (A-Z), digits (0-9), underscores (_), or hyphens (-), with a size limit of 128 bytes.
 * @method void setKey(string $Key) Set Custom metadata key, consisting of uppercase letters (A-Z), lowercase letters (A-Z), digits (0-9), underscores (_), or hyphens (-), with a size limit of 128 bytes.
 * @method string getValue() Obtain Custom metadata value. The upper limit of message size is 256 KB.
 * @method void setValue(string $Value) Set Custom metadata value. The upper limit of message size is 256 KB.
 */
class MetadataItem extends AbstractModel
{
    /**
     * @var string Custom metadata key, consisting of uppercase letters (A-Z), lowercase letters (A-Z), digits (0-9), underscores (_), or hyphens (-), with a size limit of 128 bytes.
     */
    public $Key;

    /**
     * @var string Custom metadata value. The upper limit of message size is 256 KB.
     */
    public $Value;

    /**
     * @param string $Key Custom metadata key, consisting of uppercase letters (A-Z), lowercase letters (A-Z), digits (0-9), underscores (_), or hyphens (-), with a size limit of 128 bytes.
     * @param string $Value Custom metadata value. The upper limit of message size is 256 KB.
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
