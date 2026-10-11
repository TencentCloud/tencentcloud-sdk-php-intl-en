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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced dependency configuration
 *
 * @method string getOperator() Obtain Logical operation symbols OR / AND
 * @method void setOperator(string $Operator) Set Logical operation symbols OR / AND
 * @method array getConditions() Obtain List of conditional rules for task running
 * @method void setConditions(array $Conditions) Set List of conditional rules for task running
 */
class AdvancedDependencyConfig extends AbstractModel
{
    /**
     * @var string Logical operation symbols OR / AND
     */
    public $Operator;

    /**
     * @var array List of conditional rules for task running
     */
    public $Conditions;

    /**
     * @param string $Operator Logical operation symbols OR / AND
     * @param array $Conditions List of conditional rules for task running
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new TaskRunConditionRule();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
