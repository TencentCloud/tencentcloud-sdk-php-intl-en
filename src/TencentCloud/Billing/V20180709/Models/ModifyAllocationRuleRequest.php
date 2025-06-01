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
 * ModifyAllocationRule request structure.
 *
 * @method integer getRuleId() Obtain The edited sharing rule ID.
 * @method void setRuleId(integer $RuleId) Set The edited sharing rule ID.
 * @method string getName() Obtain Edited sharing rule name.
 * @method void setName(string $Name) Set Edited sharing rule name.
 * @method integer getType() Obtain Public sharing policy types, enumeration values are as follows: 1 - custom sharing proportion 2 - proportional allocation 3 - allocation by proportion.
 * @method void setType(integer $Type) Set Public sharing policy types, enumeration values are as follows: 1 - custom sharing proportion 2 - proportional allocation 3 - allocation by proportion.
 * @method AllocationRuleExpression getRuleDetail() Obtain Edited share rules expression.
 * @method void setRuleDetail(AllocationRuleExpression $RuleDetail) Set Edited share rules expression.
 * @method array getRatioDetail() Obtain Edited sharing proportion expression.
 * @method void setRatioDetail(array $RatioDetail) Set Edited sharing proportion expression.
 * @method string getMonth() Obtain Month, which is the current month by default if not provided.
 * @method void setMonth(string $Month) Set Month, which is the current month by default if not provided.
 */
class ModifyAllocationRuleRequest extends AbstractModel
{
    /**
     * @var integer The edited sharing rule ID.
     */
    public $RuleId;

    /**
     * @var string Edited sharing rule name.
     */
    public $Name;

    /**
     * @var integer Public sharing policy types, enumeration values are as follows: 1 - custom sharing proportion 2 - proportional allocation 3 - allocation by proportion.
     */
    public $Type;

    /**
     * @var AllocationRuleExpression Edited share rules expression.
     */
    public $RuleDetail;

    /**
     * @var array Edited sharing proportion expression.
     */
    public $RatioDetail;

    /**
     * @var string Month, which is the current month by default if not provided.
     */
    public $Month;

    /**
     * @param integer $RuleId The edited sharing rule ID.
     * @param string $Name Edited sharing rule name.
     * @param integer $Type Public sharing policy types, enumeration values are as follows: 1 - custom sharing proportion 2 - proportional allocation 3 - allocation by proportion.
     * @param AllocationRuleExpression $RuleDetail Edited share rules expression.
     * @param array $RatioDetail Edited sharing proportion expression.
     * @param string $Month Month, which is the current month by default if not provided.
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

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
