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
 * Specifies the weight policy configuration.
 *
 * @method string getFunctionId() Obtain Function ID.
 * @method void setFunctionId(string $FunctionId) Set Function ID.
 * @method integer getWeight() Obtain Specifies the selected weight. value ranges from 0 to 100. the sum of all weights needs to be 100.
Specifies the calculation method for the select probability.
weight/100. for example, setting two functions A and B, among them A has A weight of 30, then B must be 70, finally the probability of selecting A is 30%, and the probability of selecting B is 70%.
 * @method void setWeight(integer $Weight) Set Specifies the selected weight. value ranges from 0 to 100. the sum of all weights needs to be 100.
Specifies the calculation method for the select probability.
weight/100. for example, setting two functions A and B, among them A has A weight of 30, then B must be 70, finally the probability of selecting A is 30%, and the probability of selecting B is 70%.
 */
class FunctionWeightedSelection extends AbstractModel
{
    /**
     * @var string Function ID.
     */
    public $FunctionId;

    /**
     * @var integer Specifies the selected weight. value ranges from 0 to 100. the sum of all weights needs to be 100.
Specifies the calculation method for the select probability.
weight/100. for example, setting two functions A and B, among them A has A weight of 30, then B must be 70, finally the probability of selecting A is 30%, and the probability of selecting B is 70%.
     */
    public $Weight;

    /**
     * @param string $FunctionId Function ID.
     * @param integer $Weight Specifies the selected weight. value ranges from 0 to 100. the sum of all weights needs to be 100.
Specifies the calculation method for the select probability.
weight/100. for example, setting two functions A and B, among them A has A weight of 30, then B must be 70, finally the probability of selecting A is 30%, and the probability of selecting B is 70%.
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
