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
 * HTTP rewrite information
 *
 * @method string getHost() Obtain <p>Rewritten host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
 * @method void setHost(string $Host) Set <p>Rewritten host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
 * @method string getPath() Obtain <p>Rewrite path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
 * @method void setPath(string $Path) Set <p>Rewrite path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
 * @method string getQuery() Obtain <p>Rewritten query string. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}|&lt;&gt;&amp; or spaces.</p>
 * @method void setQuery(string $Query) Set <p>Rewritten query string. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}|&lt;&gt;&amp; or spaces.</p>
 */
class HTTPRewriteInfo extends AbstractModel
{
    /**
     * @var string <p>Rewritten host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
     */
    public $Host;

    /**
     * @var string <p>Rewrite path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
     */
    public $Path;

    /**
     * @var string <p>Rewritten query string. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}|&lt;&gt;&amp; or spaces.</p>
     */
    public $Query;

    /**
     * @param string $Host <p>Rewritten host address. Default value: ${host}. Length: 3-128 characters. Supported character sets: a-z 0-9 _ . -.</p>
     * @param string $Path <p>Rewrite path. Default value: ${path}. Length: 1–128 characters. Supported character sets: a-z A-Z 0-9 ? = _ . - / : .</p>
     * @param string $Query <p>Rewritten query string. Default value: ${query}. Length: 1–128 characters. Supports printable characters. Does not support #[]{}|&lt;&gt;&amp; or spaces.</p>
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
