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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Encryption key returned
 *
 * @method string getKey() Obtain RSA encryption public key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKey(string $Key) Set RSA encryption public key
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PresetResp extends AbstractModel
{
    /**
     * @var string RSA encryption public key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Key;

    /**
     * @param string $Key RSA encryption public key
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
