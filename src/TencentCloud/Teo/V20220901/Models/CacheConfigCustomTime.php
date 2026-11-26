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
 * Node cache TTL custom cache time config.
 *
 * @method string getSwitch() Obtain Custom cache time switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Custom cache time switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method integer getCacheTime() Obtain Custom cache time value, in seconds. Value range: 0-315360000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 * @method void setCacheTime(integer $CacheTime) Set Custom cache time value, in seconds. Value range: 0-315360000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 */
class CacheConfigCustomTime extends AbstractModel
{
    /**
     * @var string Custom cache time switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer Custom cache time value, in seconds. Value range: 0-315360000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
     */
    public $CacheTime;

    /**
     * @param string $Switch Custom cache time switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param integer $CacheTime Custom cache time value, in seconds. Value range: 0-315360000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
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
    }
}
