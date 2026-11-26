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
 * Waf rule
 *
 * @method string getSwitch() Obtain Managed rule switch. Valid values:
<li> on: enabled;</li>
<li> off: disabled</li>
 * @method void setSwitch(string $Switch) Set Managed rule switch. Valid values:
<li> on: enabled;</li>
<li> off: disabled</li>
 * @method array getBlockRuleIDs() Obtain List of blocklisted IDs. Adding a rule ID to this parameter list disables the ID, meaning the rule ID no longer takes effect.
 * @method void setBlockRuleIDs(array $BlockRuleIDs) Set List of blocklisted IDs. Adding a rule ID to this parameter list disables the ID, meaning the rule ID no longer takes effect.
 * @method array getObserveRuleIDs() Obtain List of observation mode IDs. Add a rule ID to this parameter list to make the ID take effect in observation mode, that is, the rule ID enters observation mode.
 * @method void setObserveRuleIDs(array $ObserveRuleIDs) Set List of observation mode IDs. Add a rule ID to this parameter list to make the ID take effect in observation mode, that is, the rule ID enters observation mode.
 */
class WafRule extends AbstractModel
{
    /**
     * @var string Managed rule switch. Valid values:
<li> on: enabled;</li>
<li> off: disabled</li>
     */
    public $Switch;

    /**
     * @var array List of blocklisted IDs. Adding a rule ID to this parameter list disables the ID, meaning the rule ID no longer takes effect.
     */
    public $BlockRuleIDs;

    /**
     * @var array List of observation mode IDs. Add a rule ID to this parameter list to make the ID take effect in observation mode, that is, the rule ID enters observation mode.
     */
    public $ObserveRuleIDs;

    /**
     * @param string $Switch Managed rule switch. Valid values:
<li> on: enabled;</li>
<li> off: disabled</li>
     * @param array $BlockRuleIDs List of blocklisted IDs. Adding a rule ID to this parameter list disables the ID, meaning the rule ID no longer takes effect.
     * @param array $ObserveRuleIDs List of observation mode IDs. Add a rule ID to this parameter list to make the ID take effect in observation mode, that is, the rule ID enters observation mode.
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
