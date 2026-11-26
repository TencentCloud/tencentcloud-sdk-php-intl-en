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
 * Origin-pull request configuration parameters.
 *
 * @method UpstreamRequestQueryString getQueryString() Obtain String configuration query. This is an optional configuration. No configuration is applied if this parameter is left empty.
 * @method void setQueryString(UpstreamRequestQueryString $QueryString) Set String configuration query. This is an optional configuration. No configuration is applied if this parameter is left empty.
 * @method UpstreamRequestCookie getCookie() Obtain Cookie configuration. This is an optional configuration item. Leaving it blank means no configuration.
 * @method void setCookie(UpstreamRequestCookie $Cookie) Set Cookie configuration. This is an optional configuration item. Leaving it blank means no configuration.
 */
class UpstreamRequestParameters extends AbstractModel
{
    /**
     * @var UpstreamRequestQueryString String configuration query. This is an optional configuration. No configuration is applied if this parameter is left empty.
     */
    public $QueryString;

    /**
     * @var UpstreamRequestCookie Cookie configuration. This is an optional configuration item. Leaving it blank means no configuration.
     */
    public $Cookie;

    /**
     * @param UpstreamRequestQueryString $QueryString String configuration query. This is an optional configuration. No configuration is applied if this parameter is left empty.
     * @param UpstreamRequestCookie $Cookie Cookie configuration. This is an optional configuration item. Leaving it blank means no configuration.
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
        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new UpstreamRequestQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = new UpstreamRequestCookie();
            $this->Cookie->deserialize($param["Cookie"]);
        }
    }
}
