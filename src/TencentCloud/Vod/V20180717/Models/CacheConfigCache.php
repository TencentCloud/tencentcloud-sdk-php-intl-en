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
 * @method string getSwitch() Obtain Path cache configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set Path cache configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method integer getCacheTime() Obtain Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
 * @method void setCacheTime(integer $CacheTime) Set Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
 * @method string getCompareMaxAge() Obtain Advanced cache expiration configuration. When enabled, the max-age value returned by the origin site will be compared with the cache expiration time set in CacheRules, and the minimum value will be used to cache the node. Values: <li>on: enabled; </li> <li >off: off. </li>
 * @method void setCompareMaxAge(string $CompareMaxAge) Set Advanced cache expiration configuration. When enabled, the max-age value returned by the origin site will be compared with the cache expiration time set in CacheRules, and the minimum value will be used to cache the node. Values: <li>on: enabled; </li> <li >off: off. </li>
 * @method string getIgnoreCacheControl() Obtain Force caching, values: <li>on: on; </li> <li>off: off. </li>
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Force caching, values: <li>on: on; </li> <li>off: off. </li>
 * @method string getIgnoreSetCookie() Obtain When the origin site returns the Set-Cookie header, whether the node caches the header and body: <li>on: on, does not cache the header and body;</li> <li>off: off, follows user customization Node caching rules. </li>
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) Set When the origin site returns the Set-Cookie header, whether the node caches the header and body: <li>on: on, does not cache the header and body;</li> <li>off: off, follows user customization Node caching rules. </li>
 */
class CacheConfigCache extends AbstractModel
{
    /**
     * @var string Path cache configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @var integer Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
     */
    public $CacheTime;

    /**
     * @var string Advanced cache expiration configuration. When enabled, the max-age value returned by the origin site will be compared with the cache expiration time set in CacheRules, and the minimum value will be used to cache the node. Values: <li>on: enabled; </li> <li >off: off. </li>
     */
    public $CompareMaxAge;

    /**
     * @var string Force caching, values: <li>on: on; </li> <li>off: off. </li>
     */
    public $IgnoreCacheControl;

    /**
     * @var string When the origin site returns the Set-Cookie header, whether the node caches the header and body: <li>on: on, does not cache the header and body;</li> <li>off: off, follows user customization Node caching rules. </li>
     */
    public $IgnoreSetCookie;

    /**
     * @param string $Switch Path cache configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     * @param integer $CacheTime Cache expiration time settings<li>Unit: second. The maximum value is 365 days.</li>
     * @param string $CompareMaxAge Advanced cache expiration configuration. When enabled, the max-age value returned by the origin site will be compared with the cache expiration time set in CacheRules, and the minimum value will be used to cache the node. Values: <li>on: enabled; </li> <li >off: off. </li>
     * @param string $IgnoreCacheControl Force caching, values: <li>on: on; </li> <li>off: off. </li>
     * @param string $IgnoreSetCookie When the origin site returns the Set-Cookie header, whether the node caches the header and body: <li>on: on, does not cache the header and body;</li> <li>off: off, follows user customization Node caching rules. </li>
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
