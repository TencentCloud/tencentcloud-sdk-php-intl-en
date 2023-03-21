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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric trigger condition of alarm policy
 *
 * @method integer getIsUnionRule() Obtain Judgment condition of an alarm trigger condition (`0`: Any; `1`: All; `2`: Composite). When the value is set to `2` (i.e., composite trigger conditions), this parameter should be used together with `ComplexExpression`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsUnionRule(integer $IsUnionRule) Set Judgment condition of an alarm trigger condition (`0`: Any; `1`: All; `2`: Composite). When the value is set to `2` (i.e., composite trigger conditions), this parameter should be used together with `ComplexExpression`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRules() Obtain Alarm trigger condition list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set Alarm trigger condition list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getComplexExpression() Obtain The judgment expression of composite alarm trigger conditions, which is valid when the value of `IsUnionRule` is `2`. This parameter is used to determine that an alarm condition is met only when the expression values are `True` for multiple trigger conditions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComplexExpression(string $ComplexExpression) Set The judgment expression of composite alarm trigger conditions, which is valid when the value of `IsUnionRule` is `2`. This parameter is used to determine that an alarm condition is met only when the expression values are `True` for multiple trigger conditions.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AlarmPolicyCondition extends AbstractModel
{
    /**
     * @var integer Judgment condition of an alarm trigger condition (`0`: Any; `1`: All; `2`: Composite). When the value is set to `2` (i.e., composite trigger conditions), this parameter should be used together with `ComplexExpression`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsUnionRule;

    /**
     * @var array Alarm trigger condition list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var string The judgment expression of composite alarm trigger conditions, which is valid when the value of `IsUnionRule` is `2`. This parameter is used to determine that an alarm condition is met only when the expression values are `True` for multiple trigger conditions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComplexExpression;

    /**
     * @param integer $IsUnionRule Judgment condition of an alarm trigger condition (`0`: Any; `1`: All; `2`: Composite). When the value is set to `2` (i.e., composite trigger conditions), this parameter should be used together with `ComplexExpression`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Rules Alarm trigger condition list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ComplexExpression The judgment expression of composite alarm trigger conditions, which is valid when the value of `IsUnionRule` is `2`. This parameter is used to determine that an alarm condition is met only when the expression values are `True` for multiple trigger conditions.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new AlarmPolicyRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ComplexExpression",$param) and $param["ComplexExpression"] !== null) {
            $this->ComplexExpression = $param["ComplexExpression"];
        }
    }
}
