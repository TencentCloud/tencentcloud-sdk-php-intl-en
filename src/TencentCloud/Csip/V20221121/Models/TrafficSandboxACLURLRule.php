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
 * ACL URL, protocol, and method match rules
 *
 * @method array getURL() Obtain URL list
Input parameter limits: each item supports domain name wildcards, such as *.example.com, api.*.example.com, example.com/api/*
 * @method void setURL(array $URL) Set URL list
Input parameter limits: each item supports domain name wildcards, such as *.example.com, api.*.example.com, example.com/api/*
 * @method array getURLExcept() Obtain Excluded URL list
Input parameter limits: same format as the URL.
 * @method void setURLExcept(array $URLExcept) Set Excluded URL list
Input parameter limits: same format as the URL.
 * @method array getProtocol() Obtain Protocol type list
Enumeration values:
http: HTTP protocol
https: HTTPS protocol
 * @method void setProtocol(array $Protocol) Set Protocol type list
Enumeration values:
http: HTTP protocol
https: HTTPS protocol
 * @method array getMethod() Obtain List of HTTP methods
Enumeration values:
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
 * @method void setMethod(array $Method) Set List of HTTP methods
Enumeration values:
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
 */
class TrafficSandboxACLURLRule extends AbstractModel
{
    /**
     * @var array URL list
Input parameter limits: each item supports domain name wildcards, such as *.example.com, api.*.example.com, example.com/api/*
     */
    public $URL;

    /**
     * @var array Excluded URL list
Input parameter limits: same format as the URL.
     */
    public $URLExcept;

    /**
     * @var array Protocol type list
Enumeration values:
http: HTTP protocol
https: HTTPS protocol
     */
    public $Protocol;

    /**
     * @var array List of HTTP methods
Enumeration values:
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
     */
    public $Method;

    /**
     * @param array $URL URL list
Input parameter limits: each item supports domain name wildcards, such as *.example.com, api.*.example.com, example.com/api/*
     * @param array $URLExcept Excluded URL list
Input parameter limits: same format as the URL.
     * @param array $Protocol Protocol type list
Enumeration values:
http: HTTP protocol
https: HTTPS protocol
     * @param array $Method List of HTTP methods
Enumeration values:
GET
POST
HEAD
PUT
DELETE
OPTIONS
PATCH
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("URLExcept",$param) and $param["URLExcept"] !== null) {
            $this->URLExcept = $param["URLExcept"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
