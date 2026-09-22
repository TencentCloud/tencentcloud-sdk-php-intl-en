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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path cache configuration
 *
 * @method string getSwitch() Obtain Path cache configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setSwitch(string $Switch) Set Path cache configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method integer getCacheTime() Obtain Cache expiration time settings. Unit: second. The maximum value is 365 days.
 * @method void setCacheTime(integer $CacheTime) Set Cache expiration time settings. Unit: second. The maximum value is 365 days.
 * @method string getCompareMaxAge() Obtain Advanced cache expiration configuration. When enabled, the max-age value returned by the origin server is compared with the cache expiration time set in CacheRules, and the minimum value is used for node caching. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setCompareMaxAge(string $CompareMaxAge) Set Advanced cache expiration configuration. When enabled, the max-age value returned by the origin server is compared with the cache expiration time set in CacheRules, and the minimum value is used for node caching. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method string getIgnoreCacheControl() Obtain Force cache. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Force cache. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method string getIgnoreSetCookie() Obtain Whether to cache the Set-Cookie header and body on the node when the origin server returns the header.
<li>on: Enable. Do not cache the header or body;</li>
<li>`off`: disabled, following user-defined node cache rules.</li>
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) Set Whether to cache the Set-Cookie header and body on the node when the origin server returns the header.
<li>on: Enable. Do not cache the header or body;</li>
<li>`off`: disabled, following user-defined node cache rules.</li>
 */
class CacheConfigCache extends AbstractModel
{
    /**
     * @var string Path cache configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Switch;

    /**
     * @var integer Cache expiration time settings. Unit: second. The maximum value is 365 days.
     */
    public $CacheTime;

    /**
     * @var string Advanced cache expiration configuration. When enabled, the max-age value returned by the origin server is compared with the cache expiration time set in CacheRules, and the minimum value is used for node caching. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $CompareMaxAge;

    /**
     * @var string Force cache. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $IgnoreCacheControl;

    /**
     * @var string Whether to cache the Set-Cookie header and body on the node when the origin server returns the header.
<li>on: Enable. Do not cache the header or body;</li>
<li>`off`: disabled, following user-defined node cache rules.</li>
     */
    public $IgnoreSetCookie;

    /**
     * @param string $Switch Path cache configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param integer $CacheTime Cache expiration time settings. Unit: second. The maximum value is 365 days.
     * @param string $CompareMaxAge Advanced cache expiration configuration. When enabled, the max-age value returned by the origin server is compared with the cache expiration time set in CacheRules, and the minimum value is used for node caching. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param string $IgnoreCacheControl Force cache. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param string $IgnoreSetCookie Whether to cache the Set-Cookie header and body on the node when the origin server returns the header.
<li>on: Enable. Do not cache the header or body;</li>
<li>`off`: disabled, following user-defined node cache rules.</li>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }

        if (array_key_exists("CompareMaxAge",$param) and $param["CompareMaxAge"] !== null) {
            $this->CompareMaxAge = $param["CompareMaxAge"];
        }

        if (array_key_exists("IgnoreCacheControl",$param) and $param["IgnoreCacheControl"] !== null) {
            $this->IgnoreCacheControl = $param["IgnoreCacheControl"];
        }

        if (array_key_exists("IgnoreSetCookie",$param) and $param["IgnoreSetCookie"] !== null) {
            $this->IgnoreSetCookie = $param["IgnoreSetCookie"];
        }
    }
}
