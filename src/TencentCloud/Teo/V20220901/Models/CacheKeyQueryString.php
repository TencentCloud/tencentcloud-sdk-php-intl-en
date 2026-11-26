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
 * Parameter for custom Cache Key query string configuration.
 *
 * @method string getSwitch() Obtain Switch to reserve or ignore specified parameters in the query string. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Switch to reserve or ignore specified parameters in the query string. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method string getAction() Obtain Action to reserve or ignore specified parameters in the query string. Valid values:
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>Note: This field is required when Switch is on. When Switch is off, this field is not required and does not take effect if filled in.
 * @method void setAction(string $Action) Set Action to reserve or ignore specified parameters in the query string. Valid values:
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>Note: This field is required when Switch is on. When Switch is off, this field is not required and does not take effect if filled in.
 * @method array getValues() Obtain List of parameter names to reserve/ignore in the query string.<br>Note: When Switch is on, this field is required; when Switch is off, no need to specify this field, and if specified, it does not take effect.
 * @method void setValues(array $Values) Set List of parameter names to reserve/ignore in the query string.<br>Note: When Switch is on, this field is required; when Switch is off, no need to specify this field, and if specified, it does not take effect.
 */
class CacheKeyQueryString extends AbstractModel
{
    /**
     * @var string Switch to reserve or ignore specified parameters in the query string. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var string Action to reserve or ignore specified parameters in the query string. Valid values:
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>Note: This field is required when Switch is on. When Switch is off, this field is not required and does not take effect if filled in.
     */
    public $Action;

    /**
     * @var array List of parameter names to reserve/ignore in the query string.<br>Note: When Switch is on, this field is required; when Switch is off, no need to specify this field, and if specified, it does not take effect.
     */
    public $Values;

    /**
     * @param string $Switch Switch to reserve or ignore specified parameters in the query string. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param string $Action Action to reserve or ignore specified parameters in the query string. Valid values:
<li>includeCustom: means to reserve some parameters;</li>
<li>excludeCustom: means to ignore some parameters.</li>Note: This field is required when Switch is on. When Switch is off, this field is not required and does not take effect if filled in.
     * @param array $Values List of parameter names to reserve/ignore in the query string.<br>Note: When Switch is on, this field is required; when Switch is off, no need to specify this field, and if specified, it does not take effect.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
