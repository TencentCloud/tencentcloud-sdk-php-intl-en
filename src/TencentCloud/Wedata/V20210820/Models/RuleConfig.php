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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule Configuration
 *
 * @method integer getRuleId() Obtain Rule IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getConditionType() Obtain Rule Detection Range Type 1. Whole Table  2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConditionType(integer $ConditionType) Set Rule Detection Range Type 1. Whole Table  2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCondition() Obtain Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCondition(string $Condition) Set Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetCondition() Obtain Target Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetCondition(string $TargetCondition) Set Target Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleConfig extends AbstractModel
{
    /**
     * @var integer Rule IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleId;

    /**
     * @var integer Rule Detection Range Type 1. Whole Table  2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConditionType;

    /**
     * @var string Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Condition;

    /**
     * @var string Target Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetCondition;

    /**
     * @param integer $RuleId Rule IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ConditionType Rule Detection Range Type 1. Whole Table  2. Conditional Scan
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Condition Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetCondition Target Detection Range Expression
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ConditionType",$param) and $param["ConditionType"] !== null) {
            $this->ConditionType = $param["ConditionType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("TargetCondition",$param) and $param["TargetCondition"] !== null) {
            $this->TargetCondition = $param["TargetCondition"];
        }
    }
}
