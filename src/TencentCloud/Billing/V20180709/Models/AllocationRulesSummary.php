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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of sharing rules.
 *
 * @method string getName() Obtain Add new sharing rule name.
 * @method void setName(string $Name) Set Add new sharing rule name.
 * @method integer getType() Obtain Specifies the sharing rule policy type. the enumeration values are as follows:.
1 - custom sharing proportion. 
2 - proportional allocation.
3 - allocation by proportion.
 * @method void setType(integer $Type) Set Specifies the sharing rule policy type. the enumeration values are as follows:.
1 - custom sharing proportion. 
2 - proportional allocation.
3 - allocation by proportion.
 * @method AllocationRuleExpression getRuleDetail() Obtain Sharing rule expression.
 * @method void setRuleDetail(AllocationRuleExpression $RuleDetail) Set Sharing rule expression.
 * @method array getRatioDetail() Obtain Sharing proportion expression, allocation by proportion not passed.
 * @method void setRatioDetail(array $RatioDetail) Set Sharing proportion expression, allocation by proportion not passed.
 */
class AllocationRulesSummary extends AbstractModel
{
    /**
     * @var string Add new sharing rule name.
     */
    public $Name;

    /**
     * @var integer Specifies the sharing rule policy type. the enumeration values are as follows:.
1 - custom sharing proportion. 
2 - proportional allocation.
3 - allocation by proportion.
     */
    public $Type;

    /**
     * @var AllocationRuleExpression Sharing rule expression.
     */
    public $RuleDetail;

    /**
     * @var array Sharing proportion expression, allocation by proportion not passed.
     */
    public $RatioDetail;

    /**
     * @param string $Name Add new sharing rule name.
     * @param integer $Type Specifies the sharing rule policy type. the enumeration values are as follows:.
1 - custom sharing proportion. 
2 - proportional allocation.
3 - allocation by proportion.
     * @param AllocationRuleExpression $RuleDetail Sharing rule expression.
     * @param array $RatioDetail Sharing proportion expression, allocation by proportion not passed.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleDetail",$param) and $param["RuleDetail"] !== null) {
            $this->RuleDetail = new AllocationRuleExpression();
            $this->RuleDetail->deserialize($param["RuleDetail"]);
        }

        if (array_key_exists("RatioDetail",$param) and $param["RatioDetail"] !== null) {
            $this->RatioDetail = [];
            foreach ($param["RatioDetail"] as $key => $value){
                $obj = new AllocationRationExpression();
                $obj->deserialize($value);
                array_push($this->RatioDetail, $obj);
            }
        }
    }
}
