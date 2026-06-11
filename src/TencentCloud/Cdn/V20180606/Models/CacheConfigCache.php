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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path cache configuration
 *
 * @method string getSwitch() Obtain Whether to enable path cache. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable path cache. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCacheTime() Obtain Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCacheTime(integer $CacheTime) Set Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCompareMaxAge() Obtain Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
`on`: Enable
`off`: Disable
This is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCompareMaxAge(string $CompareMaxAge) Set Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
`on`: Enable
`off`: Disable
This is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIgnoreCacheControl() Obtain Force cache
`on`: Enable
`off`: Disable
This is disabled by default. If enabled, the `no-store` and `no-cache` resources returned from the origin server will be cached according to `CacheRules` rules.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Force cache
`on`: Enable
`off`: Disable
This is disabled by default. If enabled, the `no-store` and `no-cache` resources returned from the origin server will be cached according to `CacheRules` rules.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIgnoreSetCookie() Obtain Whether to ignore the header and body on cache nodes if the origin server returns the header `Set-Cookie`.
`on`: Ignore; do not cache the header and body.
`off`: Do not ignore; follow the custom cache rules of cache nodes.
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) Set Whether to ignore the header and body on cache nodes if the origin server returns the header `Set-Cookie`.
`on`: Ignore; do not cache the header and body.
`off`: Do not ignore; follow the custom cache rules of cache nodes.
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getOriginMtimeCheckType() Obtain Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginMtimeCheckType(string $OriginMtimeCheckType) Set Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CacheConfigCache extends AbstractModel
{
    /**
     * @var string Whether to enable path cache. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var integer Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CacheTime;

    /**
     * @var string Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
`on`: Enable
`off`: Disable
This is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CompareMaxAge;

    /**
     * @var string Force cache
`on`: Enable
`off`: Disable
This is disabled by default. If enabled, the `no-store` and `no-cache` resources returned from the origin server will be cached according to `CacheRules` rules.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IgnoreCacheControl;

    /**
     * @var string Whether to ignore the header and body on cache nodes if the origin server returns the header `Set-Cookie`.
`on`: Ignore; do not cache the header and body.
`off`: Do not ignore; follow the custom cache rules of cache nodes.
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IgnoreSetCookie;

    /**
     * @var string Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginMtimeCheckType;

    /**
     * @param string $Switch Whether to enable path cache. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $CacheTime Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CompareMaxAge Advanced cache expiration configuration. If this is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
`on`: Enable
`off`: Disable
This is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IgnoreCacheControl Force cache
`on`: Enable
`off`: Disable
This is disabled by default. If enabled, the `no-store` and `no-cache` resources returned from the origin server will be cached according to `CacheRules` rules.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IgnoreSetCookie Whether to ignore the header and body on cache nodes if the origin server returns the header `Set-Cookie`.
`on`: Ignore; do not cache the header and body.
`off`: Do not ignore; follow the custom cache rules of cache nodes.
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $OriginMtimeCheckType Whether to enable origin server mtime verification after cache expires. valid values: equal, since, none, and null. default value: equal, which validates the origin server file's mtime and length. domains created prior to 2024-09-12 18:00 default to null, with behavior remaining unchanged.
equal: the mtime in the origin server response must match the mtime in the cache. if there is a difference in parameter values, purge the cache.
since: purges cache if the origin server response mtime is larger than the cache mtime.
none: when the cache expires and the file is retrieved from the origin server again to get the mtime and Length, it does not validate the mtime in the origin response. if the origin response carries a Content-Length header, the cache is updated only when the file size changes. if the origin response does not carry a Content-Length header, the cache is updated.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("OriginMtimeCheckType",$param) and $param["OriginMtimeCheckType"] !== null) {
            $this->OriginMtimeCheckType = $param["OriginMtimeCheckType"];
        }
    }
}
