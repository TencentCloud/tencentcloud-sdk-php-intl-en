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
 * Back-to-origin HTTPS configuration parameter.
 *
 * @method string getProtocol() Obtain Origin-pull protocol configuration, with values:
<li>http: Use HTTP protocol for origin-pull;</li>
<li>https: Use the HTTPS protocol for origin-pull;</li>
<li>follow: follow protocol.</li>
 * @method void setProtocol(string $Protocol) Set Origin-pull protocol configuration, with values:
<li>http: Use HTTP protocol for origin-pull;</li>
<li>https: Use the HTTPS protocol for origin-pull;</li>
<li>follow: follow protocol.</li>
 */
class OriginPullProtocolParameters extends AbstractModel
{
    /**
     * @var string Origin-pull protocol configuration, with values:
<li>http: Use HTTP protocol for origin-pull;</li>
<li>https: Use the HTTPS protocol for origin-pull;</li>
<li>follow: follow protocol.</li>
     */
    public $Protocol;

    /**
     * @param string $Protocol Origin-pull protocol configuration, with values:
<li>http: Use HTTP protocol for origin-pull;</li>
<li>https: Use the HTTPS protocol for origin-pull;</li>
<li>follow: follow protocol.</li>
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
