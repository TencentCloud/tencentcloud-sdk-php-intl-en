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
 * Affinity configurations based on session ID.
 *
 * @method string getSource() Obtain <p>Transmission location of the session ID parameter. If left empty, it defaults to Header.</p><p>Enumeration values:</p><ul><li>Header: Pass the parameter in the request header.</li></ul><p>Default value: Header.</p>
 * @method void setSource(string $Source) Set <p>Transmission location of the session ID parameter. If left empty, it defaults to Header.</p><p>Enumeration values:</p><ul><li>Header: Pass the parameter in the request header.</li></ul><p>Default value: Header.</p>
 * @method string getHeaderName() Obtain <p>Request header name for transmitting the session ID. Required when Source is Header.<br>If left empty, it defaults to EO-Infer-Session-Id.</p><p>Input limits: 1-64 characters in length. Only letters, digits, and hyphens are supported.</p><p>Default value: EO-Infer-Session-Id.</p>
 * @method void setHeaderName(string $HeaderName) Set <p>Request header name for transmitting the session ID. Required when Source is Header.<br>If left empty, it defaults to EO-Infer-Session-Id.</p><p>Input limits: 1-64 characters in length. Only letters, digits, and hyphens are supported.</p><p>Default value: EO-Infer-Session-Id.</p>
 */
class SessionIdAffinityConfig extends AbstractModel
{
    /**
     * @var string <p>Transmission location of the session ID parameter. If left empty, it defaults to Header.</p><p>Enumeration values:</p><ul><li>Header: Pass the parameter in the request header.</li></ul><p>Default value: Header.</p>
     */
    public $Source;

    /**
     * @var string <p>Request header name for transmitting the session ID. Required when Source is Header.<br>If left empty, it defaults to EO-Infer-Session-Id.</p><p>Input limits: 1-64 characters in length. Only letters, digits, and hyphens are supported.</p><p>Default value: EO-Infer-Session-Id.</p>
     */
    public $HeaderName;

    /**
     * @param string $Source <p>Transmission location of the session ID parameter. If left empty, it defaults to Header.</p><p>Enumeration values:</p><ul><li>Header: Pass the parameter in the request header.</li></ul><p>Default value: Header.</p>
     * @param string $HeaderName <p>Request header name for transmitting the session ID. Required when Source is Header.<br>If left empty, it defaults to EO-Infer-Session-Id.</p><p>Input limits: 1-64 characters in length. Only letters, digits, and hyphens are supported.</p><p>Default value: EO-Infer-Session-Id.</p>
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}
