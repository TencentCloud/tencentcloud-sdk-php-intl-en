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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The AES-128 encryption details.
 *
 * @method string getUri() Obtain Request decryption key uri address.
 * @method void setUri(string $Uri) Set Request decryption key uri address.
 * @method string getKey() Obtain Encryption key (32-byte hexadecimal string).
 * @method void setKey(string $Key) Set Encryption key (32-byte hexadecimal string).
 * @method string getVector() Obtain Encryption initialization vector (32-byte hexadecimal string).
 * @method void setVector(string $Vector) Set Encryption initialization vector (32-byte hexadecimal string).
 */
class SimpleAesDrm extends AbstractModel
{
    /**
     * @var string Request decryption key uri address.
     */
    public $Uri;

    /**
     * @var string Encryption key (32-byte hexadecimal string).
     */
    public $Key;

    /**
     * @var string Encryption initialization vector (32-byte hexadecimal string).
     */
    public $Vector;

    /**
     * @param string $Uri Request decryption key uri address.
     * @param string $Key Encryption key (32-byte hexadecimal string).
     * @param string $Vector Encryption initialization vector (32-byte hexadecimal string).
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
        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Vector",$param) and $param["Vector"] !== null) {
            $this->Vector = $param["Vector"];
        }
    }
}
