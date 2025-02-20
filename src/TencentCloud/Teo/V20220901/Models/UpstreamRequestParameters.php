<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Origin-pull request parameters configuration.
 *
 * @method UpstreamRequestQueryString getQueryString() Obtain Query string configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setQueryString(UpstreamRequestQueryString $QueryString) Set Query string configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method UpstreamRequestCookie getCookie() Obtain Cookie configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setCookie(UpstreamRequestCookie $Cookie) Set Cookie configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class UpstreamRequestParameters extends AbstractModel
{
    /**
     * @var UpstreamRequestQueryString Query string configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $QueryString;

    /**
     * @var UpstreamRequestCookie Cookie configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $Cookie;

    /**
     * @param UpstreamRequestQueryString $QueryString Query string configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param UpstreamRequestCookie $Cookie Cookie configuration. optional. if not provided, it will not be configured.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
