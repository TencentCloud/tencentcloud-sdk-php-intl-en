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
 * Condition of a trigger rule for an edge function.
 *
 * @method array getRuleConditions() Obtain Condition of a trigger rule for an edge function. This condition is considered met if all items in the list are met.
 * @method void setRuleConditions(array $RuleConditions) Set Condition of a trigger rule for an edge function. This condition is considered met if all items in the list are met.
 */
class FunctionRuleCondition extends AbstractModel
{
    /**
     * @var array Condition of a trigger rule for an edge function. This condition is considered met if all items in the list are met.
     */
    public $RuleConditions;

    /**
     * @param array $RuleConditions Condition of a trigger rule for an edge function. This condition is considered met if all items in the list are met.
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
        if (array_key_exists("RuleConditions",$param) and $param["RuleConditions"] !== null) {
            $this->RuleConditions = [];
            foreach ($param["RuleConditions"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->RuleConditions, $obj);
            }
        }
    }
}
