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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path cache configuration
 *
 * @method string getSwitch() Obtain Cache configuration switch: <li>on:enable；</li> <li>off: disable.</li>
 * @method void setSwitch(string $Switch) Set Cache configuration switch: <li>on:enable；</li> <li>off: disable.</li>
 * @method integer getCacheTime() Obtain Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
 * @method void setCacheTime(integer $CacheTime) Set Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
 * @method string getCompareMaxAge() Obtain Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node: <li>on: Enable;</li> <li>off: Disable.</li>
 * @method void setCompareMaxAge(string $CompareMaxAge) Set Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node: <li>on: Enable;</li> <li>off: Disable.</li>
 * @method string getIgnoreCacheControl() Obtain Force cache: <li>on: Enable;</li> <li>off: Disable.</li>
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Force cache: <li>on: Enable;</li> <li>off: Disable.</li>
 * @method string getIgnoreSetCookie() Obtain Whether to ignore the header and body on cache nodes if the origin server returns the header Set-Cookie. <li>on: Ignore; do not cache the header and body.</li> <li>off: Do not ignore; follow the custom cache rules of cache nodes.</li>
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) Set Whether to ignore the header and body on cache nodes if the origin server returns the header Set-Cookie. <li>on: Ignore; do not cache the header and body.</li> <li>off: Do not ignore; follow the custom cache rules of cache nodes.</li>
 */
class CacheConfigCache extends AbstractModel
{
    /**
     * @var string Cache configuration switch: <li>on:enable；</li> <li>off: disable.</li>
     */
    public $Switch;

    /**
     * @var integer Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
     */
    public $CacheTime;

    /**
     * @var string Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node: <li>on: Enable;</li> <li>off: Disable.</li>
     */
    public $CompareMaxAge;

    /**
     * @var string Force cache: <li>on: Enable;</li> <li>off: Disable.</li>
     */
    public $IgnoreCacheControl;

    /**
     * @var string Whether to ignore the header and body on cache nodes if the origin server returns the header Set-Cookie. <li>on: Ignore; do not cache the header and body.</li> <li>off: Do not ignore; follow the custom cache rules of cache nodes.</li>
     */
    public $IgnoreSetCookie;

    /**
     * @param string $Switch Cache configuration switch: <li>on:enable；</li> <li>off: disable.</li>
     * @param integer $CacheTime Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
     * @param string $CompareMaxAge Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node: <li>on: Enable;</li> <li>off: Disable.</li>
     * @param string $IgnoreCacheControl Force cache: <li>on: Enable;</li> <li>off: Disable.</li>
     * @param string $IgnoreSetCookie Whether to ignore the header and body on cache nodes if the origin server returns the header Set-Cookie. <li>on: Ignore; do not cache the header and body.</li> <li>off: Do not ignore; follow the custom cache rules of cache nodes.</li>
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
