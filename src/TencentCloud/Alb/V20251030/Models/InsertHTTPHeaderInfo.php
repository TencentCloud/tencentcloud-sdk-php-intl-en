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
 * Insert HTTP Header information.
 *
 * @method string getKey() Obtain Key of the inserted HTTP Header. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
Chinese characters are not allowed. No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, and x-forwarded-port.
 * @method void setKey(string $Key) Set Key of the inserted HTTP Header. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
Chinese characters are not allowed. No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, and x-forwarded-port.
 * @method string getValue() Obtain Type of the HTTP Header value.
When ValueType is SystemDefined, the value range is as follows: ClientPort: client port, ClientIp: client IP address, Protocol: protocol of client requests, CLBPort: listening port of the load balancing instance.
When ValueType is UserDefined, it is a printable character of 1 to 128 characters in length. It does not support ". It cannot be space at the beginning and ending, and cannot be \ at the end.
When ValueType is ReferenceHeader, refer to a header in the request header. It must be 1–128 printable characters. It does not support ". It cannot begin or end with a space, and cannot end with \.
 * @method void setValue(string $Value) Set Type of the HTTP Header value.
When ValueType is SystemDefined, the value range is as follows: ClientPort: client port, ClientIp: client IP address, Protocol: protocol of client requests, CLBPort: listening port of the load balancing instance.
When ValueType is UserDefined, it is a printable character of 1 to 128 characters in length. It does not support ". It cannot be space at the beginning and ending, and cannot be \ at the end.
When ValueType is ReferenceHeader, refer to a header in the request header. It must be 1–128 printable characters. It does not support ". It cannot begin or end with a space, and cannot end with \.
 * @method string getValueType() Obtain Type of the HTTP Header value. Value:
SystemDefined: system defined header.
UserDefined: user-defined header.
ReferenceHeader: refers to one header in the request header.
 * @method void setValueType(string $ValueType) Set Type of the HTTP Header value. Value:
SystemDefined: system defined header.
UserDefined: user-defined header.
ReferenceHeader: refers to one header in the request header.
 */
class InsertHTTPHeaderInfo extends AbstractModel
{
    /**
     * @var string Key of the inserted HTTP Header. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
Chinese characters are not allowed. No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, and x-forwarded-port.
     */
    public $Key;

    /**
     * @var string Type of the HTTP Header value.
When ValueType is SystemDefined, the value range is as follows: ClientPort: client port, ClientIp: client IP address, Protocol: protocol of client requests, CLBPort: listening port of the load balancing instance.
When ValueType is UserDefined, it is a printable character of 1 to 128 characters in length. It does not support ". It cannot be space at the beginning and ending, and cannot be \ at the end.
When ValueType is ReferenceHeader, refer to a header in the request header. It must be 1–128 printable characters. It does not support ". It cannot begin or end with a space, and cannot end with \.
     */
    public $Value;

    /**
     * @var string Type of the HTTP Header value. Value:
SystemDefined: system defined header.
UserDefined: user-defined header.
ReferenceHeader: refers to one header in the request header.
     */
    public $ValueType;

    /**
     * @param string $Key Key of the inserted HTTP Header. Length: 1–40 characters. Supported character sets: a-z, a-z, 0-9, -, and _.
Chinese characters are not allowed. No support for Cookie, Host, Content-Length, Connection, Upgrade, transfer-encoding, keep-alive, te, authority, x-forwarded-for, x-forwarded-proto, x-forwarded-host, and x-forwarded-port.
     * @param string $Value Type of the HTTP Header value.
When ValueType is SystemDefined, the value range is as follows: ClientPort: client port, ClientIp: client IP address, Protocol: protocol of client requests, CLBPort: listening port of the load balancing instance.
When ValueType is UserDefined, it is a printable character of 1 to 128 characters in length. It does not support ". It cannot be space at the beginning and ending, and cannot be \ at the end.
When ValueType is ReferenceHeader, refer to a header in the request header. It must be 1–128 printable characters. It does not support ". It cannot begin or end with a space, and cannot end with \.
     * @param string $ValueType Type of the HTTP Header value. Value:
SystemDefined: system defined header.
UserDefined: user-defined header.
ReferenceHeader: refers to one header in the request header.
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

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
