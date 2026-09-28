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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Delete HTTP Header information
 *
 * @method string getKey() Obtain Key of the HTTP Header to delete. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, x-forwarded-port, and server.
 * @method void setKey(string $Key) Set Key of the HTTP Header to delete. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, x-forwarded-port, and server.
 */
class RemoveHTTPHeaderInfo extends AbstractModel
{
    /**
     * @var string Key of the HTTP Header to delete. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, x-forwarded-port, and server.
     */
    public $Key;

    /**
     * @param string $Key Key of the HTTP Header to delete. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, x-forwarded-port, and server.
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
