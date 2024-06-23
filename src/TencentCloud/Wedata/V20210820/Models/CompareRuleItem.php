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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Comparison Criterion
 *
 * @method integer getCompareType() Obtain Comparison Type 1. Fixed value  2. Fluctuation Value  3. Numeric Range Comparison  4. Enumeration Range Comparison  5. No Comparison
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompareType(integer $CompareType) Set Comparison Type 1. Fixed value  2. Fluctuation Value  3. Numeric Range Comparison  4. Enumeration Range Comparison  5. No Comparison
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperator() Obtain Comparison Operation Type
<  <=  ==  =>  > !=
IRLCRO: Within the interval (left closed, right open)
IRLORC: Within the interval (left open, right closed)
IRLCRC: Within the interval (left closed, right closed)
IRLORO: Within the interval (left open, right open)
NRLCRO: Not within the range (left-closed, right-open)
NRLORC: Not within the range (left-open, right-closed)
NRLCRC: Not within the range (left-closed, right-closed)
NRLORO: Not within the range (left-open, right-open)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperator(string $Operator) Set Comparison Operation Type
<  <=  ==  =>  > !=
IRLCRO: Within the interval (left closed, right open)
IRLORC: Within the interval (left open, right closed)
IRLCRC: Within the interval (left closed, right closed)
IRLORO: Within the interval (left open, right open)
NRLCRO: Not within the range (left-closed, right-open)
NRLORC: Not within the range (left-open, right-closed)
NRLCRC: Not within the range (left-closed, right-closed)
NRLORO: Not within the range (left-open, right-open)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getValueComputeType() Obtain Quality statistical value types 1. Absolute Value 2. Increase 3. Decline 4. _C includes 5. N_C does not include
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValueComputeType(integer $ValueComputeType) Set Quality statistical value types 1. Absolute Value 2. Increase 3. Decline 4. _C includes 5. N_C does not include
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getValueList() Obtain Comparison threshold list
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValueList(array $ValueList) Set Comparison threshold list
Note: This field may return null, indicating that no valid value can be obtained.
 */
class CompareRuleItem extends AbstractModel
{
    /**
     * @var integer Comparison Type 1. Fixed value  2. Fluctuation Value  3. Numeric Range Comparison  4. Enumeration Range Comparison  5. No Comparison
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompareType;

    /**
     * @var string Comparison Operation Type
<  <=  ==  =>  > !=
IRLCRO: Within the interval (left closed, right open)
IRLORC: Within the interval (left open, right closed)
IRLCRC: Within the interval (left closed, right closed)
IRLORO: Within the interval (left open, right open)
NRLCRO: Not within the range (left-closed, right-open)
NRLORC: Not within the range (left-open, right-closed)
NRLCRC: Not within the range (left-closed, right-closed)
NRLORO: Not within the range (left-open, right-open)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operator;

    /**
     * @var integer Quality statistical value types 1. Absolute Value 2. Increase 3. Decline 4. _C includes 5. N_C does not include
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ValueComputeType;

    /**
     * @var array Comparison threshold list
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ValueList;

    /**
     * @param integer $CompareType Comparison Type 1. Fixed value  2. Fluctuation Value  3. Numeric Range Comparison  4. Enumeration Range Comparison  5. No Comparison
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Operator Comparison Operation Type
<  <=  ==  =>  > !=
IRLCRO: Within the interval (left closed, right open)
IRLORC: Within the interval (left open, right closed)
IRLCRC: Within the interval (left closed, right closed)
IRLORO: Within the interval (left open, right open)
NRLCRO: Not within the range (left-closed, right-open)
NRLORC: Not within the range (left-open, right-closed)
NRLCRC: Not within the range (left-closed, right-closed)
NRLORO: Not within the range (left-open, right-open)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ValueComputeType Quality statistical value types 1. Absolute Value 2. Increase 3. Decline 4. _C includes 5. N_C does not include
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $ValueList Comparison threshold list
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("CompareType",$param) and $param["CompareType"] !== null) {
            $this->CompareType = $param["CompareType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ValueComputeType",$param) and $param["ValueComputeType"] !== null) {
            $this->ValueComputeType = $param["ValueComputeType"];
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = [];
            foreach ($param["ValueList"] as $key => $value){
                $obj = new ThresholdValue();
                $obj->deserialize($value);
                array_push($this->ValueList, $obj);
            }
        }
    }
}
