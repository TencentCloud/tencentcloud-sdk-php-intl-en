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
 * Following origin server configuration for caching.
 *
 * @method string getSwitch() Obtain Whether to enable the configuration of following the origin server. Valid values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable the configuration of following the origin server. Valid values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method string getDefaultCache() Obtain Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on; otherwise, it is ineffective. Valid values:
<li>on: Cache.</li>
<li>off: Do not cache.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setDefaultCache(string $DefaultCache) Set Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on; otherwise, it is ineffective. Valid values:
<li>on: Cache.</li>
<li>off: Do not cache.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getDefaultCacheStrategy() Obtain Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheTime is not 0, this field should be off. Valid values:
<li>on: Use the default caching policy.</li>
<li>off: Do not use the default caching policy.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setDefaultCacheStrategy(string $DefaultCacheStrategy) Set Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheTime is not 0, this field should be off. Valid values:
<li>on: Use the default caching policy.</li>
<li>off: Do not use the default caching policy.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method integer getDefaultCacheTime() Obtain The default cache time in seconds when an origin server does not return the Cache-Control header. The value ranges from 0 to 315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field should be 0.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setDefaultCacheTime(integer $DefaultCacheTime) Set The default cache time in seconds when an origin server does not return the Cache-Control header. The value ranges from 0 to 315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field should be 0.
Note: This field may return null, which indicates a failure to obtain a valid value.
 */
class FollowOrigin extends AbstractModel
{
    /**
     * @var string Whether to enable the configuration of following the origin server. Valid values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var string Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on; otherwise, it is ineffective. Valid values:
<li>on: Cache.</li>
<li>off: Do not cache.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $DefaultCache;

    /**
     * @var string Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheTime is not 0, this field should be off. Valid values:
<li>on: Use the default caching policy.</li>
<li>off: Do not use the default caching policy.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $DefaultCacheStrategy;

    /**
     * @var integer The default cache time in seconds when an origin server does not return the Cache-Control header. The value ranges from 0 to 315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field should be 0.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $DefaultCacheTime;

    /**
     * @param string $Switch Whether to enable the configuration of following the origin server. Valid values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param string $DefaultCache Whether to cache when an origin server does not return the Cache-Control header. This field is required when Switch is on; otherwise, it is ineffective. Valid values:
<li>on: Cache.</li>
<li>off: Do not cache.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $DefaultCacheStrategy Whether to use the default caching policy when an origin server does not return the Cache-Control header. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheTime is not 0, this field should be off. Valid values:
<li>on: Use the default caching policy.</li>
<li>off: Do not use the default caching policy.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param integer $DefaultCacheTime The default cache time in seconds when an origin server does not return the Cache-Control header. The value ranges from 0 to 315360000. This field is required when DefaultCache is set to on; otherwise, it is ineffective. When DefaultCacheStrategy is on, this field should be 0.
Note: This field may return null, which indicates a failure to obtain a valid value.
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
