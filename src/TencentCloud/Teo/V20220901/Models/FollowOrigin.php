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
 * Following origin server configuration for caching.
 *
 * @method string getSwitch() Obtain Follow the origin site configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Follow the origin site configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method string getDefaultCache() Obtain Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified. Valid values:
<li>`on`: cache;</li>
<li>off: Do not cache.</li>
 * @method void setDefaultCache(string $DefaultCache) Set Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified. Valid values:
<li>`on`: cache;</li>
<li>off: Do not cache.</li>
 * @method string getDefaultCacheStrategy() Obtain Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is on; otherwise, it is ineffective. This field must be off when DefaultCacheTime is not 0. Valid values:
<li>on: Use the default caching policy;</li>
<li>off: Do not use the default caching policy.</li>
 * @method void setDefaultCacheStrategy(string $DefaultCacheStrategy) Set Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is on; otherwise, it is ineffective. This field must be off when DefaultCacheTime is not 0. Valid values:
<li>on: Use the default caching policy;</li>
<li>off: Do not use the default caching policy.</li>
 * @method integer getDefaultCacheTime() Obtain The default cache time in seconds when an origin server does not return the Cache-Control header. Value range: 0-315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field must be 0.
 * @method void setDefaultCacheTime(integer $DefaultCacheTime) Set The default cache time in seconds when an origin server does not return the Cache-Control header. Value range: 0-315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field must be 0.
 */
class FollowOrigin extends AbstractModel
{
    /**
     * @var string Follow the origin site configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var string Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified. Valid values:
<li>`on`: cache;</li>
<li>off: Do not cache.</li>
     */
    public $DefaultCache;

    /**
     * @var string Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is on; otherwise, it is ineffective. This field must be off when DefaultCacheTime is not 0. Valid values:
<li>on: Use the default caching policy;</li>
<li>off: Do not use the default caching policy.</li>
     */
    public $DefaultCacheStrategy;

    /**
     * @var integer The default cache time in seconds when an origin server does not return the Cache-Control header. Value range: 0-315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field must be 0.
     */
    public $DefaultCacheTime;

    /**
     * @param string $Switch Follow the origin site configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param string $DefaultCache Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified. Valid values:
<li>`on`: cache;</li>
<li>off: Do not cache.</li>
     * @param string $DefaultCacheStrategy Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is on; otherwise, it is ineffective. This field must be off when DefaultCacheTime is not 0. Valid values:
<li>on: Use the default caching policy;</li>
<li>off: Do not use the default caching policy.</li>
     * @param integer $DefaultCacheTime The default cache time in seconds when an origin server does not return the Cache-Control header. Value range: 0-315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field must be 0.
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

        if (array_key_exists("DefaultCache",$param) and $param["DefaultCache"] !== null) {
            $this->DefaultCache = $param["DefaultCache"];
        }

        if (array_key_exists("DefaultCacheStrategy",$param) and $param["DefaultCacheStrategy"] !== null) {
            $this->DefaultCacheStrategy = $param["DefaultCacheStrategy"];
        }

        if (array_key_exists("DefaultCacheTime",$param) and $param["DefaultCacheTime"] !== null) {
            $this->DefaultCacheTime = $param["DefaultCacheTime"];
        }
    }
}
