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
 * Access URL redirect configuration parameters.
 *
 * @method integer getStatusCode() Obtain <p>Status code, value is one of 301, 302, 303, 307, 308.</p>
 * @method void setStatusCode(integer $StatusCode) Set <p>Status code, value is one of 301, 302, 303, 307, 308.</p>
 * @method string getProtocol() Obtain <p>Target request protocol.</p><p>Enumeration values:</p><ul><li>http: The target request protocol is HTTP.</li><li>https: The target request protocol is HTTPS.</li><li>follow: Follow request.</li></ul>
 * @method void setProtocol(string $Protocol) Set <p>Target request protocol.</p><p>Enumeration values:</p><ul><li>http: The target request protocol is HTTP.</li><li>https: The target request protocol is HTTPS.</li><li>follow: Follow request.</li></ul>
 * @method HostName getHostName() Obtain <p>Target HostName.</p>
 * @method void setHostName(HostName $HostName) Set <p>Target HostName.</p>
 * @method URLPath getURLPath() Obtain <p>Target path.</p>
 * @method void setURLPath(URLPath $URLPath) Set <p>Target path.</p>
 * @method AccessURLRedirectQueryString getQueryString() Obtain <p>Query string.</p>
 * @method void setQueryString(AccessURLRedirectQueryString $QueryString) Set <p>Query string.</p>
 */
class AccessURLRedirectParameters extends AbstractModel
{
    /**
     * @var integer <p>Status code, value is one of 301, 302, 303, 307, 308.</p>
     */
    public $StatusCode;

    /**
     * @var string <p>Target request protocol.</p><p>Enumeration values:</p><ul><li>http: The target request protocol is HTTP.</li><li>https: The target request protocol is HTTPS.</li><li>follow: Follow request.</li></ul>
     */
    public $Protocol;

    /**
     * @var HostName <p>Target HostName.</p>
     */
    public $HostName;

    /**
     * @var URLPath <p>Target path.</p>
     */
    public $URLPath;

    /**
     * @var AccessURLRedirectQueryString <p>Query string.</p>
     */
    public $QueryString;

    /**
     * @param integer $StatusCode <p>Status code, value is one of 301, 302, 303, 307, 308.</p>
     * @param string $Protocol <p>Target request protocol.</p><p>Enumeration values:</p><ul><li>http: The target request protocol is HTTP.</li><li>https: The target request protocol is HTTPS.</li><li>follow: Follow request.</li></ul>
     * @param HostName $HostName <p>Target HostName.</p>
     * @param URLPath $URLPath <p>Target path.</p>
     * @param AccessURLRedirectQueryString $QueryString <p>Query string.</p>
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = new HostName();
            $this->HostName->deserialize($param["HostName"]);
        }

        if (array_key_exists("URLPath",$param) and $param["URLPath"] !== null) {
            $this->URLPath = new URLPath();
            $this->URLPath->deserialize($param["URLPath"]);
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new AccessURLRedirectQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
