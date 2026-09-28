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
 * Session persistence configuration.
 *
 * @method boolean getStickySessionEnabled() Obtain Whether to enable session persistence.
- **true**: enabled.
- **false**: not enabled.
 * @method void setStickySessionEnabled(boolean $StickySessionEnabled) Set Whether to enable session persistence.
- **true**: enabled.
- **false**: not enabled.
 * @method string getCookie() Obtain Custom Cookie name.
Length: 1-255 characters. It can only contain English letters and digits, and cannot be `tgw_l7_tg_route`. This field is a reserved field for the session persistence Cookie between target groups.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
 * @method void setCookie(string $Cookie) Set Custom Cookie name.
Length: 1-255 characters. It can only contain English letters and digits, and cannot be `tgw_l7_tg_route`. This field is a reserved field for the session persistence Cookie between target groups.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
 * @method integer getCookieTimeout() Obtain Session hold time.
Value range: **1-86400**. Unit: **seconds**.
Default value: **1000**.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
 * @method void setCookieTimeout(integer $CookieTimeout) Set Session hold time.
Value range: **1-86400**. Unit: **seconds**.
Default value: **1000**.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
 * @method string getStickySessionType() Obtain Session persistence type (the way cookies are handled).
- **Insert** (default value): Embed a Cookie. When a client accesses the backend service for the first time, the application CLB will embed a Cookie in the Return Request. The next time the client carries this Cookie in a request, load balancing will forward the request to the same backend service as last time.
- **Rewrite**: Rewrite the Cookie. Load balancing rewrites the user-defined Cookie. The next client request carries the Cookie, and load balancing forwards the request to the same backend service as the last request.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
 * @method void setStickySessionType(string $StickySessionType) Set Session persistence type (the way cookies are handled).
- **Insert** (default value): Embed a Cookie. When a client accesses the backend service for the first time, the application CLB will embed a Cookie in the Return Request. The next time the client carries this Cookie in a request, load balancing will forward the request to the same backend service as last time.
- **Rewrite**: Rewrite the Cookie. Load balancing rewrites the user-defined Cookie. The next client request carries the Cookie, and load balancing forwards the request to the same backend service as the last request.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
 */
class StickySessionConfig extends AbstractModel
{
    /**
     * @var boolean Whether to enable session persistence.
- **true**: enabled.
- **false**: not enabled.
     */
    public $StickySessionEnabled;

    /**
     * @var string Custom Cookie name.
Length: 1-255 characters. It can only contain English letters and digits, and cannot be `tgw_l7_tg_route`. This field is a reserved field for the session persistence Cookie between target groups.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
     */
    public $Cookie;

    /**
     * @var integer Session hold time.
Value range: **1-86400**. Unit: **seconds**.
Default value: **1000**.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
     */
    public $CookieTimeout;

    /**
     * @var string Session persistence type (the way cookies are handled).
- **Insert** (default value): Embed a Cookie. When a client accesses the backend service for the first time, the application CLB will embed a Cookie in the Return Request. The next time the client carries this Cookie in a request, load balancing will forward the request to the same backend service as last time.
- **Rewrite**: Rewrite the Cookie. Load balancing rewrites the user-defined Cookie. The next client request carries the Cookie, and load balancing forwards the request to the same backend service as the last request.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
     */
    public $StickySessionType;

    /**
     * @param boolean $StickySessionEnabled Whether to enable session persistence.
- **true**: enabled.
- **false**: not enabled.
     * @param string $Cookie Custom Cookie name.
Length: 1-255 characters. It can only contain English letters and digits, and cannot be `tgw_l7_tg_route`. This field is a reserved field for the session persistence Cookie between target groups.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
     * @param integer $CookieTimeout Session hold time.
Value range: **1-86400**. Unit: **seconds**.
Default value: **1000**.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
     * @param string $StickySessionType Session persistence type (the way cookies are handled).
- **Insert** (default value): Embed a Cookie. When a client accesses the backend service for the first time, the application CLB will embed a Cookie in the Return Request. The next time the client carries this Cookie in a request, load balancing will forward the request to the same backend service as last time.
- **Rewrite**: Rewrite the Cookie. Load balancing rewrites the user-defined Cookie. The next client request carries the Cookie, and load balancing forwards the request to the same backend service as the last request.
>This parameter takes effect only when **StickySessionEnabled** is **true**.
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
        if (array_key_exists("StickySessionEnabled",$param) and $param["StickySessionEnabled"] !== null) {
            $this->StickySessionEnabled = $param["StickySessionEnabled"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }

        if (array_key_exists("CookieTimeout",$param) and $param["CookieTimeout"] !== null) {
            $this->CookieTimeout = $param["CookieTimeout"];
        }

        if (array_key_exists("StickySessionType",$param) and $param["StickySessionType"] !== null) {
            $this->StickySessionType = $param["StickySessionType"];
        }
    }
}
