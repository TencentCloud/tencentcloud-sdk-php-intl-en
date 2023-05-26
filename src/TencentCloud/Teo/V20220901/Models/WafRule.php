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
 * WAF rule
 *
 * @method string getSwitch() Obtain Whether to enable managed rules. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable managed rules. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method array getBlockRuleIDs() Obtain IDs of the rules to be disabled.
 * @method void setBlockRuleIDs(array $BlockRuleIDs) Set IDs of the rules to be disabled.
 * @method array getObserveRuleIDs() Obtain IDs of the rules to be executed in Observe mode.
 * @method void setObserveRuleIDs(array $ObserveRuleIDs) Set IDs of the rules to be executed in Observe mode.
 */
class WafRule extends AbstractModel
{
    /**
     * @var string Whether to enable managed rules. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var array IDs of the rules to be disabled.
     */
    public $BlockRuleIDs;

    /**
     * @var array IDs of the rules to be executed in Observe mode.
     */
    public $ObserveRuleIDs;

    /**
     * @param string $Switch Whether to enable managed rules. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param array $BlockRuleIDs IDs of the rules to be disabled.
     * @param array $ObserveRuleIDs IDs of the rules to be executed in Observe mode.
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

        if (array_key_exists("BlockRuleIDs",$param) and $param["BlockRuleIDs"] !== null) {
            $this->BlockRuleIDs = $param["BlockRuleIDs"];
        }

        if (array_key_exists("ObserveRuleIDs",$param) and $param["ObserveRuleIDs"] !== null) {
            $this->ObserveRuleIDs = $param["ObserveRuleIDs"];
        }
    }
}
