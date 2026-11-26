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
 * Custom Cache Key HTTP request header configuration parameters.
 *
 * @method string getSwitch() Obtain Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method array getValues() Obtain List of custom Cache Key HTTP request headers.<br>Note: This field is required when Switch is on. It is not required when Switch is off, and will not take effect if specified.
 * @method void setValues(array $Values) Set List of custom Cache Key HTTP request headers.<br>Note: This field is required when Switch is on. It is not required when Switch is off, and will not take effect if specified.
 */
class CacheKeyHeader extends AbstractModel
{
    /**
     * @var string Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var array List of custom Cache Key HTTP request headers.<br>Note: This field is required when Switch is on. It is not required when Switch is off, and will not take effect if specified.
     */
    public $Values;

    /**
     * @param string $Switch Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param array $Values List of custom Cache Key HTTP request headers.<br>Note: This field is required when Switch is on. It is not required when Switch is off, and will not take effect if specified.
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
