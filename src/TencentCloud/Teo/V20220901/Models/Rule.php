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
 * Rule item of the rule engine. The items in the `Conditions` array are in `OR` relationship, and the items in the inner `Conditions` list are in `AND` relationship.
 *
 * @method array getConditions() Obtain Judgment condition for executing the feature.
Note: The feature can be executed if any condition in the array is met.
 * @method void setConditions(array $Conditions) Set Judgment condition for executing the feature.
Note: The feature can be executed if any condition in the array is met.
 * @method array getActions() Obtain Executed feature. Note: Actions and SubRules cannot be both empty.
 * @method void setActions(array $Actions) Set Executed feature. Note: Actions and SubRules cannot be both empty.
 * @method array getSubRules() Obtain Nested rule. Note: SubRules and Actions cannot be both empty.
 * @method void setSubRules(array $SubRules) Set Nested rule. Note: SubRules and Actions cannot be both empty.
 */
class Rule extends AbstractModel
{
    /**
     * @var array Judgment condition for executing the feature.
Note: The feature can be executed if any condition in the array is met.
     */
    public $Conditions;

    /**
     * @var array Executed feature. Note: Actions and SubRules cannot be both empty.
     */
    public $Actions;

    /**
     * @var array Nested rule. Note: SubRules and Actions cannot be both empty.
     */
    public $SubRules;

    /**
     * @param array $Conditions Judgment condition for executing the feature.
Note: The feature can be executed if any condition in the array is met.
     * @param array $Actions Executed feature. Note: Actions and SubRules cannot be both empty.
     * @param array $SubRules Nested rule. Note: SubRules and Actions cannot be both empty.
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
        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleAndConditions();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new Action();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("SubRules",$param) and $param["SubRules"] !== null) {
            $this->SubRules = [];
            foreach ($param["SubRules"] as $key => $value){
                $obj = new SubRuleItem();
                $obj->deserialize($value);
                array_push($this->SubRules, $obj);
            }
        }
    }
}
