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
 * Node cache TTL custom cache time configuration parameters
 *
 * @method string getSwitch() Obtain Custom cache time switch. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Custom cache time switch. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method integer getCacheTime() Obtain Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 * @method void setCacheTime(integer $CacheTime) Set Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 */
class CacheConfigCustomTime extends AbstractModel
{
    /**
     * @var string Custom cache time switch. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var integer Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
     */
    public $CacheTime;

    /**
     * @param string $Switch Custom cache time switch. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param integer $CacheTime Custom cache time value, unit: seconds. value range: 0-315360000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
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
