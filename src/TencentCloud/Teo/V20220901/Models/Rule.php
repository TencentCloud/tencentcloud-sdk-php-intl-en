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
 * @method array getActions() Obtain Feature to be executed.
 * @method void setActions(array $Actions) Set Feature to be executed.
 * @method array getConditions() Obtain Feature execution conditions.
Note: If any condition in the array is met, the feature will run.
 * @method void setConditions(array $Conditions) Set Feature execution conditions.
Note: If any condition in the array is met, the feature will run.
 * @method array getSubRules() Obtain The nested rule.
 * @method void setSubRules(array $SubRules) Set The nested rule.
 */
class Rule extends AbstractModel
{
    /**
     * @var array Feature to be executed.
     */
    public $Actions;

    /**
     * @var array Feature execution conditions.
Note: If any condition in the array is met, the feature will run.
     */
    public $Conditions;

    /**
     * @var array The nested rule.
     */
    public $SubRules;

    /**
     * @param array $Actions Feature to be executed.
     * @param array $Conditions Feature execution conditions.
Note: If any condition in the array is met, the feature will run.
     * @param array $SubRules The nested rule.
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
        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new Action();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleAndConditions();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
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
