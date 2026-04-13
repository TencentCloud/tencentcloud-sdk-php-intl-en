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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KV key-value pair data, including key name, key-value, and expiration time information.
 *
 * @method string getKey() Obtain Key name. Each key name cannot be empty, with a length of 1-512 characters. Allowed characters include letters, digits, hyphens, and underscores.
 * @method void setKey(string $Key) Set Key name. Each key name cannot be empty, with a length of 1-512 characters. Allowed characters include letters, digits, hyphens, and underscores.
 * @method string getValue() Obtain Key-value. Cannot be empty for input parameters and supports up to 1 MB. Returns an empty string if the key does not exist for output parameters.
 * @method void setValue(string $Value) Set Key-value. Cannot be empty for input parameters and supports up to 1 MB. Returns an empty string if the key does not exist for output parameters.
 * @method string getExpiration() Obtain Expiration time, following ISO 8601 standard, format YYYY-MM-DDThh:mm:ssZ (UTC time). If it is an empty string in the output, it means the key-value pair will never expire.
 * @method void setExpiration(string $Expiration) Set Expiration time, following ISO 8601 standard, format YYYY-MM-DDThh:mm:ssZ (UTC time). If it is an empty string in the output, it means the key-value pair will never expire.
 */
class KeyValuePair extends AbstractModel
{
    /**
     * @var string Key name. Each key name cannot be empty, with a length of 1-512 characters. Allowed characters include letters, digits, hyphens, and underscores.
     */
    public $Key;

    /**
     * @var string Key-value. Cannot be empty for input parameters and supports up to 1 MB. Returns an empty string if the key does not exist for output parameters.
     */
    public $Value;

    /**
     * @var string Expiration time, following ISO 8601 standard, format YYYY-MM-DDThh:mm:ssZ (UTC time). If it is an empty string in the output, it means the key-value pair will never expire.
     */
    public $Expiration;

    /**
     * @param string $Key Key name. Each key name cannot be empty, with a length of 1-512 characters. Allowed characters include letters, digits, hyphens, and underscores.
     * @param string $Value Key-value. Cannot be empty for input parameters and supports up to 1 MB. Returns an empty string if the key does not exist for output parameters.
     * @param string $Expiration Expiration time, following ISO 8601 standard, format YYYY-MM-DDThh:mm:ssZ (UTC time). If it is an empty string in the output, it means the key-value pair will never expire.
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

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }
    }
}
