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
 * ModifyL7AccRule request structure.
 *
 * @method string getZoneId() Obtain Zone id.
 * @method void setZoneId(string $ZoneId) Set Zone id.
 * @method RuleEngineItem getRule() Obtain Rules to be modified. you can first obtain the ruleid of the rule to be modified through the describel7accrules api, then pass in the modified rule content. the original rule content will be updated in an overriding manner.
 * @method void setRule(RuleEngineItem $Rule) Set Rules to be modified. you can first obtain the ruleid of the rule to be modified through the describel7accrules api, then pass in the modified rule content. the original rule content will be updated in an overriding manner.
 */
class ModifyL7AccRuleRequest extends AbstractModel
{
    /**
     * @var string Zone id.
     */
    public $ZoneId;

    /**
     * @var RuleEngineItem Rules to be modified. you can first obtain the ruleid of the rule to be modified through the describel7accrules api, then pass in the modified rule content. the original rule content will be updated in an overriding manner.
     */
    public $Rule;

    /**
     * @param string $ZoneId Zone id.
     * @param RuleEngineItem $Rule Rules to be modified. you can first obtain the ruleid of the rule to be modified through the describel7accrules api, then pass in the modified rule content. the original rule content will be updated in an overriding manner.
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
