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
 * Overview of sharing rules.
 *
 * @method integer getRuleId() Obtain Sharing rule ID.
 * @method void setRuleId(integer $RuleId) Set Sharing rule ID.
 * @method string getRuleName() Obtain Sharing rule name.
 * @method void setRuleName(string $RuleName) Set Sharing rule name.
 * @method integer getType() Obtain Public area policy type.
Enumeration value.
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
 * @method void setType(integer $Type) Set Public area policy type.
Enumeration value.
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
 * @method string getUpdateTime() Obtain Last update time of the sharing rules.
 * @method void setUpdateTime(string $UpdateTime) Set Last update time of the sharing rules.
 * @method array getAllocationNode() Obtain Overview of cost allocation units.
 * @method void setAllocationNode(array $AllocationNode) Set Overview of cost allocation units.
 */
class AllocationRuleOverview extends AbstractModel
{
    /**
     * @var integer Sharing rule ID.
     */
    public $RuleId;

    /**
     * @var string Sharing rule name.
     */
    public $RuleName;

    /**
     * @var integer Public area policy type.
Enumeration value.
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
     */
    public $Type;

    /**
     * @var string Last update time of the sharing rules.
     */
    public $UpdateTime;

    /**
     * @var array Overview of cost allocation units.
     */
    public $AllocationNode;

    /**
     * @param integer $RuleId Sharing rule ID.
     * @param string $RuleName Sharing rule name.
     * @param integer $Type Public area policy type.
Enumeration value.
1 - custom sharing proportion. 
2 - proportional allocation. 
3 - allocation by proportion.
     * @param string $UpdateTime Last update time of the sharing rules.
     * @param array $AllocationNode Overview of cost allocation units.
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AllocationNode",$param) and $param["AllocationNode"] !== null) {
            $this->AllocationNode = [];
            foreach ($param["AllocationNode"] as $key => $value){
                $obj = new AllocationUnit();
                $obj->deserialize($value);
                array_push($this->AllocationNode, $obj);
            }
        }
    }
}
