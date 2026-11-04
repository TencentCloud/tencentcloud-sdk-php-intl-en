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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Universal list filter criteria (multiple Filters are in an AND relationship, while multiple value_list elements within the same Filter are in an OR relationship; for BETWEEN, value_list must contain exactly 2 elements, representing an inclusive interval [start, end])
 *
 * @method string getName() Obtain Filter field name
 * @method void setName(string $Name) Set Filter field name
 * @method integer getOperator() Obtain Operator, default IN (backward compatibility)<table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>FILTER_OPERATOR_IN</td><td>0</td><td>Belongs to value_list (default value, backward compatibility; value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_NOT_IN</td><td>1</td><td>Does not belong to value_list (value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_BETWEEN</td><td>2</td><td>Between (inclusive interval [start, end]; value_list must contain exactly 2 elements, one of which can be empty to indicate a unilateral open interval)</td></tr></table>
 * @method void setOperator(integer $Operator) Set Operator, default IN (backward compatibility)<table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>FILTER_OPERATOR_IN</td><td>0</td><td>Belongs to value_list (default value, backward compatibility; value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_NOT_IN</td><td>1</td><td>Does not belong to value_list (value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_BETWEEN</td><td>2</td><td>Between (inclusive interval [start, end]; value_list must contain exactly 2 elements, one of which can be empty to indicate a unilateral open interval)</td></tr></table>
 * @method array getValueList() Obtain Filter value array
 * @method void setValueList(array $ValueList) Set Filter value array
 */
class Filter extends AbstractModel
{
    /**
     * @var string Filter field name
     */
    public $Name;

    /**
     * @var integer Operator, default IN (backward compatibility)<table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>FILTER_OPERATOR_IN</td><td>0</td><td>Belongs to value_list (default value, backward compatibility; value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_NOT_IN</td><td>1</td><td>Does not belong to value_list (value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_BETWEEN</td><td>2</td><td>Between (inclusive interval [start, end]; value_list must contain exactly 2 elements, one of which can be empty to indicate a unilateral open interval)</td></tr></table>
     */
    public $Operator;

    /**
     * @var array Filter value array
     */
    public $ValueList;

    /**
     * @param string $Name Filter field name
     * @param integer $Operator Operator, default IN (backward compatibility)<table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>FILTER_OPERATOR_IN</td><td>0</td><td>Belongs to value_list (default value, backward compatibility; value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_NOT_IN</td><td>1</td><td>Does not belong to value_list (value_list cannot be empty)</td></tr><tr><td>FILTER_OPERATOR_BETWEEN</td><td>2</td><td>Between (inclusive interval [start, end]; value_list must contain exactly 2 elements, one of which can be empty to indicate a unilateral open interval)</td></tr></table>
     * @param array $ValueList Filter value array
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = $param["ValueList"];
        }
    }
}
