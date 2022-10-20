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
 * Details of the managed rule group
 *
 * @method integer getRuleTypeId() Obtain ID of the rule type.
 * @method void setRuleTypeId(integer $RuleTypeId) Set ID of the rule type.
 * @method string getRuleTypeName() Obtain The rule type.
 * @method void setRuleTypeName(string $RuleTypeName) Set The rule type.
 * @method string getRuleTypeDesc() Obtain Description of the rule type.
 * @method void setRuleTypeDesc(string $RuleTypeDesc) Set Description of the rule type.
 * @method array getWafGroupRules() Obtain List of rules.
 * @method void setWafGroupRules(array $WafGroupRules) Set List of rules.
 * @method string getLevel() Obtain The rule level.
 * @method void setLevel(string $Level) Set The rule level.
 * @method string getAction() Obtain The rule action.
 * @method void setAction(string $Action) Set The rule action.
 */
class WafGroupDetail extends AbstractModel
{
    /**
     * @var integer ID of the rule type.
     */
    public $RuleTypeId;

    /**
     * @var string The rule type.
     */
    public $RuleTypeName;

    /**
     * @var string Description of the rule type.
     */
    public $RuleTypeDesc;

    /**
     * @var array List of rules.
     */
    public $WafGroupRules;

    /**
     * @var string The rule level.
     */
    public $Level;

    /**
     * @var string The rule action.
     */
    public $Action;

    /**
     * @param integer $RuleTypeId ID of the rule type.
     * @param string $RuleTypeName The rule type.
     * @param string $RuleTypeDesc Description of the rule type.
     * @param array $WafGroupRules List of rules.
     * @param string $Level The rule level.
     * @param string $Action The rule action.
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
        if (array_key_exists("RuleTypeId",$param) and $param["RuleTypeId"] !== null) {
            $this->RuleTypeId = $param["RuleTypeId"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("RuleTypeDesc",$param) and $param["RuleTypeDesc"] !== null) {
            $this->RuleTypeDesc = $param["RuleTypeDesc"];
        }

        if (array_key_exists("WafGroupRules",$param) and $param["WafGroupRules"] !== null) {
            $this->WafGroupRules = [];
            foreach ($param["WafGroupRules"] as $key => $value){
                $obj = new WafGroupRule();
                $obj->deserialize($value);
                array_push($this->WafGroupRules, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
