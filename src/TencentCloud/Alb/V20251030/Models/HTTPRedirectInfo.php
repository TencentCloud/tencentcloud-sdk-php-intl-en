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
 * HTTP redirection information
 *
 * @method integer getHttpCode() Obtain <p>HTTP code for redirection. Supports 301, 302, 303, 307, and 308.</p>
 * @method void setHttpCode(integer $HttpCode) Set <p>HTTP code for redirection. Supports 301, 302, 303, 307, and 308.</p>
 * @method string getHost() Obtain <p>Redirected host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
 * @method void setHost(string $Host) Set <p>Redirected host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
 * @method string getPath() Obtain <p>Redirect path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
 * @method void setPath(string $Path) Set <p>Redirect path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
 * @method string getPort() Obtain <p>The port for redirection. Default value: ${port}. Value range: 1-65535.</p>
 * @method void setPort(string $Port) Set <p>The port for redirection. Default value: ${port}. Value range: 1-65535.</p>
 * @method string getProtocol() Obtain <p>Protocol for redirection. Valid values: HTTP and HTTPS. Default value: ${protocol}.</p>
 * @method void setProtocol(string $Protocol) Set <p>Protocol for redirection. Valid values: HTTP and HTTPS. Default value: ${protocol}.</p>
 * @method string getQuery() Obtain <p>Query string for redirect. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}&lt;&gt;&amp; and spaces.</p>
 * @method void setQuery(string $Query) Set <p>Query string for redirect. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}&lt;&gt;&amp; and spaces.</p>
 */
class HTTPRedirectInfo extends AbstractModel
{
    /**
     * @var integer <p>HTTP code for redirection. Supports 301, 302, 303, 307, and 308.</p>
     */
    public $HttpCode;

    /**
     * @var string <p>Redirected host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
     */
    public $Host;

    /**
     * @var string <p>Redirect path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
     */
    public $Path;

    /**
     * @var string <p>The port for redirection. Default value: ${port}. Value range: 1-65535.</p>
     */
    public $Port;

    /**
     * @var string <p>Protocol for redirection. Valid values: HTTP and HTTPS. Default value: ${protocol}.</p>
     */
    public $Protocol;

    /**
     * @var string <p>Query string for redirect. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}&lt;&gt;&amp; and spaces.</p>
     */
    public $Query;

    /**
     * @param integer $HttpCode <p>HTTP code for redirection. Supports 301, 302, 303, 307, and 308.</p>
     * @param string $Host <p>Redirected host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
     * @param string $Path <p>Redirect path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
     * @param string $Port <p>The port for redirection. Default value: ${port}. Value range: 1-65535.</p>
     * @param string $Protocol <p>Protocol for redirection. Valid values: HTTP and HTTPS. Default value: ${protocol}.</p>
     * @param string $Query <p>Query string for redirect. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}&lt;&gt;&amp; and spaces.</p>
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
        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
