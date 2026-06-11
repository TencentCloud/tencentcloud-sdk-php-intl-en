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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageDenyRuleList request structure.
 *
 * @method array getFilters() Obtain Filter criteria
<li>RuleType - String - required: no - rule type RULE_RISK: risk, RULE_PRIVILEGE: privilege</li>
<li>EffectStatus- String - Required: No - Effective status IN_THE_TEST: Observing, IN_EFFECT: Active.</li>
<li>RuleName - string - required: no - rule name.</li>
<li>Status - string - required: no - enabled Status: 0: enabled, 1: disabled.</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>RuleType - String - required: no - rule type RULE_RISK: risk, RULE_PRIVILEGE: privilege</li>
<li>EffectStatus- String - Required: No - Effective status IN_THE_TEST: Observing, IN_EFFECT: Active.</li>
<li>RuleName - string - required: no - rule name.</li>
<li>Status - string - required: no - enabled Status: 0: enabled, 1: disabled.</li>
 * @method integer getLimit() Obtain Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of entries to be returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getOrder() Obtain Sort Mode: DESC, ACS
 * @method void setOrder(string $Order) Set Sort Mode: DESC, ACS
 * @method string getBy() Obtain Sort field
EffectTime: Effective time; UpdateTime: Update time
 * @method void setBy(string $By) Set Sort field
EffectTime: Effective time; UpdateTime: Update time
 * @method boolean getTopTurnOn() Obtain Top-positioning of Enabled Rules. true: Yes; false: No
 * @method void setTopTurnOn(boolean $TopTurnOn) Set Top-positioning of Enabled Rules. true: Yes; false: No
 */
class DescribeImageDenyRuleListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
<li>RuleType - String - required: no - rule type RULE_RISK: risk, RULE_PRIVILEGE: privilege</li>
<li>EffectStatus- String - Required: No - Effective status IN_THE_TEST: Observing, IN_EFFECT: Active.</li>
<li>RuleName - string - required: no - rule name.</li>
<li>Status - string - required: no - enabled Status: 0: enabled, 1: disabled.</li>
     */
    public $Filters;

    /**
     * @var integer Number of entries to be returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Sort Mode: DESC, ACS
     */
    public $Order;

    /**
     * @var string Sort field
EffectTime: Effective time; UpdateTime: Update time
     */
    public $By;

    /**
     * @var boolean Top-positioning of Enabled Rules. true: Yes; false: No
     */
    public $TopTurnOn;

    /**
     * @param array $Filters Filter criteria
<li>RuleType - String - required: no - rule type RULE_RISK: risk, RULE_PRIVILEGE: privilege</li>
<li>EffectStatus- String - Required: No - Effective status IN_THE_TEST: Observing, IN_EFFECT: Active.</li>
<li>RuleName - string - required: no - rule name.</li>
<li>Status - string - required: no - enabled Status: 0: enabled, 1: disabled.</li>
     * @param integer $Limit Number of entries to be returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $Order Sort Mode: DESC, ACS
     * @param string $By Sort field
EffectTime: Effective time; UpdateTime: Update time
     * @param boolean $TopTurnOn Top-positioning of Enabled Rules. true: Yes; false: No
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("TopTurnOn",$param) and $param["TopTurnOn"] !== null) {
            $this->TopTurnOn = $param["TopTurnOn"];
        }
    }
}
