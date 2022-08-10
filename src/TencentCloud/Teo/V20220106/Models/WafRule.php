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
 * WAF rule
 *
 * @method array getBlockRuleIDs() Obtain Blocklist
 * @method void setBlockRuleIDs(array $BlockRuleIDs) Set Blocklist
 * @method string getSwitch() Obtain Whether the WAF rule is enabled or disabled
 * @method void setSwitch(string $Switch) Set Whether the WAF rule is enabled or disabled
 * @method array getObserveRuleIDs() Obtain Observe mode
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setObserveRuleIDs(array $ObserveRuleIDs) Set Observe mode
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class WafRule extends AbstractModel
{
    /**
     * @var array Blocklist
     */
    public $BlockRuleIDs;

    /**
     * @var string Whether the WAF rule is enabled or disabled
     */
    public $Switch;

    /**
     * @var array Observe mode
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ObserveRuleIDs;

    /**
     * @param array $BlockRuleIDs Blocklist
     * @param string $Switch Whether the WAF rule is enabled or disabled
     * @param array $ObserveRuleIDs Observe mode
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
        if (array_key_exists("BlockRuleIDs",$param) and $param["BlockRuleIDs"] !== null) {
            $this->BlockRuleIDs = $param["BlockRuleIDs"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ObserveRuleIDs",$param) and $param["ObserveRuleIDs"] !== null) {
            $this->ObserveRuleIDs = $param["ObserveRuleIDs"];
        }
    }
}
