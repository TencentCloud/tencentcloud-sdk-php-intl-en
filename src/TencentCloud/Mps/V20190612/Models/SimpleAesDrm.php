<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getUri() Obtain The URI of decryption key.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUri(string $Uri) Set The URI of decryption key.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getKey() Obtain The encryption key (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set The encryption key (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getVector() Obtain The initialization vector for encryption (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVector(string $Vector) Set The initialization vector for encryption (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class SimpleAesDrm extends AbstractModel
{
    /**
     * @var string The URI of decryption key.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Uri;

    /**
     * @var string The encryption key (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @var string The initialization vector for encryption (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Vector;

    /**
     * @param string $Uri The URI of decryption key.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Key The encryption key (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $Vector The initialization vector for encryption (a 32-byte string).
Note: This field may return·null, indicating that no valid values can be obtained.
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
