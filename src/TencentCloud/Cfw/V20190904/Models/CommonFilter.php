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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Common filters for search
 *
 * @method string getName() Obtain Search key.
 * @method void setName(string $Name) Set Search key.
 * @method integer getOperatorType() Obtain Enumeration type, representing the matching relationship between Name and Values.
enum FilterOperatorType {
equal
    FILTER_OPERATOR_TYPE_EQUAL = 1;
Above
    FILTER_OPERATOR_TYPE_GREATER = 2;
less than
    FILTER_OPERATOR_TYPE_LESS = 3;
>=
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
<=
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
neq
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
Fuzzy matching
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
}
 * @method void setOperatorType(integer $OperatorType) Set Enumeration type, representing the matching relationship between Name and Values.
enum FilterOperatorType {
equal
    FILTER_OPERATOR_TYPE_EQUAL = 1;
Above
    FILTER_OPERATOR_TYPE_GREATER = 2;
less than
    FILTER_OPERATOR_TYPE_LESS = 3;
>=
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
<=
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
neq
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
Fuzzy matching
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
}
 * @method array getValues() Obtain Search values, with an OR relationship between each search value.
 * @method void setValues(array $Values) Set Search values, with an OR relationship between each search value.
 */
class CommonFilter extends AbstractModel
{
    /**
     * @var string Search key.
     */
    public $Name;

    /**
     * @var integer Enumeration type, representing the matching relationship between Name and Values.
enum FilterOperatorType {
equal
    FILTER_OPERATOR_TYPE_EQUAL = 1;
Above
    FILTER_OPERATOR_TYPE_GREATER = 2;
less than
    FILTER_OPERATOR_TYPE_LESS = 3;
>=
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
<=
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
neq
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
Fuzzy matching
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
}
     */
    public $OperatorType;

    /**
     * @var array Search values, with an OR relationship between each search value.
     */
    public $Values;

    /**
     * @param string $Name Search key.
     * @param integer $OperatorType Enumeration type, representing the matching relationship between Name and Values.
enum FilterOperatorType {
equal
    FILTER_OPERATOR_TYPE_EQUAL = 1;
Above
    FILTER_OPERATOR_TYPE_GREATER = 2;
less than
    FILTER_OPERATOR_TYPE_LESS = 3;
>=
    FILTER_OPERATOR_TYPE_GREATER_EQ = 4;
<=
    FILTER_OPERATOR_TYPE_LESS_EQ = 5;
neq
    FILTER_OPERATOR_TYPE_NO_EQ = 6;
    //not in
    FILTER_OPERATOR_TYPE_NOT_IN = 8;
Fuzzy matching
    FILTER_OPERATOR_TYPE_FUZZINESS = 9;
}
     * @param array $Values Search values, with an OR relationship between each search value.
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

        if (array_key_exists("OperatorType",$param) and $param["OperatorType"] !== null) {
            $this->OperatorType = $param["OperatorType"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
