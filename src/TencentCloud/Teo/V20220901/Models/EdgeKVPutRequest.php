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
 * @method string getKey() Obtain Key name, with a length of 1-512 characters, supports valid UTF-8 characters.
 * @method void setKey(string $Key) Set Key name, with a length of 1-512 characters, supports valid UTF-8 characters.
 * @method string getValue() Obtain Key-value. Cannot be empty and supports up to 1 MB. Supports storing string data.
 * @method void setValue(string $Value) Set Key-value. Cannot be empty and supports up to 1 MB. Supports storing string data.
 * @method integer getExpiration() Obtain Expiry date of the key-value pair, absolute time in seconds, represents the seconds elapsed since 00:00:00 on January 1, 1970 (UTC) (Unix timestamp). The value must be greater than or equal to current time + 60, meaning the expiry date is at least 60 seconds from now. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence. If left empty, the key-value pair will never expire.
 * @method void setExpiration(integer $Expiration) Set Expiry date of the key-value pair, absolute time in seconds, represents the seconds elapsed since 00:00:00 on January 1, 1970 (UTC) (Unix timestamp). The value must be greater than or equal to current time + 60, meaning the expiry date is at least 60 seconds from now. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence. If left empty, the key-value pair will never expire.
 * @method integer getExpirationTTL() Obtain The survival time of the key-value pair is a relative time in seconds, indicating that the data will expire after transit of specified seconds. Value ranges from 60. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence; if left empty, the key-value pair will never expire.
 * @method void setExpirationTTL(integer $ExpirationTTL) Set The survival time of the key-value pair is a relative time in seconds, indicating that the data will expire after transit of specified seconds. Value ranges from 60. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence; if left empty, the key-value pair will never expire.
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
     * @var string Key name, with a length of 1-512 characters, supports valid UTF-8 characters.
     */
    public $Key;

    /**
     * @var string Key-value. Cannot be empty and supports up to 1 MB. Supports storing string data.
     */
    public $Value;

    /**
     * @var integer Expiry date of the key-value pair, absolute time in seconds, represents the seconds elapsed since 00:00:00 on January 1, 1970 (UTC) (Unix timestamp). The value must be greater than or equal to current time + 60, meaning the expiry date is at least 60 seconds from now. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence. If left empty, the key-value pair will never expire.
     */
    public $Expiration;

    /**
     * @var integer The survival time of the key-value pair is a relative time in seconds, indicating that the data will expire after transit of specified seconds. Value ranges from 60. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence; if left empty, the key-value pair will never expire.
     */
    public $ExpirationTTL;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Namespace Namespace name.
     * @param string $Key Key name, with a length of 1-512 characters, supports valid UTF-8 characters.
     * @param string $Value Key-value. Cannot be empty and supports up to 1 MB. Supports storing string data.
     * @param integer $Expiration Expiry date of the key-value pair, absolute time in seconds, represents the seconds elapsed since 00:00:00 on January 1, 1970 (UTC) (Unix timestamp). The value must be greater than or equal to current time + 60, meaning the expiry date is at least 60 seconds from now. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence. If left empty, the key-value pair will never expire.
     * @param integer $ExpirationTTL The survival time of the key-value pair is a relative time in seconds, indicating that the data will expire after transit of specified seconds. Value ranges from 60. When both Expiration and ExpirationTTL are filled, ExpirationTTL takes precedence; if left empty, the key-value pair will never expire.
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
