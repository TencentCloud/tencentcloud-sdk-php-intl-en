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
 * Cache time settings
 *
 * @method string getSwitch() Obtain Whether to enable cache configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable cache configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method integer getCacheTime() Obtain Specifies the cache expiration time settings.
Unit: seconds. the maximum settable value is 365 days.
 * @method void setCacheTime(integer $CacheTime) Set Specifies the cache expiration time settings.
Unit: seconds. the maximum settable value is 365 days.
 * @method string getIgnoreCacheControl() Obtain Whether to enable force cache. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Whether to enable force cache. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Cache extends AbstractModel
{
    /**
     * @var string Whether to enable cache configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var integer Specifies the cache expiration time settings.
Unit: seconds. the maximum settable value is 365 days.
     */
    public $CacheTime;

    /**
     * @var string Whether to enable force cache. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $IgnoreCacheControl;

    /**
     * @param string $Switch Whether to enable cache configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param integer $CacheTime Specifies the cache expiration time settings.
Unit: seconds. the maximum settable value is 365 days.
     * @param string $IgnoreCacheControl Whether to enable force cache. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
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

        if (array_key_exists("IgnoreCacheControl",$param) and $param["IgnoreCacheControl"] !== null) {
            $this->IgnoreCacheControl = $param["IgnoreCacheControl"];
        }
    }
}
