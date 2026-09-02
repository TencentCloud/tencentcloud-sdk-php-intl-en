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
 * General key credential (dedicated output parameter), used for the response of the details query API. The Value field returns the masked value without exposing the plaintext.
 *
 * @method string getKey() Obtain Credential key name (original text), for example, SecretId, SecretKey, and Token.
 * @method void setKey(string $Key) Set Credential key name (original text), for example, SecretId, SecretKey, and Token.
 * @method string getValue() Obtain Credential key-value (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***; if the length is less than 7 digits, replace all with ***.
 * @method void setValue(string $Value) Set Credential key-value (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***; if the length is less than 7 digits, replace all with ***.
 */
class AccessCredentialOutput extends AbstractModel
{
    /**
     * @var string Credential key name (original text), for example, SecretId, SecretKey, and Token.
     */
    public $Key;

    /**
     * @var string Credential key-value (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***; if the length is less than 7 digits, replace all with ***.
     */
    public $Value;

    /**
     * @param string $Key Credential key name (original text), for example, SecretId, SecretKey, and Token.
     * @param string $Value Credential key-value (masked)
Supplemental description: Reserve the first 3 and last 4 digits, replace the middle with ***; if the length is less than 7 digits, replace all with ***.
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
