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
 * ModifyL7AccRule request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method RuleEngineItem getRule() Obtain Rule to modify. You can first call the DescribeL7AccRules API to get the Ruleid of the rule to modify, then input the modified rule content. The original rule content will be overwritten.
 * @method void setRule(RuleEngineItem $Rule) Set Rule to modify. You can first call the DescribeL7AccRules API to get the Ruleid of the rule to modify, then input the modified rule content. The original rule content will be overwritten.
 */
class ModifyL7AccRuleRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var RuleEngineItem Rule to modify. You can first call the DescribeL7AccRules API to get the Ruleid of the rule to modify, then input the modified rule content. The original rule content will be overwritten.
     */
    public $Rule;

    /**
     * @param string $ZoneId Zone ID.
     * @param RuleEngineItem $Rule Rule to modify. You can first call the DescribeL7AccRules API to get the Ruleid of the rule to modify, then input the modified rule content. The original rule content will be overwritten.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new RuleEngineItem();
            $this->Rule->deserialize($param["Rule"]);
        }
    }
}
