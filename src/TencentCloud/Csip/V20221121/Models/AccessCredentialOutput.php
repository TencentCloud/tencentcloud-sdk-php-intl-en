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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Normal key credential (dedicated for output parameters), used for the response of the query details api. The Value field returns a masked value without exposing plaintext.
 *
 * @method string getKey() Obtain Credential key name (original), such as SecretId, SecretKey, Token
 * @method void setKey(string $Key) Set Credential key name (original), such as SecretId, SecretKey, Token
 * @method string getValue() Obtain Credential key-value (masked)
Supplementary description: Reserve the first 3 and last 4 digits, replace the middle with ***; replace all with *** if the length is less than 7.
 * @method void setValue(string $Value) Set Credential key-value (masked)
Supplementary description: Reserve the first 3 and last 4 digits, replace the middle with ***; replace all with *** if the length is less than 7.
 */
class AccessCredentialOutput extends AbstractModel
{
    /**
     * @var string Credential key name (original), such as SecretId, SecretKey, Token
     */
    public $Key;

    /**
     * @var string Credential key-value (masked)
Supplementary description: Reserve the first 3 and last 4 digits, replace the middle with ***; replace all with *** if the length is less than 7.
     */
    public $Value;

    /**
     * @param string $Key Credential key name (original), such as SecretId, SecretKey, Token
     * @param string $Value Credential key-value (masked)
Supplementary description: Reserve the first 3 and last 4 digits, replace the middle with ***; replace all with *** if the length is less than 7.
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
