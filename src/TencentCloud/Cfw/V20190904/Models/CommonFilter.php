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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common filters for search
 *
 * @method string getName() Obtain Search key.
 * @method void setName(string $Name) Set Search key.
 * @method array getValues() Obtain Search values.
 * @method void setValues(array $Values) Set Search values.
 * @method integer getOperatorType() Obtain Enum of integers that represent relations between Name and Values.
enum FilterOperatorType {
    // Invalid
    FILTER_OPERATOR_TYPE_INVALID = 0;
    // Equal to
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    // Greater than
    FILTER_OPERATOR_TYPE_GREATER = 2;
    // Less than
    FILTER_OPERATOR_TYPE_LESS = 3;
    // Greater than or equal to
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    // Less than or equal to
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    // Not equal to
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    // In (contained in the array)
    FILTER_OPERATOR_TYPE_IN = 7;
    // Not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    // Fuzzily matched
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    // Existing
    FILTER_OPERATOR_TYPE_EXIST = 10;
    // Not existing
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    // Regular
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
 * @method void setOperatorType(integer $OperatorType) Set Enum of integers that represent relations between Name and Values.
enum FilterOperatorType {
    // Invalid
    FILTER_OPERATOR_TYPE_INVALID = 0;
    // Equal to
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    // Greater than
    FILTER_OPERATOR_TYPE_GREATER = 2;
    // Less than
    FILTER_OPERATOR_TYPE_LESS = 3;
    // Greater than or equal to
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    // Less than or equal to
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    // Not equal to
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    // In (contained in the array)
    FILTER_OPERATOR_TYPE_IN = 7;
    // Not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    // Fuzzily matched
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    // Existing
    FILTER_OPERATOR_TYPE_EXIST = 10;
    // Not existing
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    // Regular
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
 */
class CommonFilter extends AbstractModel
{
    /**
     * @var string Search key.
     */
    public $Name;

    /**
     * @var array Search values.
     */
    public $Values;

    /**
     * @var integer Enum of integers that represent relations between Name and Values.
enum FilterOperatorType {
    // Invalid
    FILTER_OPERATOR_TYPE_INVALID = 0;
    // Equal to
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    // Greater than
    FILTER_OPERATOR_TYPE_GREATER = 2;
    // Less than
    FILTER_OPERATOR_TYPE_LESS = 3;
    // Greater than or equal to
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    // Less than or equal to
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    // Not equal to
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    // In (contained in the array)
    FILTER_OPERATOR_TYPE_IN = 7;
    // Not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    // Fuzzily matched
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    // Existing
    FILTER_OPERATOR_TYPE_EXIST = 10;
    // Not existing
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    // Regular
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
     */
    public $OperatorType;

    /**
     * @param string $Name Search key.
     * @param array $Values Search values.
     * @param integer $OperatorType Enum of integers that represent relations between Name and Values.
enum FilterOperatorType {
    // Invalid
    FILTER_OPERATOR_TYPE_INVALID = 0;
    // Equal to
    FILTER_OPERATOR_TYPE_EQUAL = 1;
    // Greater than
    FILTER_OPERATOR_TYPE_GREATER = 2;
    // Less than
    FILTER_OPERATOR_TYPE_LESS = 3;
    // Greater than or equal to
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
    // Less than or equal to
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
    // Not equal to
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    // In (contained in the array)
    FILTER_OPERATOR_TYPE_IN = 7;
    // Not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
    // Fuzzily matched
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
    // Existing
    FILTER_OPERATOR_TYPE_EXIST = 10;
    // Not existing
    FILTER_OPERATOR_TYPE_NOT_EXIST = 11;
    // Regular
    FILTER_OPERATOR_TYPE_REGULAR = 12;
}
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }
    }
}
