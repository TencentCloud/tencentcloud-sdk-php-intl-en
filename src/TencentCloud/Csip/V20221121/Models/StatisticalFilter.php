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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User Behavior Analysis Statistical Condition
 *
 * @method integer getOperatorType() Obtain 0: Not based on statistical testing
1: Occurrence count higher than a fixed value
2: Occurrence count exceeds 100 percent of the period average
3: Occurrences higher than 50 percent of the user average
 * @method void setOperatorType(integer $OperatorType) Set 0: Not based on statistical testing
1: Occurrence count higher than a fixed value
2: Occurrence count exceeds 100 percent of the period average
3: Occurrences higher than 50 percent of the user average
 * @method float getValue() Obtain Statistical value
 * @method void setValue(float $Value) Set Statistical value
 */
class StatisticalFilter extends AbstractModel
{
    /**
     * @var integer 0: Not based on statistical testing
1: Occurrence count higher than a fixed value
2: Occurrence count exceeds 100 percent of the period average
3: Occurrences higher than 50 percent of the user average
     */
    public $OperatorType;

    /**
     * @var float Statistical value
     */
    public $Value;

    /**
     * @param integer $OperatorType 0: Not based on statistical testing
1: Occurrence count higher than a fixed value
2: Occurrence count exceeds 100 percent of the period average
3: Occurrences higher than 50 percent of the user average
     * @param float $Value Statistical value
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
        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
