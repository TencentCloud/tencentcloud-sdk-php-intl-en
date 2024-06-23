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
 * Comparison Result Item
 *
 * @method integer getFixResult() Obtain Comparison Result, 1 is true, 2 is false
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFixResult(integer $FixResult) Set Comparison Result, 1 is true, 2 is false
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getResultValue() Obtain Quality SQL Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResultValue(string $ResultValue) Set Quality SQL Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getValues() Obtain Threshold List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValues(array $Values) Set Threshold List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperator() Obtain Comparison Operation Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperator(string $Operator) Set Comparison Operation Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCompareType() Obtain Comparison Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCompareType(integer $CompareType) Set Comparison Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getValueComputeType() Obtain Value Comparison Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValueComputeType(integer $ValueComputeType) Set Value Comparison Type
Note: This field may return null, indicating that no valid value can be obtained.
 */
class CompareResultItem extends AbstractModel
{
    /**
     * @var integer Comparison Result, 1 is true, 2 is false
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FixResult;

    /**
     * @var string Quality SQL Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResultValue;

    /**
     * @var array Threshold List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Values;

    /**
     * @var string Comparison Operation Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operator;

    /**
     * @var integer Comparison Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CompareType;

    /**
     * @var integer Value Comparison Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ValueComputeType;

    /**
     * @param integer $FixResult Comparison Result, 1 is true, 2 is false
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ResultValue Quality SQL Execution Result
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Values Threshold List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Operator Comparison Operation Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CompareType Comparison Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ValueComputeType Value Comparison Type
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
        if (array_key_exists("FixResult",$param) and $param["FixResult"] !== null) {
            $this->FixResult = $param["FixResult"];
        }

        if (array_key_exists("ResultValue",$param) and $param["ResultValue"] !== null) {
            $this->ResultValue = $param["ResultValue"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new ThresholdValue();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CompareType",$param) and $param["CompareType"] !== null) {
            $this->CompareType = $param["CompareType"];
        }

        if (array_key_exists("ValueComputeType",$param) and $param["ValueComputeType"] !== null) {
            $this->ValueComputeType = $param["ValueComputeType"];
        }
    }
}
