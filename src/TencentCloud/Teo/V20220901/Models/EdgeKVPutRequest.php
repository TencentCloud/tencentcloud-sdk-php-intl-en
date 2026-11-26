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
 * EdgeKVPut request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getNamespace() Obtain Namespace name.
 * @method void setNamespace(string $Namespace) Set Namespace name.
 * @method string getKey() Obtain Key name, 1-512 characters long, supports valid UTF-8 characters.
 * @method void setKey(string $Key) Set Key name, 1-512 characters long, supports valid UTF-8 characters.
 * @method string getValue() Obtain Key-value. It cannot be empty and supports up to 1 MB. It supports storing string data.
 * @method void setValue(string $Value) Set Key-value. It cannot be empty and supports up to 1 MB. It supports storing string data.
 * @method integer getExpiration() Obtain Expiration time of the key-value pair. It is an absolute time in seconds, representing the number of seconds elapsed since 00:00:00 (UTC) on January 1, 1970 (Unix timestamp). The value must be greater than or equal to the current time + 60, meaning the Expiration time must be at least 60 seconds from now. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair never expires.
 * @method void setExpiration(integer $Expiration) Set Expiration time of the key-value pair. It is an absolute time in seconds, representing the number of seconds elapsed since 00:00:00 (UTC) on January 1, 1970 (Unix timestamp). The value must be greater than or equal to the current time + 60, meaning the Expiration time must be at least 60 seconds from now. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair never expires.
 * @method integer getExpirationTTL() Obtain Survival time of the key-value pair, relative time, in seconds. It means the data will expire after the specified seconds following the write. Value range: equal to or greater than 60. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair will never expire.
 * @method void setExpirationTTL(integer $ExpirationTTL) Set Survival time of the key-value pair, relative time, in seconds. It means the data will expire after the specified seconds following the write. Value range: equal to or greater than 60. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair will never expire.
 */
class EdgeKVPutRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Namespace name.
     */
    public $Namespace;

    /**
     * @var string Key name, 1-512 characters long, supports valid UTF-8 characters.
     */
    public $Key;

    /**
     * @var string Key-value. It cannot be empty and supports up to 1 MB. It supports storing string data.
     */
    public $Value;

    /**
     * @var integer Expiration time of the key-value pair. It is an absolute time in seconds, representing the number of seconds elapsed since 00:00:00 (UTC) on January 1, 1970 (Unix timestamp). The value must be greater than or equal to the current time + 60, meaning the Expiration time must be at least 60 seconds from now. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair never expires.
     */
    public $Expiration;

    /**
     * @var integer Survival time of the key-value pair, relative time, in seconds. It means the data will expire after the specified seconds following the write. Value range: equal to or greater than 60. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair will never expire.
     */
    public $ExpirationTTL;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Namespace Namespace name.
     * @param string $Key Key name, 1-512 characters long, supports valid UTF-8 characters.
     * @param string $Value Key-value. It cannot be empty and supports up to 1 MB. It supports storing string data.
     * @param integer $Expiration Expiration time of the key-value pair. It is an absolute time in seconds, representing the number of seconds elapsed since 00:00:00 (UTC) on January 1, 1970 (Unix timestamp). The value must be greater than or equal to the current time + 60, meaning the Expiration time must be at least 60 seconds from now. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair never expires.
     * @param integer $ExpirationTTL Survival time of the key-value pair, relative time, in seconds. It means the data will expire after the specified seconds following the write. Value range: equal to or greater than 60. If both Expiration and ExpirationTTL are filled in, ExpirationTTL takes precedence. If both are left empty, the key-value pair will never expire.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
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

        if (array_key_exists("ExpirationTTL",$param) and $param["ExpirationTTL"] !== null) {
            $this->ExpirationTTL = $param["ExpirationTTL"];
        }
    }
}
