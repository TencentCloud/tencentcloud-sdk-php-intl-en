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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cache time settings
 *
 * @method string getSwitch() Obtain Cache configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSwitch(string $Switch) Set Cache configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getCacheTime() Obtain Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCacheTime(integer $CacheTime) Set Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIgnoreCacheControl() Obtain Specifies whether to enable force cache
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Specifies whether to enable force cache
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class CacheConfigCache extends AbstractModel
{
    /**
     * @var string Cache configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Switch;

    /**
     * @var integer Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CacheTime;

    /**
     * @var string Specifies whether to enable force cache
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IgnoreCacheControl;

    /**
     * @param string $Switch Cache configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $CacheTime Cache expiration time settings
Unit: second. The maximum value is 365 days.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IgnoreCacheControl Specifies whether to enable force cache
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
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
