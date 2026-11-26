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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule engine condition AND relationship condition list
 *
 * @method array getConditions() Obtain Condition of a rule engine. This condition is considered met if all items in the array are met.
 * @method void setConditions(array $Conditions) Set Condition of a rule engine. This condition is considered met if all items in the array are met.
 */
class RuleAndConditions extends AbstractModel
{
    /**
     * @var array Condition of a rule engine. This condition is considered met if all items in the array are met.
     */
    public $Conditions;

    /**
     * @param array $Conditions Condition of a rule engine. This condition is considered met if all items in the array are met.
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
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
